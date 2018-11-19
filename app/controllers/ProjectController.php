<?php
namespace app\controllers;


class ProjectController extends AppController {

    public function viewAction(){

        $id = $_GET['id'] ? (int)$_GET['id'] : null;

        $project = \R::findOne('project', 'id = ?', [$id]);
        if (!$project){
            redirect();
        }

        $projects = \R::findAll('project', 'status = 1');

        $ids = \R::getCol( 'SELECT id FROM project WHERE status = 1' );
        $cats = \R::findAll('category_project', 'ORDER BY id ASC');

        $next_id = '';
        $prev_id = '';
        $i = 0;

        foreach ($ids as $key => $value){
            if($value == $id){
                if (empty($ids[$i + 1])){
                    $next_id = $id;
                } else {
                    $next_id = $ids[$i + 1];
                }
                if (empty($ids[$i - 1])){
                    $prev_id = $id;
                } else {
                    $prev_id = $ids[$i - 1];
                }

            }
            $i++;
        }


        $last_element = end($ids);
        $first_element = $ids[0];
        if ($last_element == $id) {
            $next_id = array_shift($ids);
        }
        if ($first_element == $id) {
            $prev_id = end($ids);
        }


        $this->setMeta("Проект \"{$project->title}\"");
        $this->setData(compact('project', 'projects', 'cats', 'next_id', 'prev_id'));

    }

}