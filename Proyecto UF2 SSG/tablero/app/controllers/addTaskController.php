<?php
session_start();
include '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
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
header('Location:http://tonitodo.test/app/controllers/tablero/?url=dashboard');