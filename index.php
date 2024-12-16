<?php

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $path);
$action = $segments[2];
$controller = $segments[1];
