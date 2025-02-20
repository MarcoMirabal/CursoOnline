
<?php 
session_start();
if($_POST){

    if(($_POST['usuario']=="UsuarioAdmin")&&($_POST['contrasenia']=="administrador")){
      
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="UsuarioAdmin";
        header('Location:inicio.php');
    }
    else{
        $mensaje="Error: El usuario o contraseña son incorrectos";
    }

    
}


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Administrador</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
      <main>





      <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <!-- Formulario de login -->


                    <?php if(isset($mensaje)){ ?>
                        <div
                            class="alert alert-warning"
                            role="alert"
                        >
                             <?php echo $mensaje; ?>
                        </div>
                        <?php } ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control"  name="usuario" required placeholder="Ingrese su nombre de Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contrasenia" required placeholder="Ingrese su contrseña">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                            <a type="submit" href="../index.php" class="btn btn-secondary">Volver al Curso online</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



      </main>
    </body>
</html>




