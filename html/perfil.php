<?php
    
    session_start();

    include 'conexion.php';
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar sesión para acceder a tu perfil");
                window.location = "iniciar.html;
            </script>
        ';
        session_destroy();
        exit();   
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <header class="header">
            <title>Legifact</title>
			<a href="index.html">INICIO</a>
            <a href="tendencias.html">TENDENCIAS</a>
            <a href="hilos.html">HILOS</a>
            <a href="comunidades.html">COMUNIDADES</a>
			<img src="../multimedia/img/a">
			<img src="../multimedia/img/a">
		</header>
    </body>
</html>