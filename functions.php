<?php

function dd($value) 
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function redirectIfBadRequest($location = "/") 
{
    http_response_code(400);
    header("Location: $location", 302);
    die();
}


function redirectIfNotAuthorized($location = "/") 
{
    http_response_code(403);
    header("Location: $location", 302);
    die();
}
function redirectIfNotFound($location = "/") 
{
    http_response_code(404);
    header("Location: $location", 302);
    die();
}
function NB_thisDir() {
    return $_SERVER['PHP_SELF'];
}