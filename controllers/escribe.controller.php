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
        $escribe = new Escribe();
        $escribe->ID_ESCRIBE = $_POST['ID_ESCRIBE'];
        $escribe->ARTICULO_ID = $_POST['ARTICULO_ID'];
        $escribe->AUTOR_ID = $_POST['AUTOR_ID'];
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $result = $this->model->Actualizar($escribe);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $result = $this->model->Registrar($escribe);
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
