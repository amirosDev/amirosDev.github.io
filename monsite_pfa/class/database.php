<?php
class Database {

    private $pdo;

    public function __construct($login,$password,$host='localhost',$database_name){

       $this->pdo = new PDO("mysql:dbname=$database_name; host=$host",$login,$password);

    }

    public function query($query,$params){

        $req = $this->pdo->prepare($query);
        $req->execute($params);
        return $req;
    }
}