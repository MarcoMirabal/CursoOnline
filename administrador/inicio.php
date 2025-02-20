<?php include("template/cabecera.php");
?>



<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenido, <?php echo $nombreUsuario;?></h1>
        <p class="col-md-8 fs-4">
            En esta sección va a poder gestionar la información de la Base de Datos CursoOnline.
        </p>
        <p>Nota: Si bien funciona el CRUD, hay (por lo menos) un detalle; los atributos multivaluados no se han respetado 
            correctamente, aunque la BD tenga las tablas creadas en la 1era forma normal. Además, el usuario no está vinculado
            con el de la BD. 
        </p>
       
    </div>
</div>



<?php include("template/pie.php");
?>





   


