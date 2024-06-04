<?php
    session_start();
    $titulo=$_POST["titulo"];
    //echo($titulo);
    $contenido=$_POST["contenido"];
    date_default_timezone_set("Europe/Madrid");
    $fecha=Date("Y-m-d H:i:s");
    $usuario=$_SESSION["usuario"];
    include("conexion.php");
    $estado=1;
    $query="INSERT INTO hilos(titulo, contenido, fhilo, usuario, ehilo)
    VALUES('$titulo', '$contenido', '$fecha', '$usuario', '$estado')";
    //echo($query);
    $ejecutar = mysqli_query($conexion, $query);
    echo($ejecutar);
    header("location: ../html/hilos.php");

    
?>