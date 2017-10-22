<?php
include('../conexion/php_conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM docente WHERE id_doc = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['nom_doc'], 
				1 => $valores2['ape_doc'], 
				2 => $valores2['dir_doc'], 
				3 => $valores2['tel_doc'],
                                4=> $valores2['cor_doc'], 
				5 => $valores2['nip_doc'], 
				6 => $valores2['nit'], 
				7 => $valores2['dui_doc'],
                                8 => $valores2['esp_doc'],
				);
echo json_encode($datos);
?>