
<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: perfil.php");
    };

?>

<?php include("header.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../css/iniciar.css">
    <title>Legifact</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo"> INICIAR SESIÓN </h1>
        <div class="caja_login"> 
            <div class="contenedor-login"><!--Contenedor para iniciar sesión con 
            una cuenta creada anteriormente-->
                <form action="../php/login_usuario.php" method="POST" class="formulario_login">
                    <input type="text" placeholder="Correo Electrónico" name="correo"> <br>
                    <input type="password" placeholder="Contraseña" name="contrasena"> <br>
                    <button class="enviar" type="submit"> Iniciar Sesión </button>  
                </form>
            </div>
            <div class="caja_register"><!--Caja para los que no tengan cuenta y vayan
                a la zona de registro-->
                <h3>¿No tienes una cuenta?</h3>
                <p> Regístrate para acceder a nuestra página</p>
                <a href="registrar.php"> Registrarse </a>
            </div> 
        </div>
    </div>
</body>
</html>