<?php

class Revista
{
    private $oracle;
    public $issn;
    public $titulo;
    public $nombre;
    public $fecha;

    function __construct() {
        
        $tns = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
                (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = XE )))";

            $pdo_string = 'oci:dbname='.$tns;

            try {
                $dbh = new PDO($pdo_string, 'BR', 'br');
            } catch (PDOException $e) {
                echo "Failed to obtain database handle: " . $e->getMessage();
                exit;
            }

    }
    
    
    public function listar()
    {
        $sql  = 'SELECT * from REVISTA';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function Eliminar($issn)
    {
        try {
            
            $sql  = "SELECT fneliminardoctor(?);";
            $stmt = $this->oracle->prepare($sql);
            return $stmt->execute(array(
                $issn
            ));
            
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Actualizar(Doctor $data)
    {
        try {
            $sql  = "SELECT fneditardoctor(?,?,?,?,?);";
            $stmt = $this->oracle->prepare($sql);
            return $stmt->execute(array(
                $data->issn,
                $data->titulo,
                $data->nombre,
                $data->fecha,
                
            ));
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Registrar(Doctor $data)
    {
        $sql  = 'SELECT fninsertardoctor(?,?,?,?,?);';
        $stmt = $this->oracle->prepare($sql);
        return $stmt->execute(array(
            $data->issn,
            $data->titulo,
            $data->nombre,
            $data->fecha,
            
        ));
    }
}