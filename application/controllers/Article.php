<?php

namespace Application\Controllers;

use Application\Models\Article as ArticleModel;
use Application\Models\Category;
use System\Traits\Redirect;


class Article extends Controller{

    public function index(){

        $articleM = new ArticleModel();

        $articles = $articleM->all();

        return $this->view("panel.article.index", compact("articles"));

    }

    public function create() {

        $categoryM = new Category();

        $categories = $categoryM->all();

        $this->view("panel.article.create", compact("categories"));

        
    }


    public function store(){

        $articleM = new ArticleModel();

        $articleM->insert($_POST);

        return $this->redirect("article");

    }


    public function edit($id){

        $categoryM = new Category();

        $categories = $categoryM->all();

        $articleM = new ArticleModel();

        $article = $articleM->find($id);

        return $this->view("panel.article.edit", compact("categories", "article"));

    }

    public function update($id){

        $articleM = new ArticleModel();

        $articleM->update($id, $_POST);

        return $this->redirect("article");

    }


    public function delete($id){

        $articleM = new ArticleModel();

        $articleM->delete($id);

        return $this->back();

    }

}