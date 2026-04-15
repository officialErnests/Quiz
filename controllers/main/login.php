<?php
session_start();

require "validator.php";

$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(Validator::string($username, 3, 25)) {
        $error.array_push("Invalid username");
    }
    if(Validator::string($password, 3, 64)) {
        $error.array_push("Invalid password");
    }

    if (empty($error)) {
        $sql_query = "SELECT password, role FROM login WHERE username = :username";
        $params = ["username" => $_POST["username"]];
        $result = $db->query($sql_query, $params);

        if ($result > 0) {
            if (password_verify($password, $result["password"])) {
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $result["role"];
            } else {
                $error.array_push("Wrong password");
            }
        } else {
            $error.array_push("Couldn't find user");
        }
    }
}

$pageTitle = "login";
$customStyles = ["main/style.css"];

require "login.view.php"; 