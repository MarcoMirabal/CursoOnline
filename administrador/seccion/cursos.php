<?php include("../template/cabecera.php"); ?>
<?php 

$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";
$txtTituloCurso=(isset($_POST['txtTituloCurso']))?$_POST['txtTituloCurso']:"";
$txtDescripcionCurso=(isset($_POST['txtDescripcionCurso']))?$_POST['txtDescripcionCurso']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";


echo $txtIDCurso."<br/>";
echo $txtTituloCurso."<br/>";
echo $txtDescripcionCurso."<br/>";
echo $accion."<br/>";






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
                        <td>Curso de la comida</td>
                        <td>CURSO SOSBRE TODO LO QUE TIENE QUE VER CON COMER Y ESO</td>
                        <td>Seleccionar | Borrar </td>
                    
                </tbody>
            </table>
        </div>

</div>


<?php include("../template/pie.php"); ?>