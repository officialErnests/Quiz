<?php

class  Database {
    private $pdo;
    public function __construct($config) {
        $dsn = "mysql:host=DivineAngel;dbname=QUEZ;charset=utf8mb4";
        $this->pdo = new PDO($dsn);
    }
    public function query($sql, $params) {

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement;
    }
}