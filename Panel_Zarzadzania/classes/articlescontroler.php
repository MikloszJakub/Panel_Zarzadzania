<?php

class ArticleControler extends Article
{

    public function addArticle($title, $content, $status)
    {
        $this->setArticle($title, $content, $status);
    }

    public function editArticle($title, $content, $status, $id)
    {
        $this->updateArticle($title, $content, $status, $id);
    }

    public function removeArticle($id)
    {
        $this->deleteArticle($id);
    }
}
