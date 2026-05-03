<?php

$sql_query = "INSERT INTO results (`quiz_id`, `user_id`, `result`, `max_result`) VALUES (:quiz_id, :user_id, :result, :max_result)";
$params = [
    "quiz_id" => $_GET["id"], 
    "user_id" => $_SESSION["user_id"],
    "result" => $total_result,
    "max_result" => $total_max_result
];
$post = $db->query($sql_query, $params);
