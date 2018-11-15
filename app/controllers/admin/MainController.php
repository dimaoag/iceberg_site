<?php
namespace app\controllers\admin;


class MainController extends AdminController {

    public function indexAction(){

        $countProjects = \R::count('project');


        $this->setMeta('Админка');
        $this->setData(compact('countProjects'));
    }
}