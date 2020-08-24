<?php


$GLOBALS['defaultconnection'] = 'mysql';

$GLOBALS['connections'] =  [
    "mysql" => [
        "driver" => 'mysql',
        "host" => '127.0.0.1',
        "dbname" => 'employee_information',
        "user" => 'root',
        "password" => 'lynadmin'
    ],


    "expenses" => [
        "driver" => 'mysql',
        "host" => '127.0.0.1',
        "dbname" => 'expenses',
        "user" => 'root',
        "password" => 'lynadmin'
    ],

    "iconn" => [
        "driver" => 'mysql',
        "host" => '127.0.0.1',
        "dbname" => 'iconn_system_new',
        "user" => 'root',
        "password" => 'lynadmin'
    ],

    "miis" => [
        "driver" => 'mysql',
        "host" => 'hrdapps55',
        "dbname" => 'miis',
        "user" => 'suadmin',
        "password" => 'suadmin'
    ]
];



