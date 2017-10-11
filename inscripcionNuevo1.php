<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<style >
 .btn-dan{
    background-color: ;
  }
  .btn-cancelar{
    background-color: #9e9e9e;
    color: white;
  }
   </style>
    <!-- /.content-wrapper Mi codigo -->
        <div class="content-wrapper">
     <div class="container-fluid">
     <font face="Arial Narrow" size="5" color="#001f4d">Ficha de registro de estudiantes.
     </font>
       
       <div class="row">
         
   
   
          <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-heading" align="center">Datos del padre</div>
              <div class="panel-body">
              <br>
              
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomP" placeholder="     Nombres del Padre " size="35"> 
                <INPUT class="form-group" type="text"  name="apelliP" placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionP" placeholder="Profesión u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telP" placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiP" placeholder="    DUI  " size="15">
                 <INPUT class="form-control" type="text"  name="direccionP" placeholder="  Dirección  ">
                 <br>
            
                      

            </div><!--Cierre de panel body -->
            <div class="panel-heading" align="center">Datos de la madre</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomP" placeholder="     Nombres de la Madre " size="35">
                <INPUT class="form-group" type="text"  name="apelliM" placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionM" placeholder="Profesión u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telM" placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiM" placeholder="      DUI  " size="15">
                 <INPUT class="form-control" type="text"  name="direccionM" placeholder="  Dirección  ">
         
            </div><!--cierre de panel body-->
            <div class="panel-heading" align="center">Datos del encargado</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomE" placeholder="     Nombres del Encargado/a " size="35"> 
                <INPUT class="form-group" type="text"  name="apelliE" placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionE" placeholder="Profesión u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telE" placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiE" placeholder="  DUI  " size="15">
                 <INPUT class="form-control" type="text"  name="direccionE" placeholder="  Dirección  ">
         
            </div><!--cierre de panel body-->
            
         
        </div>
     </div>
      <div class="col-md-4">
            <div class="panel panel-default">
            <div class="panel">
                  <!--imagen   -->
                  <div align="center">
                  <img src="imagenes/inscripcion4.jpg" class="img-responsive">
                  </div>
                </div> 
                <br>
                <br>
                <br>
            <div align="center">
              <input type="submit" value="Guardar" name="Guardar" class="btn btn-primary" onclick="location='/proyectoDi/#'" >
               <input type="submit" value="Cancelar" name="cancelar" class="btn btn-cancelar">
             
            </div>
        </div>
     </div>
     </div>
     </div>
     </div>
    
        <!--cierre Mi codigo -->

<?php
include_once './molde/fin.php';
?>