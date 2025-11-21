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

}