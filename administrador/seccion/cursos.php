<?php include("../template/cabecera.php"); ?>
<?php 

$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";
$txtIDTituloCurso=(isset($_POST['txtIDTituloCurso']))?$_POST['txtIDTituloCurso']:"";
$txtTituloCurso=(isset($_POST['txtTituloCurso']))?$_POST['txtTituloCurso']:"";
$txtDescripcionCurso=(isset($_POST['txtDescripcionCurso']))?$_POST['txtDescripcionCurso']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");


switch($accion){





    case "Agregar";

    //INSERT INTO Curso(ID_Curso, ID_TituloCurso) VALUES (NULL, 1);
    //INSERT INTO TituloCurso(ID_TituloCurso, Titulo, Descripcion) VALUES (NULL, 'Curso 1', 'No se que va pero ok');

   
    $sentenciaSQL = $conexion->prepare("INSERT INTO TituloCurso(Titulo, Descripcion) VALUES (:Titulo, :Descripcion);");

    $sentenciaSQL->bindParam(':Titulo', $txtTituloCurso);
    $sentenciaSQL->bindParam(':Descripcion', $txtDescripcionCurso); 
    $sentenciaSQL->execute();
    
    $lastID = $conexion->lastInsertId();

    $sentenciaSQL = $conexion->prepare("INSERT INTO Curso(ID_TituloCurso) VALUES (:ID_TituloCurso);");
    $sentenciaSQL->bindParam(':ID_TituloCurso', $lastID);
    $sentenciaSQL->execute();




    header("Location:cursos.php");


    //echo "presionado boton Agregar";
    break;






    case "Modificar";
    //echo "presionado boton Modificar";

    $sentenciaSQL = $conexion->prepare("UPDATE TituloCurso SET Titulo=:Titulo, Descripcion=:Descripcion
                WHERE ID_TituloCurso = :ID_TituloCurso;");
    $sentenciaSQL->bindParam(':Titulo', $txtTituloCurso); 
    $sentenciaSQL->bindParam(':Descripcion', $txtDescripcionCurso); 
    $sentenciaSQL->bindParam(':ID_TituloCurso', $txtIDTituloCurso); 
    $sentenciaSQL->execute();

  

    $sentenciaSQL = $conexion->prepare("UPDATE Curso SET ID_TituloCurso=:ID_TituloCurso
        WHERE ID_Curso = :ID_Curso");
    
    $sentenciaSQL->bindParam(':ID_TituloCurso', $txtIDTituloCurso); 
    $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso); 
    $sentenciaSQL->execute();

    break;

    case "Cancelar";



    //echo "presionado boton Cancelar";
    header("Location:cursos.php");
    break;






    case "Seleccionar";
    //echo "presionado boton Seleccionar";
    $sentenciaSQL = $conexion->prepare("SELECT c.ID_Curso, c.ID_TituloCurso, tc.Titulo, tc.Descripcion
    FROM Curso AS c
    INNER JOIN TituloCurso AS tc
    ON tc.ID_TituloCurso = c.ID_TituloCurso
    WHERE c.ID_Curso = :ID_Curso;");
    $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso);
    $sentenciaSQL->execute();

    $Cursos=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $txtIDTituloCurso=$Cursos['ID_TituloCurso'];
    $txtTituloCurso=$Cursos['Titulo'];
    $txtDescripcionCurso=$Cursos['Descripcion'];
    break;
    







    case "Borrar";
    //echo "presionado boton Borrar";
    $sentenciaSQL = $conexion->prepare("DELETE FROM Curso WHERE ID_Curso = :ID_Curso;");
    $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso);
    $sentenciaSQL->execute();   
    $sentenciaSQL = $conexion->prepare("DELETE FROM TituloCurso WHERE ID_TituloCurso = :ID_TituloCurso;");
    $sentenciaSQL->bindParam(':ID_TituloCurso', $txtIDTituloCurso);
    $sentenciaSQL->execute();   


    header("Location:cursos.php");
    break;
}




$sentenciaSQL = $conexion->prepare("SELECT c.ID_Curso, c.ID_TituloCurso, tc.Titulo, tc.Descripcion
                                    FROM Curso AS c
                                    INNER JOIN TituloCurso AS tc
                                    ON tc.ID_TituloCurso = c.ID_TituloCurso;");
$sentenciaSQL->execute();
$listaCurso=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);









?>


<div
    class="col-md-4">
    
    formulario de agregar/insertar cursos


    <div class="card">
        <div class="card-header">Datos del curso:</div>
        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtIDCurso">ID:</label>
    <input type="text" required readonly class="form-control" value="<?php echo $txtIDCurso?>"  name="txtIDCurso" id="txtIDCurso" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtIDTituloCurso">ID Titulo:</label>
    <input type="text" required readonly class="form-control" value="<?php echo $txtIDTituloCurso?>"  name="txtIDTituloCurso" id="txtIDTituloCurso" placeholder="ID TituloCurso">
    </div>


    <div class = "form-group">
    <label for="txtTituloCurso">Titulo:</label>
    <input type="text" required class="form-control" value="<?php echo $txtTituloCurso?>"  name="txtTituloCurso" id="txtTituloCurso" placeholder="Titulo del curso">
    </div>

    <div class = "form-group">
    <label for="txtDescripcionCurso">Descripcion:</label>
    <input type="text" required class="form-control" value="<?php echo $txtDescripcionCurso?>"  name="txtDescripcionCurso" id="txtDescripcionCurso" placeholder="Descripcion del curso">
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
    class="col-md-8">

        Tabla de cursos (muestra los datos de los cursos)

        <div
            class="table table-bordered"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID Titulo</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>

                <?php foreach($listaCurso as $Cursos){
                ?>


                    <tr class="">
                        <td><?php echo $Cursos['ID_Curso']?></td>
                        <td><?php echo $Cursos['ID_TituloCurso']?></td>
                        <td><?php echo $Cursos['Titulo']?></td>
                        <td><?php echo $Cursos['Descripcion']?></td>




                        <td>
                            
                           

                            <form method="post">

                            
                            <input type="hidden" name="txtIDCurso" id="txtIDCurso" value="<?php echo $Cursos['ID_Curso']?>"/>
                            
                            <button type="sumbit" name="accion" value="Seleccionar" class="btn btn-primary">Seleccionar</button>

                            <button type="sumbit" name="accion" value="Borrar" class="btn btn-danger">Borrar</button>

                            </form>

                        </td>
                    
                    </tr>

                        <?php }?>

                </tbody>
            </table>
        </div>

</div>


<?php include("../template/pie.php"); ?>