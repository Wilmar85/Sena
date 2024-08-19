<?php
require ("../model/conexion.php");
function actualizarCliente($id, $nombre, $ciudad, $telefono, $correo) {
    global $conexion;
    $stmt = $conexion->prepare("UPDATE clientes SET nombre=?, ciudad=?, telefono=?, correo=? WHERE id=?");
    $stmt->bind_param("ssssi", $nombre, $ciudad, $telefono, $correo, $id);
    $stmt->execute();
    $stmt->close();
}