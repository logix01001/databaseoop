<?php

// spl_autoload_register(function($class){
//     require_once "classfile/" . $class . ".php";
// });


require './core/init.php';

$user = new User;

// $data = $user->all();

// print_r($data);

$user->name = 'Jerome';
$user->age = 15;




print_r($user->save());