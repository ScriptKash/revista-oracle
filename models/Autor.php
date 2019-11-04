<?php
require_once "Conexion.php";

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

    function __construct()
    {

        // Se declara el nombre del Schema de Oracle
        $dbname = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = ' . DB_SERVER . ')(PORT = ' . DB_PORT . '))
                (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = ' . DB_NAME . ' )))';

        $pdo_string = 'oci:dbname=' . $dbname;

        try
        {
            // Conexión con Oracle por medio de PDO
            $this->oracle = new PDO($pdo_string . ';charset=AL32UTF8', DB_USER, DB_PASS);
        }

        // En caso de un error aquí se mostrará
        catch(PDOException $e)
        {
            echo "Error al conectarse con Oracle: " . $e->getMessage();
            exit;
        }
        $this->n = array();
    }

    // Función para listar todo lo que tenga la tabla
    public function Listar()
    {
        $sql = 'SELECT * from AUTOR';
        $stmt = $this
            ->oracle
            ->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function ListarAuditoria()
    {
        $sql = 'SELECT * from AUDITORIA_AUTOR';
        $stmt = $this
            ->oracle
            ->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Función para insertar un registro a la tabla
    public function Registrar(Autor $data)
    {
        $sql = "begin SP_INSERTAR_AUTOR(?,?,?,?,?,?,?);end;";
        $stmt = $this
            ->oracle
            ->prepare($sql);
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
        try
        {
            $sql = "begin SP_ELIMINAR_AUTOR({$ID_AUTOR});end;";
            $stmt = $this
                ->oracle
                ->prepare($sql);
            $stmt->execute();

        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    // Función para actualizar un registro de la tabla
    public function Actualizar(Autor $data)
    {
        try
        {
            $sql = "begin SP_EDITAR_AUTOR(?,?,?,?,?,?,?);end;";
            $stmt = $this
                ->oracle
                ->prepare($sql);
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
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
}

