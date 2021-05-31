<?php
//validar la sesión
if(!isset($_SESSION["id"])){
header("Location: ?c=".base64_encode('Login'));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>Administración Clínica</title>
<!-- CSS  -->
<link href="view/img/logo.png" type="image/png" rel="icon"/>
<link href="view/css/icon.css" rel="stylesheet">
<link href="view/css/alertify.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="view/css/alertify.rtl.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="view/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="view/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="view/css/jquery.dataTables.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php if ($_SESSION['idrol'] === '1') { ?>

<nav class="azul-ast" role="navigation" id="nav">
<div class="nav-wrapper container"><a id="logo-container" href="?c=<?php echo base64_encode('Home'); ?>"  >Inicio</a>

<!-- menú dispositivos grandes -->
<ul class="right hide-on-med-and-down">
<li><a href="?c=<?php echo base64_encode('Expediente'); ?>">Expediente</a></li>
<li><a href="?c=<?php echo base64_encode('Cita'); ?>">Cita</a></li>
<li><a href="?c=<?php echo base64_encode('Consulta'); ?>">Consulta</a></li>
<li><a href="?c=<?php echo base64_encode('Embarazo'); ?>">Embarazo</a></li>
<li><a href="?c=<?php echo base64_encode('Examen'); ?>">Examen</a></li>
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>">Usuario</a></li>

<!-- Dropdown Trigger -->
<li><a class="dropdown-trigger btn naranja-ast tooltipped" data-position="bottom" data-tooltip="<?php echo $_SESSION['nombre']. " ". $_SESSION['apellido']; ?>" href='#' data-target='dropdown1'><i class="material-icons">person_pin</i></a></li>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
<li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>&nbsp;</a></li>
<li><a href="?c=<?php echo base64_encode('Login'); ?>" class="naranja-ast-text"><i class="material-icons">exit_to_app</i>Salir</a></li>
      
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons">vpn_key</i>Nueva clave</a></li>
        
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" class="naranja-ast-text"><i class="material-icons">assignment</i>Mis datos</a></li>
</ul>
</ul>

<!-- menú dispositivos móbiles -->
<ul id="nav-mobile" class="sidenav azul-ast">
<li><a class="white-text" href="?c=<?php echo base64_encode('Home'); ?>"><i class="material-icons white-text">home</i>Inicio</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Expediente'); ?>"><i class="material-icons white-text">style</i>Expediente</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Cita'); ?>"><i class="material-icons white-text">color_lens</i>Cita</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Consulta'); ?>"><i class="material-icons white-text">supervisor_account</i>Consulta</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Embarazo'); ?>"><i class="material-icons white-text">supervisor_account</i>Embarazo</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Examen'); ?>"><i class="material-icons white-text">supervisor_account</i>Examen</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Usuario'); ?>"><i class="material-icons white-text">account_circle</i>Usuario</a></li>
<!-- Dropdown Trigger -->
<li><a class="dropdown-trigger btn naranja-ast" href='#' data-target='dropdown2'><i class="material-icons white-text">person_pin</i> Usuario activo</a></li>
<!-- Dropdown Structure -->
<ul id='dropdown2' class='dropdown-content'>
<li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>MENÚ</a></li>
<li><a href="?c=<?php echo base64_encode('Login'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">exit_to_app</i>Salir</a></li>
      
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">vpn_key</i>Nueva clave</a></li>
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">assignment</i>Mis datos</a></li>
</ul>
</ul>
<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
</div>
</nav>
  
<!-- fin de la cabecera -->

