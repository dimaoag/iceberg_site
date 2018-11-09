<?php
namespace app\controllers\admin;

use app\models\admin\Job;

class JobController extends AdminController {

    public function indexAction(){

        $jobs = \R::findAll('job');

        $this->setMeta('Все выполненые работы');
        $this->setData(compact('jobs'));
    }


    public function addAction(){
        if (!empty($_POST)){
            $job = new Job();
            $data = $_POST;
            $data['status'] = '1';
            $job->load($data);
            if (!$job->validate($data)){
                $job->getErrors();
                redirect();
            }
            if ($id = $job->save('job')){
                $_SESSION['success'] =  'Работа добавлена!';
            }
            redirect();
        }
        $this->setMeta('Добавить новою работу');
    }



    public function editAction(){
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $job = new Job();
            $data = $_POST;
            $job->load($data);
            if (!$job->validate($data)){
                $job->getErrors();
                redirect();
            }
            if ($job->update('job', $id)){
                $_SESSION['success'] =  'Данные изменены!';
            }
            redirect();
        }
        $id = $this->getRequestId();
        $job = \R::findOne('job','id = ?', [$id]);

        $this->setMeta("Изменить {$job->name}");
        $this->setData(compact( 'job'));
    }


    public function deleteAction(){
        $id = $this->getRequestId();
        $job = \R::findOne('job', "id = ?", [$id]);
        \R::exec("DELETE FROM job WHERE id = ?", [$id]);
        $_SESSION['success'] =  'Работа удалена!';
        redirect();
    }


    public function galleryAction(){

        $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
        $job = \R::findOne('job', 'id = ?', [$id]);
        if (empty($job)){
            redirect(ADMIN . '/job');
        }

        $this->setMeta("Галерея к {$job->name}");
        $this->setData(compact('job'));
    }


    public function imagesAction(){
        debug($_FILES, 1);
    }


    public function uploadAction(){

        $res = ['answer' => 'ok'];
        echo json_encode($res);
        die();



//        $folder_name = PATH .'/images/';
//        if(!empty($_FILES))
//        {
//            $temp_file = $_FILES['file']['tmp_name'];
//            $location = $folder_name . $_FILES['file']['name'];
//            move_uploaded_file($temp_file, $location);
//        }
//
//        if(isset($_POST["name"]))
//        {
//            $filename = $folder_name.$_POST["name"];
//            unlink($filename);
//        }
//
//        $result = array();
//
//        $files = scandir( 'images');
//
//        $output = '<div class="row">';
//
//        if(false !== $files)
//        {
//            foreach($files as $file)
//            {
//                if('.' !=  $file && '..' != $file)
//                {
//                    $output .= '
//                       <div class="col-md-2">
//                        <img src="'.$folder_name.$file.'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
//                        <button type="button" class="btn btn-link remove_image" id="'.$file.'">Remove</button>
//                       </div>
//                       ';
//                }
//            }
//        }
//        $output .= '</div>';
//        echo $output;

        die();
    }

}