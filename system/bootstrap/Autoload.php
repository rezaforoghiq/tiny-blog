<?php

namespace System\Bootstrap;

class Autoload{

    public function autoloader(){

        global $baseDir;


        spl_autoload_register(function($className) use ($baseDir){


            $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

            require_once($_SERVER['DOCUMENT_ROOT'] . $baseDir . $className . ".php");


        });


    }


}