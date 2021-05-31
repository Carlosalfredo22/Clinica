<?php
class Cita //INICIO DE LA CLASE 
{
private $pdo; //PARA LA BASE DE DATO 

public $idcita;
public $fecha;
public $hora;
public $idusuario;
public $idexpediente;
public $estado;

// SELECT rc.idcita AS idcita, rc.fecha AS fecha, rc.hora AS hora, us.nombre AS nombremedico, 
// ex.nombre AS nombrepaciente FROM registro_citas AS rc INNER JOIN usuarios AS us ON 
// rc.idusuario = us.idusuario INNER JOIN expediente_paciente AS ex ON rc.idexpediente = ex.idexpediente 
// WHERE rc.estado = 1;

public function __CONSTRUCT()
{

try{
$this->pdo= Conexion::Conectar();
}
catch(Throwable $t)
{
die($t->getMessage());
}
}
public function RegistrarCita($data)
{
try
{ 
$sql="INSERT INTO registro_citas(fecha, hora, idusuario, idexpediente)
VALUES(?, ?, ? ,?)";
$this->pdo->prepare($sql)
->execute(
array(
$data->fecha,
$data->hora,
$data->idusuario,
$data->idexpediente,
)
);

}catch(Throwable $t)
{
die($t->getMessage());
}
}

public function ListarCitasActivas()
{
try
{
$stm=$this->pdo->prepare("SELECT rc.idcita AS idcita, rc.fecha AS fecha, rc.hora AS hora, us.nombre AS medico, 
ex.nombre AS paciente FROM registro_citas AS rc INNER JOIN usuarios AS us ON 
rc.idusuario = us.idusuario INNER JOIN expediente_paciente AS ex ON rc.idexpediente = ex.idexpediente 
WHERE rc.estado = 1 ORDER BY fecha DESC");
$stm->execute();

return $stm->fetchAll(PDO::FETCH_OBJ);
}

catch (Throwable $t)
{
die($t->getMessage());
}   
}

public function ListarCitasInactivas()
{
try
{
$stm=$this->pdo->prepare("SELECT rc.idcita AS idcita, rc.fecha AS fecha, rc.hora AS hora, us.nombre AS medico, 
ex.nombre AS paciente FROM registro_citas AS rc INNER JOIN usuarios AS us ON 
rc.idusuario = us.idusuario INNER JOIN expediente_paciente AS ex ON rc.idexpediente = ex.idexpediente 
WHERE rc.estado = 0");

$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}
catch(Throwable $t)
{
die($t->getMessage());
}
}

public function ObtenerCita($id)
{
try
{
$stm = $this->pdo
->prepare("SELECT rc.idcita AS idcita, rc.fecha AS fecha, rc.hora AS hora, us.nombre AS medico, 
ex.nombre AS paciente FROM registro_citas AS rc INNER JOIN usuarios AS us ON 
rc.idusuario = us.idusuario INNER JOIN expediente_paciente AS ex ON rc.idexpediente = ex.idexpediente 
WHERE rc.idcita = ?");

$stm->execute(array($id));
return $stm->fetch(PDO::FETCH_OBJ);
}
catch(Throwable $t)
{

die($t->getMessage());
}
}

public function ActualizarCita($data)
{
try
{
$sql = "UPDATE registro_citas SET
fecha = ?,
hora = ?, 
idusuario = ?, 
idexpediente = ?
WHERE idcita = ?";
$this->pdo->prepare($sql)
->execute(
array(
$data->fecha,
$data->hora,
$data->idusuario,
$data->idexpediente,
$data->idcita
)
);
}
catch(Throwable $t)
{
die($t->getMessage());
}
}

public function CambiarEstadoCita($nuevo_estado, $id)
{
try
{
$sql = "UPDATE registro_citas SET
estado  =?
Where idcita =?";

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