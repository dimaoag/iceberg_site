<?php

$project_name = "Iciberg test";
//$admin_email = "dimaoag@gmail.com";
$admin_email = "iceberg.vn.ua@gmail.com";
$form_subject = "Заявка с сайта iceberg-test.com";




function debug($array, $die = false){
    if ($die){
        echo '<pre>';
        var_dump($array);
        echo '<pre>';
    } else {
        echo '<pre>';
        print_r($array);
        echo '<pre>';
        die();
    }
}


function adopt($text){
    return '=?UTF-8?B?' . base64_encode($text) . '?=';
}



$headers = "MIME-Version: 1.0" . PHP_EOL .
    "Content-Type: text/html; charset=utf-8" . PHP_EOL .
    'From: ' . adopt($project_name) . ' <' . $admin_email . '>' . PHP_EOL .
    'Reply-To: ' . $admin_email . '' . PHP_EOL;



$phone = trim(str_replace(" ", "", $_POST['phone']));
$phone = htmlspecialchars($phone);
$text = htmlspecialchars($_POST['text']);

$out =   '<br><p><span style="color: #777777;">Полозователь  </span> '.$phone.'<p>'
        .'<p><span style="color: #777777;">Сообщение  </span> '.$text.'<p>'
        ;


//echo $out;



 if (mail($admin_email, adopt($form_subject), $out, $headers)){
     header("Location: " .$_SERVER['HTTP_ORIGIN'] . "?status=1");
 } else {
     echo 'Error!';
 }
