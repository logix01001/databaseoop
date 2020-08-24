<?php


class MysqlQuery implements iModel {

    public $_tablename;
    public $_select;
    public $_where;
    public $_fields = [];
    public $_driver;


    public function setDriver($driver){
        $this->_driver = $driver;
    }

    public function __construct($table){
        $this->_tablename = $table;

    }


    public function __set($name, $value)
    {
        $this->_fields[$name] = $value;
    }

    public function __get($name)
    {
       return $this->_fields[$name];
    }

    public function select($array = []){



        return $this;
    }

    public function insert($data = []){




    }
    public function update($data = []){



    }

    public function where($field,$operator,$value = ''){




        return $this;
    }

    public function join($tablename,$foreignkey,$localkey){

        


        return $this;
    }

    public function get(){

    }

    public function all(){
       
        
        try{
        
            $stmt = $this->_driver->query("SELECT * from {$this->_tablename}");
           
            $data = $stmt->fetchAll();
           
            return $data;
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }

    public function find($id){

    }

    public function result(){
        return 'sadasdasdasdas';
    }


}