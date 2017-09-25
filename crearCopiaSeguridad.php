<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>

<!-- /.content-wrapper -->
     <div class="content-wrapper">
     <div class="container-fluid">

      <div class="container-wrapper">
      	<div class="container-fluid">

        <div class="row mt-5">
        	<div class="col-md-7 mt-5">
        		<div class="panel-default">
        			<div class="panel">
        				 <font face="Arial Narrow" size="7" color="#001f4d">Copia de Seguridad</font>
        			</div>
        			
        		</div>
        		
        	</div>
        	<div class="col-md-5">
        		<div class="panel-default">
        			<div class="panel">
        				<img src="imagenes/Database.ico" >
        			</div>
        			
        		</div>
        		
        	</div>
        </div>
      		
      	</div>
      	
      </div>


     </div>
   
 <div align="center">
 	      <div class="row">
        	<div class="col-md-6">
        		<div class="panel-default">
        			<div class="panel">
        				 <button type="button" class="btn btn-info mt-5 btn-lg" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Crea copia de los datos que hay en la base de datos : Backup" >Crear copia</button>
        			</div>
        			
        		</div>
        		
        	</div>
        	<div class="col-md-6">
        		<div class="panel-default">
        			<div class="panel">
        				<button type="button" class="btn btn-info mt-5 btn-lg" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Seleccione el archivo para restaurar" >Restaurar</button>
        			</div>
        			
        		</div>
        		
        	</div>
        </div>
 </div>
      		
      	</div>
      	
      </div>

     </div>

    
       


<?php
include_once './molde/fin.php';
?>