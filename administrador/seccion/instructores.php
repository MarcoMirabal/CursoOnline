<?php include("../template/cabecera.php"); ?>

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
    <input type="email" class="form-control" name="txtIDCurso" id="txtIDCurso" placeholder="Ingrese el ID del curso asignado">
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

        Tabla de cursos (muestra los datos de los instructores)
    
</div>

<?php include("../template/pie.php"); ?>