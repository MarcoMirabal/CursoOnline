<?php include("../template/cabecera.php"); ?>

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
<input type="text" class="form-control" name="txtnombreLeccion" id="txtNombreLeccion" placeholder="Nombre del Estudiante">
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
    class="btn btn-success"
>
    Agregar
</button>
<button
    type="sumbit"
    class="btn btn-warning"
>
    Modificar
</button>
<button
    type="sumbit"
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
    
</div>

<?php include("../template/pie.php"); ?>