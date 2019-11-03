<?php

require_once "Conexion.php";

class Cliente
{
    // Configuraciones para que funcione la conexión
    private $oracle;
    private $n;

    // Atributos de la tabla
    public $ID_CLIENTE;
    public $NOMBRE_CLIENTE;
    public $APELLIDO1_CLIENTE;
    public $APELLIDO2_CLIENTE;
    public $CORREO;

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
        $sql  = 'SELECT * from CLIENTE';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function ListarAuditoria()
    {
        $sql  = 'SELECT * from AUDITORIA_CLIENTES';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Función para insertar un registro a la tabla
    public function Registrar(Cliente $data)
    {
        $sql  = "begin SP_INSERTAR_CLIENTE(?,?,?,?,?);end;";
        $stmt = $this->oracle->prepare($sql);
        return $stmt->execute(array(
            $data->ID_CLIENTE,
            $data->NOMBRE_CLIENTE,
            $data->APELLIDO1_CLIENTE,
            $data->APELLIDO2_CLIENTE,
            $data->CORREO
        ));
    }
    
    // Función para eliminar un registro de la tabla
    public function Eliminar($ID_CLIENTE)
    {
        try {
            $sql  = "begin SP_ELIMINAR_CLIENTE({$ID_CLIENTE});end;";
            $stmt = $this->oracle->prepare($sql);
            $stmt->execute();
            
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    // Función para actualizar un registro de la tabla
    public function Actualizar(Cliente $data)
    {
        try {
            $sql  = "begin SP_EDITAR_CLIENTE(?,?,?,?,?);end;";
            $stmt = $this->oracle->prepare($sql);
            return $stmt->execute(array(
                $data->ID_CLIENTE,
                $data->NOMBRE_CLIENTE,
                $data->APELLIDO1_CLIENTE,
                $data->APELLIDO2_CLIENTE,
                $data->CORREO
            ));
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
}