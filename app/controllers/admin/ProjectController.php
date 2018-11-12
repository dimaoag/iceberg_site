<?php
namespace app\controllers\admin;


use iceberg\App;
use iceberg\libs\Pagination;
use app\models\admin\Project;
use app\models\admin\ProjectEdit;

class ProjectController extends AdminController {

    public function indexAction(){
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perpage = 50;
        $count = \R::count('project');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $projects = \R::getAll("SELECT project.* FROM project ORDER BY project.created_at DESC LIMIT $start, $perpage");


        $this->setMeta('Все проэкты');
        $this->setData(compact('projects', 'count', 'pagination'));
    }


    public function addAction(){
        if (!empty($_POST)){
            $project = new Project();
            $data = $_POST;
            $data['status'] = '1';
            $project->load($data);
            $project->getImg('img_preview');
            $project->getImg('img_banner');
            $project->getImg('img_responsive');
            $project->getImg('video_big');
            if (!$project->validate($data)){
                $project->getErrors();
                redirect();
            }
            if ($id = $project->save('project')){
                $_SESSION['success'] =  'Проэкт добавлен!';
            }
            redirect();
        }
        $this->setMeta('Добавить новый проэкт');
    }


    public function editAction(){
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $project = new ProjectEdit();
            $data = $_POST;
            $project->load($data);
            if (!$project->validate($data)){
                $project->getErrors();
                redirect();
            }
            if ($project->update('project', $id)){
                $_SESSION['success'] =  'Данные изменены!';
            }
            redirect();
        }
        $id = $this->getRequestId();
        $project = \R::findOne('project', 'id = ?', [$id]);

        $this->setMeta("Изменить {$project->title}");
        $this->setData(compact( 'project'));
    }


    public function deleteAction(){
        $id = $this->getRequestId();
        $project = \R::findOne('project', "id = ?", [$id]);
        @unlink(WWW . '/images/' . $project->img_preview);
        @unlink(WWW . '/images/' . $project->img_banner);
        @unlink(WWW . '/images/' . $project->img_responsive);
        @unlink(WWW . '/videos/' . $project->video_big);
        \R::exec("DELETE FROM project WHERE id = ?", [$id]);
        $_SESSION['success'] =  'Проэкт удален!';
        redirect();
    }


    public function addImageAction(){
        if (isset($_GET['upload'])){
            if (!empty($_POST['name'])){

                $wmax = '';
                $hmax = '';

                $name = $_POST['name'];
                $act = $_POST['act'];
                $id = $_POST['id'];

                switch ($name) {
                    case 'img_preview':
                        $wmax = App::$app->getProperty('preview_width');
                        $hmax = App::$app->getProperty('preview_height');
                        break;
                    case 'img_banner':
                        $wmax = App::$app->getProperty('banner_width');
                        $hmax = App::$app->getProperty('banner_height');
                        break;
                    case 'img_responsive':
                        $wmax = App::$app->getProperty('responsive_width');
                        $hmax = App::$app->getProperty('responsive_height');
                        break;
                }

                $project = new Project();
                if ($act=='edit' && $id != '0'){
                    $project->editImg($id,$name, $wmax, $hmax);
                } else {
                    $project->uploadImg($name, $wmax, $hmax);
                }
            }
        }
    }

    public function addVideoAction(){
        if (isset($_GET['upload'])){
            if (!empty($_POST['name'])){

                $name = $_POST['name'];
                $act = $_POST['act'];
                $id = $_POST['id'];


                $project = new Project();
                if ($act=='edit' && $id != '0'){
                    $project->editVideo($id,$name);
                } else {
                    $project->uploadVideo($name);
                }
            }
        }
        die();
    }


    public function deleteImageAction(){
        $id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        $type = isset($_POST['type']) ? $_POST['type'] : null;
        if (!$id || !$src || !$type) return false;

        @unlink(WWW . '/images/' . $src);
        \R::exec("UPDATE `project` SET $type = '' WHERE id = ?", [$id]);
        exit('1');
    }


    public function deleteVideoAction(){
        $id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        $type = isset($_POST['type']) ? $_POST['type'] : null;
        if (!$id || !$src || !$type) return false;
        @unlink(WWW . '/videos/' . $src);
        \R::exec("UPDATE `project` SET $type = '' WHERE id = ?", [$id]);
        exit('1');
    }






}