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
$materiaRe = $_REQUEST["ir"];
?>
<style >

    .btn-atras{
        background-color: #607d8b;
        color: white;
    }
</style>
<div class="content-wrapper">
    <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalayudaNAsignatura" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
        <?php include_once '../ayuda/ayudaNAsignatura.php'; ?>
    </div>
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <br/><br/>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!--Comienza tabla-->
                <div class="panel-body">
                    <?php
                    $s_mat = mysqli_query($conexion, "SELECT*FROM materias WHERE id_materia='$materiaRe'");
                    while ($ver = mysqli_fetch_array($s_mat)) {
                        $v_materia = $ver['nombre'];
                    }
                    ?>

                    <table class="table table-bordered table table-active">
                        <thead class="">
                        <th class="text-center">
                            <div align="center">
                                <font face="Arial Narrow" size="5" color="#001f4d">Grados de la asignatura:<?php echo $v_materia;?></font>
                                <img src="../imagenes/gradu.png" width="65" height="65">
                            </div>
                        </th>

                        </thead>

                        <tbody>

                            <?php
                         
                              $sacar = mysqli_query($conexion, "SELECT*FROM grado WHERE turno_grado=11 OR turno_grado=0");  
                            
                            while ($row = mysqli_fetch_array($sacar)) {
                                $graVer=$row['id_grado'];
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a href="../notas/calificar.php?ir=<?php echo $graVer; ?>&llego=<?php echo $materiaRe; ?>" class="btn"> 
                                                <button class="btn btn-atras"> <?php echo $row['nom_grado']; ?></button>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                            <?php } ?>
                           
                        </tbody>
                    </table> <!--termina tabla-->
                </div><!--div panel body-->
                <!--fin de la tabla del turno de la mañana-->
            </div><!--div row 10-->
            <div class="col-md-2"></div><!--margen de dos-->
        </div><!--fin de row-->
    </div><!--fin container fluid-->

</div><!--terminada container fluid-->
<!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>