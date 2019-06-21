<?php

namespace Code\DB;

abstract class Entity{
    public function __construct (\PDO $conn){
        $this->conn = $conn;
    }

    public function findAll(){
        $sql = 'SELECT * FROM products';
        $get = $this->conn->query($sql);
        return $get->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id){
        $sql = 'SELECT * FROM products WHERE id = :id' ;
        $pre = $this->conn->prepare($sql);
        $pre->bindValue(':id',$id,\PDO::PARAM_INT);
        $pre->execute();
        return $pre->fetchAll(\PDO::FETCH_ASSOC);
    }
}