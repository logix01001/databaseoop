<?php

class Model extends DB {

    protected $table;
    protected $primaryKey;
    protected $connection = '';
    protected $fields = [];

    public function __construct()
    {
        if($this->connection != ''){

            if(isset($GLOBALS['connections'][$this->connection])){
                parent::__construct( $GLOBALS['connections'][$this->connection] );
            }else{
                echo 'Unknown Connection.. please check your config file.';
            }

        }else{
            parent::__construct(); 
        }

    }

    
    public function __set($name, $value)
    {
        $this->fields[$name] = $value;
    }



    public function __call($name, $arguments)
    {
        switch($name){
            case 'all':
                return $this->query->all();
                break;

            case 'save':
                    return $this->fields;
                    break;
                
        }
    }

    public static function __callStatic($name, $arguments)
    {
        switch($name){
            case 'all' :
                $classname = get_called_class();
                $self = new $classname ;
                return $self->query->all();
                break;    
        }
    }
}