<?php

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Encriptación de las contraseñas //
    $contrasena2 = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena2'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header(("location: ../html/perfil.php"));
        exit;
    }
    else{
        echo '
            <script>
                alert("Este usuario no existe, verifica los datos introducidos");
                window.location = "../html/iniciar.html";
            </script>
        ';
        exit;
    }
?>