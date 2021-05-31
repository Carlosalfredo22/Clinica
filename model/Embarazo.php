<?php

class Embarazo {

    private $pdo; //PARA LA BASE DE DATO 

    public $idembarazo;
    public $nombre;
    public $fechanacimiento;
    public $direccion;
    public $alfabeta;
    public $estadocivil;
    public $estudios;
    public $telefono;
    public $edad;
    public $gestacionactual;
    public $embarazoplanificado;
    public $talla;
    public $pesoinicial;
    public $ultimoembarazo;
    public $gestacionesprevias;
    public $abortos;
    public $partosvaginales;
    public $nacidosvivos;
    public $viven;
    public $partos;
    public $cesareas;
    public $nacidosbajopeso;
    public $idconsulta;
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

    public function RegistrarEmbarazo($data){
    try
        { 
            $sql="INSERT INTO registro_embarazos(nombre, fechanacimiento, direccion, alfabeta, 
            estadocivil, estudios, telefono, edad, gestacionactual, embarazoplanificado, talla, 
            pesoinicial, ultimoembarazo, gestacionesprevias, abortos, partosvaginales, nacidosvivos, 
            viven, partos, cesareas, nacidosbajopeso, idconsulta)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
            ->execute(
            array(
                $data->nombre,
                $data->fechanacimiento,
                $data->direccion,
                $data->alfabeta,
                $data->estadocivil,
                $data->estudios,
                $data->telefono,
                $data->edad,
                $data->gestacionactual,
                $data->embarazoplanificado,
                $data->talla,
                $data->pesoinicial,
                $data->ultimoembarazo,
                $data->gestacionesprevias,
                $data->abortos,
                $data->partosvaginales,
                $data->nacidosvivos,
                $data->viven,
                $data->partos,
                $data->cesareas,
                $data->nacidosbajopeso,
                $data->idconsulta,
            )
        );

        }catch(Throwable $t)
        {
        die($t->getMessage());
        }
    }

    public function ListarEmbarazoActivos(){
    try
    {
        $stm=$this->pdo->prepare("SELECT e.idembarazo AS idembarazo, e.nombre AS nombre, 
        e.fechanacimiento AS fechanacimiento, e.direccion AS direccion, e.alfabeta AS alfabeta, 
        e.estadocivil AS estadocivil, e.estudios AS estudios, e.telefono AS telefono, e.edad AS edad, e.gestacionactual AS gestacionactual, e.embarazoplanificado AS embarazoplanificado, e.talla AS talla, e.pesoinicial AS pesoinicial, e.ultimoembarazo AS ultimoembarazo, e.gestacionesprevias AS gestacionesprevias, e.abortos AS abortos, e.partosvaginales AS partosvaginales, e.nacidosvivos AS nacidosvivos, e.viven AS viven, e.partos AS partos, e.cesareas AS cesareas, e.nacidosbajopeso AS nacidosbajopeso,
        c.fecha AS fecha FROM registro_embarazos AS e INNER JOIN registro_consultas AS c ON c.idconsulta = 
        e.idconsulta WHERE e.estado = 1");
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        catch (Throwable $t)
        {
        die($t->getMessage());
        }   
    }

    public function ListarEmbarazoInactivos(){
    try
    {
        $stm=$this->pdo->prepare("SELECT e.idembarazo AS idembarazo, e.nombre AS nombre, 
        e.fechanacimiento AS fechanacimiento, e.direccion AS direccion, e.alfabeta AS alfabeta, 
        e.estadocivil AS estadocivil, e.estudios AS estudios, e.telefono AS telefono, e.edad AS edad, e.gestacionactual AS gestacionactual, e.embarazoplanificado AS embarazoplanificado, e.talla AS talla, e.pesoinicial AS pesoinicial, e.ultimoembarazo AS ultimoembarazo, e.gestacionesprevias AS gestacionesprevias, e.abortos AS abortos, e.partosvaginales AS partosvaginales, e.nacidosvivos AS nacidosvivos, e.viven AS viven, e.partos AS partos, e.cesareas AS cesareas, e.nacidosbajopeso AS nacidosbajopeso,
        c.fecha AS fecha FROM registro_embarazos AS e INNER JOIN registro_consultas AS c ON c.idconsulta = 
        e.idconsulta WHERE e.estado = 0");

        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Throwable $t)
        {
        die($t->getMessage());
        }
    }

    //GENERAR LISTA DE DATOS
    public function ListarEmbarazo(){
    try
        {
        $stm = $this->pdo->prepare("SELECT * FROM registro_embarazos");
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Throwable $t)
        {
        die($t->getMessage());
        }
    }


    public function ObtenerEmbarazo($id){
    try
    {
        $stm = $this->pdo
        ->prepare("SELECT e.idembarazo AS idembarazo, e.nombre AS nombre, 
        e.fechanacimiento AS fechanacimiento, e.direccion AS direccion, e.alfabeta AS alfabeta, 
        e.estadocivil AS estadocivil, e.estudios AS estudios, e.telefono AS telefono, e.edad AS edad, 
        e.gestacionactual AS gestacionactual, e.embarazoplanificado AS embarazoplanificado, e.talla AS talla, 
        e.pesoinicial AS pesoinicial, e.ultimoembarazo AS ultimoembarazo, e.gestacionesprevias AS gestacionesprevias, 
        e.abortos AS abortos, e.partosvaginales AS partosvaginales, e.nacidosvivos AS nacidosvivos, e.viven AS viven, 
        e.partos AS partos, e.cesareas AS cesareas, e.nacidosbajopeso AS nacidosbajopeso,
        c.fecha AS fecha FROM registro_embarazos AS e INNER JOIN registro_consultas AS c ON c.idconsulta = 
        e.idconsulta WHERE e.idembarazo = ?");

        $stm->execute(array($id));
        return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch(Throwable $t)
        {

        die($t->getMessage());
        }
    }

    public function ActualizarEmbarazo($data) {
    try
    {
        $sql = "UPDATE registro_embarazos SET nombre = ?, fechanacimiento = ?, direccion = ?, alfabeta = ?, 
        estadocivil = ?, estudios = ?, telefono = ?, edad = ?, gestacionactual = ?, embarazoplanificado = ?, 
        talla = ?, pesoinicial = ?, ultimoembarazo = ?, gestacionesprevias = ?, abortos = ?, 
        partosvaginales = ?, nacidosvivos = ?, viven = ?, partos = ?, cesareas = ?, nacidosbajopeso = ?, 
        idconsulta = ? WHERE idembarazo = ?";
        
        $this->pdo->prepare($sql)
        ->execute(
        array(
            $data->nombre,
                $data->fechanacimiento,
                $data->direccion,
                $data->alfabeta,
                $data->estadocivil,
                $data->estudios,
                $data->telefono,
                $data->edad,
                $data->gestacionactual,
                $data->embarazoplanificado,
                $data->talla,
                $data->pesoinicial,
                $data->ultimoembarazo,
                $data->gestacionesprevias,
                $data->abortos,
                $data->partosvaginales,
                $data->nacidosvivos,
                $data->viven,
                $data->partos,
                $data->cesareas,
                $data->nacidosbajopeso,
                $data->idconsulta,
                $data->idembarazo
        )
    );
    }
    catch(Throwable $t)
    {
    die($t->getMessage());
    }
    }

    public function CambiarEstadoEmbarazo($nuevo_estado, $id){
    try
    {
        $sql = "UPDATE registro_embarazos SET
        estado  =?
        Where idembarazo =?";

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