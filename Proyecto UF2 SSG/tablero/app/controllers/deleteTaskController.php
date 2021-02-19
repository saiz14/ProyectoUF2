<?php
session_start();
include '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
include '../src/redirect.php';
$url= $_SERVER["REQUEST_URI"];
$findme   = 'id=';
$pos = strpos($url, $findme);
$pos= $pos+3;
$idTask=$url[$pos].$url[$pos+1];


$db = connectMysql($dsn,$dbuser,$dbpass);

deleteTask($db, $idTask);
    header('Location:http://tonitodo.test/app/controllers/tablero/?url=dashboard');
