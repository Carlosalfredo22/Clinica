<?php

class Expediente //inicio de la clase
{
    private $pdo; //Para la bd
    //Atributos
    public $idexpediente;
    public $nombre;
    public $edad;
    public $fecha;
    public $peso;
    public $fechanacimiento;
    public $estadocivil;
    public $ocupacion;
    public $direccion;
    public $alergias;
    public $telefono;
    public $motivo;
    public $numeroexpediente;
    public $otrosdatos;
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

    public function RegistrarExpediente($data)
    {
        try 
        {
        $sql = "INSERT INTO expediente_paciente(nombre, edad, fecha, peso, fechanacimiento, estadocivil, 
        ocupacion, direccion, alergias, telefono, motivo, numeroexpediente, otrosdatos)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->nombre,
                    $data->edad,
                    $data->fecha,
                    $data->peso,
                    $data->fechanacimiento,
                    $data->estadocivil,
                    $data->ocupacion,
                    $data->direccion,
                    $data->alergias,
                    $data->telefono,
                    $data->motivo,
                    $data->numeroexpediente,
                    $data->otrosdatos
                )
            );
        }
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
    }

    public function ListarExpedientesActivos()
    {
        try 
        {   
            $stm = $this->pdo->prepare("SELECT idexpediente, nombre, edad, fecha, peso, fechanacimiento, estadocivil, 
            ocupacion, direccion, alergias, telefono, motivo, numeroexpediente, otrosdatos FROM expediente_paciente WHERE estado = 1");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
    }

    public function ListarExpedientesInactivos()
    {
        // "SELECT c.idcliente AS idcliente, c.nombre AS nombre, 
        //     c.apellido AS apellido, c.telefono AS telefono, c.direccion AS direccion, c.email AS
        //     email, c.sexo AS sexo, DATE_FORMAT(c.fechanacimiento, '%d-%m-%Y') AS fechanacimiento, TIMESTAMPDIFF(YEAR, c.fechanacimiento,CURDATE()) AS edad, 
        //     c.idusuarioregistro AS idusuarioregistro, u.apellido AS registradopor FROM cliente AS
        //     c INNER JOIN usuario AS u ON c.idusuarioregistro = u.idusuario WHERE c.estado = 0"
        try 
        {
            $stm = $this->pdo->prepare("SELECT idexpediente, nombre, edad, fecha, peso, fechanacimiento, estadocivil, 
            ocupacion, direccion, alergias, telefono, motivo, numeroexpediente, otrosdatos FROM expediente_paciente WHERE estado = 0");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Throwable $t)
        {
            die($t->getMessage());
        }
    }

        //GENERAR LISTA DE DATOS
    public function ListarExpedientes()
    {
    try
    {
    $stm = $this->pdo->prepare("SELECT * FROM expediente_paciente");
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Throwable $t)
    {
    die($t->getMessage());
    }
    }


    public function ObtenerExpediente($id)
    {
        try 
        {
            $stm = $this->pdo
                ->prepare("SELECT idexpediente, nombre, edad, fecha, peso, fechanacimiento, estadocivil, 
                ocupacion, direccion, alergias, telefono, motivo, numeroexpediente, otrosdatos FROM expediente_paciente WHERE idexpediente = ?");

            $stm->execute(array($id));

            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch (Throwable $t) 
        {
            die($t->getMessage());
        }
    }

   public function ActualizarExpediente($data)
   {
       try {
           $sql = "UPDATE expediente_paciente SET nombre = ?, edad = ?, fecha = ?, peso = ?, 
           fechanacimiento = ?, estadocivil = ?, ocupacion = ?, direccion = ?, alergias = ?, telefono = ?, 
           motivo = ?, numeroexpediente = ?, otrosdatos = ? WHERE idexpediente = ?";

        $this->pdo->prepare($sql)
            ->execute(
                array(
                    $data->nombre,
                    $data->edad,
                    $data->fecha,
                    $data->peso,
                    $data->fechanacimiento,
                    $data->estadocivil,
                    $data->ocupacion,
                    $data->direccion,
                    $data->alergias,
                    $data->telefono,
                    $data->motivo,
                    $data->numeroexpediente,
                    $data->otrosdatos,
                    $data->idexpediente,
                )
            );

       } catch (Throwable $t) {
           die($t->getMessage());
       }
   }
   
   public function CambiarEstadoExpediente($nuevo_estado, $id)
   {
        try 
        {
            $sql = "UPDATE expediente_paciente SET
                        estado = ?
                    WHERE idexpediente = ?";

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