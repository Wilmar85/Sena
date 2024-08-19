<?php
require_once '../model/Cliente.php';

class ClientesController {
    private $clienteModel;

    public function __construct($conexion) {
        $this->clienteModel = new Cliente($conexion);
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $ciudad = $_POST['ciudad'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $correo = $_POST['correo'] ?? '';S

            $this->clienteModel->crear($nombre, $ciudad, $telefono, $correo);
            header('Location: /clientes/listar');
        }
    }

    public function listar() {
        $clientes = $this->clienteModel->listar();
        require_once 'views/listar_clientes.php';
    }

    public function actualizar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? 0;
            $nombre = $_POST['nombre'] ?? '';
            $ciudad = $_POST['ciudad'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $correo = $_POST['correo'] ?? '';

            $this->clienteModel->actualizar($id, $nombre, $ciudad, $telefono, $correo);
            header('Location: /clientes/listar');
        }
    }

    public function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? 0;
            $this->clienteModel->eliminar($id);
            header('Location: /clientes/listar');
        }
    }
}
?>


