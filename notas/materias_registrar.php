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
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <br/><br/>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!--Comienza tabla-->
                <div class="panel-body">
                    <?php
                    $s_grado = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado='$grado'");
                    while ($ver = mysqli_fetch_array($s_grado)) {
                        $v_grado = $ver['nom_grado'];
                    }
                    ?>

                    <table class="table table-bordered table table-active">
                        <thead class="">
                        <th class="text-center">
                            <div align="center">
                                <font face="Arial Narrow" size="5" color="#001f4d">Registro de actividades de las asignaturas <?php echo $v_grado; ?> grado</font>
                                <img src="../imagenes/materia.png" width="65" height="65">
                            </div>
                        </th>

                        </thead>

                        <tbody>

                            <?php
                            if($grado==6 || $grado==5){
                                 $sacar = mysqli_query($conexion, "SELECT*FROM asignacion_m LEFT JOIN materias on asignacion_m.id_materia=materias.id_materia WHERE id_docente='$profesor'");
                                 $artistica=  mysqli_query($conexion,"SELECT*FROM materias WHERE  nombre='Artistica'");
                                 while ($x_row=  mysqli_fetch_array($artistica)){
                                     $x_ar=$x_row['nombre'];
                                     $ar=$x_row['id_materia'];
                                 }
                            }  else {
                              $sacar = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1"); 
                              
                            }
                            while ($row = mysqli_fetch_array($sacar)) {
                                $materia_m=$row['id_materia'];
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a href="../notas/ingresoActividades.php?ir=<?php echo $grado; ?>&llego=<?php echo $materia_m;?>" class="btn"> 
                                                <button class="btn btn-outline-primary"> <?php echo $row['nombre']; ?></button>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                            <?php } ?>
                                <?php
                                if($grado==6||$grado==5){?>
                                <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a href="../notas/ingresoActividades.php?ir=<?php echo $grado; ?>&llego=<?php echo $ar;?>" class="btn"> 
                                                <button class="btn btn-outline-primary"> <?php echo $x_ar; ?></button>
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
            <div class="col-md-1"></div><!--margen de dos-->
        </div><!--fin de row-->
    </div><!--fin container fluid-->

</div>

</div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>