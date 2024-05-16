<?php 

    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Encriptación de las contraseñas //
    $contrasena2 = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
    VALUES('$nombre_completo','$correo','$usuario','$contrasena2')";/* Cambiar "nombre_completo" "usuario" etc.. (los incluidos en el parentesis) por el nombre de las columnas*/

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "../html/registrar.html";
            </script>
        ';
        exit();
    }
    
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya está registrado, intenta con otro diferente");
                window.location = "../html/registrar.html";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query); /* Para poder executar el "$query" */

    if ($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../html/iniciar.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Ha surgido un error, intentelo de nuevo");
                window.location = "../html/iniciar.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>