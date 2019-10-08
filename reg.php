<?php 

    require_once 'config.php';
    include 'db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $pass = md5($password.$configs['hash']);

    $user = views_pass();

    if ($username == $user['login'] and $pass == $user['pass']){
        setcookie('log', $username, time()+3600);
    }

    header('Location: /news.php');
    
?>