<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "sis_venta";
    $puerto = 3309;

    $conexion = mysqli_connect($host,$user,$clave,$bd, $puerto);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
    //hola
?>
