<?php

require "validator.php";
if (!isset($_GET["id"]) || trim($_GET["id"]) == "" || !Validator::number($_GET["id"]))
{
    redirectIfNotFound();
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     require "./controllers/comments/create.php";
//     if (isset($_POST["comment_edit_submit"])) {
//         require "./controllers/comments/edit.php";
//     }
// }

$sql_query = "SELECT posts.*, categories.category_name FROM posts 
    LEFT JOIN categories
    ON posts.category_id = categories.id 
    WHERE posts.id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql_query, $params)->fetch();

if(!$post)
{
    redirectIfNotFound();
}
require "views/posts/show.view.php";

require "./views/quiz/show.view.php";