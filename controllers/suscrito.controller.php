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
        $suscrito = new Suscrito();
        $suscrito->ID_suscrito = $_POST['ID_SUSCRITO'];
        $suscrito->ARTICULO_ID = $_POST['CLIENTE_ID'];
        $suscrito->AUTOR_ID = $_POST['ISSN_ID'];
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $result = $this->model->Actualizar($suscrito);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $result = $this->model->Registrar($suscrito);
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
