<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<style >
  
    .btn-atras{
    background-color: #607d8b;
    color: white;
  }
</style>
<div class="content-wrapper">
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <div align="center">
            <font face="Arial Narrow" size="5" color="#001f4d">Registrar Notas</font>
            <img src="imagenes/lapizA.ico" width="50" height="50">
        </div>
        <div>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-group" type="text" name="maestro" size="50" placeholder="        Nombre del Maestro">  &nbsp &nbsp
            <input class="form-group" type="text" name="grado" size="15" placeholder="          Grado">  &nbsp &nbsp
            <input class="form-group" type="text" name="ano" size="15" placeholder="          Año">
            <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-group" type="text" name="asig" size="30" placeholder="        Asignatura">  &nbsp &nbsp &nbsp
            <input class="form-group" type="text" name="period" size="20" placeholder="             Periodo">
        </div>


        <div class="row">
            <div class="col">
                <!--Comienza tabla-->
        <div class="panel-body">
            <table class="table table-bordered table table-hover table-sm table-responsive">
                <thead class="">
                <th class="text-center">NIE</th>
                <th class="text-center">Alumnos</th>
                <th class="text-center">Act1</th>
                <th class="text-center">Act2</th>
                <th class="text-center">Act3</th>
                <th class="text-center">R</th>
                <th class="text-center">P</th>
                <th class="text-center">Act1</th>
                <th class="text-center">Act2</th>
                <th class="text-center">Act3</th>
                <th class="text-center">R</th>
                <th class="text-center">P</th>
                <th class="text-center">Act1</th>
                <th class="text-center">Act2</th>
                <th class="text-center">Act3</th>
                <th class="text-center">R</th>
                <th class="text-center">P</th>
                <th class="text-center">PF</th>
                <th class="text-center">Acción</th>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                                                
                        <td class="text-center">
                            <button class="btn btn-success btn-block btn-large " type="button"  data-toggle="modal" data-target="#calificar">Calificar
                            </button>
                            </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!--termina tabla-->
            </div>
        </div><!--fin de row-->
        <!--******************************Dialog**************************-->
            <div class="modal modal-info fade in" id="calificar">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                 
                <h4 class="modal-title">Calificar<img src="imagenes/cali.ico" width="70" height="70"></h4>
                
              </div>

              <div class="modal-body">
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">

                  <div class="row" > 
          

     <div align="center" class="col-md-12">
               <select name="actividades1">
               <!--Nota poner la opcion de Refuerzo en el combo para ingresar esa calificacion-->
          <option value="acti1">Actividades</option>

          </select> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          Calificacion <input class="form-group" type="text" name="ca" placeholder=" 10.0" size="3">

          <br>

          <select name="actividades1">
          <option value="acti1">Actividades</option>

          </select> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          Calificacion <input class="form-group" type="text" name="ca" placeholder=" 10.0" size="3">
          <br>

          <select name="actividades1">
          <option value="acti1">Actividades</option>

          </select> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          Calificacion <input class="form-group" type="text" name="ca" placeholder=" 10.0" size="3">
           
         
     </div><!--fin columna-->

                
              </div><!--fin row-->

              </div>
            
            </form>

              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-atras pull-left" data-dismiss="modal">Atras </button>
                <button type="button"  class="btn btn-primary">Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
          

       
            <!--****************************fin Dialo******************************-->
        
        

    </div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once './molde/fin.php';
?>