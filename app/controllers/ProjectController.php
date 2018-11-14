<?php
namespace app\controllers;


class ProjectController extends AppController {

    public function viewAction(){

        $id = $_GET['id'] ? (int)$_GET['id'] : null;

        $project = \R::findOne('project', 'id = ?', [$id]);
        if (!$project){
            redirect();
        }

        $projects = \R::findAll('project' ,'status = 1');
        $cats = \R::findAll('category_project', 'ORDER BY id ASC');

        $link_next = null;
        $link_prev = null;

        $next_id = $id + 1;
        $prev_id = $id - 1;



        $project_next = \R::findOne('project', 'id = ? AND status = 1', [$next_id]);
        $project_prev = \R::findOne('project', 'id = ? AND status = 1', [$prev_id]);

        if (empty($project_next)){
            $link_next = $id;
        } else{
            $link_next = $project_next->id;
        }
        if (empty($project_prev)){
            $link_prev = $id;
        } else {
            $link_prev = $project_prev->id;
        }

        $this->setMeta("Проэкт \"{$project->title}\"");
        $this->setData(compact('project', 'projects', 'cats', 'link_prev', 'link_next'));

    }

}