<?php

function getRoute():string{
    if(isset($_REQUEST['url'])){
        $url = $_REQUEST['url'];
    }else{
        $url = 'home';
    }
 
 
    switch($url){
        case 'login':
            return 'userController';
        case 'logaction':
            return 'userControllerAction';
        case 'home':
            return 'welcomeController';
        case 'perfil':
            return 'perfilController';
        case 'dashboard':
             return 'taskController'; 
        case 'useradd':
            return 'userController'; 
        case 'addtask':
             return 'addtaskController'; 
        case 'editask':
            return 'editTaskController'; 
        case 'posts':
            return 'blogController';
        case 'addpost':
            return 'addBlogController'; 
            case 'postsshow':
                return 'showBlogController'; 
        }  
            
}
?>