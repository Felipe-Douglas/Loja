<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$route = new Router(URL_BASE);
$route->namespace("App\Controller");

$route->group(null);
$route->get("/", "Web:home");
$route->get("/checkout", "Web:checkout");
$route->get("/products", "Web:products");
$route->get("/store", "Web:store");

$route->dispatch();