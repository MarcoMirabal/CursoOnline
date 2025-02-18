<?php include("../template/cabecera.php"); ?>

<?php 

$txtIDLeccion=(isset($_POST['txtIDLeccion']))?$_POST['txtIDLeccion']:"";
$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";
$txtIDTituloLeccion=(isset($_POST['txtIDTituloLeccion']))?$_POST['txtIDTituloLeccion']:"";
$txtTituloLeccion=(isset($_POST['txtTituloLeccion']))?$_POST['txtTituloLeccion']:"";
$txtContenidoLeccion=(isset($_POST['txtContenidoLeccion']))?$_POST['txtContenidoLeccion']:"";


$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");


switch($accion){

    //Tengo una duda importante sobre cómo se van a cargar los datos usando el ID_Lecciones y el ID_TituloLecciones. 
    // Estaba pensando en crear un nuevo txtIDTituloLecciones, pero la verdad no sé si agregarlo
    //Bueno, al final lo agregue... como es una clave foránea, tenía que ponerla porque sinó no se relacionaban las tablas.
    //En todo caso, debería ser automático, pero bueno, el IDTitulo es igual al IDTitloLeccion.

    //Esto pasa en la tabla Lecciones y la tabla Curso, ya que ambas se modificaron en la 3era forma normal.


    //Tiene explicación, al ser una clave primaria, no puedo cambiarle los valores o agregarlos, ya que es
    //una identidad incremental. Por eso aparece como NULL.


    //INSERT INTO TituloLecciones(ID_TituloLecciones, Titlo, Contenido) VALUES (NULL, 'alskdlafd', 'aodfioasdi');
    //INSERT INTO Lecciones(ID_Lecciones, ID_Curso, ID_TituloLecciones) VALUES (NULL, 1, 1);

    case "Agregar";

    $sentenciaSQL = $conexion->prepare("INSERT INTO TituloLecciones(Titlo, Contenido) VALUES (:Titulo, :Contenido);");
    $sentenciaSQL->bindParam(':Titulo', $txtTituloLeccion); 
    $sentenciaSQL->bindParam(':Contenido', $txtContenidoLeccion); 
    $sentenciaSQL->execute();

    $sentenciaSQL = $conexion->prepare("INSERT INTO Lecciones(ID_Curso, ID_TituloLecciones) VALUES (:ID_Curso, :ID_TituloLecciones);");
    $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso); 
    $sentenciaSQL->bindParam(':ID_TituloLecciones', $txtIDTitulolLeccion); 
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



$sentenciaSQL = $conexion->prepare("SELECT l.ID_Leccion, l.ID_TituloLecciones, 
                                    l.ID_Curso, tl.Titulo, tl.Contenido
                                    FROM Lecciones AS l
                                    INNER JOIN TituloLecciones AS tl 
                                    ON tl.ID_TituloLecciones = l.ID_TituloLecciones;");
$sentenciaSQL->execute();
$listaLecciones=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);






?>

<div
    class="col-md-4">
    
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
    <label for="txtIDTituloLeccion">ID Titulo:</label>
    <input type="text" class="form-control" name="txtIDTituloLeccion" id="txtIDTituloLeccion" placeholder="ID TituloLeccion">
    </div>

    <div class = "form-group">
    <label for="txtIDCurso">Curso asignado:</label>
    <input type="int" class="form-control" name="txtIDCurso" id="txtIDCurso" placeholder="Ingresar ID del curso asignado">
    </div>


    <div class = "form-group">
    <label for="txtTituloLeccion">Titulo:</label>
    <input type="text" class="form-control" name="txtTituloLeccion" id="txtTituloLeccion" placeholder="Titulo de la Leccion">
    </div>

    <div class = "form-group">
    <label for="txtContenidoLeccion">Contenido:</label>
    <input type="text" class="form-control" name="txtContenidoLeccion" id="txtContenidoLeccion" placeholder="Contenido de la Leccion">
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
    class="col-md-8">

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
                        <th scope="col">ID Titulo</th>
                        <th scope="col">Curso asg.</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Contenido</th>
                        
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                




                <tbody>
                <?php foreach($listaLecciones as $Lecciones){
                ?>
                
                
                
                    <tr class="">
                        <td><?php echo $Lecciones['ID_Leccion']?></td>
                        <td><?php echo $Lecciones['ID_TituloLecciones']?></td>
                        <td><?php echo $Lecciones['ID_Curso']?></td>
                        <td><?php echo $Lecciones['Titulo']?></td>
                        <td><?php echo $Lecciones['Contenido']?></td>

                        <td>
                            
                            Seleccionar | Borrar 

                            <form method="post">

                            <input type="text" name="txtIDLeccion" id="txtIDLeccion" value="<?php echo $Lecciones['ID_Leccion']?>"/>
                            
                            <input type="sumbit" name="accion" value="Borrar" class="btn btn-danger"/>

                            </form>

                        </td>


                    </tr>
                
                <?php } 
                    ?>

                </tbody>
            </table>
        </div>
        

                
    
</div>

<?php include("../template/pie.php"); ?>