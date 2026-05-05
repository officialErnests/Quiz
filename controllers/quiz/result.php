<?php

$pageTitle = "Quez-result";
$customStyles = [];
$customScripts = [];

require "validator.php";
if (!isset($_SESSION["user_id"]) || ($_SESSION["role"] != "admin" && $_SESSION["role"] != "user")) {

    redirectIfNotAuthorized();
}
if (!isset($_GET["id"]) || trim($_GET["id"]) == "" || !Validator::number($_GET["id"]))
{
    redirectIfNotFound();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql_query = "SELECT a.id, a.correct, a.question_id FROM answers a 
                LEFT JOIN questions q
                ON q.id = a.question_id
                WHERE q.quiz_id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql_query, $params)->fetchAll();
    $result = [];
    $max_result = [];
    $total_result = 0;
    $total_max_result = 0;
    foreach ($post as $key => $value) {
        if (isset($result[$value["question_id"]])) {
            if ($value["correct"]) {
                $max_result[$value["question_id"]] += 1;
                if (isset($_POST["a-".strval($value["id"])]) == 1) {
                    $result[$value["question_id"]] += 1;
                }
            } else {
                if (isset($_POST["a-".strval($value["id"])]) == 1) {
                    $result[$value["question_id"]] -= 1;
                }
            }
        } else {
            if ($value["correct"]) {
                $max_result[$value["question_id"]] = 1;
                if (isset($_POST["a-".strval($value["id"])]) == 1) {
                    $result[$value["question_id"]] = 1;
                } else {
                    $result[$value["question_id"]] = 0;
                }
            } else {
                $max_result[$value["question_id"]] = 0;
                if (isset($_POST["a-".strval($value["id"])]) == 1) {
                    $result[$value["question_id"]] = -1;
                } else {
                    $result[$value["question_id"]] = 0;
                }
            }
        }
    }
    foreach ($result as $key => $value) {
        $result[$key] = max($value, 0);
        $total_result += $result[$key];
        $total_max_result += $max_result[$key];
    }
    $sql_query = "INSERT INTO results (`quiz_id`, `user_id`, `result`, `max_result`) VALUES (:quiz_id, :user_id, :result, :max_result)";
    $params = [
        "quiz_id" => $_GET["id"], 
        "user_id" => $_SESSION["user_id"],
        "result" => $total_result,
        "max_result" => $total_max_result
    ];
    $post = $db->query($sql_query, $params);
}

require "./controllers/quiz/leaderboard.php";

require "./views/quiz/result.view.php";