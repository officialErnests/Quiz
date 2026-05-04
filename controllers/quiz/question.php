<?php

require "validator.php";
if (!isset($_SESSION["user_id"]) || ($_SESSION["role"] != "admin" && $_SESSION["role"] != "user")) {

    redirectIfNotAuthorized();
}
if (!isset($_GET["id"]) || trim($_GET["id"]) == "" || !Validator::number($_GET["id"]))
{
    redirectIfNotFound();
}
if (parse_url($_SERVER['HTTP_REFERER'])["path"] != "/quiz/show") {
    redirectIfBadRequest("/quiz/show?id=".$_GET["id"]);
}
$sql_query = "SELECT q.index, q.question, a.answer, a.id as answer_id, a.question_id as q_id FROM questions q
            LEFT JOIN answers a
            ON a.question_id = q.id
            WHERE q.quiz_id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql_query, $params)->fetchAll();
$post["id"] = $_GET["id"];

$sql_query = "SELECT COUNT(a.answer) AS count, a.question_id as q_id FROM questions q
            LEFT JOIN answers a
            ON a.question_id = q.id
            WHERE q.quiz_id = :id AND
            a.correct = 1
            GROUP BY a.question_id";
$params = ["id" => $_GET["id"]];
$post2 = $db->query($sql_query, $params)->fetchAll();

if(!$post || !$post2)
{
    redirectIfNotFound();
}

$pageTitle = "Quez-tions";
$customStyles = [];
$customScripts = ["quiz/question.js"];

require "./views/quiz/question.view.php";