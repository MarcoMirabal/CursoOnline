<?php include("template/cabecera.php");
?>


<?php
    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT l.ID_Leccion, l.ID_TituloLecciones, 
                                    l.ID_Curso, tl.Titulo, tl.Contenido
                                    FROM Lecciones AS l
                                    INNER JOIN TituloLecciones AS tl 
                                    ON tl.ID_TituloLecciones = l.ID_TituloLecciones;");
$sentenciaSQL->execute();
$listaLecciones=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);




?>

<?php 
    foreach($listaLecciones as $leccion){

    
?>

<div class="col-md-6">
    
<div class="card">

<div class="card-header">


    <img
        src="image source"
        class="img-fluid rounded-top"
        alt=""
    />
    

    <img  src="img/leccion_icono.png" style="height: 150px; width:150px;"class="card-img-top rounded mx-auto d-block" alt="...">
<br>

    <h4 class="card-subtitle mb-2 text-body-">
    Titulo: <?php echo $leccion['Titulo']?>
    </h4>
   
</div>
<div class="card-body">

    <h5 class="card-title">Descripcion</h5>
    <p class="card-text"><?php echo $leccion['Contenido']?></p>

    <h4 class="">Curso Asignado: <span class="badge text-bg-success"><?php echo $leccion['ID_Curso']?></span></h4>




    
    

</div>
</div>
<br>
</div>


<?php } ?>



<?php include("template/pie.php");
?>