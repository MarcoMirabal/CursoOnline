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



include("../config/bd.php");


switch($accion){


   



    case "Agregar";


 //INSERT INTO Estudiantes(ID_Estudiantes, Email, Calificacion, FechaAsignacion) VALUES (NULL, 'guilled@gmail.com', 8, '2023-11-15');
    //INSERT INTO NombreEstudiante(ID_Estudiante, NombreEstudiante) VALUES (1, 'Eduardo');
    //INSERT INTO ApellidoEstudiante(ID_Estudiante, ApellidoEstudiante) VALUES (1, 'Alarcón');
    //INSERT INTO numCelularEstudiante(ID_Estudiante, numCelularEstudiante) VALUES (1, '1193293931');


    $sentenciaSQL = $conexion->prepare("INSERT INTO Estudiantes(Email, Calificacion, FechaAsignacion) VALUES (:Email, :Calificacion, :FechaAsignacion);");
    $sentenciaSQL->bindParam(':Email', $txtEmailEstudiante); 
    $sentenciaSQL->bindParam(':Calificacion', $txtCalificacionEstudiante); 
    $sentenciaSQL->bindParam(':FechaAsignacion', $txtFechaAsignacionEstudiante);


    $sentenciaSQL->execute();

    $lastID = $conexion->lastInsertId();

    $sentenciaSQL = $conexion->prepare("INSERT INTO NombreEstudiante(NombreEstudiante, ID_Estudiante) VALUES (:NombreEstudiante, :ID_Estudiante);");
    $sentenciaSQL->bindParam(':ID_Estudiante', $lastID);
    $sentenciaSQL->bindParam(':NombreEstudiante', $txtNombreEstudiante); 
    $sentenciaSQL->execute(); 



    $sentenciaSQL = $conexion->prepare("INSERT INTO ApellidoEstudiante(ApellidoEstudiante, ID_Estudiante) VALUES (:ApellidoEstudiante, :ID_Estudiante);");
    $sentenciaSQL->bindParam(':ID_Estudiante', $lastID);
    $sentenciaSQL->bindParam(':ApellidoEstudiante', $txtApellidoEstudiante);
    
    $sentenciaSQL->execute();
    $sentenciaSQL = $conexion->prepare("INSERT INTO numCelularEstudiante(numCelularEstudiante, ID_Estudiante) VALUES (:numCelularEstudiante, :ID_Estudiante);");
    $sentenciaSQL->bindParam(':ID_Estudiante', $lastID); 
    $sentenciaSQL->bindParam(':numCelularEstudiante', $txtnumCelularEstudiante); 

    $sentenciaSQL->execute();



    //echo "presionado boton Agregar";
    break;

    case "Modificar";
    //echo "presionado boton Modificar";



    $sentenciaSQL = $conexion->prepare("UPDATE Estudiantes
    SET Email=:Email,
    Calificacion=:Calificacion,
    FechaAsignacion=:FechaAsignacion
    WHERE ID_EStudiante=:ID_Estudiante;
");
$sentenciaSQL->bindParam(':Email', $txtEmailEstudiante);
$sentenciaSQL->bindParam(':Calificacion', $txtCalificacionEstudiante);
$sentenciaSQL->bindParam(':FechaAsignacion', $txtFechaAsignacionEstudiante);
$sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);




$sentenciaSQL->execute();


//Modificar la tabla NombreInstructor


// $lastID = $conexion->lastInsertId(); no se usa porque no estamos insertando datos, solo actualizarlos. En su lugar ponemos txtIDInstructor 

$sentenciaSQL = $conexion->prepare("UPDATE NombreEstudiante
SET NombreEstudiante=:NombreEstudiante WHERE ID_Estudiante=:ID_Estudiante;
");

$sentenciaSQL->bindParam(':NombreEstudiante', $txtNombreEstudiante);
$sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);

$sentenciaSQL->execute();

//Modificar la tabla ApellidoInsturctor

$sentenciaSQL = $conexion->prepare("UPDATE ApellidoEstudiante
SET ApellidoEstudiante=:ApellidoEstudiante WHERE ID_Estudiante=:ID_Estudiante;  
");
$sentenciaSQL->bindParam(':ApellidoEstudiante', $txtApellidoEstudiante);
$sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);

$sentenciaSQL->execute();

$sentenciaSQL = $conexion->prepare("UPDATE numCelularEstudiante
SET numCelularEstudiante=:numCelularEstudiante WHERE ID_Estudiante=:ID_Estudiante;  
");
$sentenciaSQL->bindParam(':numCelularEstudiante', $txtnumCelularEstudiante);
$sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);

$sentenciaSQL->execute();





    break;

    case "Cancelar";
    echo "presionado boton Cancelar";
    break;

    case "Seleccionar";
   // echo "presionado boton Seleccionar";


   $sentenciaSQL = $conexion->prepare("SELECT e.ID_Estudiante, ne.NombreEstudiante, ae.ApellidoEstudiante, 
   ce.numCelularEstudiante, e.Email, e.Calificacion, e.FechaAsignacion
   FROM Estudiantes AS e
   INNER JOIN NombreEstudiante AS ne
   ON e.ID_Estudiante = ne.ID_Estudiante
   INNER JOIN ApellidoEstudiante AS ae
   ON e.ID_Estudiante = ae.ID_Estudiante
   INNER JOIN numCelularEstudiante AS ce
   ON e.ID_Estudiante = ce.ID_Estudiante
   WHERE e.ID_Estudiante = :ID_Estudiante;");
   $sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);

$sentenciaSQL->execute();

$Estudiantes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $txtIDEstudiante=$Estudiantes['ID_Estudiante'];
    $txtNombreEstudiante=$Estudiantes['NombreEstudiante'];
    $txtApellidoEstudiante=$Estudiantes['ApellidoEstudiante'];
    $txtnumCelularEstudiante=$Estudiantes['numCelularEstudiante'];
    $txtEmailEstudiante=$Estudiantes['Email'];
    $txtCalificacionEstudiante=$Estudiantes['Calificacion'];
    $txtFechaAsignacionEstudiante=$Estudiantes['FechaAsignacion'];






    break;

    case "Borrar";
   // echo "presionado boton Borrar";
   
   $sentenciaSQL = $conexion->prepare("DELETE FROM NombreEstudiante WHERE ID_Estudiante = :ID_Estudiante;");
   $sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);
   $sentenciaSQL->execute();   
   $sentenciaSQL = $conexion->prepare("DELETE FROM ApellidoEstudiante WHERE ID_Estudiante = :ID_Estudiante;");
   $sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);
   $sentenciaSQL->execute();   
   $sentenciaSQL = $conexion->prepare("DELETE FROM numCelularEstudiante WHERE ID_Estudiante = :ID_Estudiante;");
   $sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);
   $sentenciaSQL->execute();   
   $sentenciaSQL = $conexion->prepare("DELETE FROM Estudiantes WHERE ID_Estudiante = :ID_Estudiante;");
   $sentenciaSQL->bindParam(':ID_Estudiante', $txtIDEstudiante);
   $sentenciaSQL->execute();   
    break;


}


