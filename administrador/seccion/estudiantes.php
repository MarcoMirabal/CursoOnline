<?php include("../template/cabecera.php"); ?>

<?php 

$txtIDEstudiante=(isset($_POST['txtIDEstudiante']))?$_POST['txtIDEstudiante']:"";
$txtNombreEstudiante=(isset($_POST['txtNombreEstudiante']))?$_POST['txtNombreEstudiante']:"";
$txtApellidoEstudiante=(isset($_POST['txtApellidoEstudiante']))?$_POST['txtApellidoEstudiante']:"";
$txtnumCelularEstudiante=(isset($_POST['txtnumCelularEstudiante']))?$_POST['txtnumCelularEstudiante']:"";
$txtEmailEstudiante=(isset($_POST['txtEmailEstudiante']))?$_POST['txtEmailEstudiante']:"";
$txtCalificacionEstudiante=(isset($_POST['txtCalificacionEstudiante']))?$_POST['txtCalificacionEstudiante']:"";
$txtFechaAsignacionEstudiante=(isset($_POST['txtFechaAsignacionEstudiante']))?$_POST['txtFechaAsignacionEstudiante']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";


echo $txtIDEstudiante."<br/>";
echo $txtNombreEstudiante."<br/>";
echo $txtApellidoEstudiante."<br/>";
echo $txtnumCelularEstudiante."<br/>";
echo $txtEmailEstudiante."<br/>";
echo $txtCalificacionEstudiante."<br/>";
echo $txtFechaAsignacionEstudiante."<br/>";

echo $accion."<br/>";




switch($accion){


    //INSERT INTO Estudiantes(Email, Calificacion, FechaAsignacion) VALUES ('guilled@gmail.com', 8, '2023-11-15');
    //INSERT INTO NombreEstudiante(ID_Estudiante, NombreEstudiante) VALUES (1, 'Eduardo');
    //INSERT INTO ApellidoEstudiante(ID_Estudiante, ApellidoEstudiante) VALUES (1, 'Alarcón');
    //INSERT INTO numCelularEstudiante(ID_Estudiante, numCelularEstudiante) VALUES (1, '1193293931');

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
    
    formulario de agregar/insertar estudiantes

    <div class="card">
        <div class="card-header">Datos del estudiante:</div>
        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data">

<div class = "form-group">
<label for="txtIDEstudiante">ID:</label>
<input type="text" class="form-control" name="txtIDEstudiante" id="txtIDEstudiante" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombreEstudiante">Nombre:</label>
<input type="text" class="form-control" name="txtNombreEstudiante" id="txtNombreEstudiante" placeholder="Nombre del Estudiante">
</div>

<div class = "form-group">
<label for="txtApellidoEstudiante">Apellido:</label>
<input type="text" class="form-control" name="txtApellidoEstudiante" id="txtApellidoEstudiante" placeholder="Apellido del Estudiante">
</div>

<div class = "form-group">
<label for="txtnumCelularEstudiante">Numero Celular:</label>
<input type="int" class="form-control" name="txtnumCelularEstudiante" id="txtnumCelularEstudiante" placeholder="Telefono del Estudiante">
</div>

<div class = "form-group">
<label for="txtEmailEstudiante">Email:</label>
<input type="email" class="form-control" name="txtEmailEstudiante" id="txtEmailEstudiante" placeholder="Email del Estudiante(solo puede ingresar uno)">
</div>

<div class = "form-group">
<label for="txtCalificacionEstudiante">Calificacion:</label>
<input type="text" class="form-control" name="txtCalificacionEstudiante" id="txtCalificacionEstudiante" placeholder="Calificacion del Estudiante">
</div>

<div class = "form-group">
<label for="txtFechaAsignacionEstudiante">FechaAsignacion:</label>
<input type="text" class="form-control" name="txtFechaAsignacionEstudiante" id="txtFechaAsignacionEstudiante" placeholder="Fecha de Asignacion de la Calificacion">
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

        Tabla de cursos (muestra los datos de los estudiantes)

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
                        <th scope="col">Numero celular</th>
                        <th scope="col">Email</th>
                        <th scope="col">Calificacion</th>
                        <th scope="col">FechaAsignacion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>3</td>
                        <td>Coso</td>
                        <td>Cosito</td>
                        <td>11123123123</td>
                        <td>cosito@cosito.com</td>
                        <td>2</td>
                        <td>10/10/2003</td>
                        <td>Seleccionar | Borrar </td>
                    
                </tbody>
            </table>
        </div>
    
</div>

<?php include("../template/pie.php"); ?>