<?php

class Database {
    public $conn;
    public function __construct($config, $username='root', $password=''){
     
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this -> conn = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params=[]){
        $statement = $this -> conn -> prepare($query);
        $statement -> execute($params);

        return $statement;
    }
}