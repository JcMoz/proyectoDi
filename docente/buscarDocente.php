<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
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
                            <th width="200">Nombres</th>
                            <th width="200">Apellidos</th>
                            <th width="150">Teléfono</th>
                            <th width="300">Dirección</th>
                        </tr>
                    </thead>
                    <tbody  class="buscar">
                        <?php
                        $pame = mysqli_query($conexion, "SELECT * FROM docente");
                        while ($row = mysqli_fetch_array($pame)) {
                            $nombreX =$row['nom_doc'];
                            $apellidoX = $row['ape_doc'];
                            $dirX=$row['dir_doc'];
                            $telX=$row['tel_doc'];
                            $correoX=$row['cor_doc'];
                            $nipX=$row['nip_doc'];
                            $nitX=$row['nit'];
                            $duiX=$row['dui_doc'];
                            $espX=$row['esp_doc'];
                            $pass = $row['id_doc'];
                           
                            ?>
                            <tr>
                                <td><!--boton de modificar-->
                                    <a href="#" data-toggle="modal" data-target="#actualizarDocente" onclick="Editar_docente('<?php echo $nombreX; ?>','<?php echo $apellidoX; ?>','<?php echo $dirX;?>','<?php echo $telX;?>','<?php echo $correoX;?>','<?php echo $nipX;?>','<?php echo $nitX;?>','<?php echo $duiX;?>','<?php echo $espX;?>','<?php echo $pass;?>')" >Editar</a>
                                </td>
                                <td><?php echo $row['nom_doc']; ?></td>
                                <td><?php echo $row['ape_doc']; ?></td>
                                <td><?php echo $row['tel_doc']; ?></td>
                                <td><?php echo $row['dir_doc']; ?></td>
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
function Editar_docente(nombre,apellido,dir,tel,cor,nip,nit,dui,esp,pass){
    $("#nombreDo").val(nombre);
    $("#apellidosDo").val(apellido);
    $("#direccionDo").val(dir);
    $("#telDo").val(tel);
    $("#coDo").val(cor);
    $("#nip").val(nip);
    $("#nit").val(nit);
    $("#dui").val(dui);
    $("#esp").val(esp);
    $("#idDeActualizacion").val(pass);
}
</script>

<?php
include_once '../plantilla/fin_plantilla.php';
?>