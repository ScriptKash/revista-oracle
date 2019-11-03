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

        $condicion = $_POST['acc'];

        if ($condicion == 'Editar') {

        $editar = new Articulo();
        $editar->ID_ARTICULO = $_POST['ID_ARTICULO'];
        $editar->TITULO_ARTICULO = $_POST['TITULO_ARTICULO'];
        $editar->PAGINA_INICIO = $_POST['PAGINA_INICIO'];
        $editar->PAGIN_FIN = $_POST['PAGIN_FIN'];
        $editar->ISSN_ID = $_POST['ISSN_ID'];

            $result = $this->model->Actualizar($editar);
            echo $result;
            exit();

        } elseif ($condicion == 'Nuevo') {

        $registrar = new Articulo();
        $registrar->TITULO_ARTICULO = $_POST['TITULO_ARTICULO'];
        $registrar->PAGINA_INICIO = $_POST['PAGINA_INICIO'];
        $registrar->PAGIN_FIN = $_POST['PAGIN_FIN'];
        $registrar->ISSN_ID = $_POST['ISSN_ID'];
        
            $result = $this->model->Registrar($registrar);
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