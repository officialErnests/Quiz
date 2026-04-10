<?php

require "validator.php";


if (!isset($_POST["id"]) || trim($_POST["id"]) == "")
{
    redirectIfNotFound();
}
$errors = [];
if (!Validator::number($_POST["id"]))
{
    redirectIfNotFound();
}
$sql_query = "DELETE FROM posts WHERE id = :id";
$params = ["id" => $_POST["id"]];
$post = $db->query($sql_query, $params);
header("LOCATION: ./");
exit();