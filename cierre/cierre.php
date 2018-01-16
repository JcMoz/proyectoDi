<?php
include '../conexion/php_conexion.php';
//pasar la informacion de tabla alumno a la tabla de cierre
mysqli_query($conexion,"INSERT INTO c_inscripcion
SELECT*FROM inscripcion");
//***************
mysqli_query($conexion,"");

?>

<script>
    location.href="../doc/principal.php";
</script>
