

<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header("Location:../index.php");
}else{

    if($_SESSION['usuario']=="ok"){
        $nombreUsuario=$_SESSION["nombreUsuario"];

    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador del Curso Online</title>
     <!-- Bootstrap CSS v5.2.1 -->
     <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
           
        />






</head>
<body>

<?php $url="http://".$_SERVER['HTTP_HOST']."/CursoOnline" //Me permite direccionar a una url, en este caso la página principal del Curso Online.?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Administrador del Sitio</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/cursos.php">Cursos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/lecciones.php">Lecciones</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/estudiantes.php">Estudiantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/instructores.php">Instructores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/cursosestudiantes.php">Cursos Estudiantes</a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url;?>">Ver sitio web</a>
        </li>

    </ul>
  </nav>



  <div class="container">
    <br>
   <div class="row">



