<?php
require_once 'models/Revista.php';
class RevistaController {
    private $model;
    public function __CONSTRUCT() {
        $this->model = new Revista();
    }
    public function Index() {
        require_once 'views/revista/index.php';
    }
    public function Listar() {
        $resultSet["data"] = $this->model->Listar();
        echo json_encode($resultSet);
        exit();
    }
    public function Guardar() {
        $per = new Revista();
        $per->issn = $_POST['issn'];
        $per->titulo = $_POST['titulo'];
        $per->numero = $_POST['numero'];
        $per->fecha = $_POST['fecha'];
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $result = $this->model->Actualizar($per);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $result = $this->model->Registrar($per);
            echo $result;
            exit();
        }
    }
    public function Eliminar() {
        $result = $this->model->Eliminar($_POST['issn']);
        echo $result;
        exit();
    }
}
