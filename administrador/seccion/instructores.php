<?php include("../template/cabecera.php"); ?>

<?php 

$txtIDInstructor=(isset($_POST['txtIDInstructor']))?$_POST['txtIDInstructor']:"";
$txtNombreInstructor=(isset($_POST['txtNombreInstructor']))?$_POST['txtNombreInstructor']:"";
$txtApellidoInstructor=(isset($_POST['txtApellidoInstructor']))?$_POST['txtApellidoInstructor']:"";
$txtEspecialidadInstructor=(isset($_POST['txtEspecialidadInstructor']))?$_POST['txtEspecialidadInstructor']:"";
$txtEmailInstructor=(isset($_POST['txtEmailInstructor']))?$_POST['txtEmailInstructor']:"";
$txtIDCurso=(isset($_POST['txtIDCurso']))?$_POST['txtIDCurso']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";


include("../config/bd.php");


switch($accion){

       


        case "Agregar";


 //INSERT INTO NombreInstructor(ID_Instructor, NombreInstructor) VALUES (1, 'Ignacio');
        //INSERT INTO ApellidoInstructor(ID_Instructor, ApellidoInstructor) VALUES (1, 'Ferro');
        //INSERT INTO Instructores(ID_Curso, Especialidad, Email) VALUES (NULL, 'igna@coso.com', 'tecnico en las artes inexistentes');

        $sentenciaSQL = $conexion->prepare("INSERT INTO Instructores(ID_Curso, Especialidad, Email) VALUES (:ID_Curso, :Especialidad, :Email);"); 
        $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso); 
        $sentenciaSQL->bindParam(':Especialidad', $txtEspecialidadInstructor); 
        $sentenciaSQL->bindParam(':Email', $txtEmailInstructor); 
        
        $sentenciaSQL->execute();

        $lastID = $conexion->lastInsertId();

        $sentenciaSQL = $conexion->prepare("INSERT INTO NombreInstructor(ID_Instructor, NombreInstructor) VALUES (:ID_Instructor, :NombreInstructor);");
        $sentenciaSQL->bindParam(':ID_Instructor', $lastID); 
        $sentenciaSQL->bindParam(':NombreInstructor', $txtNombreInstructor); 

        $sentenciaSQL->execute();

        $sentenciaSQL = $conexion->prepare("INSERT INTO ApellidoInstructor(ID_Instructor, ApellidoInstructor) VALUES (:ID_Instructor, :ApellidoInstructor);");
       
        $sentenciaSQL->bindParam(':ID_Instructor', $lastID); 
        $sentenciaSQL->bindParam(':ApellidoInstructor', $txtApellidoInstructor); 
        
        $sentenciaSQL->execute();


        header("Location:instructores.php");


       // echo "presionado boton Agregar";
        break;

        case "Modificar";
        //echo "presionado boton Modificar";

        $sentenciaSQL = $conexion->prepare("UPDATE Instructores
                SET Especialidad=:Especialidad,
                Email=:Email,
                ID_Curso=:ID_Curso
                WHERE ID_Instructor=:ID_Instructor;
    ");
        $sentenciaSQL->bindParam(':Especialidad', $txtEspecialidadInstructor);
        $sentenciaSQL->bindParam(':Email', $txtEmailInstructor);
        $sentenciaSQL->bindParam(':ID_Curso', $txtIDCurso);
        $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor);


        
        
        $sentenciaSQL->execute();


    //Modificar la tabla NombreInstructor


        // $lastID = $conexion->lastInsertId(); no se usa porque no estamos insertando datos, solo actualizarlos. En su lugar ponemos txtIDInstructor 

        $sentenciaSQL = $conexion->prepare("UPDATE NombreInstructor
        SET NombreInstructor=:NombreInstructor WHERE ID_Instructor=:ID_Instructor;
    ");

        $sentenciaSQL->bindParam(':NombreInstructor', $txtNombreInstructor);
        $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor);

        $sentenciaSQL->execute();

        //Modificar la tabla ApellidoInsturctor

        $sentenciaSQL = $conexion->prepare("UPDATE ApellidoInstructor
        SET ApellidoInstructor=:ApellidoInstructor WHERE ID_Instructor=:ID_Instructor;  
    ");
        $sentenciaSQL->bindParam(':ApellidoInstructor', $txtApellidoInstructor);
        $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor);

        $sentenciaSQL->execute();



        

        header("Location:instructores.php");
        break;

        case "Cancelar";




        //echo "presionado boton Cancelar";
        header("Location:instructores.php");



        break;

        case "Seleccionar";
        //echo "presionado boton Seleccionar";


        $sentenciaSQL = $conexion->prepare("SELECT i.ID_Instructor, ni.NombreInstructor, ai.ApellidoInstructor, 
        i.Especialidad, i.Email, i.ID_Curso
        FROM Instructores AS i 
        INNER JOIN NombreInstructor AS ni
        ON i.ID_Instructor = ni.ID_Instructor
        INNER JOIN ApellidoInstructor AS ai
        ON i.ID_Instructor = ai.ID_Instructor
        WHERE i.ID_Instructor = :ID_Instructor;");
        $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor);


        $sentenciaSQL->execute();



        $Instructores=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    $txtIDInstructor=$Instructores['ID_Instructor'];
    $txtNombreInstructor=$Instructores['NombreInstructor'];
    $txtApellidoInstructor=$Instructores['ApellidoInstructor'];
    $txtEspecialidadInstructor=$Instructores['Especialidad'];
    $txtEmailInstructor=$Instructores['Email'];
    $txtIDCurso=$Instructores['ID_Curso'];
    




        break;

        case "Borrar";
       // echo "presionado boton Borrar";
      
       $sentenciaSQL = $conexion->prepare("DELETE FROM NombreInstructor WHERE ID_Instructor = :ID_Instructor;");
       $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor);
       $sentenciaSQL->execute();   
       $sentenciaSQL = $conexion->prepare("DELETE FROM ApellidoInstructor WHERE ID_Instructor = :ID_Instructor;");
       $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor);
       $sentenciaSQL->execute();   
       $sentenciaSQL = $conexion->prepare("DELETE FROM Instructores WHERE ID_Instructor = :ID_Instructor;");
       $sentenciaSQL->bindParam(':ID_Instructor', $txtIDInstructor);
       $sentenciaSQL->execute();   

       header("Location:instructores.php");

        break;
}


