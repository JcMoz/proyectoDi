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
?>
<!--comienza mi codigo-->
<div class="content-wrapper">
	<!--Comienza container fluid-->
    <div class="container-fluid">
    	<!--Encabezado de la pantalla-->
    <div class="row-fluid" align="center">
        <br/> <br/>
                            <div class="span6">
                              <h2 class="text-info">
                                  
                                  Seleccione: grado, materia, periodo<img src="../imagenes/fecha.png" width="50" height="50">
                                </h2>
                            </div>
                            <div class="span6">
                                <form action="" id="FORMULARIO_VALIDADO"  method="post" class="form-register" >
                                    
                                <div class="row">
                                    <div class="col-md-2"></div>
                                <div class="col-md-3">    
                  <!--****para los grados en el combo-->  
                  <select class="form-control" name="grados" >

                    <?php
                    include_once '../conexion/php_conexion.php';
                   $pagrado = mysqli_query($conexion, "SELECT * FROM grado");
                                    while ($row = mysqli_fetch_array($pagrado)) {
                                        ?>
                               <option value="<?php echo $row['id_grado'];?>"><?php echo $row['nom_grado']; ?></option>
                                    
                                <?php    }
                                    ?>
                      
                                </select>
                  <!--****para los grados en el combo--> 
                                </div><!--columna de 3-->
                                <div class="col-md-3"> 
                         <!--****para las materias en el combo-->  
                  <select class="form-control" name="materias" >

                    <?php
                    include_once '../conexion/php_conexion.php';
                   $pamateria = mysqli_query($conexion, "SELECT * FROM materias");
                                    while ($row = mysqli_fetch_array($pamateria)) {
                                        ?>
                               <option value="<?php echo $row['id_materia'];?>"><?php echo $row['nombre']; ?></option>
                                    
                                <?php    }
                                    ?>
                      
                                </select>
                  <!--****para las materias en el combo--> 
                                </div><!--columna de 3-->
                   <!--columnas de 3-->             
                  <div class="col-md-3">               
                 <!--para los periodos-->               
                 <select class="form-control" name="periodo">
                    <option value=1>Primer</option>
                    <option value=2>Segundo</option>
                    <option value=3">Tercer</option>
                </select>
                 <!--fin periodos-->
                  </div><!--fin de columnas de 3-->
                              <div class="col-md-1"></div>
                                </div<!--rooooow-->
                            </div>
        <br/>
        <input type="submit" value="ver" name="procesar" class=" btn btn-outline-primary" />
                   </form>
                        </div> <!--Fin de Encabezado de la pantalla-->
                         <br/>
        <!--**************************codigo de la tabla ***********************************-->
        <div class="row">
            <div class="col">
                <!--Comienza tabla-->
        <div class="panel-body">
            <?php if (isset($_POST['grados'])&& isset($_POST['materias'])&& isset($_POST['periodo'])) {
               
                                  
                              ?>
            <table class="table table-bordered table table-active">
                        <thead class="">

                        <th class="text-center">NIE</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Acción</th>


                        </thead>

                        <tbody>
                            <?php
                             $graM=$_POST['grados'];
                             $materiasM=$_POST['materias'];
                             $peM=$_POST['periodo'];
                            $alumnos = mysqli_query($conexion, "SELECT*FROM inscripcion i, alumno a, notas_2 n WHERE i.id_alumno=a.id_alumno AND i.id_inscripcion=n.id_inscripcion AND n.id_grado='$graM' AND n.id_materia='$materiasM' AND n.estado_n='procesado' AND periodo='$peM'");
                            while ($row=  mysqli_fetch_array($alumnos)){
                                $nombre=$row['nie'];
                                $id=$row['id_inscripcion'];
                                
                            ?>

                            <tr>
                                <td class="text-center"><?php echo $row['nie'];?></td>
                                <td class="text-center"><?php echo $row['nom_alumno'];?></td>
                                <td class="text-center"><?php echo $row['ape_alumno'];?></td>
                                <td class="text-center"><a href="../notas/registrar_notas_modificadas.php?ir=<?php echo $graM;?>&llego=<?php echo $materiasM;?>&id=<?php echo $id; ?>&pe=<?php echo $peM ;?>" class="btn">Modificar</a></td>

                            </tr>
                            <?php }?>
                        </tbody>
                    </table> <!--termina tabla-->
                    <?php } ?>
            
        </div>
        <!--termina tabla-->
            </div>
        </div><!--fin de row-->
        
        <!--***************************fin de codigo*****************************************-->


    </div><!--fin de container fluid-->
</div><!--fin de mi codigo content wrapper-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>