<?php
session_start();

require "Database.php";
require "validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $message = "Username and password are required.";
    } else {
        $stmt = $conn->prepare("SELECT password FROM login WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($db_password);
            $stmt->fetch();

            if (password_verify($password, $db_password)) {
                $_SESSION['username'] = $username;
                header("Location:");
                exit();
            } else {
                $message = "Incorrect password.";
            }
        } else {
            $message = "Username not found.";
        }

        $stmt->close();
        $conn->close();
    }
}

require "login.view.php"; 