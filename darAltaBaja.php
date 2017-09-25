<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>

<div class="content-wrapper">
  <div class="container-fluid">

     <div class="container-wrapper">
        <div class="container-fluid">
<br>
        <div class="row"> <!-- inicio de primera columna -->

          <div class="col-md-7"> <!--columna de texto -->
            <div class="panel-default">
              <div class="panel">
                 <font face="Arial Narrow" size="7" color="#001f4d">Dar de alta  y baja</font>
              </div>
              
            </div>
            
          </div>
          <div class="col-md-5"> <!-- columna de imagen -->
            <div class="panel-default">
              <div class="panel">
                <img src="imagenes/Signature.ico" width="99" height="99">
              </div>
              
            </div>
            
          </div>
        </div>
          
        </div>
        
      </div>

       <div class="row">  <!--  segunda fila-->
         <div class="col-md-8">
            <div class="panel panel-default">
              <div class="">
                  <div class="form-group">
    
    <input type="text" class="form-control " id="n" placeholder="Buscar nombre" name="email"><br>
     <input type="text" class="form-control" id="n" placeholder="Usuario" name="usuario"> <br>
      <input type="text" class="form-control" id="n" placeholder="Contraseña" name="contraseña">
  </div>                                       
            </div>
          
           
          </div>
     </div>
          <div class="col-md-4">
            <div class="panel panel-default">
                <div class="">
                  <button type="submit" class="btn btn-md btn-primary btn-block" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Buscar nuevo usuario a registrar" ><img src="imagenes/Zoom.ico" height="20" width="20" align="left">Buscar</button>
                  <br>

                  <button type="submit" class="btn btn-md btn-primary btn-block" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Nombre del usuario" >Usuario</button>
                  <br>

                  <button type="submit" class="btn btn-md btn-primary btn-block" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Seleccione el archivo para restaurar" >Contraseña</button>
                 

        </div>
     </div>  
          
     </div>

    
  </div><!-- fin de la segubda fila-->

 <div align="">
        <div class="row"> <!-- tercera fila -->
          <div class="col-md-8">
            <div class="panel-default">
              <div class="panel">
                 <button type="submit" class="btn btn-info btn-lg" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Guardar informacion" >Guardar</button>
              </div>
              
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="panel-default">
              <div class="panel">
                <button type="submit" class="btn btn-info btn-lg" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Abortar la acccion" >Cancelar</button>
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