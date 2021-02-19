<?php
session_start();
include '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
// include '../src/redirect.php';
$url= $_SERVER["REQUEST_URI"];
$findme   = 'id=';
$pos = strpos($url, $findme);
$pos= $pos+3;
$id=$url[$pos].$url[$pos+1];


$db = connectMysql($dsn,$dbuser,$dbpass);

$data= selectPosts_unique($db, $id);

echo render('postsshow',  ['title' =>'show', 'data' => $data]);
    // header('Location:http://tonitodo.test/app/controllers/showBlogController.php/id='.$id.'');