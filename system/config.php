<?php

// Routing system configuration
$baseUrl = "http://localhost/mvc/";

$baseDir = "/mvc/";

$tmp = explode("?", $_SERVER['REQUEST_URI']);

$currentRoute = str_replace($baseDir, "", $tmp[0]);

unset($tmp);



// database properies

$dbHost = "localhost";
$dbName = "mvc";
$dbUsername = "root";
$dbPassword = "";

