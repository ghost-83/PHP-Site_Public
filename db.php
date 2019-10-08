<?php 
    require_once 'config.php';

    $dsn = 'mysql:host='.$configs['db']['server'].';port='.$configs['db']['port'].';dbname='.$configs['db']['name'];
    $pdo = new PDO($dsn, $configs['db']['username'], $configs['db']['password']);

    function get_news_all($shift, $on_page){
        global $pdo;
        $news = $pdo->query("SELECT * FROM news ORDER BY date DESC LIMIT $shift, $on_page");
        return $news;
    }

    function get_news_categor($id){
        global $pdo;
        $news = $pdo->query("SELECT * FROM news WHERE category_id = $id");
        return $news;
    }

    function get_new_id($id){
        global $pdo;
        $news = $pdo->query("SELECT * FROM news WHERE id = $id");
        foreach ($news as $new) {
            return $new;
        }
    }

    function get_category_all(){
        global $pdo;
        $categories = $pdo->query("SELECT * FROM category");
        return $categories;
    }

    function get_links_all(){
        global $pdo;
        $links = $pdo->query("SELECT * FROM links");
        return $links;
    }

    function get_category_id($id){
        global $pdo;
        $category_id = $pdo->query("SELECT * FROM category WHERE id = $id");
        foreach ($category_id as $category) {
            return $category;
        }
    }

    function get_pages(){
        global $pdo;
        $pages_all = $pdo->query("SELECT count(*) AS all_news FROM `news`");
        foreach ($pages_all as $pages) {
            return $pages;
        }
    }

    function views_update($id){
        global $pdo;
        $sql = "UPDATE news SET views = views + 1 WHERE id = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);
    }

    function add_article($theme, $text, $img, $date, $categ){
        global $pdo;
        $sql = "INSERT INTO news ( title, text, img, date, category_id) VALUES (?, ?, ?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute([$theme, $text, $img, $date, $categ]);
    }
    function new_pass($password){
        global $pdo;
        $sql = "UPDATE users SET pass = ? WHERE id = '1'";
        $query = $pdo->prepare($sql);
        $query->execute([$password]);
    }
    function views_pass(){
        global $pdo;
        $users = $pdo->query("SELECT * FROM users WHERE id = '1'");
        foreach ($users as $user) {
            return $user;
        }
    }
?>
