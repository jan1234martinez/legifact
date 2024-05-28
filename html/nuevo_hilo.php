<?php
    
    session_start();

    include 'conexion.php';
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar sesión para crear un hilo");
                window.location = "iniciar.html;
            </script>
        ';
        session_destroy();
        exit();   
    }

?>

<?php include("header.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/nuevo_hilo.css">
        <title> Nuevo hilo </title>
    </head>
    <body>
        <div class="todo">
            <h1 class="titulo"> Nuevo Hilo </h1>
            <div class="formulario">
                <form action="../php/publicar_hilo.php" method="$_POST">
                    <div>
                        <label for="" > Título: </label> <br>
                        <input type="text" placeholder="Escribe el título de tu hilo aquí" name="titulo" required class="contenido-formulario">
                    </div>
                    <div>
                        <label for=""> Contenido: </label> <br>
                        <textarea type="text" placeholder="Escribe el contenido de tu hilo aquí" name="contenido" rows="10" class="contenido-formulario"></textarea>
                    </div>           
                    <button class="publicar"> PUBLICAR </button>
                </form>
            </div>
        </div>
    </body>
</html>