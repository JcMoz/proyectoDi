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
                            $pame = mysql_query("SELECT * FROM docente");
                            while ($row = mysql_fetch_array($pame)) {
                                ?>
                                <tr>
                                    <td><!--boton de modificar-->
                                        <a href="#" data-toggle="modal" data-target="#actualizar<?php echo $row['id_doc']; ?>" >Editar</a>
                                    </td>
                                    <td><?php echo $row['nom_doc']; ?></td>
                                    <td><?php echo $row['ape_doc']; ?></td>
                                    <td><?php echo $row['dir_doc']; ?></td>
                                    <td><?php echo $row['tel_doc']; ?></td>
                                </tr>
                                <!--******************************Dialog**************************-->  
                        
                            <div class="modal fade" id="actualizar<?php echo $row['id_doc']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog"
                                       <form name="form1" method="post" action="">
                                    <input type="hidden" name="id" value="<?php echo $row['id_doc']; ?>">
                                   
                                         <div class="modal-content">
                                            <div class="modal-header">
                                               
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h3 align="center" class="modal-title" id="myModalLabel">Modificar docente</h3>
                                            </div>
                                           
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <INPUT class="form-group" type="text"  name="nombre" id="nombreDo" value="<?php echo $row['nom_doc']; ?>">
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
                                </form>
                                </div> 
                                
                            <?php }?>
                            </tbody>
                        </table>
                </div>
                <!--termina tabla-->

            </div>
        </div><!--Fin de Dimencion de la pantalla-->

    </div><!--Fin de content wrapper mi codigo-->
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

    <?php
    include_once '../plantilla/fin_plantilla.php';
    ?>