$sentenciaSQL = $conexion->prepare("SELECT e.ID_Estudiante, ne.NombreEstudiante, ae.ApellidoEstudiante, 
                                    ce.numCelularEstudiante, e.Email, e.Calificacion, e.FechaAsignacion
                                    FROM Estudiantes AS e
                                    INNER JOIN NombreEstudiante AS ne
                                    ON e.ID_Estudiante = ne.ID_Estudiante
                                    INNER JOIN ApellidoEstudiante AS ae
                                    ON e.ID_Estudiante = ae.ID_Estudiante
                                    INNER JOIN numCelularEstudiante AS ce
                                    ON e.ID_Estudiante = ce.ID_Estudiante;");
$sentenciaSQL->execute();
$listaEstudiantes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);






?>

<div
    class="col-md-4">
    
    formulario de agregar/insertar estudiantes

    <div class="card">
        <div class="card-header">Datos del estudiante:</div>
        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data">

<div class = "form-group">
<label for="txtIDEstudiante">ID:</label>
<input type="text" class="form-control" value="<?php echo $txtIDEstudiante?>"  name="txtIDEstudiante" id="txtIDEstudiante" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombreEstudiante">Nombre:</label>
<input type="text" class="form-control" value="<?php echo $txtNombreEstudiante?>"  name="txtNombreEstudiante" id="txtNombreEstudiante" placeholder="Nombre del Estudiante">
</div>

<div class = "form-group">
<label for="txtApellidoEstudiante">Apellido:</label>
<input type="text" class="form-control"  value="<?php echo $txtApellidoEstudiante?>"  name="txtApellidoEstudiante" id="txtApellidoEstudiante" placeholder="Apellido del Estudiante">
</div>

<div class = "form-group">
<label for="txtnumCelularEstudiante">Numero Celular:</label>
<input type="tel" class="form-control"  value="<?php echo $txtnumCelularEstudiante?>" name="txtnumCelularEstudiante" id="txtnumCelularEstudiante" placeholder="Telefono del Estudiante">
</div>

