<?php

class  Database {
    private $pdo;
    public function __construct($config) {
        // $dsn = "mysql:host=".$config["host"].";dbname=".$config["dbname"].";charset=utf8mb4";
        // $this->pdo = new PDO($dsn, $config["user"]);
        $this->pdo = new PDO("mysql:host=DivineAngel;dbname=QUEZ;charset=utf8mb4", "root", "coolPwd");
    }
    public function query($sql, $params) {

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

        return $statement;
    }
}