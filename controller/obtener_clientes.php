<?php

// Función para obtener todos los clientes
require ("../model/conexion.php");
function obtenerClientes() {
    global $conexion;
    $resultado = $conexion->query("SELECT * FROM clientes");
    return $resultado->fetch_all(MYSQLI_ASSOC);
}