<div class = "form-group">
<label for="txtEmailEstudiante">Email:</label>
<input type="email" class="form-control"  value="<?php echo $txtEmailEstudiante?>"  name="txtEmailEstudiante" id="txtEmailEstudiante" placeholder="Email del Estudiante(solo puede ingresar uno)">
</div>

<div class = "form-group">
<label for="txtCalificacionEstudiante">Calificacion:</label>
<input type="text" class="form-control" value="<?php echo $txtCalificacionEstudiante?>"  name="txtCalificacionEstudiante" id="txtCalificacionEstudiante" placeholder="Calificacion del Estudiante">
</div>

<div class = "form-group">
<label for="txtFechaAsignacionEstudiante">FechaAsignacion:</label>
<input type="date" class="form-control" value="<?php echo $txtFechaAsignacionEstudiante?>"  name="txtFechaAsignacionEstudiante" id="txtFechaAsignacionEstudiante" placeholder="Fecha de Asignacion de la Calificacion">
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

                <?php foreach($listaEstudiantes as $Estudiantes){
                        
                        ?>
                    <tr class="">
                        <td><?php echo $Estudiantes['ID_Estudiante']?></td>
                        <td><?php echo $Estudiantes['NombreEstudiante']?></td>
                        <td><?php echo $Estudiantes['ApellidoEstudiante']?></td>
                        <td><?php echo $Estudiantes['numCelularEstudiante']?></td>
                        <td><?php echo $Estudiantes['Email']?></td>
                        <td><?php echo $Estudiantes['Calificacion']?></td>
                        <td><?php echo $Estudiantes['FechaAsignacion']?></td>




                         <td>
                            
                            

                            <form method="post">

                            <input type="hidden" name="txtIDEstudiante" id="txtIDEstudiante" value="<?php echo $Estudiantes['ID_Estudiante']?>"/>
                            
                            <button type="sumbit" name="accion" value="Seleccionar" class="btn btn-primary">Seleccionar</button>

                            <button type="sumbit" name="accion" value="Borrar" class="btn btn-danger">Borrar</button>

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








<?php
//Código usando el lastID:


/*
1. Insertar en la tabla Estudiantes y obtener el ID del estudiante
$sentenciaSQL = $conexion->prepare("INSERT INTO Estudiantes(Email, Calificacion, FechaAsignacion) VALUES (:Email, :Calificacion, :FechaAsignacion);");
$sentenciaSQL->bindParam(':Email', $txtEmailEstudiante); 
$sentenciaSQL->bindParam(':Calificacion', $txtCalificacionEstudiante); 
$sentenciaSQL->bindParam(':FechaAsignacion', $txtFechaAsignacionEstudiante);
$sentenciaSQL->execute();

2. Obtener el ID_Estudiante generado (último ID insertado)
$lastID = $conexion->lastInsertId();  // Esto obtiene el último ID insertado en la tabla Estudiantes

3. Insertar en la tabla NombreEstudiante con el ID_Estudiante generado
$sentenciaSQL = $conexion->prepare("INSERT INTO NombreEstudiante(NombreEstudiante, ID_Estudiante) VALUES (:NombreEstudiante, :ID_Estudiante);");
$sentenciaSQL->bindParam(':ID_Estudiante', $lastID);  // Usamos el ID_Estudiante generado
$sentenciaSQL->bindParam(':NombreEstudiante', $txtNombreEstudiante); 
$sentenciaSQL->execute(); 

4. Insertar en la tabla ApellidoEstudiante con el ID_Estudiante generado
$sentenciaSQL = $conexion->prepare("INSERT INTO ApellidoEstudiante(ApellidoEstudiante, ID_Estudiante) VALUES (:ApellidoEstudiante, :ID_Estudiante);");
$sentenciaSQL->bindParam(':ID_Estudiante', $lastID);  // Usamos el ID_Estudiante generado
$sentenciaSQL->bindParam(':ApellidoEstudiante', $txtApellidoEstudiante);
$sentenciaSQL->execute();

5. Insertar en la tabla numCelularEstudiante con el ID_Estudiante generado
$sentenciaSQL = $conexion->prepare("INSERT INTO numCelularEstudiante(numCelularEstudiante, ID_Estudiante) VALUES (:numCelularEstudiante, :ID_Estudiante);");
$sentenciaSQL->bindParam(':ID_Estudiante', $lastID);  // Usamos el ID_Estudiante generado
$sentenciaSQL->bindParam(':numCelularEstudiante', $txtnumCelularEstudiante); 
$sentenciaSQL->execute(); 
 */
?>