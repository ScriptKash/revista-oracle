<?php
require_once 'models/Escribe.php';
class EscribeController {
    private $model;
    public function __CONSTRUCT() {
        $this->model = new Escribe();
    }
    public function Index() {
        require_once 'views/escribe/index.php';
    }
    public function Listar() {
        $resultSet["data"] = $this->model->Listar();
        echo json_encode($resultSet);
        exit();
    }
    public function Guardar() {
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $editar = new Escribe();
            $editar->ID_ESCRIBE = $_POST['ID_ESCRIBE'];
            $editar->ARTICULO_ID = $_POST['ARTICULO_ID'];
            $editar->AUTOR_ID = $_POST['AUTOR_ID'];
            $result = $this->model->Actualizar($editar);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $guardar = new Escribe();
            $guardar->ARTICULO_ID = $_POST['ARTICULO_ID'];
            $guardar->AUTOR_ID = $_POST['AUTOR_ID'];
            $result = $this->model->Registrar($guardar);
            echo $result;
            exit();
        }
    }
    public function Eliminar() {
        $result = $this->model->Eliminar($_POST['ID_ESCRIBE']);
        echo $result;
        exit();
    }
}
