<?php include("template/cabecera.php");
?>


<?php
    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT c.ID_Curso, c.ID_TituloCurso, tc.Titulo, tc.Descripcion
    FROM Curso AS c
    INNER JOIN TituloCurso AS tc
    ON tc.ID_TituloCurso = c.ID_TituloCurso;");
$sentenciaSQL->execute();
$listaCurso=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);




?>


<h1 class="display-5 text-center">Cursos</h1>

<?php 
    foreach($listaCurso as $curso){

    
?>



<div class="col-md-6">
    
<div class="card">

<div class="card-header">


   
    

    <img  src="img/curso_icono.png" style="height: 150px; width:150px;"class="card-img-top mx-auto d-block" alt="...">
    <h4 card-subtitle mb-2 text-body-secondary>
    Titulo: <?php echo $curso['Titulo']?>
    </h4>
   
</div>
<div class="card-body">

    <h5 class="card-title">Descripcion</h5>
    <p class="card-text"><?php echo $curso['Descripcion']?></p>


    
    

</div>
</div>
<br>
</div>


<?php } ?>



<?php include("template/pie.php");
?>