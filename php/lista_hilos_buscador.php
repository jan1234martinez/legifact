<?php
    if(isset($_POST['enviar'])){
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
    }
?>