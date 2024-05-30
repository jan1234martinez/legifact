<link rel="stylesheet" type="text/css" href="../css/hilos.css">

<?php 

    include("conexion.php");
    $query=mysqli_query($conexion,"select * from hilos where ehilo=1");
    $n=mysqli_num_rows($query);
    for($i=1;$i<=$n;$i++){
        $fila=mysqli_fetch_array($query);
        $idhilo=$fila[0];
        $titulo=$fila[1];
        $contenido=$fila[2];
        $fhilo=$fila[3];
        $usuario=$fila[4];
        $ehilo=$fila[5];

        echo("<div class='conjunto'>
                <a class='usuario' href='../html/perfil.php'>$usuario </a> <br>
                <a class='titulo_hilo' href='../html/hilo_completo.php'>$titulo</a>
            </div>    
        ");
    }

    /*if(isset($_POST['enviar'])){
        $busqueda=$_POST["busqueda"];

        $consulta = $con->query("SELECT * FROM hilos WHERE titulo or contenido LIKE '%$busqueda%'");

        while ($fila_buscar = $consulta->fetch_array()){
            $idhilo_buscar=$fila_buscar[0];
            $titulo_buscar=$fila_buscar[1];
            $contenido_buscar=$fila_buscar[2];
            $fhilo_buscar=$fila_buscar[3];
            $usuario_buscar=$fila_buscar[4];
            $ehilo_buscar=$fila_buscar[5];

            echo("<div class='conjunto'>
                <a class='usuario' href='../html/perfil.php'> $usuario_buscar </a> <br>
                <a class='titulo_hilo' href='../html/hilo_completo.php'> $titulo_buscar </a>
            </div>    
        ");
        }
    }*/
    
    
?>