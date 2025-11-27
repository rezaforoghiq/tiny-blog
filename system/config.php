<?php

// Routing system configuration
$baseUrl = "https://rezaforoghi.ir/";

$baseDir = "/";

$tmp = explode("?", $_SERVER['REQUEST_URI']);

$currentRoute = str_replace($baseDir, "", $tmp[0]);

unset($tmp);



// database properies

$dbHost = "localhost";
$dbName = "rezafor1_blog";
$dbUsername = "rezafor1_aghareza";
$dbPassword = "@Reza1387/";

