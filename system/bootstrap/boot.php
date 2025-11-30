<?php

    session_start();
    

    require_once("System/config.php");

    require_once("System/Bootstrap/Autoload.php");


    $autoload = new \System\Bootstrap\Autoload();

    $autoload->autoloader();


    $route = new System\Router\Routing();

    $route->run();