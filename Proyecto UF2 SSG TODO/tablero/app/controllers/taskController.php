<?php 
include APP .'/app/src/render.php';
include APP .'/config.php';

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $db = connectMysql($dsn,$dbuser,$dbpass);
    $data = selectWithoutJoin($db, 'tasks', 'task_items','*',$email);
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Location:/addtask/?url=addtask');
    }else{echo render('task',  ['title' =>'Tablero', 'data' => $data]);
    }
 }

else{
    echo "<h1>PORFAVOR INICIA SESSIÓN</h1>";
    header('Location:http://tonitodo.test/');
    //header('Location:/tablero/?url=home'); 
}
