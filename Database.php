<?php

class  Database {
    private $pdo;
    public function __construct($config) {
        $dsn = "mysql:host=".$config["host"].";dbname=".$config["host"].";charset=utf8mb4";
        $this->pdo = new PDO($dsn);
    }
    public function query($sql, $params) {

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement;
    }
}