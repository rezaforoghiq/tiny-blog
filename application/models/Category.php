<?php

namespace Application\Models;

class Category extends Model
{


    public function all()
    {

        $query = "SELECT * FROM `categories`";

        $result = $this->query($query)->fetchAll();

        

        return $result;

    }


    public function articles($cat_id)
    {

        $query = "SELECT * FROM `articles` WHERE cat_id = ?";

        $result = $this->query($query, [$cat_id])->fetchAll();

        return $result;


    }


    public function find($id)
    {

        $query = "SELECT * FROM `categories` WHERE id = ?";

        $result = $this->query($query, [$id])->fetch();

        return $result;


    }


    public function insert($values)
    {

        $query = "INSERT INTO `categories` (`name`, created_at) VALUES (?, NOW())";

        $this->execute($query, array_values($values));

        


    }


    public function update($id, $values)
    {

        $query = "UPDATE `categories` SET `name` = ?, updated_at = NOW() WHERE id = ?";

        $this->execute($query, array_merge(array_values($values), [$id]));
    }


    public function delete($id)
    {

        $query = "DELETE FROM `categories` WHERE id = ?";

        $this->execute($query, [$id]);

        


    }









}