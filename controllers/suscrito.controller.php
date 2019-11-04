<?php
require_once 'models/Suscrito.php';
class SuscritoController {
    private $model;
    public function __CONSTRUCT() {
        $this->model = new Suscrito();
    }
    public function Index() {
        require_once 'views/suscrito/index.php';
    }
    public function Listar() {
        $resultSet["data"] = $this->model->Listar();
        echo json_encode($resultSet);
        exit();
    }
    public function Guardar() {
        
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {

            $editar = new Suscrito();
            $editar->ID_SUSCRITO = $_POST['ID_SUSCRITO'];
            $editar->CLIENTE_ID = $_POST['CLIENTE_ID'];
            $editar->ISSN_ID = $_POST['ISSN_ID'];

            $result = $this->model->Actualizar($editar);
            echo $result;
            exit();

        } elseif ($condicion == 'Nuevo') {

            $guardar = new Suscrito();
            $guardar->CLIENTE_ID = $_POST['CLIENTE_ID'];
            $guardar->ISSN_ID = $_POST['ISSN_ID'];

            $result = $this->model->Registrar($guardar);
            echo $result;
            exit();
        }
    }
    public function Eliminar() {
        $result = $this->model->Eliminar($_POST['ID_SUSCRITO']);
        echo $result;
        exit();
    }
}
