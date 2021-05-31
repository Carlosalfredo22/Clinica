<?php

class Consulta {

    private $pdo; //PARA LA BASE DE DATO 

    public $idconsulta;
    public $antecedente_a;
    public $antecedente_v;
    public $antecedente_g;
    public $antecedente_p;
    public $motivo;
    public $fecha;
    public $hora;
    public $diagnostico;
    public $plan;
    public $idexpediente;
    public $estado;

    public function __CONSTRUCT(){

    try {
    $this->pdo= Conexion::Conectar();
        }
    catch(Throwable $t)
    {
        die($t->getMessage());
    }
    }

    public function RegistrarConsulta($data){
    try
        { 
            $sql="INSERT INTO registro_consultas(antecedente_a, antecedente_v, antecedente_g, antecedente_p, motivo, 
            fecha, hora, diagnostico, plan, idexpediente)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $this->pdo->prepare($sql)
            ->execute(
            array(
                $data->antecedente_a,
                $data->antecedente_v,
                $data->antecedente_g,
                $data->antecedente_p,
                $data->motivo,
                $data->fecha,
                $data->hora,
                $data->diagnostico,
                $data->plan,
                $data->idexpediente,

            )
        );

        }catch(Throwable $t)
        {
        die($t->getMessage());
        }
    }

    public function ListarConsultaActivos(){
    try
    {
        $stm=$this->pdo->prepare("SELECT c.idconsulta AS idconsulta, c.antecedente_a AS antecedente_a, 
        c.antecedente_v AS antecedente_v, c.antecedente_g AS antecedente_g, c.antecedente_p AS antecedente_p, 
        c.motivo AS motivo, c.fecha AS fecha, c.hora AS hora, c.diagnostico AS diagnostico, c.plan AS plan, 
        ex.nombre AS nombre FROM registro_consultas AS c INNER JOIN expediente_paciente AS ex ON c.idexpediente = 
        ex.idexpediente WHERE c.estado = 1");
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        catch (Throwable $t)
        {
        die($t->getMessage());
        }   
    }

    public function ListarConsultaInactivos(){
    try
    {
        $stm=$this->pdo->prepare("SELECT c.idconsulta AS idconsulta, c.antecedente_a AS antecedente_a, 
        c.antecedente_v AS antecedente_v, c.antecedente_g AS antecedente_g, c.antecedente_p AS antecedente_p, 
        c.motivo AS motivo, c.fecha AS fecha, c.hora AS hora, c.diagnostico AS diagnostico, c.plan AS plan, 
        ex.nombre AS nombre FROM registro_consultas AS c INNER JOIN expediente_paciente AS ex ON c.idexpediente = 
        ex.idexpediente WHERE c.estado = 0");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Throwable $t)
        {
        die($t->getMessage());
        }
    }

    //GENERAR LISTA DE DATOS
    public function ListarConsulta(){
    try
        {
        $stm = $this->pdo->prepare("SELECT * FROM registro_consultas");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Throwable $t)
        {
        die($t->getMessage());
        }
    }


    public function ObtenerConsulta($id){
    try
    {
        $stm = $this->pdo
        ->prepare("SELECT c.idconsulta AS idconsulta, c.antecedente_a AS antecedente_a, 
        c.antecedente_v AS antecedente_v, c.antecedente_g AS antecedente_g, c.antecedente_p AS antecedente_p, 
        c.motivo AS motivo, c.fecha AS fecha, c.hora AS hora, c.diagnostico AS diagnostico, c.plan AS plan, 
        ex.nombre AS nombre FROM registro_consultas AS c INNER JOIN expediente_paciente AS ex ON c.idexpediente = 
        ex.idexpediente WHERE c.idconsulta = ?");

        $stm->execute(array($id));
        return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch(Throwable $t)
        {

        die($t->getMessage());
        }
    }

    public function ActualizarConsulta($data) {
    try
    {
        $sql = "UPDATE registro_consultas SET antecedente_a = ?, antecedente_v = ?, antecedente_g = ?, 
        antecedente_p = ?, motivo = ?, fecha = ?, hora = ?, diagnostico = ?, plan = ?, idexpediente = ? 
        WHERE idconsulta = ?";
        
        $this->pdo->prepare($sql)
        ->execute(
        array(
            $data->antecedente_a,
            $data->antecedente_v,
            $data->antecedente_g,
            $data->antecedente_p,
            $data->motivo,
            $data->fecha,
            $data->hora,
            $data->diagnostico,
            $data->plan,
            $data->idexpediente,
            $data->idconsulta
        )
    );
    }
    catch(Throwable $t)
    {
    die($t->getMessage());
    }
    }

    public function CambiarEstadoConsulta($nuevo_estado, $id){
    try
    {
        $sql = "UPDATE registro_consultas SET
        estado  =?
        Where idconsulta =?";

        $this->pdo->prepare($sql)
        ->execute(
        array(
        $nuevo_estado,
        $id
        )
        );
    }

        catch(Throwable $t)
        {
            die($t->getMessage());
        }
    }
}

?>