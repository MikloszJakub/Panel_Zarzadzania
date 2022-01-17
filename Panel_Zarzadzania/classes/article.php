<?php

class Article extends DatabaseConnect
{

  protected function getArticle($id)
  {
    $sql = "SELECT id, title, content, article_status FROM articles WHERE articles.id = ?";
    $sql2 = "SELECT id, status_name FROM statuses";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $results[0] = $stmt->fetch();
    $stmt2 = $this->connect()->query($sql2);
    $results[1] = $stmt2->fetchAll();
    return $results;
  }

  protected function getAllArticles()
  {
    $sql = "SELECT id, title, content, article_status FROM articles";
    $stmt = $this->connect()->query($sql);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setArticle($title, $content, $status)
  {
    $sql = "INSERT INTO articles(title, content, article_status) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$title, $content, $status]);
  }

  protected function updateArticle($title, $content, $status, $id)
  {
    $sql = "UPDATE articles SET title = ?, content = ?, article_status = ? WHERE articles.id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$title, $content, $status, $id]);
  }

  protected function deleteArticle($id)
  {
    $sql = "DELETE FROM articles WHERE articles.id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}
