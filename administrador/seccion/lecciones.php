<?php include("../template/cabecera.php"); ?>
<div
    class="col-md-5">
    
    formulario de agregar/insertar lecciones

    <div class="card">
        <div class="card-header">Datos de la leccion:</div>
        <div class="card-body">
            

            <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtIDLeccion">ID:</label>
    <input type="text" class="form-control" name="txtIDLeccion" id="txtIDLeccion" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtTituloLeccion">Titulo:</label>
    <input type="text" class="form-control" name="txtTituloLeccion" id="txtTituloLeccion" placeholder="Titulo de la Leccion">
    </div>

    <div class = "form-group">
    <label for="txtContenidoLeccion">Contenido:</label>
    <input type="text" class="form-control" name="txtContenidoLeccion" id="txtContenidoLeccion" placeholder="Contenido de la Leccion">
    </div>

    <div class = "form-group">
    <label for="txtIDCurso">Curso asignado:</label>
    <input type="int" class="form-control" name="txtIDCurso" id="txtIDCurso" placeholder="Ingresar ID del curso asignado">
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

        Tabla de cursos (muestra los datos de las lecciones)
    
</div>

<?php include("../template/pie.php"); ?>