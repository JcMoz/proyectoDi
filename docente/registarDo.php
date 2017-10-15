<?php
include_once '../conexion/php_conexion.php';
$nombre =$_POST["nom"];
$apellido =$_POST["apellido"];
$direc =$_POST["direccion"];
$tel =$_POST["tel"];
$sexo =$_POST["genero"];
$fec =$_POST["fecha"];
$co =$_POST["correo"];
$np =$_POST["nit"];
$nt =$_POST["nit"];
$du =$_POST["dui"];
$esp =$_POST["especialidad"];
$insertar="INSERT INTO docente (nom_doc,ape_doc,dir_doc,tel_doc,gen_doc,f_nac_doc,cor_doc,nip_doc,nit,dui_doc,esp_doc) VALUES('$nombre',$apellido,$direc',$tel',$sexo',$fec',$co',$np',$nt',$du',$esp')";
$resultado=  mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo'error al registrar';
}  else {
    echo 'ususario registrado';
}
?>

