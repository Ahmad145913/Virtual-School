<?php
session_start();

require_once 'core/navigation/router.php';
$uri =  trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$request_method = $_SERVER['REQUEST_METHOD'];

require Router::load('core/navigation/routes.php')->direct($uri, $request_method);