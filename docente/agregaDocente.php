<?php
include_once '../conexion/php_conexion.php';
$id = $_POST['id-do'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombreDo'];
$apellido = $_POST['apellidosDo'];
$dir = $_POST['direccionDo'];
$tel = $_POST['telDo'];
//$ge =$_POST['genero'];
//$fe =$_POST['fecha'];
$correo =$_POST['coDo'];
$nip =$_POST['nip'];
$nit =$_POST['nit'];
$dui =$_POST['dui'];
$esp =$_POST['esp'];
//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Edicion':
		mysql_query("UPDATE docente SET nom_doc = '$nombre', ape_doc='$apellido',dir_doc='$dir',tel_doc='$tel',cor_doc='$correo' WHERE id_doc = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM docente");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

 echo '<table class="table table-striped table-condensed table-hover">

                    <tr>
                        <th width="50">Acción</th>
                        <th width="200">Nombres</th>
                        <th width="150">Apellidos</th>
                        <th width="150">Teléfono</th>
                        <th width="300">Dirección</th>
                    </tr>';
                    include_once '../conexion/php_conexion.php';
                    $registro = mysql_query("SELECT * FROM docente");
                    while ($registro2 = mysql_fetch_array($registro)) {
                        echo '<tr>
                            <td><!--boton de modificar-->
                               <a href="javascript:editarProducto('.$registro2['id_doc'].');" >Editar</a>
                            </td>
                            <td>' . $registro2['nom_doc'] . '</td>
                            <td>' . $registro2['ape_doc'] . '</td>
                            <td>' . $registro2['tel_doc'] . '</td>
                            <td>' . $registro2['dir_doc'] . '</td>
                        </tr>';
                    }
                echo'</table>';
?>

