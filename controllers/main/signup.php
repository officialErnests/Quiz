<?php 

if (isset($_SESSION["user_id"])) {
    dd($_SESSION["user_id"]);
}

$errors = [];

require "validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!Validator::string($_POST["username"], min: 3, max: 25)) {
        $errors["username"] = "username not in range of 3 - 25 charecters";
    }
    if ($_POST["password"] != $_POST["password_2"]) {
        $errors["password"] = "password doesn't match";
    }
    if (!Validator::string($_POST["password_2"], min: 4, max: 64)) {
        $errors["password"] = "password not in range of 4 - 25 characters";
    }
    if (!Validator::string($_POST["password"], min: 4, max: 64)) {
        $errors["password"] = "password not in range of 4 - 25 characters";
    }
    if (empty($errors)) {
        $sql_query = "SELECT * FROM login WHERE username = :username";
        $params = ["username" => $_POST["username"]];
        $query = $db->query($sql_query, $params)->fetch();
        if(empty($query)) {
            //todo DO THIS
            $errors["username"] = "Username taken, please choose another one";
        };
        if (empty($errors)) {
            $sql_query = "INSERT INTO login(username, password) VALUES (:username, :password)";
            $params = ["username" => $_POST["username"],
                        "password" => $_POST["password"]];
            $query_2 = $db->query($sql_query, $params);
            dd($query_2);
            header("Location: /");
            exit();
        }
    }
}

$pageTitle = "signup";
$customStyles = ["main/signup.css"];

require "./views/main/signup.view.php";