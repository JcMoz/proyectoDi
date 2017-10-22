<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
?>
<style>
  .btn-atras{
    background-color: #607d8b;
    color: white;
  }

</style>
<!--inicio de content wrapper mi codigo-->

<div class="content-wrapper">

    <div class="container-fluid"> <!--Comienza container Fluid-->
    <div class="col-md-12"><!--Dimencion de la pantalla-->
    <!--Encabezado de la pantalla-->
    <div class="row-fluid" align="center">
                            <div class="span6">
                              <h2 class="text-info">
                                    <img src="../imagenes/alumnoB.png" width="90" height="90">
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
                    <th class="text-center">NIE</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="text-center"><!--boton de modificar-->
                                <button class="btn btn-primary btn-block btn-large " type="button"  data-toggle="modal" data-target="#modal-default">Editar </button>
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
                 
                  <h4 class="modal-title"> Antiguo ingreso<img src="../imagenes/alumnoA.png" width="70" height="70"> </h4>
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
        <input class="form-group" type="text" name="nombreA" placeholder="    Nombre Alumno/a" size="25">
        <input class="form-group" type="text" name="nombreA" placeholder="    Apellido Alumno/a" size="25">
          <input class="form-group" type="text" name="nombreA" placeholder="    Dirección   " size="50"> <br>

          <input class="form-group" type="text" name="nombreA" placeholder=" Distancia" size="10"> &nbsp &nbsp
        <input class="form-group" type="text" name="nombreA" placeholder=" Departamento" size="15"> &nbsp &nbsp
          <input class="form-group" type="text" name="nombreA" placeholder=" Municipio" size="15"> <br>

       
        <input class="form-group" type="text" name="nombreA" placeholder="  Último Grado" size="15"> &nbsp &nbsp
        <input class="form-group" type="text" name="nombreA" placeholder=" Año que lo cursó" size="15"> &nbsp &nbsp
          <input class="form-group" type="text" name="nombreA" placeholder="  Código" size="10"> <br>
    <input class="form-group" type="text" name="nombreA" placeholder="    Nombre del centro Escolar   " size="50"> <br>
    <select name="Grado">
    <option value="pri">Nivel</option>
    <option value="se">Primer</option>
    <option value="ter">Segundo</option>
     <option value="cuar">Tercer</option>
      </select>

         <select name="Grado">
          <option value="pri">Grado a Matricular</option>
    <option value="pri">Primero</option>
    <option value="se">Segundo</option>
    <option value="ter">Tercero</option>
     <option value="cuar">Cuarto</option>
      <option value="quin">Quinto</option>
       <option value="sex">Sexto</option>
        <option value="sep">Séptimo</option>
         <option value="oct">Octavo</option>
          <option value="nov">Noveno</option>
</select>
<select name="seccion">
          <option value="pri">Sección</option>
    <option value="pri">A</option>
    <option value="se">B</option>
    </select>
    <select name="estado">
          <option value="pri">Estado</option>
    <option value="pri">Activo</option>
    <option value="se">Inactivo</option>
    </select>
    <br>
    <div align="center">
       <br>
         <h4 class="modal-title">Datos del encargado.</h4>
    </div>
     <input class="form-group" type="text" name="nombreA" placeholder="    Nombre Encargado/a" size="25">
        <input class="form-group" type="text" name="nombreA" placeholder="    Apellido Encargado/a" size="25"><br>

        <input class="form-group" type="text" name="nombreA" placeholder=" Profesión" size="15">&nbsp &nbsp

        <input class="form-group" type="text" name="nombreA" placeholder=" Teléfono" size="15">&nbsp
        <input class="form-group" type="text" name="nombreA" placeholder=" DUI" size="15"><br>
          <input class="form-group" type="text" name="nombreA" placeholder="    Dirección   " size="50"> <br>
     </div><!--fin columna-->

                
              </div><!--fin row-->

              </div>
            
            </form>

          </div>
     
            </div>


              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-atras" data-dismiss="modal">Atrás  <img src="../public/dist/img/ico/Backup Green Button.ico"></button>
                <button type="button" class="btn btn-primary" >Guardar</button>
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
include_once '../plantilla/fin_plantilla.php';
?>
    

