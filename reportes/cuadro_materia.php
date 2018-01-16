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
        <img  name="edit" data-toggle="modal" data-target="#modalayudaNotasMateriaGrados" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
       <?php include_once '../ayuda/ayudaNotasMateriaGrados.php'; ?>
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
                    $s_grado = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado='$grado'");
                    while ($ver = mysqli_fetch_array($s_grado)) {
                        $v_grado = $ver['nom_grado'];
                    }
                    ?>

                    <table class="table table-bordered table table-active">
                        <thead class="">
                        <th class="text-center">
                            <div align="center">
                                <font face="Arial Narrow" size="5" color="#001f4d">Cuadro de notas de las materias de <?php echo $v_grado; ?> grado</font>
                                <img src="../imagenes/materia.png" width="65" height="65">
                            </div>
                        </th>

                        </thead>

                        <tbody>

                            <?php
                            if($grado==1 ||$grado==2 ||$grado==3|| $grado==4 ||$grado==5 ||$grado==6){
                                 $sacar = mysqli_query($conexion, "SELECT * FROM materias WHERE turno_materia=1");
                                  while ($x_row=  mysqli_fetch_array($sacar)){
                                     $x_nom=$x_row['nombre'];
                                     $x_id=$x_row['id_materia'];
                                 ?>
                            
                          
                                <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a href="../reportes/cuadro_periodos.php?ir=<?php echo $grado; ?>&llego=<?php echo $x_id; ?>" class="btn"> 
                                                <button class="btn btn-outline-warning"> <?php echo $x_row['nombre']; ?></button>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                            <?php } 
                            
                                  } else{ 
                                
                                  $sacar = mysqli_query($conexion, "SELECT * FROM materias WHERE nombre='Matematica' OR nombre='Lenguaje' OR nombre='Ciencia' OR nombre='Sociales' OR nombre='Fisica' OR nombre='Ingles'");
                                  while ($x_row=  mysqli_fetch_array($sacar)){
                                     $x_nom=$x_row['nombre'];
                                     $x_id=$x_row['id_materia'];
                                 ?>
                            
                          
                                <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a href="../reportes/cuadro_periodos.php?ir=<?php echo $grado; ?>&llego=<?php echo $x_id; ?>" class="btn"> 
                                                <button class="btn btn-outline-warning"> <?php echo $x_row['nombre']; ?></button>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                                
                                  <?php } 
                                  
                                  } ?>
                        </tbody>
                    </table> <!--termina tabla-->
                </div><!--div panel body-->
                <!--fin de la tabla del turno de la mañana-->
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