<?php

if (isset($_POST["editArticle"])) {

    $title = $_POST["title"];
    $content = $_POST["content"];
    $status = $_POST["status"];
    $id = $_POST["id"];

    include '../classes/databaseconnect.php';
    include '../classes/article.php';
    include '../classes/articlescontroler.php';
    include '../classes/articlesview.php';
    $obj = new ArticleControler();
    $obj->editArticle($title, $content, $status, $id);

    header("location: ../index.php");
}
