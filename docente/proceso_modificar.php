
<?php
include_once'../conexion/php_conexion.php';
include_once '../plantilla/incio_plantilla.php';
try {
$id=$_REQUEST['id'];
$imagen= addslashes(file_get_contents($_FILES['imagenG']['tmp_name']));

$query1="UPDATE docente SET foto_doc='$imagen' WHERE id_doc='$id'";
$resultado1=$conexion->query($query1);

	 echo '<script>swal({
                    title: "Exito",
                    text: "Foto actualizada!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="buscarDocente.php";
                    
                });</script>';
} catch (Exception $exc) {
    echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
}
?>