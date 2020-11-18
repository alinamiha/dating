<?php
include_once 'libphp/Router.php';
session_start();

$router = new Router($_REQUEST);

die(json_encode($router->Init()));


