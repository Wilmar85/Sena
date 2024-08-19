<?php
// Función para eliminar un cliente
require ("../model/conexion.php");
function eliminarCliente($id) {
    global $conexion;
    $stmt = $conexion->prepare("DELETE FROM clientes WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}