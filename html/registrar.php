<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registrar.css">
</head>
<body>
    <main>
        <div class="contenedor">

            <div class="caja_registro"> <!--Caja al lado de la zona de registro
            para que lleve a la zona de inicio de sesión-->
                <h3>¿ Ya tienes una cuenta?</h3>
                <p> Inicia sesión para acceder a nuestra página</p>
                <button id="boton_iniciar_sesion">Iniciar Sesión</button>
            </div> 

            <div class="formulario_registro"> <!--Donde los usuarios se registraran en la 
            página web-->
                <form action="../php/inicio_registro.php" method="POST" class="formulario_registro">
    
                    <h2>Regístrate</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Crear cuenta</button>
                    <button>Cancelar</button>
    
                </form>
            </div>
            
        </div>
    
    </main>
</body>
</html>
