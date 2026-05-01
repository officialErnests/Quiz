<?php

require "validator.php";
if (!isset($_SESSION["user_id"]) || ($_SESSION["role"] != "admin" && $_SESSION["role"] != "user")) {

    redirectIfNotAuthorized();
}
if (!isset($_GET["id"]) || trim($_GET["id"]) == "" || !Validator::number($_GET["id"]))
{
    redirectIfNotFound();
}

$sql_query = "SELECT q.index, q.question, a.answer, a.id as answer_id FROM questions q
            LEFT JOIN answers a
            ON a.question_id = q.id
            WHERE q.quiz_id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql_query, $params)->fetchAll();
$post["id"] = $_GET["id"];

$sql_query = "SELECT q.index, q.question, a.answer, a.id as answer_id FROM questions q
            LEFT JOIN answers a
            ON a.question_id = q.id
            WHERE q.quiz_id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql_query, $params)->fetchAll();
$post["id"] = $_GET["id"];

if(!$post)
{
    redirectIfNotFound();
}

$pageTitle = "Quez-tions";
$customStyles = [];
$customScripts = ["quiz/question.js"];

require "./views/quiz/question.view.php";