<!--******************************Dialog**************************-->  
<form name="form1" method="post" action="">
    <div class="modal fade" id="actualizarDocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog"

             <input type="hidden" name="id" value="<?php echo $row['id_doc']; ?>">

            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 align="center" class="modal-title" id="myModalLabel">Modificar docente</h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <INPUT class="form-group" type="text"  name="nombre" id="nombreDo" value="">
                            <INPUT class="form-group" type="text"  name="apellido" id="apellidosDo" value="<?php echo $row['ape_doc']; ?>"><br>

                            <input class="form-group" type="text" name="direccion" id="direccionDo"value="<?php echo $row['dir_doc']; ?>"> 
                            <br>

                            <div align="center">
                                <INPUT class="form-group" type="text"  name="telefono" id="telDo">
                            </div>

                            <input class="form-group" type="text" name="correo" id="coDo"> 
                            <br>
                            <input class="form-group" type="text" name="nip" id="nip">
                            <input class="form-group" type="text" name="nit" id="nit" >
                            <input class="form-group" type="text" name="dui" id="dui" >
                            <br>
                            <input class="form-group" type="text" name="especialidad" id="esp">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Atras</button>
                    <button type="submit" class="btn btn-primary" >Guardar</button>
                </div> 

            </div>
        </div> 
    </div> 
</form>


<?php
if (!empty($_POST['nombre'])) {
    $nombre = limpiar($_POST['nombre']);
    $apellido = limpiar($_POST['apellido']);
    $direccion = limpiar($_POST['direccion']);
    $telefono = limpiar($_POST['telefono']);
    $correo = limpiar($_POST['correo']);
    $nip = limpiar($_POST['nip']);
    $nit = limpiar($_POST['nit']);
    $dui = limpiar($_POST['dui']);
    $especialidad = limpiar($_POST['especialidad']);

    if (empty($_POST['id'])) {
        $oDocente = new Proceso_docente('', $nombre, $apellido, $direccion, $telefono, $genero, $fecha, $correo, $nip, $nit, $dui, $especialidad);
        $oDocente->actualizar();
        echo mensajes('Docente "' . $nombre . '"Editado con exito', 'verde');
    }
}
?>
