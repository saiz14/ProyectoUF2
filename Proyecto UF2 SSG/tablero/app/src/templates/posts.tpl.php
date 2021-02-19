<?php

include 'headeradmin.tpl.php';
$title = 'task';
?>

<style>
body{
  background: url('/public/r.jpg');
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
*{
    color:white!important;
}
 </style>
  

<div class="container contaienr-task d-flex flex-column align-items center">
	<div class="row login_box container-banner-principal">
	    <div class="col-md-12 col-xs-12 mb-5" align="center">
            <h1>Bienvenido al Blog</h1>
	    </div><br><br>
        <div class="row  login_control d-flex justify-content-center "  style=" width: 1170px;">
            
          
                <?php
                $table='';                
               
                 foreach($data as $key=>$dato){

                  $table.="<div id='' class='container-form col-12 mr-5 mt-5 p-3' style=' background-color: #5f9b96c7!important;
                  border-radius: 8px;
                  width: 400px;
                  '> 
                  <h1 class='text-center mt-5 text-light pt-2'>".$data[$key]['titulo']."</h2>";
                  
                  $table.=" <h5 class='pl-5'> Autor: ".$data[$key]['email']."</h5>";        
                  $table.=" <h5 class='pl-5'> ID: ".$data[$key]['id']."</h5>";  
                  $table.=" <h5 class='pl-5'> Título: ".$data[$key]['titulo']."</h5>";  
                  $table.=" <h5 class='pl-5'> Descripción: ".$data[$key]['descripcion']."</h5>";                     
                  $table.=" <h5 class='pl-5'> Saber más: <a href='".$data[$key]['enlace']."'>".$data[$key]['enlace']."</a></h5>";  
                  
                  $table.="<div class='row'><form action='http://tonitodo.test/app/controllers/deleteBlogController.php/id=".$data[$key]['id']."' method='POST' class=' m-0 pl-5 ml-5' style='width:40%'>
                    <input type='hidden' name='id' id='id' value='$data[$key]['id']'>
                    <input type='submit' value='Borrar' class='button ml-5 ' style='color:black!important;width:20%'> </form>";
                    $table.="<a href='http://tonitodo.test/app/controllers/showBlogController.php/id=".$data[$key]['id']."'>Ver post</a>
                     ";
                  $table.=" </div></div>";  
                             
                
                
                 }
                 
                 print_r($table);
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
           
    <h1 class='text-center mt-5 text-light'>Crear nueva Entrada </h2>
                 <form id="formadd" action="http://tonitodo.test/app/controllers/addBlogController.php" method='POST'>
                        <label for="itemName" class="p-1">Email</label>
                        <input type="text" name='email' required><br>
                        <label for="description" class="p-1">Titulo </label>
                        <input type="text" name='titulo' required> </input><br>
                        <label for="start_date" class="p-1">Descripcion</label>
                        <textarea type="text" name='descripcion' required ></textarea><br>
                        <label for="finish_date" class="p-1">Enlace</label>
                        <input type="text" name='enlace' required ><br>
                        <input type="submit" value='Save' class="button" style="color:black!important">
                </form>
    </div>
  
    <div id='editForm' class='container-form editForm col-6 ml-5 mb-5  ' style="background-color: #2f4f4f73!important;border-radius: 8px;">
             
             
                 <form id="formaedit" action="http://tonitodo.test/app/controllers/editTaskController.php" method='POST' >
                 <h1 class='text-center mt-5 '>Modificar Entrada creada </h2>
                        <label for="itemName" class="p-1">Indica el id de la tarea a actualizar</label>
                        <input type="text" id='editIdItem' name='idItem'><br>
                        <label for="itemName" class="p-1">Nombre de la Tarea</label>
                        <input type="text" id='editIdItem' name='mail'><br>
                        <label for="itemName" class="p-1">Introduce tu mail de administrador</label>
                        <input type="text" name='editItemName' id='editItemName' required><br>
                        <label for="description" class="p-1">Descripción de la tarea</label>
                        <textarea type="text" name='editDescription' id='editDescription' required> </textarea><br>
                        <label for="start_date" class="p-1">Fecha de inicio</label>
                        <input type="date" name='editStart_date' id='editStart_date' required ><br>
                        <label for="finish_date" class="p-1">Fecha de fin</label>
                        <input type="date" name='editFinish_date' id='editFinish_date' required ><br>
                        <input type="submit" value='Guardar Cambios' style="color:black!important;margin-top:2%; width:30%">
                </form>    
    </div>
    </div>
</div>
</div>
<script>
$("#formadd").submit(function() {
  document.location.href = 'http://tonitodo.test/app/controllers/addpost/?url=addpost';
  // do something
});
$("#formaedit").submit(function() {
  document.location.href = 'http://tonitodo.test/app/controllers/editask/?url=editask';
  // do something
});
</script>
 




