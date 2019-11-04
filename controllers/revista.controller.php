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
    public function ListarAuditoria() {
        $resultSet["data"] = $this->model->ListarAuditoria();
        echo json_encode($resultSet);
        exit();
    }
    public function Guardar() {
        $revista = new Revista();
        $revista->ISSN = $_POST['ISSN'];
        $revista->TITULO_REVISTA = $_POST['TITULO_REVISTA'];
        $revista->NUMERO = $_POST['NUMERO'];
        $revista->FECHA_PUBLICACION = $_POST['FECHA_PUBLICACION'];
        $revista->PRECIO = $_POST['PRECIO'];
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $result = $this->model->Actualizar($revista);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $result = $this->model->Registrar($revista);
            echo $result;
            exit();
        }
    }
    public function Eliminar() {
        $result = $this->model->Eliminar($_POST['ISSN']);
        echo $result;
        exit();
    }
}