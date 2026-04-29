<?php

require "validator.php";
if (!isset($_SESSION["user_id"]) || ($_SESSION["role"] != "admin" && $_SESSION["role"] != "user")) {

    redirectIfNotAuthorized();
}
if (!isset($_GET["id"]) || trim($_GET["id"]) == "" || !Validator::number($_GET["id"]))
{
    redirectIfNotFound();
}

$sql_query = "SELECT * FROM questions WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql_query, $params)->fetchAll();
$post["id"] = $_GET["id"];

if(!$post)
{
    redirectIfNotFound();
}

require "./views/quiz/question.view.php";