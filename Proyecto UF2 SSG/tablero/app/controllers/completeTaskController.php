<?php

session_start();
include APP .'app/src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
include '../src/render.php';
include '../src/redirect.php';

$db = connectMysql($dsn,$dbuser,$dbpass);

$itemName = filter_input(INPUT_POST,'itemName');
$description = filter_input(INPUT_POST,'description');
$start_date = filter_input(INPUT_POST,'start_date');
$finish_date = filter_input(INPUT_POST,'finish_date');

$data= [
    'email'       => $_SESSION['email'],
    'itemName'    => $itemName,
    'description' => $description,
    'start_date'  => $start_date,
    'finish_date' => $finish_date
];
insertTask($db,$data);
header('Location:/tablero/?url=dashboard');