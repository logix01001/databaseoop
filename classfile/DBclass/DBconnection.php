<?php


abstract class DBconnection {
    public $dsn;
    public $username;
    public $password;
    public $dbname;
    public $connection;

    public function __construct($dsn,$dbname,$username,$password){

        $this->dsn = $dsn;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

    }

    abstract public function connect($message = false);

}