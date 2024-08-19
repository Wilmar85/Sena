<?php
$title = 'Login Cotipanel'?>

<!doctype html>
<html>
<?php require("content/head.php"); ?>
<body>
<div class="container d-flex flex-column mt-5 w-50">
<div class="container text-center "> 
    <div class="container"><h2 class="text-center">COTIPANEL</h2>
    </div>
<img src="images/Logo.svg" alt="Placeholder image" width="200" height="200" class="rounded-circle img-fluid align-content-center">
     <div class="container d-flex flex-column mt-5">
       <form action="" method="post">
         <div class="form-group">
           <label for="exampleInputEmail1" >Ingresa su correo empresarial&nbsp;</label>

<?php
require ("model/conexion.php");
require("controller/controller_login.php"); ?>
             <input  name=" text" type="text" autofocus="autofocus" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su Usuario">
</div>
         <div class="form-group">
           <label for="exampleInputPassword1">Ingresa su Contraseña&nbsp;</label>
           <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>         
         <input name="btn-enviar" type="submit" class="btn btn-success" value="Ingresar" >
       </form>
     </div>
</div>
    </div>
<?php require("content/script.php"); ?>
</body>
</html>