<?php
namespace app\controllers;

use iceberg\App;


class MainController extends AppController
{
    public function indexAction(){

        $projects = \R::findAll('project' ,'status = 1');
        $cats = \R::findAll('category_project', 'ORDER BY id ASC');



        $this->setMeta('IceBerg');
        $this->setData(compact('projects', 'cats'));
    }


    public function sendCommentAction(){
        $res = 0;
        if (!empty($_POST) ) {
            $project_name = App::$app->getProperty('shop_name');
            $admin_email = App::$app->getProperty('admin_email');
            $form_subject = "Комментарий с сайта" . $project_name;
            $phone_key = 'Телефон';
            $comment_key = 'Комментарий';
            $phone_value = str_replace(" ", "", $_POST['phone']);
            $comment_value = h($_POST['comment']);

            $message = '<table style="width: 100%;">'
                . '<tr style="background-color: #f8f8f8;">'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>' . $phone_key . '</b></td>'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;">' . $phone_value . '</td>'
                . '</tr></table>';

            $message .= '<table style="width: 100%;">'
                . '<tr style="background-color: #f8f8f8;">'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>' . $comment_key . '</b></td>'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;">' . $comment_value . '</td>'
                . '</tr></table>';

            function adopt($text){
                return '=?UTF-8?B?' . base64_encode($text) . '?=';
            }

            $headers = "MIME-Version: 1.0" . PHP_EOL .
                "Content-Type: text/html; charset=utf-8" . PHP_EOL .
                'From: ' . adopt($project_name) .  PHP_EOL .
                'Reply-To: ' . $admin_email . '' . PHP_EOL;

            mail($admin_email, adopt($form_subject), $message, $headers);

            $res = "1";

        }
        echo json_encode($res);
        die();
    }


    public function sendOrderAction(){
        $res = 0;
        if (!empty($_POST) ) {
            $project_name = App::$app->getProperty('shop_name');
            $admin_email = App::$app->getProperty('admin_email');
            $form_subject = "Заявка с сайта" . $project_name;
            $phone_key = 'Телефон';
            $name_key = 'Имя';
            $phone_value = str_replace(" ", "", $_POST['phone']);
            $name_value = h($_POST['name']);
            $message = '<table style="width: 100%;">'
                . '<tr style="background-color: #f8f8f8;">'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>' . $phone_key . '</b></td>'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;">' . $phone_value . '</td>'
                . '</tr></table>';

            $message .= '<table style="width: 100%;">'
                . '<tr style="background-color: #f8f8f8;">'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;"><b>' . $name_key . '</b></td>'
                . '<td style="padding: 10px; border: #e9e9e9 1px solid;">' . $name_value . '</td>'
                . '</tr></table>';

            function adopt($text){
                return '=?UTF-8?B?' . base64_encode($text) . '?=';
            }

            $headers = "MIME-Version: 1.0" . PHP_EOL .
                "Content-Type: text/html; charset=utf-8" . PHP_EOL .
                'From: ' . adopt($project_name) .  PHP_EOL .
                'Reply-To: ' . $admin_email . '' . PHP_EOL;

            mail($admin_email, adopt($form_subject), $message, $headers);

            $res = "1";

        }
        echo json_encode($res);
        die();
    }


}