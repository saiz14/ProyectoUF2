<?php
include  '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
session_start();
$db = connectMysql($dsn,$dbuser,$dbpass);



$rows[]=selectUserData($db,$_SESSION['email']);;
$datos=[];
existUser($db,$_SESSION['email'], $datos);

header('Location:http://tonitodo.test/app/controllers/tablero/?url=dashboard');
