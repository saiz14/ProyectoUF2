<?php
    include 'header.tpl.php';
?>
<div class="container">
	<div class="row login_box" style="margin-left: 22%;">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="line"></div>
            <h1>¿Eres nuevo?</h1>
            <?php if(isset($_SESSION['loginMessage'])){ echo "<p>". $_SESSION['loginMessage']."</p>";}?>
	    </div>
        <div class="col-12 follow line" align="center">
            <h3>
                 <span >Registrate</span>
            </h3>
        </div>
        
            <div class="col-md-12 col-xs-12 login_control">
                <!-- Formulario que en caso de no estar registrado el usuario y querer registrarse para anotar tareas, nos permite
                     mediante el uso de la señal POST enviar al controlador userController los datos del nuevo usuario para registrarlo
                     en nuestra base de datos -->
                <form id='form' action="app/controllers/userController.php" method='POST'>
                    <div class="control">
                        <div class="label">Email Address</div>
                        <input type="hidden" name='type' id='type' value='login'>
                        <input type="text" id='correo' class="form-control" name='correo' placeholder="sergio@gmail.com" required/>
                    </div>
                    
                    <div class="control">
                        <div class="label">Password</div>
                        <input type="password" id='pass' name='pass' class="form-control" placeholder="Contraseña" required/>
                    </div>    
                    <div class="control ">
                        <div class="label">Password2</div>
                        <input type="password" id='password_val' name='password_val' class="form-control" placeholder="Repetir Contraseña" required/>
                    </div> 
                    <div class="control ">
                        <div class="label">Nombre</div>
                        <input type="text" id='name' name='name' class="form-control" placeholder="Nombre" required/>
                    </div>    
                    <div class="control ">
                        <div class="label">Apellidos</div>
                        <input type="text" id='surname' name='surname' class="form-control" placeholder="Apellidos" required/>
                    </div>  
                    <div class="control text-center ">
                        <input class='btn btn-secondary' id='button_send' type="submit" value="Enviar" class='w-50'> 
                    </div>
            </form>         
         </div>  
    </div>
</div>
<div class="container">
	<div class="row login_box" style="margin-left: -23%;">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="line"></div>
            <h1>Bienvenido !</h1>
            <!-- Con la variable superglobal $_SESSION verificamos si el usuario está autentificado para mostrarle el mensaje de login -->
            <?php if(isset($_SESSION['loginMessage'])){echo "<p>". $_SESSION['loginMessage']."</p>";}?>
	    </div>
        <div class="col-12 follow line" align="center">
            <h3>
               <span >Inicia sessión</span>
            </h3>
        </div>
            <div class="col-md-12 col-xs-12 login_control">
            <!-- Formulario que haciendo uso de una ruta en modo POST envía al controlador userController a verificar los datos para 
                 Dar o no acceso al usuario en caso de estar registrado en nuestra base de datos -->
                <form id='formadduser' action="app/controllers/userController.php" method='POST'>
                    <div class="control">
                        <div class="label">Email Address</div>
                        <input type="hidden" name='type' id='type' value='login'>
                        <input type="text" id='correo' class="form-control" name='correo' placeholder="sergio@gmail.com" required/>
                    </div>
                    <div class="control">
                        <div class="label">Password</div>
                        <input type="password" id='pass' name='pass' class="form-control" placeholder="Contraseña" required/>
                    </div>    
                    <div class="control text-center ">
                        <input class='btn btn-secondary' id='button_send' type="submit" value="Enviar" class='w-50'> 
                    </div>
                </form>         
        </div>  
    </div>
</div>
<script>
$("#formadduser").submit(function() {
  document.location.href = 'http://tonitodo.test/app/controllers/useradd/?url=useradd';
  // do something
});</script>
<?php
include 'footer.tpl.php';
?>
