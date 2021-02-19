<?php

include 'headeradmin.tpl.php';
$title = 'posts';
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
table.xdebug-error.xe-notice {
    display: none!important;
}
.xdebug-error{
    display: none!important;
}

.old_ie_wrapper {
  height: @table_body_height;
  width: @table_width;
  overflow-x: hidden;
  overflow-y: auto;
  tbody { height: auto; }
}
*{
    color:white!important;
}
 </style>
  

<div class="container contaienr-task d-flex flex-column align-items center">
	<div class="row login_box container-banner-principal">
	    <div class="col-md-12 col-xs-12 mb-5" align="center">
            <h1></h1>
	    </div><br><br>
        <div class="row  login_control d-flex justify-content-center "  style=" width: 1170px;">
            
          
                <?php
                $table='';                
               
                 foreach($data as $key=>$dato){

                  $table.="<div id='' class='container-form col-12 mr-5 mt-5 p-3' style=' background-color: #5f9b96c7!important;
                  border-radius: 8px;
                  width: 1400px;
                   height: 800px;

                  '> 
                  <h1 class='text-center mt-5 text-light pt-2'>".$data[$key]['titulo']."</h2>";
                  
                  $table.=" <h5 class='pl-5'> Autor: ".$data[$key]['email']."</h5>";        
                  $table.=" <h5 class='pl-5'> ID: ".$data[$key]['id']."</h5>";  
                  $table.=" <h4 class='pl-5'>  ".$data[$key]['descripcion']."</h4>";     
                  $table.=" <img  style='width: 329px;' class='p-5' src='".$data[$key]['enlace']."'></img><br><br>";                 
                  $table.=" <h5 class='pl-5'> Saber más: <a href='".$data[$key]['enlace']."'>".$data[$key]['enlace']."</a></h5>";  
                   
                  $table.=" <a href='http://tonitodo.test/app/controllers/blogController.php' class='text-white p-5'><b>Volver Atras</b></a> </div></div>";  

                 }
                 
                 print_r($table);
                 ?>
            

             </table>        
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
 




