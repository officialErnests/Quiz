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
        $sql_query = "SELECT COUNT(*) FROM login WHERE username = :username";
        $params = ["username" => $_POST["username"]];
        $query = $db->query($sql_query, $params)->fetchColumn();
        if($query > 0) {
            //todo DO THIS
            $errors["username"] = "Username taken, please choose another one";
        };
        if (empty($errors)) {
            $sql_query = "INSERT INTO login(username, password) VALUES (:username, :password)";
            $params = ["username" => $_POST["username"],
                        "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)];
            $query_2 = $db->query($sql_query, $params);

            if (isset($_SESSION["user_id"])) {
                session_destroy();
            }
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["role"] = "user"; // as you can't create admin accounts, by default they are user
            $_SESSION["user_id"] = $db->lastInsertId();
            header("Location: /");
            exit();
        }
    }
}

$pageTitle = "signup";
$customStyles = ["main/signup.css"];

require "./views/main/signup.view.php";