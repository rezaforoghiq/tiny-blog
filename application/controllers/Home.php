<?php

namespace Application\Controllers;

use \Application\Models\Category;
use \Application\Models\Article;

class Home extends Controller{

    public function index(){

        $articleM = new Article();

        $categoryM = new Category();

        $categories = $categoryM->all();

        $articles = $articleM->all();

        // echo json_encode($articles);

        $this->view("app.index", compact("articles", "categories"));

    }


    public function detail($id){

        $articleM = new Article();

        $article = $articleM->find($id);

        $categoryM = new Category();

        $categories = $categoryM->all();

        $this->view("app.detail", compact("article", "categories"));

    }


    public function category($id){

        $categoryM = new Category();
        
        $articles = $categoryM->articles($id);

        $category = $categoryM->find($id);

        $categories = $categoryM->all();

        $this->view("app.category", compact("articles", "category", "categories"));

    }

}