<?php
 
include '../src/render.php';
require '../../db.php';
require '../src/conexion.php';
include '../../config.php';
//  include '../src/redirect.php';
 session_start();

$db = connectMysql($dsn,$dbuser,$dbpass);



if(filter_input(INPUT_POST,'name')!= null){
    
        $data = [
            'email'     => filter_input(INPUT_POST, 'correo'),
            'name'      => filter_input(INPUT_POST, 'name'),
            'surname'   => filter_input(INPUT_POST, 'surname'),
            'pass'      => password_hash(filter_input(INPUT_POST, 'pass'),PASSWORD_BCRYPT,['cost'=>4]),
            'role'      => 2
        ];
       
    if(existUser($db,$data['email'])){
        
        $_SESSION['loginMessage'] = 'Usuario ya existente en nuestra base de datos';
        header('Location:http://tonitodo.test/app/controllers/tablero/?url=dashboard');
    }else{
        
        $_SESSION['loginMessage'] = '<H1 STYLE="COLOR:LIME; ">Usuario registrado con éxito ! PORFAVOR INICIE SESSIÓN ¡</H1>';
        registeruser($db,$data);
        header('Location:http://tonitodo.test/app/controllers/tablero/?url=dashboard');
    
    }
   
}else{
  
    $email = filter_input(INPUT_POST, 'correo');
    $pass = filter_input(INPUT_POST, 'pass');
    
    if(selectUser($db,$email,$pass)){
        header('Location:http://tonitodo.test/app/controllers/tablero/?url=dashboard');
    }else{
        header('Location:http://tonitodo.test/app/controllers/tablero/?url=dashboard');
    }
   
 }

?>