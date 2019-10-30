<?php

class Autor
{
    // Configuraciones para que funcione la conexión
    private $oracle;
    private $n;

    // Atributos de la tabla
    public $ID_AUTOR;
    public $NOMBRE_AUTOR;
    public $APELLIDO1;
    public $APELLIDO2;
    public $CORREO;
    public $ADSCRIPCION;
    public $POSICION;

    function __construct() {
        
        // Se declara el nombre del Schema de Oracle
        $dbname = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.137.1)(PORT = 1521))
                (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = XE )))";

        $pdo_string = 'oci:dbname='.$dbname;

        try {
                // Conexión con Oracle por medio de PDO
                $this->oracle = new PDO($pdo_string, 'BR', 'br');}

                // En caso de un error aquí se mostrará
                catch (PDOException $e) {
                echo "Error al conectarse con Oracle: " . $e->getMessage();
                exit;
            } $this->n=array();
    }
    
    // Función para listar todo lo que tenga la tabla
    public function Listar()
    {
        $sql  = 'SELECT * from AUTOR';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Función para insertar un registro a la tabla
    public function Registrar(Cliente $data)
    {
        $sql  = "begin INSERTARAUTOR(?,?,?,?,?,?,?);end;";
        $stmt = $this->oracle->prepare($sql);
        return $stmt->execute(array(
            $data->ID_AUTOR,
            $data->NOMBRE_AUTOR,
            $data->APELLIDO1,
            $data->APELLIDO2,
            $data->CORREO,
            $data->ADSCRIPCION,
            $data->POSICION
        ));
    }
    
    // Función para eliminar un registro de la tabla
    public function Eliminar($ID_AUTOR)
    {
        try {
            $sql  = "begin ELIMINARAUTOR({$ID_AUTOR});end;";
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
            $sql  = "begin AUTORUPDATE(?,?,?,?,?,?,?);end;";
            $stmt = $this->oracle->prepare($sql);
            return $stmt->execute(array(
                $data->ID_AUTOR,
                $data->NOMBRE_AUTOR,
                $data->APELLIDO1,
                $data->APELLIDO2,
                $data->CORREO,
                $data->ADSCRIPCION,
                $data->POSICION
            ));
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
}