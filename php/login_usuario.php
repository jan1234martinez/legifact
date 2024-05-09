<?php

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header(("location: ../html/perfil.html"));
        exit;
    }else{
        echo '
            <script>
                alert("Este usuario no existe, verifica los datos introducidos");
                window.location = "../html/iniciar.html";
            </script>
        ';
        exit;
    }
?>