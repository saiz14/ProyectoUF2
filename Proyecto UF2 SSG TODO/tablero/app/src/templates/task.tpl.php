<?php

include 'headeradmin.tpl.php';
$title = 'task';
?>

<style>
body{
  background: url('/public/a.jpg');
    background-size: cover;
    background-repeat: no-repeat;
   }
   
 .container-banner-principal{
     width:100%;

 }
 form{
display:flex;
flex-direction:column;
padding:2%;

 }

 .button{
    width: 50%;
    /* display: flex; */
    text-align: center;
    margin-top: 4%;
 }
 @header_background_color: #333;
@header_text_color: #FDFDFD;
@alternate_row_background_color: #DDD;

@table_width: 750px;
@table_body_height: 300px;
@column_one_width: 200px;
@column_two_width: 200px;
@column_three_width: 350px;

.fixed_headers {
  width: @table_width;
  table-layout: fixed;
  border-collapse: collapse;
  
  th { text-decoration: underline; }
  th, td {
    padding: 5px;
    text-align: left;
  }
  
  td:nth-child(1), th:nth-child(1) { min-width: @column_one_width; }
  td:nth-child(2), th:nth-child(2) { min-width: @column_two_width; }
  td:nth-child(3), th:nth-child(3) { width: @column_three_width; }

  thead {
    background-color: @header_background_color;
    color: @header_text_color;
    tr {
      display: block;
      position: relative;
    }
  }
  tbody {
    display: block;
    overflow: auto;
    width: 100%;
    height: @table_body_height;
    tr:nth-child(even) {
      background-color: @alternate_row_background_color;
    }
  }
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    color: black!important;
}

.old_ie_wrapper {
  height: @table_body_height;
  width: @table_width;
  overflow-x: hidden;
  overflow-y: auto;
  tbody { height: auto; }
}
table.xdebug-error.xe-notice {
    display: none!important;
}
.xdebug-error{
    display: none!important;
}
font {
  
*{
    color:white!important;
}
 </style>
  

<div class="container contaienr-task d-flex flex-column align-items center">
	<div class="row login_box container-banner-principal">
	    <div class="col-md-12 col-xs-12 mb-5" align="center">
            <h1 class="text-white">Bienvenido a tu tablero</h1>
	    </div><br><br>
        <div class="row  login_control d-flex justify-content-center "  style="    width: 1170px;">
            
          
                <?php
                $table='';                
               
                 foreach($data as $key=>$dato){

                  $table.="<div id='' class='container-form col-3 mr-5 mt-5 p-3' style=' background-color: #009688!important;
                  border-radius: 8px;
                  width: 240px;
                  height: 324px;'> 
                  <img src='/public/clavo.png' style='width: 30%;
                  position: absolute;
                  top: -2%;
                  left: 29%;'>
                  <h1 class='text-center mt-5 text-light pt-2'>TAREA ".$data[$key]['taskeId']."</h2>";
                  
                  $table.=" <h5 class='pl-5 text-white'> Autor: ".$data[$key]['name']."</h5>";        
                  $table.=" <h5 class='pl-5 text-white'> Tarea: ".$data[$key]['itemName']."</h5>";  
                  $table.=" <h5 class='pl-5 text-white'> Descripción: ".$data[$key]['description']."</h5>";  
                  $table.=" <h5 class='pl-5 text-white'> Estado: ".$data[$key]['completed']."</h5>";                     
                  $table.=" <h5 class='pl-5 text-white'> Fecha Inicio: ".$data[$key]['start_date']."</h5>";  
                  $table.=" <h5 class='pl-5 text-white'> Fecha Fin: ".$data[$key]['finish_date']."</h5>"; 
                  $table.=" 
                  <form action='http://tonitodo.test/app/controllers/deleteTaskController.php/id=".$data[$key]['taskeId']."' method='POST' class='pl-5 ml-5'>
                    <input type='hidden' name='idTask' id='idTask' value='$data[$key]['id']'>
                    <input type='submit' value='Borrar' class='button ml-5 ' style='color:black!important'> </form>"; 
                  $table.=" </div>";  
                             
                
                
                 }
                 
                 echo $table;
                 ?>
             </table>        
        </div>  
    </div>
    <br><br>
    <br><br>
   
   <br><br>
    <br><br>
    <div class="row d-flex">
    <div id='addForm' class='container-form col-5 mr-5 mb-5' style="    background-color: #2f4f4f73!important;border-radius: 8px;"> 
           
    <h1 class='text-center mt-5 text-light'>Crear nueva Tarea </h2>
                 <form id="formadd" action="http://tonitodo.test/app/controllers/addTaskController.php" method='POST'>
                        <label for="itemName" class="p-1 text-white">Titulo</label>
                        <input type="text" name='itemName' required><br>
                        <label for="description" class="p-1 text-white">Descripción </label>
                        <textarea type="text" name='description' required> </textarea><br>
                        <label for="start_date" class="p-1 text-white">Fecha  inicio</label>
                        <input type="date" name='start_date' required ><br>
                        <label for="finish_date" class="p-1 text-white">Fecha  fin</label>
                        <input type="date" name='finish_date' required ><br>
                        <input type="submit" value='Save' class="button" style="color:black!important">
                </form>
    </div>
  
    <div id='editForm' class='container-form editForm col-6 ml-5 mb-5  ' style="background-color: #2f4f4f73!important;border-radius: 8px;">
             
             
                 <form id="formaedit" action="http://tonitodo.test/app/controllers/editTaskController.php" method='POST' >
                 <h1 class='text-center mt-5 text-white '>Modificar Tarea </h2>
                        <label for="itemName" class="p-1 text-white">Indica el id de la tarea a actualizar</label>
                        <input type="text" id='editIdItem' name='idItem'><br>
                        <label for="itemName" class="p-1 text-white">Nombre de la Tarea</label>
                        <input type="text" id='editIdItem' name='mail'><br>
                        <label for="itemName" class="p-1 text-white">Introduce tu mail de administrador</label>
                        <input type="text" name='editItemName' id='editItemName' required><br>
                        <label for="description" class="p-1 text-white">Descripción de la tarea</label>
                        <textarea type="text" name='editDescription' id='editDescription' required> </textarea><br>
                        <label for="start_date" class="p-1 text-white">Fecha de inicio</label>
                        <input type="date" name='editStart_date' id='editStart_date' required ><br>
                        <label for="finish_date" class="p-1 text-white">Fecha de fin</label>
                        <input type="date" name='editFinish_date' id='editFinish_date' required ><br>
                        <input type="submit" value='Guardar Cambios' style="color:black!important;margin-top:2%; width:30%">
                </form>    
    </div></div>
</div>
</div>
<script>
$("#formadd").submit(function() {
  document.location.href = 'http://tonitodo.test/app/controllers/addtask/?url=addtask';
  // do something
});
$("#formaedit").submit(function() {
  document.location.href = 'http://tonitodo.test/app/controllers/editask/?url=editask';
  // do something
});
</script>
 




