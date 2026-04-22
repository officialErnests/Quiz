<?php

$sql_query = "SELECT * FROM quizes";
$params = [];
$is_category = false;
if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
    $sql_query .= " WHERE content LIKE :search" . ($is_category) ? : " AND p";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}
$quezes = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

require "./views/quiz/index.view.php";