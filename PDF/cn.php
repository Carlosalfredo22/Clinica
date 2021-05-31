<!--Permite la conexion con la db y php-->
<?php
// para local
$mysqli = new mysqli("localhost", "root", "", "clinica");
// para conexion en hosting remoto
// $pdo= new PDO('mysql:host=localhost;
// dbname=id15977137_clinica;charset=utf8', 'id15977137_root', 'Molina-12345');