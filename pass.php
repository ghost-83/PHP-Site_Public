<?php

    require_once 'config.php';
    include 'db.php';

    $password = $_POST['password'];

    $pass = md5($password.$configs['hash']);

    new_pass($pass);

    header('Location: /news.php');

?>