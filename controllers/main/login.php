<?php
session_start();

require "login.view.php";
require "Database.php";
require "validator.php";

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $role     = $_POST['role'] ?? '';

    $allowedRoles = ['admin', 'user'];

    if (
        !Validator::string($username, 3, 25) ||
        !Validator::string($password, 3, 64) ||
        !Validator::auth($role, $allowedRoles)
    ) {
        $error = "Invalid data";
    } else {
        $stmt = $pdo->prepare('SELECT * FROM login WHERE username = ? LIMIT 1');
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            if ($role !== $user['role']) {
                $error = "Role does not match!!!!";
            } else {

                $_SESSION['user_id']  = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role']     = $user['role'];

                if ($user['role'] === 'admin') {
                    header('Location:');
                } else {
                    header('Location: ');
                }
                exit;
            }

        } else {
            $error = "Wrong username or password!";
        }
    }
}