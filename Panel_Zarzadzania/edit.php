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
    <title>Edytuj artykuł</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Dodaj artykuł</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Pokaż artykuły</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="h2 text-center mt-3">Edytowanie Artykułu</h2>
                <form action="includes/editarticle.php" method="POST">
                    <?php
                    $articleObject = new ArticleView();
                    $articleObject->showArticle($_POST['id']);
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>

</html>