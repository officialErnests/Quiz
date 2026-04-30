<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require "routers.php";
if (array_key_exists($uri, $routes)) 
{
    require $routes[$uri];
} else 
{
    http_response_code(404);
    echo '<p>404, page not found</p>';
    die();
}