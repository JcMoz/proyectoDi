<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
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
                <div class="registros" id="agrega-registros">
                    <table class="table table-striped table-condensed table-hover">

                        <tr>
                            <th width="50">Acción</th>
                            <th width="200">Nombres</th>
                            <th width="150">Apellidos</th>
                            <th width="150">Teléfono</th>
                            <th width="300">Dirección</th>
                        </tr>
                        <?php
                        include_once '../conexion/php_conexion.php';
                        $registro = mysql_query("SELECT * FROM docente");
                        while ($registro2 = mysql_fetch_array($registro)) {
                            echo '<tr>
                            <td><!--boton de modificar-->
                               <a href="javascript:editarProducto(' . $registro2['id_doc'] . ');" >Editar</a>
                            </td>
                            <td>' . $registro2['nom_doc'] . '</td>
                            <td>' . $registro2['ape_doc'] . '</td>
                            <td>' . $registro2['tel_doc'] . '</td>
                            <td>' . $registro2['dir_doc'] . '</td>
                        </tr>';
                        }
                        ?>
                    </table>
                </div>
            </div>
            <!--termina tabla-->

        </div>
    </div><!--Fin de Dimencion de la pantalla-->

    <!--******************************Dialog**************************-->
    <div class="modal fade" id="modi-do" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title"> Modificar datos de docente<img src="../imagenes/profe.png" width="70" height="70"> </h4>
                </div>
                <form id="formulario" class="formulario" onsubmit="return agregaRegistro();">
                    <div class="modal-body">

                        <div class="row" > 

                            <input type="text" readonly="readonly" id="pro" name="pro" />
                            <input type="text" readonly="readonly" id="id-do" name="id-do" />
                            <div class="col-md-12">
                                <INPUT class="form-group" type="text"  name="nombreDo" id="nombreDo">
                                <INPUT class="form-group" type="text"  name="apellidosDo" id="apellidosDo"><br>

                                <input class="form-group" type="text" name="direccionDo" id="direccionDo"> 
                                <br>

                                <div align="center">
                                    <INPUT class="form-group" type="text"  name="telDo" id="telDo">
                                </div>

                                <input class="form-group" type="text" name="coDo" id="coDo"> 
                                <br>
                                <input class="form-group" type="text" name="nip" id="nip">
                                <input class="form-group" type="text" name="nit" id="nit" >
                                <input class="form-group" type="text" name="dui" id="dui" >
                                <br>
                                <input class="form-group" type="text" name="esp" id="esp"> 

                            </div><!--fin columna-->


                        </div><!--fin row-->
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Atras</button>
                        <button type="submit" class="btn btn-primary" >Guardar</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!--****************************fin Dialo******************************-->

</div><!--termina container fluid-->

</div><!--Fin de content wrapper mi codigo-->

<?php
include_once '../plantilla/fin_plantilla.php';
?>
    

