<?php

require "validator.php";
if (!isset($_GET["id"]) || trim($_GET["id"]) == "" || !Validator::number($_GET["id"]))
{
    redirectIfNotFound();
}

$sql_query = "SELECT q.name, q.description, b.username, COUNT(a.id) as count FROM quizes q
    LEFT JOIN questions a
    ON a.quiz_id = q.id
    LEFT JOIN login b
    ON b.id = q.creator_id
    WHERE q.id = :id";

$params = ["id" => $_GET["id"]];
$post = $db->query($sql_query, $params)->fetch();
$post["id"] = $_GET["id"];

if(!$post)
{
    redirectIfNotFound();
}

require "./views/quiz/show.view.php";