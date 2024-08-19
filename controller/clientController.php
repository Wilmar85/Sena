<?php
include 'model/conexion.php';

class ClientController {
    private $conn;

    public function __construct() {
        $this->conn = $conn; // Asignar la conexión a una propiedad de la clase
    }

    public function index() {
        $sql = "SELECT * FROM clients_data";
        $result = $this->conn->query($sql);
        $clients = $result->fetch_all(MYSQLI_ASSOC);
        return $clients;
    }

    public function create($data) {
        $sql = "INSERT INTO clients_data (name, city, phone, email) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $data['name'], $data['city'], $data['phone'], $data['email']);
        $stmt->execute();
        $stmt->close();
    }

    public function show($id) {
        $sql = "SELECT * FROM clients_data WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $client = $result->fetch_assoc();
        $stmt->close();
        return $client;
    }

    public function update($id, $data) {
        $sql = "UPDATE clients_data SET name=?, city=?, phone=?, email=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssi", $data['name'], $data['city'], $data['phone'], $data['email'], $id);
        $stmt->execute();
        $stmt->close();
    }

    public function delete($id) {
        $sql = "DELETE FROM clients_data WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
