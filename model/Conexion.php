<?php
class Conexion
{

public static function Conectar()
{

// Para remoto
// $pdo= new PDO('mysql:host=localhost;
// dbname=id15977137_clinica;charset=utf8', 'id15977137_root', 'Molina-12345');

//para trabajar en local
$pdo= new PDO('mysql:host=localhost;
dbname=clinica;charset=utf8', 'root', '');


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $pdo;

}
}

?>