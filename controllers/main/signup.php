<?php 

$errors = [];

require "validator.php";

$errors["username"] = "aaa";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!Validator::string($_POST["username"], min: 3, max: 25)) {

    }
    if (!Validator::string($_POST["password"], min: 4, max: 64)) {

    }
    if (!Validator::string($_POST["password_2"], min: 4, max: 64)) {

    }
}

$pageTitle = "signup";
$customStyles = ["main/signup.css"];

require "./views/main/signup.view.php";