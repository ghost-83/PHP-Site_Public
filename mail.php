<?php 

    require_once 'config.php';

    $username = trim(filter_var($_POST['username']. FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email']. FILTER_SANITIZE_EMAIL));
    $theme = trim(filter_var($_POST['theme']. FILTER_SANITIZE_STRING));
    $mess = trim(filter_var($_POST['mess']. FILTER_SANITIZE_STRING));

    $error ='';
    if(strlen($username) <= 3) {
        $error = 'Введите имя';
    }
    elseif (strlen($email) <= 3) {
        $error = 'Введите email';
    }
    elseif (strlen($theme) <= 3) {
        $error = 'Введите тему';
    }
    elseif (strlen($mess) <= 10) {
        $error = 'Введите сообщение более 10 символов';
    }

    if (error != '') {
        echo $error;
        exit();
    }

    $subject = "=?utf-8?B?".base64_encode($theme)."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
     
    mail($config['my_email'], $subject, $mess, $headers);

    echo 'Готово'
?>