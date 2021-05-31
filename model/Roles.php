<?php
class Roles{

    
private $pdo; //PARA LA BASE DE DATO 
public $idrol;
public $nombre;
public $descripcion;

//CONSTRUCTOR
public function __CONSTRUCT()
{
try{
$this->pdo = Conexion::Conectar();
}
catch(Throwable $t)
{
die($t->getMessage());
}
}
//GENERAR LISTA DE DATOS
public function ListarTiposUsuarios()
{
try
{
$stm = $this->pdo->prepare("SELECT * FROM roles");
$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}
catch(Throwable $t)
{
die($t->getMessage());
}
}


//BUSCAR REGISTRO POR ID
public function ObtenerRol($id)
{
try
{
$stm = $this->pdo
->prepare(" SELECT * FROM tipousuario WHERE
idrol = ?");

$stm->execute(array($id));

return $stm->fetch(PDO:: FETCH_OBJ);

}
catch(Throwable $t)
{
die($t->getMessage());
}
}
}

?>