$sentenciaSQL = $conexion->prepare("SELECT i.ID_Instructor, ni.NombreInstructor, ai.ApellidoInstructor, 
                                    i.Especialidad, i.Email, i.ID_Curso
                                    FROM Instructores AS i 
                                    INNER JOIN NombreInstructor AS ni
                                    ON i.ID_Instructor = ni.ID_Instructor
                                    INNER JOIN ApellidoInstructor AS ai
                                    ON i.ID_Instructor = ai.ID_Instructor;");
$sentenciaSQL->execute();
$listaInstructores=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);





?>

<div
    class="col-md-5">
    
    formulario de agregar/insertar instructores

    <div class="card">
        <div class="card-header">Datos del instructor:</div>
        <div class="card-body">
            
        <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtIDInstructor">ID:</label>
    <input type="text" required readonly class="form-control"  value="<?php echo $txtIDInstructor?>"  name="txtIDInstructor" id="txtIDInstructor" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombreInstructor">Nombre:</label>
    <input type="text" required class="form-control" value="<?php echo $txtNombreInstructor?>" name="txtNombreInstructor" id="txtNombreInstructor" placeholder="Nombre del Instructor">
    </div>

    <div class = "form-group">
    <label for="txtApellidoInstructor">Apellido:</label>
    <input type="text" required class="form-control" value="<?php echo $txtApellidoInstructor?>" name="txtApellidoInstructor" id="txtApellidoInstructor" placeholder="Apellido del Instructor">
    </div>

    <!--  
    <div class = "form-group">
    <label for="txtApellidoInstructor">Apellido:</label>
    <input type="text" class="form-control" value=" <?php //echo $txtApellidoInstructor?> " name="txtApellidoInstructor" id="txtApellidoInstructor" placeholder="Apellido del instructor">
    </div>

    !-->

    <div class = "form-group">
    <label for="txtEspecialidadInstructor">Especialidad:</label>
    <input type="int" class="form-control" value="<?php echo $txtEspecialidadInstructor?>"   name="txtEspecialidadInstructor" id="txtEspecialidadInstructor" placeholder="Especialidad del Instructor">
    </div>

    <div class = "form-group">
    <label for="txtEmailInstructor">Email:</label>
    <input type="email" class="form-control" value="<?php echo $txtEmailInstructor?>"  name="txtEmailInstructor" id="txtEmailInstructor" placeholder="Email del instructor (solo puede tener uno)">
    </div>

    <div class = "form-group">
    <label for="txtIDCurso">Curso Asignado:</label>
    <input type="int" class="form-control" value="<?php echo $txtIDCurso?>"  name="txtIDCurso" id="txtIDCurso" placeholder="Ingrese el ID del curso asignado">
    </div>



    <div class="btn-group" role="group" aria-label="Button group name">
    <button
        type="sumbit"
        name="accion"
        <?php echo ($accion=="Seleccionar")?"disabled":"";?> 
        value="Agregar"
        class="btn btn-success"
    >
        Agregar
    </button>
    <button
        type="sumbit"
        name="accion"
        <?php echo ($accion!="Seleccionar")?"disabled":"";?> 
        value="Modificar"
        class="btn btn-warning"
    >
        Modificar
    </button>
    <button
        type="sumbit"
        name="accion"
        <?php echo ($accion!="Seleccionar")?"disabled":"";?> 
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

        Tabla de cursos (muestra los datos de los instructores)

        


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
                        <th scope="col">Especialidad</th>
                        <th scope="col">Email</th>
                        <th scope="col">Curso asg.</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($listaInstructores as $Instructores){
                        
                ?>



                    <tr class="">
                    <td><?php echo $Instructores['ID_Instructor']?></td>
                    <td><?php echo $Instructores['NombreInstructor']?></td>
                    <td><?php echo $Instructores['ApellidoInstructor']?></td>
                    <td><?php echo $Instructores['Especialidad']?></td>
                    <td><?php echo $Instructores['Email']?></td>
                    <td><?php echo $Instructores['ID_Curso']?></td>



                    <td>
                            
                           

                            <form method="post">

                            <input type="hidden" name="txtIDInstructor" id="txtIDInstructor" value="<?php echo $Instructores['ID_Instructor']?>"/>
                            
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