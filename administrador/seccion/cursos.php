<?php include("../template/cabecera.php"); ?>
<?php 

$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";
$txtIDTituloCurso=(isset($_POST['txtIDTituloCurso']))?$_POST['txtIDTituloCurso']:"";
$txtTituloCurso=(isset($_POST['txtTituloCurso']))?$_POST['txtTituloCurso']:"";
$txtDescripcionCurso=(isset($_POST['txtDescripcionCurso']))?$_POST['txtDescripcionCurso']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");


switch($accion){

    //INSERT INTO Curso(ID_Curso, ID_TituloCurso) VALUES (NULL, 1);
    //INSERT INTO TituloCurso(ID_TituloCurso, Titulo, Descripcion) VALUES (NULL, 'Curso 1', 'No se que va pero ok');

    $sentenciaSQL = $conexion->prepare("INSERT INTO Curso(ID_TituloCurso) VALUES (:ID_TituloCurso);");
    $sentenciaSQL = $conexion->prepare("INSERT INTO TituloCurso(Titulo, Descripcion) VALUES (:Titulo, :Descripcion);");

    $sentenciaSQL->bindParam(':ID_TituloCurso', $txtIDTituloCurso); 
    $sentenciaSQL->bindParam(':Titulo', $txtTituloCurso); 
    $sentenciaSQL->bindParam(':Descripcion', $txtDescripcionCurso); 
    $sentenciaSQL->execute();




    case "Agregar";
    echo "presionado boton Agregar";
    break;

    case "Modificar";
    echo "presionado boton Modificar";
    break;

    case "Cancelar";
    echo "presionado boton Cancelar";
    break;
}













?>


<div
    class="col-md-5">
    
    formulario de agregar/insertar cursos


    <div class="card">
        <div class="card-header">Datos del curso:</div>
        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtIDCurso">ID:</label>
    <input type="text" class="form-control" name="txtIDCurso" id="txtIDCurso" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtIDTituloCurso">ID Titulo:</label>
    <input type="text" class="form-control" name="txtIDTituloCurso" id="txtIDTituloCurso" placeholder="ID TituloCurso">
    </div>


    <div class = "form-group">
    <label for="txtTituloCurso">Titulo:</label>
    <input type="text" class="form-control" name="txtTituloCurso" id="txtTituloCurso" placeholder="Titulo del curso">
    </div>

    <div class = "form-group">
    <label for="txtDescripcionCurso">Descripcion:</label>
    <input type="text" class="form-control" name="txtDescripcionCurso" id="txtDescripcionCurso" placeholder="Descripcion del curso">
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
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>3</td>
                        <td>3</td>
                        <td>Curso de la comida</td>
                        <td>CURSO SOSBRE TODO LO QUE TIENE QUE VER CON COMER Y ESO</td>
                        <td>Seleccionar | Borrar </td>
                    
                </tbody>
            </table>
        </div>

</div>


<?php include("../template/pie.php"); ?>