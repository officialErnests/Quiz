<?php


require "validator.php";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!Validator::string($username, 3, 25)) {
        $errors["username"] = "Invalid username, it should be from 3 till 25";
    }
    if(!Validator::string($password, 4, 64)) {
        $errors["password"] = "Invalid password, it should be from 4 till 64";
    }
    if (empty($errors)) {
        $sql_query = "SELECT * FROM login WHERE username = :username";
        $params = ["username" => $_POST["username"]];
        $result = $db->query($sql_query, $params)->fetchAll();

        if (count($result) > 0) {
            $result = $result[0];
            if (password_verify($password, $result["password"])) {
                if (isset($_SESSION["user_id"])) {
                    session_destroy();
                }
                $_SESSION["username"] = $result["username"];
                $_SESSION["role"] = $result["role"]; 
                $_SESSION["user_id"] = $result["id"];
                header("Location: /");
                exit();
            } else {
                 $errors["password"] = "Wrong password, try again";
            }
        } else {
            $errors["username"] = "No username found";
        }
    }
}

$pageTitle = "login";
$customStyles = ["main/login.css"];

require "./views/main/login.view.php"; 