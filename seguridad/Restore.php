<?php
include '../plantilla/incio_plantilla.php';
include './Connet.php';
$restorePoint=SGBD::limpiarCadena($_POST['restorePoint']);
$sql=explode(";",file_get_contents($restorePoint));
$totalErrors=0;
set_time_limit (60);
$con=mysqli_connect(SERVER, USER, PASS, BD);
$con->query("SET FOREIGN_KEY_CHECKS=0");
for($i = 0; $i < (count($sql)-1); $i++){
    if($con->query($sql[$i].";")){  }else{ $totalErrors++; }
}
$con->query("SET FOREIGN_KEY_CHECKS=1");
$con->close();
if($totalErrors<=0){
     echo '<script>swal({
                    title: "Exito",
                    text: "Restauracion completada!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="crearCopiaSeguridad.php";
                    
                });</script>';
	//echo "Restauración completada con éxito";
}else{
     echo '<script>swal({
                    title: "Error",
                    text: "Restauracion de seguridad detenida!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="crearCopiaSeguridad.php";
                    
                });</script>';
	//echo "Ocurrio un error inesperado, no se pudo hacer la restauración completamente";
}
