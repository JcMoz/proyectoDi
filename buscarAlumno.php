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
                                    <img src="imagenes/alumnoB.png" width="90" height="90">
                                    Buscar Alumno
                                </h2>
                            </div>
                            <div class="span6">
                              <form name="form1" method="post" action="">
                                  <div class="input-append">
                                  <input type="text" name="buscar" class="input-xlarge" autocomplete="off" autofocus placeholder="   Buscar Alumno">
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
                    <th class="text-center">Nie</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><!--boton de modificar-->
                                <button class="btn btn-primary btn-block btn-large " type="button"  data-toggle="modal" data-target="#modal-default">Editar
              </button>
                            </td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                           
                        </tr>

                    </tbody>
                </table>
            </div> <!--termina tabla-->
            <!--******************************Dialog**************************-->
            <div class="modal modal-info fade in" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                 
                <h4 class="modal-title"> Modificar Alumno </h4>
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
                  <div class="col-md-4">
            <div class="panel panel-default">
            <div class="panel-heading" align="center">Datos personales</div>
              <div class="panel-body">
              <br>
                  <INPUT class="form-control" type="text"  name="nombreA" placeholder=" Nombres del Alumno/a">
                     <INPUT class="form-control" type="text"  name="apellidosA" placeholder=" Apllidos del Alumno/a"><br>
                      <font face="Arial Narrow" size="4" color="#001f4d">Genero : </font>
                      <select name="Genero">
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    
</select>
                       &nbsp &nbsp &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d">Fecha de nacimiento : </font> 
                       <input class="form-group" type="date" name="fecha">
                       <br>
                       
                         &nbsp &nbsp &nbsp &nbsp <input class="form-group" type="text" placeholder="           Nie      " align="center" name="nie"> &nbsp &nbsp
                        
                   
                      &nbsp &nbsp &nbsp Nacionalidad: &nbsp<select name="na">
    <option value="sal">Salvadoreña</option>
    <option value="ex">Extranjero</option>
     </select>
     <br>
                       
                      

            </div>
            <br>
         
            <br>
          </div>
     </div><!--fin columna-->

     <div class="col-md-4">
        <div class="panel-heading" align="center">Datos de Recidencia</div>
              <div class="panel-body">
              <br>
                  <INPUT class="form-control" type="text"  name="direccion" placeholder=" Direccion "><br>
                  <INPUT class="form-control" type="text"  name="distanciaC" placeholder="Distancia en kilómetros entre el centro educativo y recidencia">
                  <br>
                     &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="depto" placeholder=" Departamento">  &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                       <input class="form-group" type="text"  placeholder="  Municipio  " name="municipio"> &nbsp &nbsp &nbsp &nbsp
                      <input class="form-group" type="text" placeholder="  Telefono   " name="telefono">

            </div><!--cierre de panel body-->
         
     </div><!--fin columna-->

                
              </div><!--fin row-->

              </div>
            
            </form>

          </div>
     
            </div>


              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Atras  <img src="../public/dist/img/ico/Backup Green Button.ico"></button>
                <button type="button">Cancelar Contribucion <img src="../public/dist/img/ico/Donate.ico"></button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
          

       
            <!--****************************fin Dialo******************************-->
                       
      </div><!--Fin de Dimencion de la pantalla-->

    </div><!--termina container fluid-->

</div><!--Fin de content wrapper mi codigo-->

<?php
include_once './molde/fin.php';
?>
    

