<?php include("template/cabecera.php");
?>


<?php
    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT e.ID_Estudiante, ne.NombreEstudiante, ae.ApellidoEstudiante, 
                                    ce.numCelularEstudiante, e.Email, e.Calificacion, e.FechaAsignacion
                                    FROM Estudiantes AS e
                                    INNER JOIN NombreEstudiante AS ne
                                    ON e.ID_Estudiante = ne.ID_Estudiante
                                    INNER JOIN ApellidoEstudiante AS ae
                                    ON e.ID_Estudiante = ae.ID_Estudiante
                                    INNER JOIN numCelularEstudiante AS ce
                                    ON e.ID_Estudiante = ce.ID_Estudiante;");
$sentenciaSQL->execute();
$listaEstudiantes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);




?>

<?php 
    foreach($listaCurso as $curso){

    
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