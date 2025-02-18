<?php include("../template/cabecera.php"); ?>

<?php 

$txtIDInstructor=(isset($_POST['txtIDInstructor']))?$_POST['txtIDInstructor']:"";
$txtNombreInstructor=(isset($_POST['txtNombreInstructor']))?$_POST['txtNombreInstructor']:"";
$txtApellidoInstructor=(isset($_POST['txtApellidoInstructor']))?$_POST['txtApellidoInstructor']:"";
$txtEspecialidadInstructor=(isset($_POST['txtEspecialidadInstructor']))?$_POST['txtEspecialidadInstructor']:"";
$txtEmailInstructor=(isset($_POST['txtEmailInstructor']))?$_POST['txtEmailInstructor']:"";
$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");


switch($accion){

       


        case "Agregar";


 //INSERT INTO NombreInstructor(ID_Instructor, NombreInstructor) VALUES (1, 'Ignacio');
        //INSERT INTO ApellidoInstructor(ID_Instructor, ApellidoInstructor) VALUES (1, 'Ferro');
        //INSERT INTO Instructores(ID_Curso, Especialidad, Email) VALUES (NULL, 'igna@coso.com', 'tecnico en las artes inexistentes');

        $sentenciaSQL = $conexion->prepare("INSERT INTO Instructores(ID_Curso, Especialidad, Email) VALUES (:ID_Curso, :Especialidad, :Email);"); 
        $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso); 
        $sentenciaSQL->bindParam(':Especialidad', $txtEspecialidadInstructor); 
        $sentenciaSQL->bindParam(':Email', $txtEmailInstructor); 
        
        $sentenciaSQL->execute();

        $sentenciaSQL = $conexion->prepare("INSERT INTO NombreInstructor(ID_Instructor, NombreInstructor) VALUES (:ID_Instructor, :NombreInstructor);");
        $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor); 
        $sentenciaSQL->bindParam(':NombreInstructor', $txtNombreInstructor); 

        $sentenciaSQL->execute();

        $sentenciaSQL = $conexion->prepare("INSERT INTO ApellidoInstructor(ID_Instructor, ApellidoInstructor) VALUES (:ID_Instructor, :ApellidoInstructor);");
       
        $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor); 
        $sentenciaSQL->bindParam(':ApellidoInstructor', $txtApellidoInstructor); 
        
        $sentenciaSQL->execute();





        echo "presionado boton Agregar";
        break;

        case "Modificar";
        echo "presionado boton Modificar";
        break;

        case "Cancelar";
        echo "presionado boton Cancelar";
        break;
}


$sentenciaSQL = $conexion->prepare("SELECT * FROM Instructores");
$sentenciaSQL->execute();
$listaInstructores=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT * FROM NombreInstructor");
$sentenciaSQL->execute();
$listaNombreInstructor=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

$sentenciaSQL = $conexion->prepare("SELECT * FROM ApellidoInstructor");
$sentenciaSQL->execute();
$listaApellidoInstructor=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



?>

<div
    class="col-md-5">
    
    formulario de agregar/insertar instructores

    <div class="card">
        <div class="card-header">Datos del instructor:</div>
        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtIDInstructor">ID:</label>
    <input type="text" class="form-control" name="txtIDInstructor" id="txtIDInstructor" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombreInstructor">Nombre:</label>
    <input type="text" class="form-control" name="txtNombreInstructor" id="txtNombreInstructor" placeholder="Nombre del Instructor">
    </div>

    <div class = "form-group">
    <label for="txtApellidoInstructor">Apellido:</label>
    <input type="text" class="form-control" name="txtApellidoInstructor" id="txtApellidoInstructor" placeholder="Apellido del instructor">
    </div>

    <div class = "form-group">
    <label for="txtEspecialidadInstructor">Especialidad:</label>
    <input type="int" class="form-control" name="txtEspecialidadInstructor" id="txtEspecialidadInstructor" placeholder="Especialidad del Instructor">
    </div>

    <div class = "form-group">
    <label for="txtEmailInstructor">Email:</label>
    <input type="email" class="form-control" name="txtEmailInstructor" id="txtEmailInstructor" placeholder="Email del instructor (solo puede tener uno)">
    </div>

    <div class = "form-group">
    <label for="txtIDCurso">Curso Asignado:</label>
    <input type="int" class="form-control" name="txtIDCurso" id="txtIDCurso" placeholder="Ingrese el ID del curso asignado">
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

        Tabla de cursos (muestra los datos de los instructores)

        <div
            class="table table-bordered"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Email</th>
                        <th scope="col">Curso asg.</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>3</td>
                        <td>Arturo</td>
                        <td>Azcuenaga</td>
                        <td>nada</td>
                        <td>arturito@ar.com</td>
                        <td>5</td>
                        <td>Seleccionar | Borrar </td>
                    
                </tbody>
            </table>
        </div>
</div>

<?php include("../template/pie.php"); ?>