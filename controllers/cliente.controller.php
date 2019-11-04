<?php
require_once 'models/Cliente.php';
class ClienteController {
    private $model;
    public function __CONSTRUCT() {
        $this->model = new Cliente();
    }
    public function Index() {
        require_once 'views/cliente/index.php';
    }
    public function Listar() {
        $resultSet["data"] = $this->model->Listar();
        echo json_encode($resultSet, JSON_UNESCAPED_UNICODE);
        exit();
    }
    public function ListarAuditoria() {
        $resultSet["data"] = $this->model->ListarAuditoria();
        echo json_encode($resultSet, JSON_UNESCAPED_UNICODE);
        exit();
    }
    public function Guardar() {

        $cliente = new Cliente();
        $cliente->ID_CLIENTE = $_POST['ID_CLIENTE'];
        $cliente->NOMBRE_CLIENTE = $_POST['NOMBRE_CLIENTE'];
        $cliente->APELLIDO1_CLIENTE = $_POST['APELLIDO1_CLIENTE'];
        $cliente->APELLIDO2_CLIENTE = $_POST['APELLIDO2_CLIENTE'];
        $cliente->CORREO = $_POST['CORREO'];
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $result = $this->model->Actualizar($cliente);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $result = $this->model->Registrar($cliente);
            echo $result;
            exit();
        }
    }
    public function Eliminar() {
        $result = $this->model->Eliminar($_POST['ID_CLIENTE']);
        echo $result;
        exit();
    }
}
