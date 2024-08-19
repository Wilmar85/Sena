<?php
session_start();
if(!empty($_POST["btn-enviar"])){
    if(!empty($_POST["text"]) and !empty($_POST["password"])){
        $usuario = $_POST["text"];
        $password = $_POST["password"];
        $sql =$conexion->query(" SELECT * FROM usuario WHERE  usuario='$usuario' and clave='$password' ");
            if ($datos = $sql->fetch_object()){
                $_SESSION["Id"]= $datos->Id;
                $_SESSION["nombre"]= $datos->nombre;
                $_SESSION["apellido"]= $datos->apellidos;
                header("location: main.php");
            }else{
                echo (" <div class='alert alert-danger' >Acceso Denegado </div>");
            }

    }
}else{

}