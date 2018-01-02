<?php
session_start();
include_once '../conexion/php_conexion.php';
include_once '../plantilla/incio_plantilla.php';
try {
if ($_SESSION['tipo_user']=='ad' or $_SESSION['tipo_user']=='p') {
    $profesor=$_SESSION['id_profesor'];
    $sacar= mysqli_query($conexion,"SELECT*FROM docente WHERE id_doc='$profesor'");
    
    while ($row=  mysqli_fetch_array($sacar)){
        $nombre=$row['nom_doc'];
        $ape=$row['ape_doc'];
    }   
   
}
} catch (Exception $exc) {
     echo '<script>swal("EROR", "Favor revisar los datos e intentar nuevamente", "error");</script>';              
}
?>
<?php
//body
include_once '../plantilla/incio_plantilla.php';
if ($_SESSION['tipo_user']=='ad') {
    include_once '../plantilla/menu_navegacion.php';
}else{
    if ($_SESSION['tipo_user']=='p') {
       include_once '../plantilla/menu_navegacion_1.php';  
    }
}
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
                    <table class="table table-bordered table table-active">
                        <thead class="">
                        <th class="text-center">
                            <div align="center">
                                <font face="Arial Narrow" size="5" color="#001f4d">Mis grados</font>
                                <img src="../imagenes/lapizA.ico" width="50" height="50">
                            </div>
                        </th>

                        </thead>

                        <tbody>

                            <?php
                            $sacar = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN grado on asignacion_a_g.id_asignacion=grado.id_grado WHERE id_docentes='$profesor' AND turno_grado=1");
                            while ($row = mysqli_fetch_array($sacar)) {
                                $cali = $row['id_gra'];
                                $turno = $row['turno_grado'];
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a href="../notas/materia.php?ir=<?php echo $cali;?>" class="btn"> 
                                                <button class="btn btn-atras"> <?php echo $row['nom_grado']; ?></button>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                            <?php } ?>
                                <?php
                            $sacar = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN grado on asignacion_a_g.id_asignacion=grado.id_grado WHERE id_docentes='$profesor' AND turno_grado=11");
                            while ($row = mysqli_fetch_array($sacar)) {
                                $cali = $row['id_gra'];
                                $turno = $row['turno_grado'];
                                ?>
                                  <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a href="../notas/materia.php?ir=<?php echo $cali;?>" class="btn"> 
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
                <div class="panel-body">
                    <table class="table table-bordered table table-active">
                        <thead class="">
                        <th class="text-center">
                            <div align="center">
                                <font face="Arial Narrow" size="5" color="#001f4d">Mi materia turno tarde</font>
                                <img src="../imagenes/Pencil.ico" width="50" height="50">
                            </div>
                        </th>

                        </thead>

                        <tbody>


                            <?php
                            $materia = mysqli_query($conexion, "SELECT*FROM asignacion_m LEFT JOIN materias on asignacion_m.id_materia=materias.id_materia WHERE id_docente='$profesor'");
                            while ($row1 = mysqli_fetch_array($materia)) {
                                $matC=$row1['id_materia'];
                                ?>

                                <tr>
                                    <td class="text-center">
                                        <div aling="center">

                                            <a  href="../notas/grados_materias.php?ir=<?php echo $matC;?>" class="btn"> 
                                                <button class="btn btn-atras"> <?php echo $row1['nombre']; ?></button>
                                            </a>

                                        </div>

                                    </td>

                                </tr>
                            <?php } ?>

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