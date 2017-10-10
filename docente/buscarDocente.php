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
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Dirección</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><!--boton de modificar-->
                                <button class="btn btn-primary btn-block btn-large " type="button"  data-toggle="modal" data-target="#modal-default">Modificar</button>
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

       <!--******************************Dialog**************************-->
            <div class="modal modal-info fade in" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                 
                <h4 class="modal-title"> Modificar datos de docente<img src="imagenes/profe.png" width="70" height="70"> </h4>
              </div>

              <div class="modal-body">

<div class="box-body">
              <!-- Date -->
              


              <div class="box box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                  <div class="row" > 
          

     <div class="col-md-12">
      <INPUT class="form-group" type="text"  name="nombreDo" placeholder="        Nombres del docente" size="25">
     <INPUT class="form-group" type="text"  name="apellidosDo" placeholder="      Apellidos del docente" size="25"><br>

    <input class="form-group" type="text" name="direccionDo" placeholder="     Dirección      " size="50"> 
                        <br>

                        <div align="center">
                            <INPUT class="form-group" type="text"  name="telDo" placeholder="   Teléfono" size="15">
                        </div>

<input class="form-group" type="text" name="direccionDo" placeholder="     Correo electrónico      " size="50"> 
                        <br>
        <input class="form-group" type="text" placeholder="           NIP      " align="center" name="nip" size="15">
        <input class="form-group" type="text" placeholder="           NIT      " align="center" name="nit" size="15">
         <input class="form-group" type="text" placeholder="          DUI     " align="center" name="dui" size="15">
                        <br>
<input class="form-group" type="text" name="direccionDo" placeholder="    Especialidad     " size="50"> 

     </div><!--fin columna-->

                
              </div><!--fin row-->

              </div>
            
            </form>

          </div>
     
            </div>


              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Atras  <img src="../public/dist/img/ico/Backup Green Button.ico"></button>
                <button type="button" class="btn btn-primary" >Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
          

       
            <!--****************************fin Dialo******************************-->

    </div><!--termina container fluid-->

</div><!--Fin de content wrapper mi codigo-->

<?php
include_once '../plantilla/fin_plantilla.php';
?>
    

