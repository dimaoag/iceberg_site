<?php

namespace app\controllers\admin;

use app\models\admin\CategoryProject;


class CategoryProjectController extends AdminController
{
    public function indexAction(){


        $cats = \R::findAll('category_project');



        $this->setMeta('Все категории');
        $this->setData(compact('cats'));
    }



    public function addAction(){
        if (!empty($_POST)){
            $cat = new CategoryProject();
            $data = $_POST;
            $data['status'] = '1';
            $cat->load($data);
            if (!$cat->validate($data)){
                $cat->getErrors();
                redirect();
            }
            if ($id = $cat->save('category_project', false)){
                $_SESSION['success'] =  'Категория добавлена!';
            }
            redirect();
        }
        $this->setMeta('Добавить новую категорию');
    }





    public function editAction(){
        if (!empty($_POST)){
            $id = $this->getRequestId(false);
            $cat = new CategoryProject();
            $data = $_POST;
            $cat->load($data);
            if (!$cat->validate($data)){
                $cat->getErrors();
                redirect();
            }
            if ($cat->update('category_project', $id)){
                $_SESSION['success'] =  'Данные изменены!';
            }
            redirect();
        }
        $id = $this->getRequestId();
        $cat = \R::findOne('category_project', 'id = ?', [$id]);

        $this->setMeta("Изменить {$cat->title}");
        $this->setData(compact( 'cat'));
    }


    public function deleteAction(){
        $id = $this->getRequestId();
        \R::exec("DELETE FROM category_project WHERE id = ?", [$id]);
        $_SESSION['success'] =  'Категория удалена!';
        redirect();
    }




}