<?php

namespace Application\Models;

use Directory;
use Exception;
use PDO;
use PDOException;

class Model{


    protected $connection;

    
    // در اینجا سعی میکنیم که به دیتابیس با استفاده از متغیر هایی که در فایل کانفیگ پروژه تعریف کردیم وصل شویم و این عمل در تابع کانستراکت انجام میشود که بلافاصله هنگام ساختن شی  عملیات اتصال انجام میشود
    public function __construct(){

        if(!isset($connection)){

        global $dbHost, $dbName, $dbUsername, $dbPassword;

        $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );

        try{
            
            $this->connection = new PDO("mysql:host=". $dbHost . ";dbname=" . $dbName, $dbUsername, $dbPassword, $option);

        }
        catch(PDOException $e){

            echo "Your error: " . $e->getMessage();

        }

        }

    }

    public function __destruct(){
        $this->closeConnection();
    }


    // در اینجا متدی را تعریف کردیم که فقط در کلاس هایی که از کلاس مدل ارث بری میکنند در دسترس است و برای ما پاسخی رو برمیگردونه
    protected function query($query, $values = null){

        try{
        if($values == null){

            return $this->connection->query($query);

        }
        else{

            $stmt = $this->connection->prepare($query);
            $stmt->execute($values);
            return $stmt;

        }

    }
    catch(PDOException $e){

        echo "Your error in query is: ". $e->getMessage();

    }

        
        


    }



    //تفاوت این متد با متد کوئری این است که فقط عملیات رو انجام میده و مثل سلکت چیزی رو برای ما برنمیگردونه
    protected function execute($query, $values = null){

        try{

            if($values == null){

                $this->connection->exec($query);

            }
            else{

                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);

            }

            return true;

        }
        catch(PDOException $e){

            echo "Your error in query is: ". $e->getMessage();
            return false;
        }

    }


    protected function closeConnection() {
        
        $this->connection = null;

    }

}