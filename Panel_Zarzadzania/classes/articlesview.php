<?php

class ArticleView extends Article
{

  public function showArticle($id)
  {
    $results = $this->getArticle($id);
    echo '<div class="mb-3">
                <label for="Input1" class="form-label">Tytuł</label>
                <input type="text" name="title" class="form-control" id="Input1" placeholder="Tytuł artykułu" value="' . $results[0]['title'] . '">
            </div>
            <div class="mb-3">
                <Label for="Textarea1" class="form-label">Opis</Label>
                <textarea name="content" class="form-control" id="Textarea1" rows="3">' . $results[0]['content'] . '</textarea>
            </div>
            <div class="mb-3">
                <Label for="Select1" class="form-label">Status</Label>         
                <select name="status" class="form-select" id="Select1">
                ';
    for($i=0;$i<count($results[1]);$i++){
        echo '<option';
        if($results[1][$i]['id']==$results[0]['article_status']){
          echo ' selected ';
        }
        echo  ' value="' . $results[1][$i]['id'] . '">' . $results[1][$i]['status_name'] . '</option>';
    }
                  
    echo              '
                </select>
            </div>
            <div class="mb-3 text-center">
                <input type="hidden" name="id" value="' . $results[0]['id'] . '">
                <button type="submit" class="btn btn-success" name="editArticle">Edytuj artykuł</button>
            </div>';
  }

  public function showAllArticles()
  {
    $results = $this->getAllArticles();
    foreach ($results as $row) {
      $int = $row['article_status'];
      switch ($int) {
        case 1:
          $selected = "Do akceptacji";
          break;
        case 2:
          $selected = "Zaakceptowany";
          break;
        case 3:
          $selected = "Opublikowany";
          break;
      }
      echo  '
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title">' . $row['title'] . '</h5>
                    <p class="card-text">' . $row['content'] . '</p>
                </div>
                <div class="card-footer text-center">
                  <div class="row">
                    <div class="col">
                      <p>#' . $row['id'] . '</p>
                    </div>
                    <div class="col">
                      <form action="edit.php" method="POST">
                        <input type="hidden" name="id" value="' . $row['id'] . '">
                        <button type="submit" class="btn btn-info" id="Button1" name="editArticle">Edit</button>
                      </form>
                    </div>
                    <div class="col">
                     <form action="includes/removearticle.php" method="POST">
                        <input type="hidden" name="id" value="' . $row['id'] . '">
                        <button type="submit" class="btn btn-danger" id="Button1" name="removeArticle">Remove</button>
                      </form>
                    </div>
                    <div class="col">
                      <p>' . $selected . '</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              ';
    }
  }
}
