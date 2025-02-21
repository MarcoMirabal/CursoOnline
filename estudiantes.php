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

<h1 class="display-5 text-center text-warning">Estudiantes</h1>


<?php 
    foreach($listaEstudiantes as $estudiantes){

    
?>

<div class="col-md-4">
    
<div class="card" style="width: 18rem;">
  <img src="img/estudiante_icono.png" class="card-img-top" style="padding: 20px;"alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $estudiantes['NombreEstudiante']?> <?php echo $estudiantes['ApellidoEstudiante']?> </h5>
    <p class="card-text">Numero de Celular: <span class="badge text-bg-warning"><?php echo $estudiantes['numCelularEstudiante']?></span></p>
    <p class="card-text">Calificación: <span class="badge text-bg-warning"><?php echo $estudiantes['Calificacion']?></span></p>
    <p class="card-text">Fecha de Asignación: <span class="badge text-bg-warning"><?php echo $estudiantes['FechaAsignacion']?></span></p>



    
  </div>
</div>
<br>
</div>



<?php } ?>


<?php include("template/pie.php");
?>