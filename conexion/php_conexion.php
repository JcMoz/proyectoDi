<?php

$conexion = mysqli_connect("localhost", "root", "", "basecentro");

if (!$conexion) {
    echo"Error de conexion a la Base de Datos";
    exit;
} else {
    echo"buena conexion";
}
?>