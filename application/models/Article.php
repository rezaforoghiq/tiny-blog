<?php

namespace Application\Models;

class Article extends Model
{


    public function all()
    {

        $query = "SELECT *, (SELECT `name` FROM `categories` WHERE `categories`.`id` = `articles`.`cat_id`) AS cat_name FROM articles";

        $result = $this->query($query)->fetchAll();

        $this->closeConnection();

        return $result;

    }


    public function find($id)
    {

        $query = "SELECT *, (SELECT `name` FROM `categories` WHERE `categories`.`id` = `articles`.`cat_id`) AS cat_name FROM articles WHERE articles.id = ?";

        // $query = "SELECT articles.*, categories.name AS cat_name FROM articles LEFT JOIN categories ON articles.cat_id = categories.id WHERE id = ?";

        $result = $this->query($query, [$id])->fetch();

        $this->closeConnection();

        return $result;


    }


    public function insert($values)
    {

        $query = "INSERT INTO `articles` (`title`, `cat_id`, `body`, `created_at`) VALUES (?, ?, ?, NOW())";

        $this->execute($query, array_values($values));

        $this->closeConnection();

    }


    public function update($id, $values)
    {

        $query = "UPDATE articles SET title = ?, cat_id = ?, body = ?, updated_at = NOW() WHERE id = ?";

        $this->execute($query, array_merge(array_values($values), [$id]));

        $this->closeConnection();

    }


    public function delete($id)
    {


        $query = "DELETE FROM `articles` WHERE id = ?";

        $this->execute($query, [$id]);

        $this->closeConnection();

    }









}