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

        $autor = new Autor();
        $autor->ID_AUTOR = $_POST['ID_AUTOR'];
        $autor->NOMBRE_AUTOR = $_POST['NOMBRE_AUTOR'];
        $autor->APELLIDO1 = $_POST['APELLIDO1'];
        $autor->APELLIDO2 = $_POST['APELLIDO2'];
        $autor->CORREO = $_POST['CORREO'];
        $autor->ADSCRIPCION = $_POST['ADSCRIPCION'];
        $autor->POSICION = $_POST['POSICION'];
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $result = $this->model->Actualizar($autor);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $result = $this->model->Registrar($autor);
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
