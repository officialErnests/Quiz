<?php
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] != "admin") {

    redirectIfNotAuthorized();
}

$pageTitle = "Quez-creation";
$customStyles = [];
$customScripts = [];
