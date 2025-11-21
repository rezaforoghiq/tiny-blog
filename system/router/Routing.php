<?php

namespace System\Router;

use ReflectionMethod;

class Routing
{
    private $currentRoute;

    public function __construct(){

        global $currentRoute;

        $this->currentRoute = explode("/", $currentRoute);

    }


    public function run(){

        $path = realpath(dirname(__FILE__) . "/../../application/controllers/". $this->currentRoute[0] . ".php");

        if(!file_exists($path)){

            echo "404 - file not found";
            exit();

        }

        if(sizeof($this->currentRoute) == 2 && $this->currentRoute[1] == ""){

            $method = "index";

        }elseif(sizeof($this->currentRoute) == 1){

            $method = "index";

        }elseif(sizeof($this->currentRoute) > 1 && $this->currentRoute[1] != ""){

            $method = $this->currentRoute[1];

        }

        
        $class = "Application\Controllers\\" . $this->currentRoute[0];

        $object = new $class();

        if(method_exists($object, $method)){

            $reflection = new ReflectionMethod($class, $method);

            $paramCount = $reflection->getNumberOfRequiredParameters();

            if($paramCount <= array_slice($this->currentRoute, 2)){

                call_user_func_array(array($object, $method), array_slice($this->currentRoute, 2));

            }else{
                echo "404 - method not exist or not have enough parameters";
                exit();
            }

        }else{
            echo "404 - method not exist";
            exit();
        }


        
        

    }
    



    
}