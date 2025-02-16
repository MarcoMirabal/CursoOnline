<?php include("../template/cabecera.php"); ?>

<?php 

$txtIDEstudiante=(isset($_POST['txtIDEstudiante']))?$_POST['txtIDEstudiante']:"";
$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $txtIDEstudiante."<br/>";
echo $txtIDCurso."<br/>";

echo $accion."<br/>";


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
                    <tr class="">
                        <td>3</td>
                        <td>3</td>
                        <td>Seleccionar | Borrar </td>
                    
                </tbody>
            </table>
        </div>

</div>


<?php include("../template/pie.php"); ?>