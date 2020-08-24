<?php

interface iModel {

    public function select($array = []);
    public function insert($data = []);
    public function update($data = []);
    public function where($field,$operator,$value = '');
    public function join($tablename,$foreignkey,$localkey);
    public function get();
    public function all();
    public function find($id);
    public function setDriver(DBconnection $driver);
}