<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>


<div class="content-wrapper">
  <div class="container-fluid">

     <div class="container-wrapper">
        <div class="container-fluid">
<br>
      <div align="center">
          <div class="row">

          <div class="col-md-7">
            <div class="panel-default">
              
              
            </div>
            
          </div>

      
        </div>
        
      </div>
          
        </div>
        
      </div>
       <div class="row-fluid" align="center">
                            <div class="span6">
                              <h2 class="text-info">
                                    <div class="panel">
                 <font face="Arial Narrow" size="6" color="#001f4d">Registrar Usuario</font>
                  <img src="imagenes/Signature.ico" width="99" height="99">
              </div>
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
    

      <div align="center">
         <div class="row">
         <div class="col-md-12">
            <div class="panel panel-default">
              
      <div class="form-group">
    
    <input type="text" class="form-group" id="n" placeholder="Docente" size="50"> <br>
     <input type="password" class="form-group" id="n" placeholder="contraseña" size="50"> <br>
      <input type="password" class="form-group" id="n" placeholder="confirmar contraseña" size="50">
  </div><br>
         <font face="Arial Narrow" size="" color="#001f4d">Rol
               &nbsp &nbsp &nbsp<select name="docente">
                <option value="len">Seleccionar</option>
                <option value="len">Docente</option>                              
            </select>
               </font>

            <font face="Arial Narrow" size="" color="#001f4d" class="m-5">Estado del miembro
              <select name="estado">
                <option value="len">Seleccionar</option> 
                <option value="len">Activar</option>                              
            </select>
               </font>                      
           
           
          </div>
     </div>
        

    
  </div><!-- fin de la segubda fila-->
      </div>

 <div align="center">
        <div class="row mt-5">
          <div class="col-md-8">
            <div class="panel-default">
              <div class="panel">
                 <button type="submit" class="btn btn-info" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Guardar la informacion" >Guardar</button>
              </div>
              
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="panel-default">
              <div class="panel">
                <button type="submit" class="btn btn-info" name="crearcopia" data-toggle="tooltip" data-placement="left" data-html="true" title="Abortar la acccion" >Cancelar</button>
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