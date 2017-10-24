<!--******************************Dialog**************************-->  
<form name="form1" method="post" action="">

    <input type="hidden" name="idDeActualizacion" id="idDeActualizacion" value="00000">

    <div class="modal fade" id="actualizarDocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 align="center" class="modal-title" id="myModalLabel">Modificar docente</h3> 
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="panel-body">
                    <br>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">

                                    <INPUT class="form-control" type="text"  name="nombreRecuperado" id="nombreDo" value="">
                                </div>
                                <div class="col-md-5">

                                    <INPUT class="form-control" type="text"  name="apellidoRecuperado" id="apellidosDo" value="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                            <input class="form-control" type="text" name="direccionR" id="direccionDo"value="">
                            </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                <INPUT class="form-control" type="text"  name="telefonoR" id="telDo">
                                </div>
                                <div class="col-md-7">
                                    <input class="form-control" type="text" name="correoR" id="coDo"> 
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <input class="form-control" type="text" name="nitR" id="nit" >
                                </div>
                                 <div class="col-md-5">
                                     <input class="form-control" type="text" name="duiR" id="dui" >
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                     <input class="form-control" type="text" name="nipR" id="nip">
                                </div>
                                <div class="col-md-7">
                                      <input class="form-control" type="text" name="espR" id="esp">
                                </div>
                                </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Atras</button>
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                </div> 
                <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto_doc']);?>"/>

            </div>
        </div> 
    </div> 
</form>


<?php
if (!empty($_REQUEST['nombreRecuperado'])) {
    echo 'por aqui pasa';

    $nombreW = $_REQUEST['nombreRecuperado'];
    $apellidoW = $_REQUEST['apellidoRecuperado'];
    $dirW = $_REQUEST['direccionR'];
    $telW = $_REQUEST['telefonoR'];
    $correoW = $_REQUEST['correoR'];
    $nipW = $_REQUEST['nipR'];
    $nitW = $_REQUEST['nitR'];
    $duiW = $_REQUEST['duiR'];
    $espW = $_REQUEST['espR'];
    $idActualizacion = $_REQUEST['idDeActualizacion'];

//    echo $nombreW;
//    echo $apellidoW;
//    echo "UPDATE docente SET nom_doc='$nombreW',ape_doc='$apellidoW' WHERE id_doc='$idActualizacion'";


    mysqli_query($conexion, "UPDATE docente SET nom_doc='$nombreW',ape_doc='$apellidoW',dir_doc='$dirW',tel_doc='$telW',cor_doc='$correoW',nip_doc='$nipW',nit='$nitW',dui_doc='$duiW',esp_doc='$espW' WHERE id_doc='$idActualizacion'");
    echo '<script>location.href="buscarDocente.php";</script>';
}

//if (!empty($_POST['nombre'])) {
//    $nombre = limpiar($_POST['nombre']);
//    $apellido = limpiar($_POST['apellido']);
//    $direccion = limpiar($_POST['direccion']);
//    $telefono = limpiar($_POST['telefono']);
//    $correo = limpiar($_POST['correo']);
//    $nip = limpiar($_POST['nip']);
//    $nit = limpiar($_POST['nit']);
//    $dui = limpiar($_POST['dui']);
//    $especialidad = limpiar($_POST['especialidad']);
//
//    if (empty($_POST['id'])) {
//        $oDocente = new Proceso_docente('', $nombre, $apellido, $direccion, $telefono, $genero, $fecha, $correo, $nip, $nit, $dui, $especialidad);
//        $oDocente->actualizar();
//        echo mensajes('Docente "' . $nombre . '"Editado con exito', 'verde');
//    }
//}
?>
