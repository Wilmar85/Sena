<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'login';

$conexion = new mysqli($host, $user, $password, $database);
$conexion->set_charset('utf8');

if ($conexion->connect_error) {
    die('Error de Conexión (' . $conexion->connect_errno . ') '
        . $conexion->connect_error);
} else {
    
}