<?php

class Examen //inicio de la clase
{
    private $pdo; //Para la bd
    //Atributos
    public $idexamen;
    public $fecha;
    public $titulo;
    public $examenruta;
    public $idconsulta;
    public $estado;

    public function __CONSTRUCT()
    {
        try 
        {
            $this->pdo = Conexion::Conectar();
        }
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
    }

    public function RegistrarExamen($data)
    {
        try 
        {
        $sql = "INSERT INTO registro_examenes(fecha, titulo, examenruta, idconsulta)
            VALUES(?, ?, ?, ?)";

        $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->fecha,
                    $data->titulo,
                    $data->examenruta,
                    $data->idconsulta
                )
            );
        }
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
    }

    public function ListarExamenActivos()
    {
        try 
        {   
            $stm = $this->pdo->prepare("SELECT re.idexamen AS
            idexamen, re.fecha AS fecha, re.titulo AS titulo, re.examenruta
            AS examenruta, rc.hora AS hora, re.estado AS estado
            FROM registro_examenes AS re INNER JOIN registro_consultas AS rc ON 
            re.idconsulta = rc.idconsulta WHERE re.estado = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
    }

    public function ListarExamenInactivos()
    {
        try 
        {
            $stm = $this->pdo->prepare("SELECT re.idexamen AS
            idexamen, re.fecha AS fecha, re.titulo AS titulo, re.examenruta
            AS examenruta, rc.hora AS hora, re.estado AS estado
            FROM registro_examenes AS re INNER JOIN registro_consultas AS rc ON 
            re.idconsulta = rc.idconsulta WHERE re.estado = 0");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Throwable $t)
        {
            die($t->getMessage());
        }
    }

        //GENERAR LISTA DE DATOS
    public function ListarExamen()
    {
    try
    {
    $stm = $this->pdo->prepare("SELECT * FROM registro_examenes");
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Throwable $t)
    {
    die($t->getMessage());
    }
    }


    public function ObtenerExamen($id)
    {
        try 
        {
            $stm = $this->pdo
                ->prepare("SELECT re.idexamen AS idexamen, re.fecha AS fecha, re.titulo AS titulo, re.examenruta AS examenruta, 
                rc.hora AS hora, re.estado AS estado FROM registro_examenes AS re INNER JOIN registro_consultas 
                AS rc ON re.idconsulta = rc.idconsulta WHERE idexamen = ?");

            $stm->execute(array($id));

            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
    }

   public function ActualizarExamen($data)
   {
       try {
           $sql = "UPDATE registro_examenes SET fecha = ?, titulo = ?, examenruta = ?, idconsulta = ?
            WHERE idexamen = ?";

        $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->fecha,
                    $data->titulo,
                    $data->examenruta,
                    $data->idconsulta,
                    $data->idexamen
                )
            );

       } catch (Throwable $t) {
           die($t->getMessage());
       }
   }
   
   public function CambiarEstadoExamen($nuevo_estado, $id)
   {
        try 
        {
            $sql = "UPDATE registro_examenes SET
                        estado = ?
                    WHERE idexamen = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $nuevo_estado,
                        $id
                    )
                );
        } 
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
   }

}//fin de la clase
?>