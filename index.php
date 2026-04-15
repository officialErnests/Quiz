<?php

require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$db = new Database($config["database"]);

require "router.php";