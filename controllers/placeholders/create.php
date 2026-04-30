<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50))
    {
        $errors["content"] = "Saturam jābūt ievadītam, ne vairāk par 50 rakstām zīmēm un ne mazāk par 1!";
    }
    if (!Validator::number($_POST["category_id"])) 
    {
        $errors["content"] = "Kategorijai jābūt pieejamai!";
    }
    if (empty($errors)) 
    {
        $sql_query = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = ["content" => $_POST["content"], "category_id" => $_POST["category_id"]];
        $post = $db->query($sql_query, $params);
        header("Location: /");
        exit();
    }
}
$pageTitle = "Izveido ierakstu!";

$sql_query = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

require "./views/posts/create.view.php"; 