<?php 
require_once 'model/login.php';
session_start(); 
    if ($_SESSION['usuarioSesion']==null || $_SESSION['usuarioSesion']=='') 
    {
        session_destroy();  
        header('location: ?c=Usuario');
    }
    else
    
     


 ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Anexsoft</title>
        
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	</head>
    <body>
        
    <div class="container">
        <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
      

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="?c=Alumno"><i class='glyphicon glyphicon-list-alt'></i> Alumnos <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="?c=Curso"><i class='glyphicon glyphicon-barcode'></i> Cursos</a></li>
        <li class=""><a href="clientes.php"><i class='glyphicon glyphicon-user'></i> Clientes</a></li>
        <li class=""><a href="usuarios.php"><i  class='glyphicon glyphicon-lock'></i> Usuarios</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php    echo "Bienvenido:     "; echo $_SESSION['usuarioSesion']; ?></a></li>


        
        <li><a href="?c=login&a=Logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
