<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
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
    <!--titulo-->
    <div align="center">
    	<font face="Arial Narrow" size="5" color="#001f4d">Modificar Horarios de 1°- 2° Grado.</font>
    	 <img src="imagenes/modiHo.png" width="60" height="60">
   </div>
   <br> <br>

    <div class="row">
            <div class="col">
                <!--Comienza tabla-->
        <div class="panel-body">
            <table class="table table-bordered table table-hover table-sm table-responsive">
                <thead class="">
                <th class="text-center">Hora</th>
                <th class="">Lunes</th>
                <th class="">Martes</th>
                <th class="">Miércoles</th>
                <th class="">Jueves</th>
                <th class="">Viernes</th>
                <th class="">Grado</th>
                <th class="">Accion</th>
                </thead>

                <tbody>

                    <tr>
                    <td class="text-center">7:15-8:00am<br>
                                            8:00-8:45am<br>
                                            9:05-9:50am<br>
                                            9:50-10:35am<br>
                                            10:55-11:00am
                    </td>
                        <td class="text-center">
                         
						</td>

                        <td class="text-center">
                        	
                        </td>

                        <td class="text-center">
                        	
                        </td>

                        <td class="text-center">
                        	
                        </td>

                        <td class="text-center">
                        	
                        </td>

                        <td class="text-center">
                        	
                        </td>
                        
                                                
                        <td class="text-center">
                       <button class="btn btn-primary btn-block btn-large " type="button"  data-toggle="modal" data-target="#modHo2">Editar </button>

                        </td>
                    </tr>

                </tbody>
                <!---****************segunda fila*****************************-->
                 <tbody>

                    <tr>
                    <td class="text-center">7:15-8:00am<br>
                                            8:00-8:45am<br>
                                            9:05-9:50am<br>
                                            9:50-10:35am<br>
                                            10:55-11:00am
                    </td>
                        <td class="text-center">
                         
						</td>
                        <td class="text-center">
                        	
                        </td>
                        <td class="text-center">
                        	
                        </td>
                        <td class="text-center"></td>
                        
                                                
                        <td class="text-center">
                            
                        </td>
                         <td class="text-center">
                            
                        </td>
                        <td class="text-center">
                        <button class="btn btn-primary btn-block btn-large " type="button"  data-toggle="modal" data-target="#modHo1">Editar </button>

                        </td>
                    </tr>

                </tbody>
                <!---*********************fin de fila***********************************************-->

                 
            </table>
        </div>
        <!--termina tabla-->
            </div><!--col-->
        </div><!--fin de row-->
   <!--botones-->
   
    </div><!--fin container fluid-->
     <!--******************************Dialog**************************-->
            <div class="modal modal-info fade in" id="modHo1">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                 
                <h5 class="modal-title">Modificar Horario<img src="imagenes/dialogHo2.png" width="70" height="70"> </h5>
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
        <h5>Lunes</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Martes</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Miércoles</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Jueves</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Viernes</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Docente " size="40">
        
     </div><!--fin columna-->

                
              </div><!--fin row-->

              </div>
            
            </form>

          </div>
     
            </div>


              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-atras pull-left" data-dismiss="modal">Atras  <img src="../public/dist/img/ico/Backup Green Button.ico"></button>
                <button type="button" class="btn btn-primary" >Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
          

       
            <!--****************************fin Dialo******************************-->

            <!--******************************Dialog**************************-->
            <div class="modal modal-info fade in" id="modHo2">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                 
                <h5 class="modal-title">Modificar Horario<img src="imagenes/modiHo2.png" width="70" height="70"> </h5>
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
        <h5>Lunes</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Martes</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Miércoles</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Jueves</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
         <h5>Viernes</h5>
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Materia" size="15">
        <input class="form-group" type="text" name="mat" placeholder=" Docente " size="40">
        
     </div><!--fin columna-->

                
              </div><!--fin row-->

              </div>
            
            </form>

          </div>
     
            </div>


              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-atras pull-left" data-dismiss="modal">Atras  <img src="../public/dist/img/ico/Backup Green Button.ico"></button>
                <button type="button" class="btn btn-primary" >Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
          

       
            <!--****************************fin Dialo******************************-->
    </div><!--fin contant wrapper-->
<?php
include_once './molde/fin.php';
?>