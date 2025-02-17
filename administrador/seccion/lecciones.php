<?php include("../template/cabecera.php"); ?>

<?php 

$txtIDLeccion=(isset($_POST['txtIDLeccion']))?$_POST['txtIDLeccion']:"";
$txtTituloLeccion=(isset($_POST['txtTituloLeccion']))?$_POST['txtTituloLeccion']:"";
$txtContenidoLeccion=(isset($_POST['txtContenidoLeccion']))?$_POST['txtContenidoLeccion']:"";
$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";


echo $txtIDLeccion."<br/>";
echo $txtTituloLeccion."<br/>";
echo $txtContenidoLeccion."<br/>";
echo $txtIDCurso."<br/>";

echo $accion."<br/>";


switch($accion){


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

        Tabla de cursos (muestra los datos de las lecciones)


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
                        <th scope="col">Contenido</th>
                        <th scope="col">Curso asg.</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>3</td>
                        <td>Leccion de comer</td>
                        <td>Agarrar el tenedor y devorar</td>
                        <td>4</td>
                        <td>Seleccionar | Borrar </td>
                    
                </tbody>
            </table>
        </div>
        
    
</div>

<?php include("../template/pie.php"); ?>