<?php }elseif ($_SESSION['idrol'] === '2') { ?>
    
    <nav class="azul-ast" role="navigation" id="nav">
<div class="nav-wrapper container"><a id="logo-container" href="?c=<?php echo base64_encode('Home'); ?>"  >Inicio</a>

<!-- menú dispositivos grandes -->
<ul class="right hide-on-med-and-down">
<li><a href="?c=<?php echo base64_encode('Expediente'); ?>">Expediente</a></li>
<li><a href="?c=<?php echo base64_encode('Cita'); ?>">Cita</a></li>
<li><a href="?c=<?php echo base64_encode('Consulta'); ?>">Consulta</a></li>
<li><a href="?c=<?php echo base64_encode('Embarazo'); ?>">Embarazo</a></li>
<li><a href="?c=<?php echo base64_encode('Examen'); ?>">Examen</a></li>

<!-- Dropdown Trigger -->
<li><a class="dropdown-trigger btn naranja-ast tooltipped" data-position="bottom" data-tooltip="<?php echo $_SESSION['nombre']. " ". $_SESSION['apellido']; ?>" href='#' data-target='dropdown1'><i class="material-icons">person_pin</i></a></li>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
<li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>&nbsp;</a></li>
<li><a href="?c=<?php echo base64_encode('Login'); ?>" class="naranja-ast-text"><i class="material-icons">exit_to_app</i>Salir</a></li>
      
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons">vpn_key</i>Nueva clave</a></li>
        
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" class="naranja-ast-text"><i class="material-icons">assignment</i>Mis datos</a></li>
</ul>
</ul>

<!-- menú dispositivos móbiles -->
<ul id="nav-mobile" class="sidenav azul-ast">
<li><a class="white-text" href="?c=<?php echo base64_encode('Home'); ?>"><i class="material-icons white-text">home</i>inicio</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Expediente'); ?>"><i class="material-icons white-text">style</i>Expediente</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Cita'); ?>"><i class="material-icons white-text">color_lens</i>Cita</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Consulta'); ?>"><i class="material-icons white-text">supervisor_account</i>Consulta</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Embarazo'); ?>"><i class="material-icons white-text">supervisor_account</i>Embarazo</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Examen'); ?>"><i class="material-icons white-text">supervisor_account</i>Examen</a></li>
<!-- Dropdown Trigger -->
<li><a class="dropdown-trigger btn naranja-ast" href='#' data-target='dropdown2'><i class="material-icons white-text">person_pin</i> Usuario activo</a></li>
<!-- Dropdown Structure -->
<ul id='dropdown2' class='dropdown-content'>
<li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>MENÚ</a></li>
<li><a href="?c=<?php echo base64_encode('Login'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">exit_to_app</i>Salir</a></li>
      
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">vpn_key</i>Nueva clave</a></li>
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">assignment</i>Mis datos</a></li>
</ul>
</ul>
<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
</div>
</nav>
  
<!-- fin de la cabecera -->


<?php }elseif ($_SESSION['idrol'] === '3') { ?>
    
    <nav class="azul-ast" role="navigation" id="nav">
<div class="nav-wrapper container"><a id="logo-container" href="?c=<?php echo base64_encode('Home'); ?>"  >Inicio</a>

<!-- menú dispositivos grandes -->
<ul class="right hide-on-med-and-down">
<li><a href="?c=<?php echo base64_encode('Expediente'); ?>">Expediente</a></li>
<li><a href="?c=<?php echo base64_encode('Embarazo'); ?>">Embarazo</a></li>

<!-- Dropdown Trigger -->
<li><a class="dropdown-trigger btn naranja-ast tooltipped" data-position="bottom" data-tooltip="<?php echo $_SESSION['nombre']. " ". $_SESSION['apellido']; ?>" href='#' data-target='dropdown1'><i class="material-icons">person_pin</i></a></li>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
<li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>&nbsp;</a></li>
<li><a href="?c=<?php echo base64_encode('Login'); ?>" class="naranja-ast-text"><i class="material-icons">exit_to_app</i>Salir</a></li>
      
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons">vpn_key</i>Nueva clave</a></li>
        
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" class="naranja-ast-text"><i class="material-icons">assignment</i>Mis datos</a></li>
</ul>
</ul>

<!-- menú dispositivos móbiles -->
<ul id="nav-mobile" class="sidenav azul-ast">
<li><a class="white-text" href="?c=<?php echo base64_encode('Home'); ?>"><i class="material-icons white-text">home</i>inicio</a></li>
<li><a class=" white-text" href="?c=<?php echo base64_encode('Expediente'); ?>"><i class="material-icons white-text">style</i>Expediente</a></li>

<li><a class=" white-text" href="?c=<?php echo base64_encode('Embarazo'); ?>"><i class="material-icons white-text">supervisor_account</i>Embarazo</a></li>

<!-- Dropdown Trigger -->
<li><a class="dropdown-trigger btn naranja-ast" href='#' data-target='dropdown2'><i class="material-icons white-text">person_pin</i> Usuario activo</a></li>
<!-- Dropdown Structure -->
<ul id='dropdown2' class='dropdown-content'>
<li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>MENÚ</a></li>
<li><a href="?c=<?php echo base64_encode('Login'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">exit_to_app</i>Salir</a></li>
      
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">vpn_key</i>Nueva clave</a></li>
<li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarUsuario'); ?>&idusuario=<?php echo base64_encode($_SESSION["id"]); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">assignment</i>Mis datos</a></li>
</ul>
</ul>
<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
</div>
</nav>
  
<!-- fin de la cabecera -->

<?php } ?>