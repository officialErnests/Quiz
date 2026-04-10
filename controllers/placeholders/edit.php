<?php

require "validator.php";

if (!isset($_GET["id"]) || trim($_GET["id"]) == "")
{
    redirectIfNotFound();
}


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (!isset($_POST["id"]) || trim($_POST["id"]) == "")
    {
        redirectIfNotFound();
    }
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50))
    {
        $errors["content"] = "Saturam jābūt ievadītam, ne vairāk par 50 rakstām zīmēm un ne mazāk par 1!";
    }
    if (!Validator::number($_POST["category_id"])) 
    {
        $errors["content"] = "Kategorijai jābūt pieejamai!";
    }
    $_GET["content"] = $_POST["content"];
    if (empty($errors)) 
    {
        $sql_query = "UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id";
        $params = ["content" => $_POST["content"],
                    "id" => $_POST["id"], 
                    "category_id" => $_POST["category_id"]];
        $post = $db->query($sql_query, $params);
        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}
$pageTitle = "Izveido ierakstu!";

$sql_query = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql_query, $params)->fetch();
if (!isset($_GET["content"]) || trim($_GET["content"]) == "") 
{
    $_GET["content"] = $post["content"];
}
if(!$post)
{
    redirectIfNotFound();
}

$sql_query = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

// $_POST
require "./views/posts/edit.view.php"; 