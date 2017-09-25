<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<!--inicio de content wrapper mi codigo-->
<div class="content-wrapper">
    <div class="container-fluid"> <!--Comienza container Fluid-->
    <div class="col-md-12"><!--Dimencion de la pantalla-->
    <!--Encabezado de la pantalla-->
    <div class="row-fluid" align="center">
                            <div class="span6">
                              <h2 class="text-info">
                                    <img src="imagenes/buscar.ico" width="80" height="80">
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
                <table class="table table-bordered table table-hover">
                    <thead class="">
                    <th class="text-center">Acción</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Apellidos</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Dirección</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><!--boton de modificar-->
                                <a class="btn btn-success btn-block btn-large" href="modificarDocente.php">Modificar
                                </a>
                            </td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
                        <!--termina tabla-->
      </div><!--Fin de Dimencion de la pantalla-->

    </div><!--termina container fluid-->

</div><!--Fin de content wrapper mi codigo-->

<?php
include_once './molde/fin.php';
?>
    
