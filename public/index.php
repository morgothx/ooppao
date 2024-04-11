<?php

require_once ("../controller/Main.php");
require_once '../controller/Router.php';

$main = new Main();
$router = new Router();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $router->response();
} else {
    echo $main->renderView();
}
