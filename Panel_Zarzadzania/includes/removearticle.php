<?php

if (isset($_POST["removeArticle"])) {

    $id = $_POST["id"];

    include '../classes/databaseconnect.php';
    include '../classes/article.php';
    include '../classes/articlescontroler.php';
    include '../classes/articlesview.php';
    $obj = new ArticleControler();
    $obj->removeArticle($id);

    header("location: ../index.php");
}
