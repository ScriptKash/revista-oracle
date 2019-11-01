<?php
require_once 'models/Autor.php';
class AutorController {
    private $model;
    public function __CONSTRUCT() {
        $this->model = new Autor();
    }
    public function Index() {
        require_once 'views/autor/index.php';
    }
    public function Listar() {
        $resultSet["data"] = $this->model->Listar();
        echo json_encode($resultSet);
        exit();
    }
    public function ListarAuditoria() {
        $resultSet["data"] = $this->model->ListarAuditoria();
        echo json_encode($resultSet);
        exit();
    }
    public function Guardar() {

        $cliente = new Cliente();
        $cliente->ID_AUTOR = $_POST['ID_AUTOR'];
        $cliente->NOMBRE_AUTOR = $_POST['NOMBRE_AUTOR'];
        $cliente->APELLIDO1 = $_POST['APELLIDO1'];
        $cliente->APELLIDO2 = $_POST['APELLIDO2'];
        $cliente->CORREO = $_POST['CORREO'];
        $cliente->ADSCRIPCION = $_POST['ADSCRIPCION'];
        $cliente->POSICION = $_POST['POSICION'];
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
        $result = $this->model->Eliminar($_POST['ID_AUTOR']);
        echo $result;
        exit();
    }
}
