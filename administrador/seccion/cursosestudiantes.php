<?php include("../template/cabecera.php"); ?>

<?php 

$txtIDEstudiante=(isset($_POST['txtIDEstudiante']))?$_POST['txtIDEstudiante']:"";
$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");




switch($accion){

    



    case "Agregar";

//INSERT INTO CursoEstudiante(ID_Estudiantes, ID_Curso) VALUES (1, 1);

$sentenciaSQL = $conexion->prepare("INSERT INTO CursoEstudiante(ID_Estudiante, ID_Curso) VALUES (:ID_Estudiante, :ID_Curso);");
$sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante); 
$sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso); 

$sentenciaSQL->execute();



    echo "presionado boton Agregar";
    break;

    case "Modificar";
    echo "presionado boton Modificar";
    break;

    case "Cancelar";
    echo "presionado boton Cancelar";
    break;

    case "Seleccionar";
   // echo "presionado boton Seleccionar";
    break;

    case "Borrar";
   // echo "presionado boton Borrar";
   $sentenciaSQL = $conexion->prepare("DELETE FROM CursoEstudiante WHERE ID_Curso = :ID_Curso;");
   $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso);
   $sentenciaSQL->execute();   
    break;
}


$sentenciaSQL = $conexion->prepare("SELECT * FROM CursoEstudiante");
$sentenciaSQL->execute();
$listaCursoEstudiante=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);









?>

<div
    class="col-md-5">
    
    formulario para asignar a los estudiantes con los cursos

    <div class="card">
        <div class="card-header">ID del estudiante y curso:</div>
        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtIDEstudiante">ID del Estudiante:</label>
    <input type="text" class="form-control" name="txtIDEstudiante" id="txtIDEstudiante" placeholder="ID del Estudiante">
    </div>

    <div class = "form-group">
    <label for="txtIDCurso">ID del Curso:</label>
    <input type="text" class="form-control" name="txtIDCurso" id="txtIDCurso" placeholder="ID del Curso">
    </div>
    
    <div class="btn-group" role="group" aria-label="Button group name">
    <button
        type="sumbit"
        name="accion"
        value="Agregar"
        class="btn btn-success"
    >
        Agregar
    </button>
    <button
        type="sumbit"
        name="accion"
        value="Modificar"
        class="btn btn-warning"
    >
        Modificar
    </button>
    <button
        type="sumbit"
        name="accion"
        value="Cancelar"
        class="btn btn-info"
    >
        Cancelar
    </button>
    </div>

    
    
    </form>


        </div>
        
    </div>


    

</div>

<div
    class="col-md-7">

        Tabla de cursos (muestra los datos de los Cursos y Estudiantes)
    
        <div
            class="table table-bordered"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID del Estudiante</th>
                        <th scope="col">ID del Curso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($listaCursoEstudiante as $CursoEstudiante){
                        
                        ?>



                    <tr class="">
                        <td><?php echo $CursoEstudiante['ID_Estudiante']?></td>
                        <td><?php echo $CursoEstudiante['ID_Curso']?></td>





                        <td>
                            
                            Seleccionar | Borrar 

                            <form method="post">

                            <input type="hidden" name="txtIDCurso" id="txtIDCurso" value="<?php echo $CursoEstudiante['ID_Curso']?>"/>
                            
                            <button type="sumbit" name="accion" value="Seleccionar" class="btn btn-primary">Seleccionar</button>

                            <button type="sumbit" name="accion" value="Borrar" class="btn btn-danger">Borrar</button>

                            </form>

                        </td>
                    
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>

</div>


<?php include("../template/pie.php"); ?>