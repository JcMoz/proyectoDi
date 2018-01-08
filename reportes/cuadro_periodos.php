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
$materiaC=$_GET['llego'];
$pe1=1;
$pe2=2;
$pe3=3;
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <!--Comienza tabla-->
                <div class="panel-body">
                    <?php
                    $s_grado = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado='$grado'");
                    while ($ver = mysqli_fetch_array($s_grado)) {
                        $v_grado = $ver['nom_grado'];
                    }
                     $s_materias = mysqli_query($conexion, "SELECT*FROM materias WHERE id_materia='$materiaC'");
                    while ($ver = mysqli_fetch_array($s_materias)) {
                        $v_materia = $ver['nombre'];
                    }
                    ?>
                    

                    <table class="table table-bordered table table-active">
                        <thead class="">
                        <th class="text-center">
                            <div align="center">
                                <font face="Arial Narrow" size="5" color="#001f4d">Periodos de <?php echo $v_materia; ?> de <?php echo $v_grado; ?> grado</font>
                                <img src="../imagenes/materia.png" width="65" height="65">
                            </div>
                        </th>

                        </thead>

                        <tbody>
                                <tr>
             <!--***************para el primer periodo*********************-->                       
                                    <td class="text-center">
                                        <div aling="center">
                                           
                                            <a href="../reportes/re_cuadro.php?ir=<?php echo $grado; ?>&llego=<?php echo $materiaC;?>&pe=<?php echo $pe1;?>" class="btn"> 
                                                <button class="btn btn-outline-warning">Primero</button>
                                            </a>

                                        </div>
           <!--******************fin del primer periodo********************-->  
           
               <!--***************para el segundo periodo*********************-->
                                     <div aling="center">

                                         <a href="../reportes/re_cuadro.php?ir=<?php echo $grado; ?>&llego=<?php echo $materiaC;?>&pe=<?php echo $pe2;?>" class="btn"> 
                                                <button class="btn btn-outline-warning">Segundo</button>
                                            </a>

                                        </div>
                <!--***************fin del segundo periodo*********************-->
                  <!--***************para el tercer periodo*********************-->
                                    <div aling="center">

                                        <a href="../reportes/re_cuadro.php?ir=<?php echo $grado; ?>&llego=<?php echo $materiaC;?>&pe=<?php echo $pe3;?>" class="btn"> 
                                                <button class="btn btn-outline-warning">Tercero</button>
                                            </a>

                                        </div>
                  <!--***************fin tercer periodo*********************-->

                                    </td>
     
             
            
              
                                </tr>
                         
                            
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
