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


    public function brifAction()
    {
        $metaTitle = 'Заполнить бриф';
        $this->setMeta($metaTitle);
    }

    public function contactsAction()
    {
        $metaTitle = 'Контакты';

        $this->setMeta($metaTitle);
//        $contact = \R::findOne('contact', "id = ?", ['']);
        $contact = \R::findOne('contact', 'id = 1');
        $this->setData(compact('contact'));
    }

    public function sendOrderSiteAction()
    {
        if (!empty($_POST)) {

            $username = $_POST['username'] ? trim(htmlspecialchars($_POST['username'])) : null;
            $phone = $_POST['phone'] ? trim(htmlspecialchars(str_replace(" ", "", $_POST['phone']))) : null;
            $email = $_POST['email'] ? htmlspecialchars($_POST['email']) : null;
            $text = $_POST['text'] ? htmlspecialchars($_POST['text']) : null;

            $messageText = '
                    <h1>Новая заявка</h1>
                    <p><b>Имя </b> - ' . $username . ' </p>
                    <p><b>Телефон </b> - ' . $phone . ' </p>
                    <p><b>Email </b> - ' . $email . ' </p>
                    <p><b>Текст </b> - ' . $text . ' </p>';


            // Create the Transport
            $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                ->setUsername(App::$app->getProperty('smtp_login'))
                ->setPassword(App::$app->getProperty('smtp_password'));

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

            if ($result) {
                redirect(PATH . '/main/thanks');
            }
        }
        redirect();
    }

    public function sendPhoneAction()
    {
        if (!empty($_POST)) {
            $phone = $_POST['phone'] ? trim(htmlspecialchars(str_replace(" ", "", $_POST['phone']))) : null;

            $messageText = '
                    <h1>Новая заявка</h1>
                    
                    <p><b>Телефон </b> - ' . $phone . ' </p>';


            // Create the Transport
            $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                ->setUsername(App::$app->getProperty('smtp_login'))
                ->setPassword(App::$app->getProperty('smtp_password'));

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

            if ($result) {
                redirect(PATH . '/main/thanks');
            }

        }
        redirect();
    }

    public function sendBrifAction()
    {
        if (!empty($_POST['phone'])) {

            $messageBody = '<table style="width: 100%;">';


            if (!empty($_POST['username'])) {
                $username = htmlspecialchars($_POST['username']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Имя пользователя </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $username . '</td>
                        </tr>';
            }
            if (!empty($_POST['phone'])) {
                $phone = trim(htmlspecialchars(str_replace(' ', '', $_POST['phone'])));
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Телефон </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $phone . '</td>
                        </tr>';
            }
            if (!empty($_POST['email'])) {
                $email = htmlspecialchars($_POST['email']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Email </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $email . '</td>
                        </tr>';
            }
            if (!empty($_POST['company_name'])) {
                $company_name = htmlspecialchars($_POST['company_name']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Название компании </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $company_name . '</td>
                        </tr>';
            }
            if (!empty($_POST['activity_area'])) {
                $activity_area = htmlspecialchars($_POST['activity_area']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Сфера деятельности </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $activity_area . '</td>
                        </tr>';
            }
            if (!empty($_POST['competitors_text'])) {
                $competitors_text = htmlspecialchars($_POST['competitors_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Вы знаете ваших конкурентов в сети? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $competitors_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['activity_customer'])) {
                $activity_customer = htmlspecialchars($_POST['activity_customer']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Продукция, услуги </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $activity_customer . '</td>
                        </tr>';
            }
            if (!empty($_POST['goal_text'])) {
                $goal_text = htmlspecialchars($_POST['goal_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Кто является целевой аудиторией вашего продукта / услуги? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $goal_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['advantages_text'])) {
                $advantages_text = htmlspecialchars($_POST['advantages_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Выделите ключевое преимущество продукта / услуги </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $advantages_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['problems_text'])) {
                $problems_text = htmlspecialchars($_POST['problems_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> С какими проблемами к вам приходит клиент? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $problems_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['compare_text'])) {
                $compare_text = htmlspecialchars($_POST['compare_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> На что опирается клиент, сравнивая ваш продукт с продуктом конкурента? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $compare_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['objections'])) {
                $objections_text = '';
                foreach ($_POST['objections'] as $key => $value) {
                    $objections_text .= $value . ', ';
                }

                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Выберите 5 наиболее распространенных возражения в вашем бизнесе. </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $objections_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['solutions_text'])) {
                $solutions_text = htmlspecialchars($_POST['solutions_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Какие решения вы предоставляете клиенту? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $solutions_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['quality_images_text'])) {
                $quality_images_text = htmlspecialchars($_POST['quality_images_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> У вас есть качественные изображения или видео для сайта? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $quality_images_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['example_site'])) {
                $example_site = htmlspecialchars($_POST['example_site']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Какой сайт можно взять за пример полностью или с частью функционала </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $example_site . '</td>
                        </tr>';
            }
            if (!empty($_POST['is_have_site'])) {
                $is_have_site = htmlspecialchars($_POST['is_have_site']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> У вас сейчас есть сайт? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $is_have_site . '</td>
                        </tr>';
            }
            if (!empty($_POST['term_site'])) {
                $term_site = htmlspecialchars($_POST['term_site']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> На сколько срочен данный проект для вас?  </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $term_site . '</td>
                        </tr>';
            }
            if (!empty($_POST['idea_text'])) {
                $idea_text = htmlspecialchars($_POST['idea_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Есть ли у вас особая идея?   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $idea_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['structure_site'])) {
                $structure_site = htmlspecialchars($_POST['structure_site']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Укажите предполагаемые основные разделы вашего будущего сайта   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $structure_site . '</td>
                        </tr>';
            }
            if (!empty($_POST['prototype_site'])) {
                $prototype_site = htmlspecialchars($_POST['prototype_site']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Есть ли у вас прототип будущего сайта?   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $prototype_site . '</td>
                        </tr>';
            }
            if (!empty($_POST['unlikes_sites'])) {
                $unlikes_sites = htmlspecialchars($_POST['unlikes_sites']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Сайты, которые не нравятся   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $unlikes_sites . '</td>
                        </tr>';
            }
            if (!empty($_POST['example_sites_text'])) {
                $example_sites_text = htmlspecialchars($_POST['example_sites_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Какой сайт можно взять за пример полностью или с частью функционала.   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $example_sites_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['features'])) {
                $features_text = '';
                foreach ($_POST['features'] as $key => $value) {
                    $features_text .= $value . ', ';
                }

                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Что из этого необходимо? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $features_text . '</td>
                        </tr>';
            }
            if (!empty($_POST['desire_text'])) {
                $desire_text = htmlspecialchars($_POST['desire_text']);
                $messageBody .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Дополнения, замечания, пожелания, требования к сайту.   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $desire_text . '</td>
                        </tr>';
            }
            $messageBody .= '</table>';


            // Create the Transport
            $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
                ->setUsername(App::$app->getProperty('smtp_login'))
                ->setPassword(App::$app->getProperty('smtp_password'));

            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

            // Create a message
            $message = (new Swift_Message('Заявка с сайта ' . $_SERVER['SERVER_NAME']))
                ->setContentType("text/html")
                ->setFrom([App::$app->getProperty('admin_email_from') => $_SERVER['SERVER_NAME']])
                ->setTo(App::$app->getProperty('admin_email_to'))
                ->setBody($messageBody);

            // Send the message
            $result = $mailer->send($message);

            if ($result) {
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