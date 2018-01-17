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
<!--inicio de content wrapper mi codigo-->
<div class="content-wrapper">
    <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalayudaBuscarDocente" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
        <?php include_once '../ayuda/ayudaBuscarDocente.php'; ?>
    </div>
    <div class="container-fluid"> <!--Comienza container Fluid-->
        <div class="col-md-12"><!--Dimencion de la pantalla-->
            <!--Encabezado de la pantalla-->
            <div class="row-fluid" align="center">
                <div class="span6">
                    <h2 class="text-info">
                        <img src="../imagenes/usariosTa.ico" width="80" height="80">
                        Usuarios
                    </h2>
                    <script src="../js/jquery-1.7.2.min.js" ></script>
                    <script src="../js/buscaresc.js"></script>
                </div>
                <div class="span6">
                    <form name="form1" method="post" action="">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <input type="text" name="buscar" id="filtrar"  class="form-control" autocomplete="off" autofocus placeholder="Buscar Docentes">
                            </div>
                        </div>

                    </form>
                    <br>
                </div>
            </div> <!--Fin de Encabezado de la pantalla-->
            <br>
            <!--Comienza tabla-->
            <div class="panel-body">

                <table class="table table-striped table-condensed table-hover">
                    <thead>
                        <tr>
                            <th width="50">Acción</th>
                            <th width="150">Usuario</th>
                            <th width="200">Docente</th>
                        </tr>
                    </thead>
                    <tbody  class="buscar">
                        <?php
                        $pame = mysqli_query($conexion, "SELECT*FROM usuarios INNER JOIN docente ON usuarios.id_doc=docente.id_doc");
                        while ($row = mysqli_fetch_array($pame)) {
                           $ya=$row['id_usuario'];
                            ?>
                            <tr>
                                <td><!--boton de modificar-->
                                    <a href="../seguridad/mantenimientoUsuarios.php?ir=<?php echo $ya;?>" class="btn">Cambiar</a>
                                </td>
                                
                                <td><?php echo $row['user']; ?></td>
                                <td><?php echo $row['nom_doc'].' '.$row['ape_doc']; ?></td>
                                 </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!--termina tabla-->

        </div>
    </div><!--Fin de Dimencion de la pantalla-->

</div><!--Fin de content wrapper mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>

