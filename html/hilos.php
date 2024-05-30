<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hilos</title>
        <link rel="stylesheet" type="text/css" href="../css/hilos.css">
    </head>
    <body>
        <div class="main">
            <h1 class="titulo"> HILOS </h1>
            <div class="buscador_boton">
                <form action="../php/lista_hilos_buscador.php" method="POST">
                    <input type="image" name="enviar" src="../multimedia/img/emoji.png">
                    <input type="text" name="busqueda">
                </form>
                <a href="nuevo_hilo.php"> NUEVO HILO </a>
            </div>
            <div class="hilos">
                <?php include("../php/lista_hilos.php");?>
            </div>
        </div>
    </body>
</html>
