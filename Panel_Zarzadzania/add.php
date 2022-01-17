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
    <title>Dodaj artykuł</title>
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
                <h2 class="h2 text-center mt-3">Dodawanie Artykułu</h2>
                <form action="includes/addarticle.php" method="POST">
                    <div class="mb-3">
                        <label for="Input1" class="form-label">Tytuł</label>
                        <input type="text" name="title" class="form-control" id="Input1" placeholder="Tytuł artykułu">
                    </div>
                    <div class="mb-3">
                        <Label for="Textarea1" class="form-label">Opis</Label>
                        <textarea name="content" class="form-control" id="Textarea1" rows="3" placeholder="Opis artykułu"></textarea>
                    </div>
                    <div class="mb-3">
                        <Label for="Select1" class="form-label">Status</Label>
                        <select name="status" class="form-select" id="Select1">
                            <option selected value="1">Do akceptacji</option>
                            <option value="2">Zaakceptowany</option>
                            <option value="3">Opublikowany</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-success" name="addArticle">Dodaj artykuł</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>

</html>