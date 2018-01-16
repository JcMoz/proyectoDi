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
<style>
    .btn-cancelar{
        background-color: #9e9e9e;
        color: white;
    }
</style>

<!-- /.content-wrapper -->
<div class="content-wrapper"><!-- inicio contenedor -->
    <div class="container-fluid"><!-- incio contenedor -->

        <div class="container-wrapper"> <!--inicioprimera fila -->
            <div class="container-fluid">

                <div align="center">
                    <div class="row mt-5"> <!-- inicio fila primera -->
                        <div class="col-md-6 mt-5"><!-- inicio columna -->
                            <div class="panel-default">
                                <div class="panel">
                                    <font face="Arial Narrow" size="5" color="#001f4d">Copia de Seguridad</font>
                                </div>

                            </div>

                        </div> <!-- fin columna -->
                        <div class="col-md-6"> <!-- inicio columna -->
                            <div class="panel-default">
                                <div class="panel">
                                    <img src="../imagenes/Database.ico" >

                                </div>

                            </div>

                        </div> <!-- fin columna -->

                    </div> <!-- fin primera fila -->

                </div>




                <div align="center"><!--inicio center -->
                    <div class="row"><!-- inicio segunda fila -->
                        <div class="col-md-6"><!-- inicio primera columna-->
                            <div class="panel-default">
                                <div class="panel">
                                    <a href="../seguridad/Backup.php">
                                        <button type="button" class="btn btn-info mt-5 btn-lg" name="crearcopia">Crear copia</button>
                                    </a>

                                </div>

                            </div>

                        </div><!-- fin de  segunda fila -->

                        <div class="col-md-6"> <!-- inicio columnaa-->
                            <div class="panel-default">
                                <div class="panel">

                                    <button type="button" class="btn btn-info mt-5 btn-lg" name="crearcopia" data-toggle="modal" data-target="#modal-default" data-placement="left" data-html="true" title="Seleccione el archivo para restaurar" >Restaurar</button>


                                    <!--INICIO MODAL -->
                                    <div class="modal modal-info fade in mt-5" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header " align="center">

                                                    <h4 class="modal-title" > Seleccionar el archivo </h4>
                                                </div>

                                                <div class="modal-body">
                       <!-- Formulario --> <form action="./Restore.php" method="POST">

                                                    <div class="box-body">
                                                        <!-- Date -->



                                                        <div class="box box-info">

                                                            <!-- /.box-header -->
                                                            <!-- form start -->
                                                            
                                                            <select name="restorePoint" class="form-control">
                                                                    <option value="" disabled="" selected="">Selecciona un punto de restauración</option>
                                                                    <?php
                                                                    include_once './Connet.php';
                                                                    $ruta = BACKUP_PATH;
                                                                    if (is_dir($ruta)) {
                                                                        if ($aux = opendir($ruta)) {
                                                                            while (($archivo = readdir($aux)) !== false) {
                                                                                if ($archivo != "." && $archivo != "..") {
                                                                                    $nombrearchivo = str_replace(".sql", "", $archivo);
                                                                                    $nombrearchivo = str_replace("-", ":", $nombrearchivo);
                                                                                    $ruta_completa = $ruta . $archivo;
                                                                                    if (is_dir($ruta_completa)) {
                                                                                        
                                                                                    } else {
                                                                                        echo '<option value="' . $ruta_completa . '">' . $nombrearchivo . '</option>';
                                                                                    }
                                                                                }
                                                                            }
                                                                            closedir($aux);
                                                                        }
                                                                    } else {
                                                                        echo $ruta . " No es ruta válida";
                                                                    }
                                                                    ?>
                                                                </select>
                                                                                                                           
                                                        </div>


                                                    </div>

                                                    <div align="center">
                                                        <button type="submit" class="btn btn-info btn-lg mt-5">Restaurar</button>

                                                        <button type="button" class="btn btn-cancelar mt-5 btn-lg"  data-dismiss="modal">Cancelar</button>

                                                    </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>



                                    </div><!-- FIN MODAL-->





                                </div>

                            </div>

                        </div><!--fin segunda fila -->
                    </div> <!-- fin frla segunda fila -->
                </div><!-- fin align center -->



            </div>
        </div>

    </div> 
</div>


<?php
include_once '../plantilla/fin_plantilla.php';
?>