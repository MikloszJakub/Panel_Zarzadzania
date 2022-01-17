<?php
include 'classes/databaseconnect.php';
include 'classes/article.php';
include 'classes/articlescontroler.php';
include 'classes/articlesview.php';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuwanie artykułu</title>
</head>

<body>

  <?php
  $articleObject2 = new ArticleControler();
  $articleObject2->removeArticle(22);
  ?>

</body>

</html>