<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<style>
   .btn-cancelar{
    background-color: #9e9e9e;
    color: white;
  }
</style>

<!-- /.content-wrapper -->
     <div class="content-wrapper"><!-- inicio contenedor -->
     <div class="container-fluid"><!-- incio contenedor -->

      <div class="container-wrapper"> <!--inicioprimera fila -->
      	<div class="container-fluid">

        <div align="center">
        <div class="row mt-5"> <!-- inicio fila primera -->
          <div class="col-md-6 mt-5"><!-- inicio columna -->
            <div class="panel-default">
              <div class="panel">
                 <font face="Arial Narrow" size="5" color="#001f4d">Copia de Seguridad</font>
              </div>
              
            </div>
            
          </div> <!-- fin columna -->
          <div class="col-md-6"> <!-- inicio columna -->
            <div class="panel-default">
              <div class="panel">
                <img src="imagenes/Database.ico" >

              </div>
              
            </div>
            
          </div> <!-- fin columna -->
        
      </div> <!-- fin primera fila -->
          
        </div>


   
   
 <div align="center"><!--inicio center -->
 	      <div class="row"><!-- inicio segunda fila -->
        	<div class="col-md-6"><!-- inicio primera columna-->
        		<div class="panel-default">
        			<div class="panel">
        				 <button type="button" class="btn btn-info mt-5 btn-lg" name="crearcopia" data-toggle="modal" data-target="#modal-local" data-placement="left" data-html="true" title="Crea copia de los datos que hay en la base de datos : Backup" >Crear copia</button>

                     <!--INICIO MODAL -->
          <div class="modal modal-info fade in mt-5" id="modal-local">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header " align="center">
                 
                <h4 class="modal-title" > Seleccionar el archivo </h4>
              </div>

              <div class="modal-body">

              <div class="box-body">
              <!-- Date -->
              


              <div class="box box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              <input type="search" class="form-control" name="usuario" placeholder="definale un nombre al archivo para guardar">           
            
            </form>

          </div>
     
            </div>


              </div>

                 <div align="center">
                      <button type="button" class="btn btn-info btn-lg mt-5" data-dismiss="modal">Guardar</button>
                       <button type="button" class="btn btn-cancelar mt-5 btn-lg"  data-dismiss="modal" id="archivo">Cancelar</button>                    
  
                 </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        			</div>
               </div>
        			
        		</div>
        		
        	</div><!-- fin de  segunda fila -->

        	<div class="col-md-6"> <!-- inicio columnaa-->
        		<div class="panel-default">
        			<div class="panel">

                <button type="button" class="btn btn-info mt-5 btn-lg" name="crearcopia" data-toggle="modal" data-target="#modal-default" data-placement="left" data-html="true" title="Seleccione el archivo para restaurar" >Restaurar</button>


                <!--INICIO MODAL -->
          <div class="modal modal-info fade in mt-5" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header " align="center">
                 
                <h4 class="modal-title" > Seleccionar el archivo </h4>
              </div>

              <div class="modal-body">

              <div class="box-body">
              <!-- Date -->
              


              <div class="box box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              <input type="file" class="form-control" name="usuario">           
            
            </form>

          </div>
     
            </div>


              </div>

                 <div align="center">
                      <button type="button" class="btn btn-info btn-lg mt-5" data-dismiss="modal">Restaurar</button>
                  
                       <button type="button" class="btn btn-cancelar mt-5 btn-lg"  data-dismiss="modal">Cancelar</button>
  
                 </div>
              
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

          

            </div><!-- FIN MODAL-->





        			</div>
        			
        		</div>
        		
        	</div><!--fin segunda fila -->
        </div> <!-- fin frla segunda fila -->
 </div><!-- fin align center -->


      		
      	</div>
      	</div>

</div> 
</div>

       
<?php
include_once './molde/fin.php';
?>