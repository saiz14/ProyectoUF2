<?php
session_start();
include '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
// include '../src/redirect.php';

$db = connectMysql($dsn,$dbuser,$dbpass);

$email = filter_input(INPUT_POST,'email');
$titulo = filter_input(INPUT_POST,'titulo');
$descripcion = filter_input(INPUT_POST,'descripcion');
$enlace = filter_input(INPUT_POST,'enlace');

$data= [
    'email'       => $_SESSION['email'],
    'titulo'    => $titulo,
    'descripcion' => $descripcion,
    'enlace'  => $enlace
];
createPosts($db,$data);
header('Location:http://tonitodo.test/app/controllers/blogController.php');