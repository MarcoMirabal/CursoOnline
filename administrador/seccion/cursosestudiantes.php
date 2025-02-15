<?php include("../template/cabecera.php"); ?>

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

        Tabla de cursos (muestra los datos de los Cursos y Estudiantes)
    
</div>


<?php include("../template/pie.php"); ?>