<?php
class Usuario //INICIO DE LA CLASE 
{
private $pdo; //PARA LA BASE DE DATO 

public $idusuario;
public $nombre;
public $apellido;
public $telefono;
public $email;
public $clave;
public $idrol;
public $estado;

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
public function RegistrarUsuario($data)
{
try
{ 
$sql="INSERT INTO usuarios(nombre, apellido, telefono, email, clave,
idrol)
VALUES(?, ?, ? ,? ,? , ?)";
$this->pdo->prepare($sql)
->execute(
array(
$data->nombre,
$data->apellido,
$data->telefono,
$data->email,
$data->clave,
$data->idrol,

)
);

}catch(Throwable $t)
{
die($t->getMessage());
}
}
public function ListarUsuarioActivos()
{
try
{
$stm=$this->pdo->prepare("SELECT u.idusuario AS
idusuario, u.nombre AS nombre, u.apellido AS apellido, u.telefono
AS telefono, u.email AS email, rl.nombre AS tipo
FROM usuarios AS u INNER JOIN roles AS rl ON 
u.idrol = rl.idrol WHERE u.estado = 1");
$stm->execute();

return $stm->fetchAll(PDO::FETCH_OBJ);
}

catch (Throwable $t)
{
die($t->getMessage());
}   
}

public function ListarUsuariosInactivos()
{
try
{
$stm=$this->pdo->prepare("SELECT u.idusuario AS
idusuario, u.nombre AS nombre, u.apellido AS apellido, u.telefono
AS telefono, u.email AS email, rl.nombre AS tipo
FROM usuarios AS u INNER JOIN roles AS rl ON 
u.idrol = rl.idrol WHERE u.estado = 0");

$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}
catch(Throwable $t)
{
die($t->getMessage());
}
}

//GENERAR LISTA DE DATOS
public function ListarUsuarios()
{
try
{
$stm = $this->pdo->prepare("SELECT * FROM usuarios");
$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}
catch(Throwable $t)
{
die($t->getMessage());
}
}


public function ObtenerUsuario($id)
{
try
{
$stm = $this->pdo
->prepare("SELECT u.idusuario AS idusuario, u.
nombre AS nombre, u.apellido AS apellido, u.
telefono AS telefono, u.email AS email, u.
idrol AS idrol, rl.nombre AS
tipo, u.clave AS clave FROM
usuarios AS u INNER JOIN roles AS rl ON u.
idrol = rl.idrol WHERE u.idusuario= ? ");

$stm->execute(array($id));
return $stm->fetch(PDO::FETCH_OBJ);
}
catch(Throwable $t)
{

die($t->getMessage());
}
}

public function ActualizarUsuario($data)
{
try
{
$sql = "UPDATE usuarios SET
nombre   = ?,
apellido = ?,
telefono = ?,
email    = ?,
idrol = ?
WHERE idusuario = ?";
$this->pdo->prepare($sql)
->execute(
array(
$data->nombre,
$data->apellido,
$data->telefono,
$data->email,
$data->idrol,
$data->idusuario,
)
);
}
catch(Throwable $t)
{
die($t->getMessage());
}
}

public function CambiarEstadoUsuario($nuevo_estado, $id)
{
try
{
$sql = "UPDATE usuarios SET
estado  =?
Where idusuario =?";

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

public function ActualizarClave($clave, $id)
{
try
{
$sql = "UPDATE usuarios SET
clave      = ?
WHERE idusuario = ?";

$this->pdo->prepare($sql)
->execute(
array(
$clave,
$id
)
);

}
catch(Throwable $t)
{
die($t->getMessage());
}
}

public function Entrar($email, $clave)
{
try
{
$stm=$this->pdo
->prepare("SELECT * FROM usuarios WHERE email = ?
AND clave = ? AND estado = 1");

$stm->execute(array($email, $clave));
return $stm->fetch(PDO::FETCH_OBJ);
}
catch(Throwable $t)
{
die($t->getMessage());
}
}

public function GenerarSesion($data)
{
try
{
//CONDICIONAR EL INICIO DE SESION

if($data != null){
#TOMAR LOS VALORES ES VARIABLE DE SESION
$_SESSION["id"]=$data->idusuario;
$_SESSION["nombre"]=$data->nombre;
$_SESSION["apellido"]=$data->apellido;
$_SESSION["email"]=$data->email;
$_SESSION["idrol"]=$data->idrol;

if($data->idrol == 1){
#ENTRAR COMO ENCARGADO
header("Location: ?c=".base64_encode('Home'));
}else {
//ENTRAR COMO RECEPCIONISTA
header("Location: ?c=".base64_encode('Home'));
// ENTRAR COMO MEDICO

// Aca pueden definirse otros tipos de usuarios y lo que pueden ver en las vistas
}
}else {
//ENVIAR AL LOGIN
header("Location: ?c=".base64_encode('Login'));
}
}
catch(Throwable $t)
{
die($t->getMessage());
}

}
}

?>