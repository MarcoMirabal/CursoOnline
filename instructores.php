<?php include("template/cabecera.php");
?>


<?php
    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT i.ID_Instructor, ni.NombreInstructor, ai.ApellidoInstructor, 
    i.Especialidad, i.Email, i.ID_Curso
    FROM Instructores AS i 
    INNER JOIN NombreInstructor AS ni
    ON i.ID_Instructor = ni.ID_Instructor
    INNER JOIN ApellidoInstructor AS ai
    ON i.ID_Instructor = ai.ID_Instructor;");
$sentenciaSQL->execute();
$listaInstructores=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);





?>

<h1 class="display-5 text-center text-warning">Instructores</h1>


<?php 
    foreach($listaInstructores as $instructor){

    
?>

<div class="col-md-4">
    
<div class="card" style="width: 18rem;">
  <img src="img/instructor_icono.png" class="card-img-top" style="padding: 20px;"alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $instructor['NombreInstructor']?> <?php echo $instructor['ApellidoInstructor']?> </h5>
    <p class="card-text"><?php echo $instructor['Especialidad']?> </p>
    <p class="card-text">Email: <?php echo $instructor['Email']?> </p>
    <h4 class="">Curso Asignado: <span class="badge text-bg-warning"><?php echo $instructor['ID_Curso']?></span></h4>
  </div>
</div>
<br>
</div>



<?php } ?>


<?php include("template/pie.php");
?>