<?php include("template/cabecera.php");
?>


<?php
    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT * FROM CursoEstudiante");
    $sentenciaSQL->execute();
    $listaCursoEstudiante=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);




?>

<?php 
    foreach($listaCursoEstudiante as $cursoestudiante){

    
?>

<div class="col-md-6">
    
<div class="card">

<div class="card-header">Relación con los cursos y estudiantes</div>
<div class="card-body">

    <h5 class="card-title">Descripcion</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

</div>
</div>
</div>

<?php } ?>



<?php include("template/pie.php");
?>