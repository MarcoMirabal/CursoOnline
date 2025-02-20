<?php
    $host = 'A0AFBD11C605\SQLEXPRESS';
    $bd = 'CursoOnline';
    $usuario = 'root';
    $contrasenia = '';


    try {

        $conexion = new PDO ("sqlsrv:Server=$host;Database=$bd;", $usuario, $contrasenia);

        

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        

    } catch (PDOException $ex){
        echo "Error de conexión: " . $ex->getMessage();
    }
?>