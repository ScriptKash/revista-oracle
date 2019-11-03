<?php

// 192.168.137.1
require_once "Conexion.php";

class Articulo
{
    // Configuraciones para que funcione la conexión
    private $oracle;
    private $n;

    // Atributos de la tabla
    public $ID_ARTICULO;
    public $TITULO_ARTICULO;
    public $PAGINA_INICIO;
    public $PAGIN_FIN;
    public $ISSN_ID;

    function __construct() {
        
        // Se declara el nombre del Schema de Oracle
        $dbname = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = '.DB_SERVER.')(PORT = '.DB_PORT.'))
                (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = '.DB_NAME.' )))';

        $pdo_string = 'oci:dbname='.$dbname;

        try {
                // Conexión con Oracle por medio de PDO
                $this->oracle = new PDO($pdo_string, DB_USER, DB_PASS);}

                // En caso de un error aquí se mostrará
                catch (PDOException $e) {
                echo "Error al conectarse con Oracle: " . $e->getMessage();
                exit;
            } $this->n=array();
    }
    
    // Función para listar todo lo que tenga la tabla
    public function Listar()
    {
        $sql  = 'SELECT * from ARTICULO';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function ListarAuditoria()
    {
        $sql  = 'SELECT * from AUDITORIA_ARTICULOS';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Función para insertar un registro a la tabla
    public function Registrar(Articulo $data)
    {
        $sql  = "begin SP_INSERTAR_ARTICULO(?,?,?,?);end;";
        $stmt = $this->oracle->prepare($sql);
        return $stmt->execute(array(
            $data->TITULO_ARTICULO,
            $data->PAGINA_INICIO,
            $data->PAGIN_FIN,
            $data->ISSN_ID
        ));
    }
    
    // Función para eliminar un registro de la tabla
    public function Eliminar($ID_ARTICULO)
    {
        try {
            $sql  = "begin SP_ELIMINAR_ARTICULO({$ID_ARTICULO});end;";
            $stmt = $this->oracle->prepare($sql);
            $stmt->execute();
            
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    // Función para actualizar un registro de la tabla
    public function Actualizar(Articulo $data)
    {
        try {
            $sql  = "begin SP_EDITAR_ARTICULO(?,?,?,?,?);end;";
            $stmt = $this->oracle->prepare($sql);
            return $stmt->execute(array(
                $data->ID_ARTICULO,
                $data->TITULO_ARTICULO,
                $data->PAGINA_INICIO,
                $data->PAGIN_FIN,
                $data->ISSN_ID
            ));
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
}