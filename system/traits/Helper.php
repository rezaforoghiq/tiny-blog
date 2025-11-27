<?php

namespace System\Traits;

trait Helper{



    protected function dd($value){
        
        echo "<pre>";

        var_dump($value);

        exit();
    }






}