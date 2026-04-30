<?php

$sql_query = "SELECT posts.*, categories.category_name FROM posts 
    LEFT JOIN categories
    ON posts.category_id = categories.id";
$params = [];
$is_category = false;
if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
    $sql_query .= " WHERE content LIKE :search" . ($is_category) ? : " AND p";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}
// dd($sql_query);
$posts = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

require "./views/posts/index.view.php";