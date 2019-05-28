<?php

$method = $_SERVER['REQUEST_METHOD'];


$message = "";
if ( $method == 'POST' ) {
    $project_name = "Iceberg";
    $admin_email = "iceberg.vn.ua@gmail.com";
//    $admin_email = "dimaoag@gmail.com";
    $form_subject = "Заявка с сайта Iceberg";
    $message = '';

    if (!empty($_POST['phone'])) {
        $text = htmlspecialchars($_POST['text']);
        $message = '<table style="width: 100%;">';


        $username = htmlspecialchars($_POST['username']);
        if (!empty($_POST['username'])){
            $username = htmlspecialchars($_POST['username']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Имя пользователя </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $username . '</td>
                        </tr>';
        }
        if (!empty($_POST['phone'])){
            $phone = trim(htmlspecialchars(str_replace(' ', '', $_POST['phone'])));
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Телефон </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $phone . '</td>
                        </tr>';
        }
        if (!empty($_POST['email'])){
            $email = htmlspecialchars($_POST['email']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Email </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $email . '</td>
                        </tr>';
        }
        if (!empty($_POST['company_name'])){
            $company_name = htmlspecialchars($_POST['company_name']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Название компании </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $company_name . '</td>
                        </tr>';
        }
        if (!empty($_POST['activity_area'])){
            $activity_area = htmlspecialchars($_POST['activity_area']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Сфера деятельности </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $activity_area . '</td>
                        </tr>';
        }
        if (!empty($_POST['competitors_text'])){
            $competitors_text = htmlspecialchars($_POST['competitors_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Вы знаете ваших конкурентов в сети? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $competitors_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['activity_customer'])){
            $activity_customer = htmlspecialchars($_POST['activity_customer']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Продукция, услуги </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $activity_customer . '</td>
                        </tr>';
        }
        if (!empty($_POST['goal_text'])){
            $goal_text = htmlspecialchars($_POST['goal_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Кто является целевой аудиторией вашего продукта / услуги? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $goal_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['advantages_text'])){
            $advantages_text = htmlspecialchars($_POST['advantages_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Выделите ключевое преимущество продукта / услуги </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $advantages_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['problems_text'])){
            $problems_text = htmlspecialchars($_POST['problems_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> С какими проблемами к вам приходит клиент? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $problems_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['compare_text'])){
            $compare_text = htmlspecialchars($_POST['compare_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> На что опирается клиент, сравнивая ваш продукт с продуктом конкурента? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $compare_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['objections'])){
            $objections_text = '';
            foreach ($_POST['objections'] as $key => $value){
                $objections_text .= $value . ', ';
            }

            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Выберите 5 наиболее распространенных возражения в вашем бизнесе. </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $objections_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['solutions_text'])){
            $solutions_text = htmlspecialchars($_POST['solutions_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Какие решения вы предоставляете клиенту? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $solutions_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['quality_images_text'])){
            $quality_images_text = htmlspecialchars($_POST['quality_images_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> У вас есть качественные изображения или видео для сайта? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $quality_images_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['example_site'])){
            $example_site = htmlspecialchars($_POST['example_site']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Какой сайт можно взять за пример полностью или с частью функционала </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $example_site . '</td>
                        </tr>';
        }
        if (!empty($_POST['is_have_site'])){
            $is_have_site = htmlspecialchars($_POST['is_have_site']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> У вас сейчас есть сайт? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $is_have_site . '</td>
                        </tr>';
        }
        if (!empty($_POST['term_site'])){
            $term_site = htmlspecialchars($_POST['term_site']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> На сколько срочен данный проект для вас?  </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $term_site . '</td>
                        </tr>';
        }
        if (!empty($_POST['idea_text'])){
            $idea_text = htmlspecialchars($_POST['idea_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Есть ли у вас особая идея?   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $idea_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['structure_site'])){
            $structure_site = htmlspecialchars($_POST['structure_site']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Укажите предполагаемые основные разделы вашего будущего сайта   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $structure_site . '</td>
                        </tr>';
        }
        if (!empty($_POST['prototype_site'])){
            $prototype_site = htmlspecialchars($_POST['prototype_site']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Есть ли у вас прототип будущего сайта?   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $prototype_site . '</td>
                        </tr>';
        }
        if (!empty($_POST['unlikes_sites'])){
            $unlikes_sites = htmlspecialchars($_POST['unlikes_sites']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Сайты, которые не нравятся   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $unlikes_sites . '</td>
                        </tr>';
        }
        if (!empty($_POST['example_sites_text'])){
            $example_sites_text = htmlspecialchars($_POST['example_sites_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Какой сайт можно взять за пример полностью или с частью функционала.   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $example_sites_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['features'])){
            $features_text = '';
            foreach ($_POST['features'] as $key => $value){
                $features_text .= $value . ', ';
            }

            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Что из этого необходимо? </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $features_text . '</td>
                        </tr>';
        }
        if (!empty($_POST['desire_text'])){
            $desire_text = htmlspecialchars($_POST['desire_text']);
            $message .= '<tr style="background-color: #f8f8f8;">
                            <td style="padding: 10px; border: #e9e9e9 1px solid;"><b> Дополнения, замечания, пожелания, требования к сайту.   </b></td>
                            <td style="padding: 10px; border: #e9e9e9 1px solid;">' . $desire_text . '</td>
                        </tr>';
        }


    }
    $message .= '</table>';


    function adopt($text)
    {
        return '=?UTF-8?B?' . base64_encode($text) . '?=';
    }

    $headers = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: ' . adopt($project_name) . ' <' . $admin_email . '>' . PHP_EOL .
        'Reply-To: ' . $admin_email . '' . PHP_EOL;

    $send = mail($admin_email, adopt($form_subject), $message, $headers);

    $res = "0";
    if ($send=1){
        $res = "1";
    }

    echo json_encode($res);
    die();
//    header("Location: " .$_SERVER['HTTP_ORIGIN'] . "/quizform/order-form.html");
}