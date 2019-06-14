<?php


namespace app\controllers\admin;

use site\App;
use app\models\admin\Blog;
use site\libs\Pagination;

class BlogController extends AdminController
{
    public function indexAction()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perpage = 25;
        $count = \R::count('blog');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $blogs = \R::getAll("SELECT * FROM blog ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Новости');
        $this->setData(compact('blogs', 'count', 'pagination'));
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $blog = new Blog();
            $data = $_POST;
            $data['date_create'] = (new \DateTime())->format('Y-m-d H:i:s');
            $blog->load($data);
            $blog->getImg();
            if (!$blog->validate($data)){
                $blog->getErrors();
                redirect();
            }
            if ($blog->save('blog')){
                $_SESSION['success'] = 'Новость добавлена!';
            }
            redirect(ADMIN .'/blog');
        }
        $this->setMeta('Добавить новость');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $blog = new Blog();
            $data = $_POST;
            $blog->load($data);
            $blog->getImg();
            if (!$blog->validate($data)){
                $blog->getErrors();
                redirect();
            }
            if ($blog->update('blog', $id)){
                $_SESSION['success'] =  'Новость успешно изменена!';
            }
            redirect(ADMIN .'/blog');
        }
        $id = (int)$this->getRequestId();
        $blog = \R::findOne('blog', 'id = ?', [$id]);
        $this->setMeta('Изменить  ' . $blog->title);
        $this->setData(compact('blog'));
    }

    public function deleteAction()
    {
        $id = $this->getRequestId();
        $blog = \R::findOne('blog', "id = ?", [$id]);
        if (!$blog){
            redirect(ADMIN .'/blog');
        }
        \R::exec("DELETE FROM blog WHERE id = ?", [$blog->id]);
        @unlink(WWW . '/upload/' . $blog->image);
        $_SESSION['success'] =  'Новость удалена!';
        redirect(ADMIN .'/blog');
    }

    public function removeImageFileAction()
    {
        if (!empty($_POST)){
            $fileName = $_POST['name'] ? htmlspecialchars($_POST['name']) : null;
            @unlink(WWW . '/upload/' . $fileName);
            echo json_encode(['result'=>'success']);
        }
        die();
    }

    public function addImageAction()
    {
        $wmax = App::$app->getProperty('employee_img_width');
        $hmax = App::$app->getProperty('employee_img_height');
        $name = 'file';
        $blog = new Blog();
        $blog->uploadImg($name, $wmax, $hmax);
        die();
    }

    public function deleteImageAction()
    {
        $res = false;
        $id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;

        if (!$id || !$name) {
            echo json_encode($res);
            die();
        }

        $blog = \R::find('blog', ' id = ? AND image = ?', [$id, $name]);
        if (!$blog) {
            echo json_encode($res);
            die();
        }

        if (\R::exec("UPDATE blog SET image = ? WHERE id = ?", [null, $id])) {
            @unlink(WWW . '/upload/' . $name);
            $res = true;
        }

        echo json_encode($res);
        die();
    }

}