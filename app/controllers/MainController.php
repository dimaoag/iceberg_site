<?php
namespace app\controllers;


use site\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class MainController extends AppController
{

    public function indexAction()
    {
        $metaTitle = 'Веб-студия Iceberg | Создание сайтов, лендингов и интернет-магазинов';
        $metaDescription = 'Делаем защищенные, быстрые сайты с любым функционалом и понятным управлением! Работаем на чистом коде (фреймворк Yii2) с поэтапной оплатой, а также поддерживаем сайт после сдачи.';
        $this->setMeta($metaTitle, $metaDescription);
//        $this->setData(compact('services', 'jobs', 'isShowJobBtn', 'offset', 'employees', 'contact'));
    }



    public function contactsAction()
    {
        $metaTitle = 'Контакты';
        $this->setMeta($metaTitle);
    }

    public function sendOrderSiteAction()
    {
        if (!empty($_POST)){

            $username = $_POST['username'] ? trim(htmlspecialchars($_POST['username'])) : null;
            $phone = $_POST['phone'] ? trim(htmlspecialchars(str_replace(" ", "", $_POST['phone']))) : null;
            $email = $_POST['email'] ? htmlspecialchars($_POST['email']) : null;
            $text = $_POST['text'] ? htmlspecialchars($_POST['text']) : null;

            $messageText = '
                    <h1>Новая заявка</h1>
                    <p><b>Имя </b> - '. $username .' </p>
                    <p><b>Телефон </b> - '. $phone .' </p>
                    <p><b>Email </b> - '. $email .' </p>
                    <p><b>Текст </b> - '. $text .' </p>';


            // Create the Transport
            $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                ->setUsername(App::$app->getProperty('smtp_login'))
                ->setPassword(App::$app->getProperty('smtp_password'))
            ;

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message('Заявка с сайта ' . $_SERVER['SERVER_NAME']))
                ->setContentType("text/html")
                ->setFrom([App::$app->getProperty('admin_email_from') => $_SERVER['SERVER_NAME']])
                ->setTo(App::$app->getProperty('admin_email_to'))
                ->setBody($messageText);

            // Send the message
            $result = $mailer->send($message);

            if ($result){
                redirect(PATH . '/main/thanks');
            }
        }
        redirect();
    }

    public function sendPhoneAction()
    {
        if (!empty($_POST)){
            $phone = $_POST['phone'] ? trim(htmlspecialchars(str_replace(" ", "", $_POST['phone']))) : null;

            $messageText = '
                    <h1>Новая заявка</h1>
                    
                    <p><b>Телефон </b> - '. $phone .' </p>';



            // Create the Transport
            $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                ->setUsername(App::$app->getProperty('smtp_login'))
                ->setPassword(App::$app->getProperty('smtp_password'))
            ;

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message('Заявка с сайта ' . $_SERVER['SERVER_NAME']))
                ->setContentType("text/html")
                ->setFrom([App::$app->getProperty('admin_email_from') => $_SERVER['SERVER_NAME']])
                ->setTo(App::$app->getProperty('admin_email_to'))
                ->setBody($messageText);

            // Send the message
            $result = $mailer->send($message);

            if ($result){
                redirect(PATH . '/main/thanks');
            }

        }
        redirect();
    }

    public function thanksAction()
    {
        $metaTitle = 'Спасибо за ответ';
        $this->setMeta($metaTitle);
    }


}