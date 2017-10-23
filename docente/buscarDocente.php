<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
include_once '../docente/class.php';
include_once '../conexion/php_conexion.php';
?>
<!--inicio de content wrapper mi codigo-->
<div class="content-wrapper">
    <div class="container-fluid"> <!--Comienza container Fluid-->
        <div class="col-md-12"><!--Dimencion de la pantalla-->
            <!--Encabezado de la pantalla-->
            <div class="row-fluid" align="center">
                <div class="span6">
                    <h2 class="text-info">
                        <img src="../imagenes/buscar.ico" width="80" height="80">
                        Expediente Docente
                    </h2>
                </div>
                <div class="span6">
                    <form name="form1" method="post" action="">
                        <div class="input-append">
                            <input type="text" name="buscar" class="input-xlarge" autocomplete="off" autofocus placeholder="Buscar Docentes">
                            <button type="submit" class="btn-secondary">
                                <strong>
                                    <i class="icon-search"></i> Buscar
                                </strong>
                            </button>

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
                            <th width="200">Nombres</th>
                            <th width="150">Apellidos</th>
                            <th width="150">Teléfono</th>
                            <th width="300">Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pame = mysqli_query($conexion, "SELECT * FROM docente");
                        while ($row = mysqli_fetch_array($pame)) {
                            $nombreX =$row['nom_doc'];
                            $apellidoX = $row['ape_doc'];
                            $pass = $row['id_doc'];
                            ?>
                            <tr>
                                <td><!--boton de modificar-->
                                    <a href="#" data-toggle="modal" data-target="#actualizarDocente" onclick="Editar_docente('<?php echo $nombreX; ?>','<?php echo $apellidoX; ?>','<?php echo $pass;?>')" >Editar</a>
                                </td>
                                <td><?php echo $row['nom_doc']; ?></td>
                                <td><?php echo $row['ape_doc']; ?></td>
                                <td><?php echo $row['dir_doc']; ?></td>
                                <td><?php echo $row['tel_doc']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!--termina tabla-->

        </div>
    </div><!--Fin de Dimencion de la pantalla-->

</div><!--Fin de content wrapper mi codigo-->


<!-- aqui esta el modal-->
<?php
include_once './editarDocente.php';
?>

<!--este es para pasar los parametros al modal-->
<script>
function Editar_docente(nombre,apellido,pass){
    $("#nombreDo").val(nombre);
    $("#apellidosDo").val(apellido);
    $("#idDeActualizacion").val(pass);
}
</script>

<?php
include_once '../plantilla/fin_plantilla.php';
?>