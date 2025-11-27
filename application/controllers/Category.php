<?php

namespace Application\Controllers;

use Application\Models\Category as CategoryModel;


class Category extends Controller{

    public function index(){

        $categoryM = new CategoryModel();

        $categories = $categoryM->all();

        return $this->view("panel.category.index", compact("categories"));

    }


    
    public function create() {

        return $this->view("panel.category.create");
        
    }


    public function store(){

        $categoryM = new CategoryModel();

        $categoryM->insert($_POST);

        return $this->redirect("category");

    }


    public function edit($id){

        $categoryM = new CategoryModel();

        $category = $categoryM->find($id);

        return $this->view("panel.category.edit", compact("category"));

    }

    public function update($id){

        $categoryM = new CategoryModel();

        $categoryM->update($id, $_POST);

        return $this->redirect("category");

    }


    public function delete($id){

        $categoryM = new CategoryModel();

        $categoryM->delete($id);

        return $this->back();

    }







}