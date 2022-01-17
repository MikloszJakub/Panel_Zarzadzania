<?php

if (isset($_POST["addArticle"])) {

    $title = $_POST["title"];
    $content = $_POST["content"];
    $status = $_POST["status"];

    include '../classes/databaseconnect.php';
    include '../classes/article.php';
    include '../classes/articlescontroler.php';
    include '../classes/articlesview.php';
    $obj = new ArticleControler();
    $obj->addArticle($title, $content, $status);

    header("location: ../index.php");
}
