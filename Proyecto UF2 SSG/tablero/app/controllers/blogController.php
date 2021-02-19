<?php 
include  '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
session_start();

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $db = connectMysql($dsn,$dbuser,$dbpass);
    $data = selectPosts($db,$email);



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Location:/posts/?url=posts');
    }else{echo render('posts',  ['title' =>'Blog', 'data' => $data]);
    }
 }

else{
 
    header('Location:/posts/?url=posts'); 
}