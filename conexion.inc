<?php
$server     = 'localhost'; //servidor
$username   = 'root'; //usuario de la base de datos
$password   = ''; //password del usuario de la base de datos
$database   = 'basecentro'; //nombre de la base de datos
 
$conexion = new mysqli($server, $username, $password, $database);
if($conexion->connect_errno > 0){die('Imposible conectar [' . $conexion->connect_error . ']');}
?>