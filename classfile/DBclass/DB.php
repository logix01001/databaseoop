<?php

//namespace classfile;



class DB {

    protected $query;
    protected $drivers_available;

    use Config;


    public function __construct($connection = null)
    {
        $this->drivers_available = PDO::getAvailableDrivers();
        $this->drivercon($connection);
       
    }

    public function modelingQuery(iModel $query)
    {
        $this->query = $query;
        $this->query->setDriver($this->driver->connection);
        $this->query->_tablename = $this->table;
    }



    
}