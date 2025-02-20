<?php
    $host = 'A0AFBD11C605\SQLEXPRESS';
    $bd = 'CursoOnline';
    $usuario = 'UsuarioAdmin';
    $contrasenia = 'administrador';


    try {

        $conexion = new PDO ("sqlsrv:Server=$host;Database=$bd;", NULL, NULL);

        

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        

    } catch (PDOException $ex){
        echo "Error de conexión: " . $ex->getMessage();
    }
?>