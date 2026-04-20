<?php 

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
        $sql_query = "INSERT INTO login(username, password) VALUES (:username, :password)";
        $params = ["username" => $_POST["username"],
                    "password" => $_POST["password"]];
        $query = $db->query($sql_query, $params);
        header("Location: /");
        exit();
    }
}

$pageTitle = "signup";
$customStyles = ["main/signup.css"];

require "./views/main/signup.view.php";