<?php
require APP .'/app/src/render.php';
if(isset($_SESSION['name'])){
   
     header('location:tablero/?url=dashboard');
}else{
    $uname = $_SESSION['uname'] ?? '';
    echo render('home', ['title' => 'home'. $uname]);
}
?>
