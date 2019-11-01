<?php
require_once 'models/Articulo.php';
class ArticuloController {
    private $model;
    public function __CONSTRUCT() {
        $this->model = new Articulo();
    }
    public function Index() {
        require_once 'views/articulo/index.php';
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

        $articulo = new Articulo();
        $articulo->ID_ARTICULO = $_POST['ID_ARTICULO'];
        $articulo->TITULO_ARTICULO = $_POST['TITULO_ARTICULO'];
        $articulo->PAGINA_INICIO = $_POST['PAGINA_INICIO'];
        $articulo->PAGIN_FIN = $_POST['PAGIN_FIN'];
        $articulo->ISSN_ID = $_POST['ISSN_ID'];
        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {
            $result = $this->model->Actualizar($articulo);
            echo $result;
            exit();
        } elseif ($condicion == 'Nuevo') {
            $result = $this->model->Registrar($articulo);
            echo $result;
            exit();
        }
    }
    public function Eliminar() {
        $result = $this->model->Eliminar($_POST['ID_ARTICULO']);
        echo $result;
        exit();
    }
}
