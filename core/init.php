<?php

$base = __DIR__ . '/../';

spl_autoload_register(function($class) use ($base){

    if(file_exists($base ."//classfile/DBclass/" . $class . ".php")){
        require_once $base .  "//classfile/DBclass/" . $class . ".php";
    }

    if(file_exists($base ."//classfile/Model/" . $class . ".php")){
        require_once $base .  "//classfile/Model/" . $class . ".php";
    }
    
});


