<?php include("../template/cabecera.php"); ?>

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
    <label for="txtTituloCurso">Titulo:</label>
    <input type="text" class="form-control" name="txtTituloCurso" id="txtTituloCurso" placeholder="Titulo del curso">
    </div>

    <div class = "form-group">
    <label for="txtDescripcionCurso">Descripcion:</label>
    <input type="text" class="form-control" name="txtDescripcionCurso" id="txtDescripcionCurso" placeholder="Descripcion del curso">
    </div>

    

   

    <div class="btn-group" role="group" aria-label="Button group name">
    <button
        type="sumbir"
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

        Tabla de cursos (muestra los datos de los cursos)
    
</div>


<?php include("../template/pie.php"); ?>