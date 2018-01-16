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
$grado = $_REQUEST["ir"];
?>
<style >

    .btn-atras{
        background-color: #607d8b;
        color: white;
    }
</style>
<div class="content-wrapper">
    <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalayudaNotasAlumno" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
       <?php include_once '../ayuda/ayudaNotasAlumno.php'; ?>
    </div>
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <br/><br/>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                $s_grado=  mysqli_query($conexion,"SELECT*FROM grado WHERE id_grado='$grado'");
                while ($ver=  mysqli_fetch_array($s_grado)){
                    $v_grado=$ver['nom_grado'];
                }
                ?>
                <div align="center">
                    <font face="Arial Narrow" size="5" color="#001f4d">Alumnos de <?php echo $v_grado;?> grado</font>
                    <img src="../imagenes/boletin.png" width="65" height="65">
                </div>
                <br/>
                <!--Comienza tabla-->
                <div class="panel-body">


                    <table class="table table-bordered table table-active">
                        <thead class="">

                        <th class="text-center">NIE</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Acción</th>


                        </thead>

                        <tbody>
                            <?php
                            $alumnos = mysqli_query($conexion, "SELECT*FROM inscripcion INNER JOIN alumno on inscripcion.id_alumno=alumno.id_alumno WHERE id_grado='$grado'");
                            while ($row=  mysqli_fetch_array($alumnos)){
                                $nombre=$row['nie'];
                                $id=$row['id_inscripcion'];
                                
                            ?>

                            <tr>
                                <td class="text-center"><?php echo $row['nie'];?></td>
                                <td class="text-center"><?php echo $row['nom_alumno'];?></td>
                                <td class="text-center"><?php echo $row['ape_alumno'];?></td>
                                <td class="text-center"><a href="../reportes/re_boletas.php?ir=<?php echo $grado;?>&id=<?php echo $id; ?>" class="btn">Boleta</a></td>

                            </tr>
                            <?php }?>
                        </tbody>
                    </table> <!--termina tabla-->
                </div><!--div panel body-->
            </div><!--div row 10-->
            <div class="col-md-2"></div><!--margen de dos-->
        </div><!--fin de row-->
        </div><!--fin container fluid-->

</div>

</div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>
