<?php
class Cliente {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function crear($nombre, $ciudad, $telefono, $correo) {
        $sql = "INSERT INTO clientes (nombre, ciudad, telefono, correo) VALUES (:nombre, :ciudad, :telefono, :correo)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':ciudad', $ciudad);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $ciudad, $telefono, $correo) {
        $sql = "UPDATE clientes SET nombre = :nombre, ciudad = :ciudad, telefono = :telefono, correo = :correo WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':ciudad', $ciudad);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function eliminar($id) {
        $sql = "DELETE FROM clientes WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
