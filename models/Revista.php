<?php

class Revista
{
    private $oracle;
    private $n;
    public $ISSN;
    public $TITULO_REVISTA;
    public $NUMERO;
    public $FECHA;

    function __construct() {
        
        $tns = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
                (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = XE )))";

            $pdo_string = 'oci:dbname='.$tns;

            try {
                $this->oracle = new PDO($pdo_string, 'BR', 'br');
            } catch (PDOException $e) {
                echo "Failed to obtain database handle: " . $e->getMessage();
                exit;
            }

            $this->n=array();

    }
    
    
    public function Listar()
    {
        $sql  = 'SELECT * from REVISTA';
        $stmt = $this->oracle->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

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

    // public function Eliminar($ISSN)
    // {
    //     try {
    //     $sql = "DELETE FROM REVISTA WHERE ISSN = {$ISSN}";
    //         $stmt = $this->oracle->prepare($sql);
    //         $stmt->execute();
    //     }
    //     catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }
    
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