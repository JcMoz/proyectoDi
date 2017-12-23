<?php
session_start();
include_once '../conexion/php_conexion.php';
include_once '../plantilla/incio_plantilla.php';
try {
    if ($_SESSION['tipo_user'] == 'ad' or $_SESSION['tipo_user'] == 'p') {
        $profesor = $_SESSION['id_profesor'];
        $sacar = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc='$profesor'");

        while ($row = mysqli_fetch_array($sacar)) {
            $nombre = $row['nom_doc'];
            $ape = $row['ape_doc'];
        }
    }
} catch (Exception $exc) {
    echo '<script>swal("EROR", "Favor revisar los datos e intentar nuevamente", "error");</script>';
}
?>
<?php
//body
include_once '../plantilla/incio_plantilla.php';
if ($_SESSION['tipo_user'] == 'ad') {
    include_once '../plantilla/menu_navegacion.php';
} else {
    if ($_SESSION['tipo_user'] == 'p') {
        include_once '../plantilla/menu_navegacion_1.php';
    }
}
$grado = $_GET['ir'];
$materia = $_GET['llego'];
$alumno=$_GET['id'];

$verificar_insert=  mysqli_query($conexion,"SELECT*FROM notas_2 WHERE id_inscripcion='$alumno'");
while ($x=  mysqli_fetch_array($verificar_insert)){
    $id_ins=$x['id_inscripcion'];
   $mat_z=$x['id_materia'];
   $grado_z=$x['id_grado'];
    if($alumno==$id_ins && $materia==$mat_z && $grado==$grado_z){
//       include_once '../conexion/php_conexion.php';
//      mysqli_query($conexion,"INSERT INTO notas_2(id_inscripcion,id_materia,id_grado)VALUES('$alumno','$materia','$grado')");
   }  else {
//          include_once '../conexion/php_conexion.php';
//      mysqli_query($conexion,"INSERT INTO notas_2(id_inscripcion,id_materia,id_grado)VALUES('$alumno','$materia','$grado')");   
      }
      //aki es dond intente validadar yo, uso la tabla nota 2 porq es una tabla auxiliar porq en mysq 
      //al borrar los datos no comienza de 1 el id sino que desde dond se kedo
      //jajaj y no tengo base vacia
}
?>
<style >
    .btn-atras{
        background-color: #607d8b;
        color: white;
    }

</style>
<!--comienza mi codigo-->
<div class="content-wrapper">
    <!--Comienza container fluid-->
    <form action="" id="FORMULARIO_VALIDADO"  method="post" class="form-register" >
        <div class="container-fluid">
<?php
//para extraer el nombre y apellido del alumno
$sacar = mysqli_query($conexion, "SELECT*FROM alumno INNER JOIN inscripcion on alumno.id_alumno=inscripcion.id_alumno WHERE id_inscripcion='$alumno'");
while ($alumnito = mysqli_fetch_array($sacar)) {
    $nom_alumno = $alumnito['nom_alumno'];
    $ape= $alumnito['ape_alumno'];
}
//fin de codigo*************************************

        //*************fin de extraer datos
?>
            <div align="center">
                <font face="Arial Narrow" size="5" color="#001f4d">Ingresar notas.</font>
                <img src="../imagenes/pencil.png" width="50" height="50"><br/>
                <font face="Arial Narrow" size="5" color="#001f">Alumno/a: <?php echo $nom_alumno;?> <?php echo $ape;?></font>
            </div>
            <input type="hidden" name="tirar" id="pase"/>


            <div class="row"><!--comienza row-->


                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br/>
                        <div class="panel-heading" align="center">Actividades 35%</div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-md-8">  
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                            <br> 
                               </div>
                                <div class="col-md-3">  
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota1" placeholder="0.0">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota2" placeholder="0.0">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota3" placeholder="0.0">
                            <br> 
                               </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div><!--cierre del panel body-->
                        <br/>
                    </div>

                </div><!--Termina las columnas de la pantalla-->

                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br/>
                        <div class="panel-heading" align="center">Actividades 35%</div>
                        <div class="panel-body">
                             <div class="row">
                               <div class="col-md-8">  
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                            <br> 
                               </div>
                                <div class="col-md-3">  
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota4" placeholder="0.0">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota5" placeholder="0.0">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota6" placeholder="0.0">
                            <br> 
                               </div>
                                <div class="col-md-1"></div>
                            </div>
                        
                        </div><!--cierre del panel body-->
                        <br/>
                    </div>
                </div><!--Termina las columnas de la pantalla-->

                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br>
                        <div class="panel-heading" align="center">Actividades 30%</div>
                        <div class="panel-body">
                             <div class="row">
                               <div class="col-md-8">  
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                                   &nbsp<INPUT class="form-control" type="text" disabled="false">
                            <br> 
                               </div>
                                <div class="col-md-3">  
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota1" placeholder="0.0">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota2" placeholder="0.0">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota3" placeholder="0.0">
                            <br> 
                               </div>
                                <div class="col-md-1"></div>
                            </div>
                               
                        </div><!--cierre del panel body-->
                        <br>
                    </div>
                </div><!--Termina las columnas de la pantalla-->

            </div><!--fin class row-->
            <div align="center">
                <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                <input type="button" value="Cancelar" name="cancel" class=" btn btn-dark" onclick="location = '/proyectoDi/doc/principal.php'">
            </div>

        </div><!--terminada container fluid-->
    </form><!--termina formulario-->
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';

?>
