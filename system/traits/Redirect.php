<?php

    namespace System\Traits;

    trait Redirect
    {
        
        protected function redirect($url){

            $protocol = stripos($_SERVER['SERVER_PROTOCOL'], "https") === true ? "https://" : "http://";

            header("Location: ". $protocol . $_SERVER['HTTP_HOST'] . "/mvc/" . $url);

        }

        protected function back(){

            $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

            if($httpReferer != null){

                header("Location: ". $httpReferer);

            }else{

                echo "404 - route not found";

            }

        }

    }
    