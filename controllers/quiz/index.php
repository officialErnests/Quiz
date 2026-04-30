<?php
if (!isset($_SESSION["user_id"]) || ($_SESSION["role"] != "admin" && $_SESSION["role"] != "user")) {

    redirectIfNotAuthorized();
}
$sql_query = "SELECT q.id, q.name, q.description, l.username as creator_username FROM quizes q JOIN login l ON l.id = q.creator_id";
$params = [];
$is_category = false;
if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
    $sql_query .= " WHERE content LIKE :search" . ($is_category) ? : " AND p";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}
$quezes = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);
// \/ None of this since it is loaded trought main/index.php
// $pageTitle = "Quez-creation";
// $customStyles = [];
// $customScripts = [];
require "./views/quiz/index.view.php";