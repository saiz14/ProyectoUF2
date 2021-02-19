<?php

function connectMysql(string $dsn,string $dbuser, string $dbpass){
    try{
   
        $db = new PDO($dsn.';charset=utf8mb4', $dbuser,$dbpass);
        
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    }catch(PDOException $e){
        echo $e->getMessage();
        
    }
    return $db;
}