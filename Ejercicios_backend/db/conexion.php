<?php

    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = 'mi_proyecto';

    $conexion = new mysqli($host, $usuario, $contraseña, $basedatos, 3308);

    if ($conexion->connect_errno) {
        echo "fallos en conexion";
        exit();
    }

?>