<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Pao\controller\Main;
use Pao\controller\Router;


$main = new Main();
$router = new Router();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $router->response();
} else {
    echo $main->renderView();
}
