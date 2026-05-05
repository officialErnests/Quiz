<?php

$leaderboard_sql_query = "SELECT r.result, r.max_result, l.username FROM results r LEFT JOIN login l ON l.id = r.user_id WHERE r.quiz_id = :quiz_id GROUP BY r.user_id ORDER BY r.result DESC LIMIT 10";
$leaderboard_params = [
    "quiz_id" => $_GET["id"]
];
$leaderboard_post = $db->query($leaderboard_sql_query, $leaderboard_params)->fetchAll();
// dd($leaderboard_post);