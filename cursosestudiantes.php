<?php include("template/cabecera.php");
?>


<?php
    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT ce.ID_Estudiante, ce.ID_Curso, ne.NombreEstudiante, 
    ae.ApellidoEstudiante, tc.Titulo FROM CursoEstudiante AS ce
    INNER JOIN Estudiantes AS e
    ON ce.ID_Estudiante = e.ID_Estudiante
    INNER JOIN Curso AS c
    ON ce.ID_Curso = c.ID_Curso
    INNER JOIN NombreEstudiante AS ne
    ON ce.ID_Estudiante = ne.ID_Estudiante
    INNER JOIN ApellidoEstudiante AS ae
    ON ce.ID_Estudiante = ae.ID_Estudiante
    INNER JOIN TituloCurso AS tc
    ON c.ID_Curso = tc.ID_TituloCurso;");
    $sentenciaSQL->execute();
    $listaCursoEstudiante=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>

<h1 class="display-5 text-center">Lista de los <h1 class="display-5 text-center text-success ">Estudiantes</h1></h1>
<h1 class="display-5 text-center  ">asignados a  Cursos </h1>



<div
    class="">

        
    
        <div class="table">
            <table class="table table-primary">
                <thead>
                    <tr>
                    <th class=table-success scope="col">ID Estudiante:</th>
      <th class=table-success scope="col">Nombre:</th>
      <th class=table-success scope="col">Apellido:</th>
      <th class=table-primary scope="col">ID Curso:</th>
      <th class=table-primary scope="col">Titulo:</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($listaCursoEstudiante as $cursoestudiante){?>

                    <tr class="">
                    <td class=table-success scope="row"><?php echo $cursoestudiante['ID_Estudiante']?></td>
                    <td class=table-success scope="row"><?php echo $cursoestudiante['NombreEstudiante']?></td>
                    <td class=table-success scope="row"><?php echo $cursoestudiante['ApellidoEstudiante']?></td>
                    <td class=table-primary scope="row"><?php echo $cursoestudiante['ID_Curso']?></td>
                    <td class=table-primary scope="row"><?php echo $cursoestudiante['Titulo']?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <br>
</div>





<?php include("template/pie.php");
?>