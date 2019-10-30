<?php

class Revista
{
    // Configuraciones para que funcione la conexión
    private $oracle;
    private $n;

    // Atributos de la tabla
    public $ISSN;
    public $TITULO_REVISTA;
    public $NUMERO;
    public $FECHA;

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
        $sql  = 'SELECT * from REVISTA';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Función para insertar un registro a la tabla
    public function Registrar(Revista $data)
    {
        $sql  = "begin INSERTARREVISTA(?,?,?,?);end;";
        $stmt = $this->oracle->prepare($sql);
        return $stmt->execute(array(
            $data->ISSN,
            $data->TITULO_REVISTA,
            $data->NUMERO,
            $data->FECHA
        ));
    }
    
    // Función para eliminar un registro de la tabla
    public function Eliminar($ISSN)
    {
        try {
            $sql  = "begin ELIMINARREVISTA({$ISSN});end;";
            $stmt = $this->oracle->prepare($sql);
            $stmt->execute();
            
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    // Función para actualizar un registro de la tabla
    public function Actualizar(Revista $data)
    {
        try {
            $sql  = "begin REVISTAUPDATE(?,?,?,?);end;";
            $stmt = $this->oracle->prepare($sql);
            return $stmt->execute(array(
                $data->ISSN,
                $data->TITULO_REVISTA,
                $data->NUMERO,
                $data->FECHA
            ));
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
}