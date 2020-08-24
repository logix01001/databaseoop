<?php

//namespace classfile;



//Mysql
class MysqlCon extends DBconnection{


    // public $dsn;
    // public $username;
    // public $password;
    // public $dbname;
    // public $connection;

    // public function __construct($dsn,$dbname,$username,$password){

    //     $this->dsn = $dsn;
    //     $this->dbname = $dbname;
    //     $this->username = $username;
    //     $this->password = $password;

    // }
 

    public function connect($message = false){

        try{
            $this->connection  = new \PDO("mysql:host={$this->dsn};dbname={$this->dbname};charset=utf8",$this->username,$this->password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
            if($message){
                echo 'Connected';
            }
           
        
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

  
    
}