<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: perfil.php");
    };

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/iniciar.css">
</head>
<body>
    <main class="Registro">
        <title>Legifact</title>
        <div class="contenedor">

            <div class="caja_login">

                <div class="caja_register"><!--Caja para los que no tengan cuenta y vayan
                    a la zona de registro-->
                    <h3>¿No tienes una cuenta?</h3>
                    <p> Regístrate para acceder a nuestra página</p>
                    <button id="boton_registrar">Registrarse</button>
                </div> 
                
                <div class="contenedor-login"><!--Contenedor para iniciar sesión con 
                una cuenta creada anteriormente-->
                    <form action="../php/login_usuario.php" method="POST" class="formulario_login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electrónico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Confirmar</button>
                        <button>Cancelar</button>
                    </form>
                </div>

            </div>
        </div>
    </main>
</body>
</html>