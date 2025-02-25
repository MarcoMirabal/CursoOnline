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


header("Location:cursosestudiantes.php");



   // echo "presionado boton Agregar";
    break;

    case "Modificar";
   // echo "presionado boton Modificar";


   $sentenciaSQL = $conexion->prepare("UPDATE CursoEstudiante SET ID_Estudiante=:ID_Estudiante WHERE ID_Curso = :ID_Curso;");
   $sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);
   $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso);
   $sentenciaSQL->execute();


   header("Location:cursosestudiantes.php");
   
    break;

    case "Cancelar";


    //echo "presionado boton Cancelar";
    header("Location:cursosestudiantes.php");




    break;

    case "Seleccionar";
   // echo "presionado boton Seleccionar";
    $sentenciaSQL = $conexion->prepare("SELECT * FROM CursoEstudiante WHERE ID_Curso = :ID_Curso;");
    $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso);
    $sentenciaSQL->execute();

    $CursoEstudiante=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $txtIDCurso=$CursoEstudiante['ID_Curso'];
    $txtIDEstudiante=$CursoEstudiante['ID_Estudiante'];



    break;

    case "Borrar";
   // echo "presionado boton Borrar";
   $sentenciaSQL = $conexion->prepare("DELETE FROM CursoEstudiante WHERE ID_Curso = :ID_Curso;");
   $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso);
   $sentenciaSQL->execute();   


   header("Location:cursosestudiantes.php");
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
    <input type="text" required class="form-control" value="<?php echo $txtIDEstudiante?>"  name="txtIDEstudiante" id="txtIDEstudiante" placeholder="ID del Estudiante">
    </div>

    <div class = "form-group">
    <label for="txtIDCurso">ID del Curso:</label>
    <input type="text" required class="form-control" value="<?php echo $txtIDCurso?>"  name="txtIDCurso" id="txtIDCurso" placeholder="ID del Curso">
    </div>
    
    <div class="btn-group" role="group" aria-label="Button group name">
    <button
        type="sumbit"
        name="accion"
        <?php echo ($accion=="Seleccionar")?"disabled":"";?> 
        value="Agregar"
        class="btn btn-success"
    >
        Agregar
    </button>
    <button
        type="sumbit"
        name="accion"
        <?php echo ($accion!="Seleccionar")?"disabled":"";?> 
        value="Modificar"
        class="btn btn-warning"
    >
        Modificar
    </button>
    <button
        type="sumbit"
        name="accion"
        <?php echo ($accion!="Seleccionar")?"disabled":"";?> 
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