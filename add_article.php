<?php 

    include 'db.php';

    $theme = $_POST['theme'];
    $text = $_POST['text'];
    $categ = $_POST['categ'];
    $img = $_POST['img'];
    $date = date('Y-m-d H:i');

    add_article($theme, $text, $img, $date, $categ);

    header('Location: /news.php');

?>