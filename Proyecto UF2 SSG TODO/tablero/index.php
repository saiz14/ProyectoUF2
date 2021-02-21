<?php

ini_set('display_errors', 'ON');
include 'start.php';
include 'db.php';

session_start();
define('APP',__DIR__);
require APP . '/app/src/route.php';

$controller = getRoute();
require APP.'/app/controllers/' . $controller . '.php';