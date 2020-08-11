<?php
use CoffeeCode\Router\Router;

require __DIR__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

$router = new Router(ROOT);
$router->namespace("Source\Controllers");

$router->get("/", "WebController:index");

$router->dispatch();