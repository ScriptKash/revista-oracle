<?php

require_once "Conexion.php";

class Suscrito
{
    // Configuraciones para que funcione la conexión
    private $oracle;
    private $n;

    // Atributos de la tabla
    public $ID_SUSCRITO;
    public $CLIENTE_ID;
    public $ISSN_ID;

    function __construct() {
        
        // Se declara el nombre del Schema de Oracle
        $dbname = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = '.DB_SERVER.')(PORT = '.DB_PORT.'))
                (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = '.DB_NAME.' )))';

        $pdo_string = 'oci:dbname='.$dbname;

        try {
                // Conexión con Oracle por medio de PDO
                $this->oracle = new PDO($pdo_string.';charset=AL32UTF8', DB_USER, DB_PASS);}

                // En caso de un error aquí se mostrará
                catch (PDOException $e) {
                echo "Error al conectarse con Oracle: " . $e->getMessage();
                exit;
            } $this->n=array();
    }
    
    // Función para listar todo lo que tenga la tabla
    public function Listar()
    {
        $sql  = 'SELECT * from SUSCRITO';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Función para insertar un registro a la tabla
    public function Registrar(Suscrito $data)
    {
        $sql  = "begin SP_INSERTAR_SUSCRITO(?,?);end;";
        $stmt = $this->oracle->prepare($sql);
        return $stmt->execute(array(
            $data->CLIENTE_ID,
            $data->ISSN_ID
        ));
    }
    
    // Función para eliminar un registro de la tabla
    public function Eliminar($ID_SUSCRITO)
    {
        try {
            $sql  = "begin SP_ELIMINAR_SUSCRITO({$ID_SUSCRITO});end;";
            $stmt = $this->oracle->prepare($sql);
            $stmt->execute();
            
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    // Función para actualizar un registro de la tabla
    public function Actualizar(Suscrito $data)
    {
        try {
            $sql  = "begin SP_EDITAR_SUSCRITO(?,?,?);end;";
            $stmt = $this->oracle->prepare($sql);
            return $stmt->execute(array(
                $data->ID_SUSCRITO,
                $data->CLIENTE_ID,
                $data->ISSN_ID
            ));
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
}