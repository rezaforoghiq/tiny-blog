<?php

namespace System\Traits;

trait View{

    protected function view($dir, $var = null){

        $dir = str_replace(".", "/", $dir);

        if($var)
            extract($var);

        $path = realpath(dirname(__FILE__) . "/../../application/views/" . $dir . ".php");

        if(file_exists($path)){

            return require_once($path);

        }else{

            echo "404 - this view [". $dir . "] not found";

        }

    }




    protected function asset($dir){

        global $baseUrl;

        $path = $baseUrl. "public/" . $dir;

        echo $path;

    }


    protected function include($dir, $vars = null){

        $dir = str_replace(".", "/", $dir);

        if($vars != null){

            extract($vars);

        }

        $path = realpath(dirname(__FILE__) . "/../../application/views/" . $dir . ".php");

        if(file_exists($path)){

            return require_once($path);

        }else{

            echo "404 - file not exist!";

        }

    }


    protected function url($url){

        if($url[0] == "/"){

            $url = substr($url, 1, strlen($url) - 1);

        }

        global $baseUrl;

        echo $baseUrl . $url;


    }

}