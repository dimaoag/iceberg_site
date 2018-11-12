<?php
namespace app\controllers;


class ProjectController extends AppController {

    public function indexAction(){

        $id = $_GET['id'] ? (int)$_GET['id'] : null;

        $project = \R::findOne('project', 'id = ?', [$id]);
        if (!$project){
            redirect();
        }

        $this->setMeta("Проэкт \"{$project->title}\"");
        $this->setData(compact('project'));

    }

}