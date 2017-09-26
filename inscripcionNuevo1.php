<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
   
    <!-- /.content-wrapper Mi codigo -->
        <div class="content-wrapper">
     <div class="container-fluid">
     <font face="Arial Narrow" size="5" color="#001f4d">Ficha de resgistro de estudiantes.
     </font>
       
       <div class="row">
         
   
   
          <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-heading" align="center">Datos del padre</div>
              <div class="panel-body">
              <br>
              
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomP" placeholder="     Nombres del Padre " size="35"> 
                <INPUT class="form-group" type="text"  name="apelliP" placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionP" placeholder="Profesion u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telP" placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiP" placeholder="    Dui  " size="15">
                 <INPUT class="form-control" type="text"  name="direccionP" placeholder="  Dirección  ">
                 <br>
            
                      

            </div><!--Cierre de panel body -->
            <div class="panel-heading" align="center">Datos de la madre</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomP" placeholder="     Nombres de la Madre " size="35">
                <INPUT class="form-group" type="text"  name="apelliM" placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionM" placeholder="Profesion u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telM" placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiM" placeholder="      Dui  " size="15">
                 <INPUT class="form-control" type="text"  name="direccionM" placeholder="  Dirección  ">
         
            </div><!--cierre de panel body-->
            <div class="panel-heading" align="center">Datos del encargado</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomE" placeholder="     Nombres del Encargado/a " size="35"> 
                <INPUT class="form-group" type="text"  name="apelliE" placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionE" placeholder="Profesion u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telE" placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiE" placeholder="  Dui  " size="15">
                 <INPUT class="form-control" type="text"  name="direccionE" placeholder="  Dirección  ">
         
            </div><!--cierre de panel body-->
            
         
        </div>
     </div>
      <div class="col-md-4">
            <div class="panel panel-default">
            <div class="panel-body">
                  <!--imagen   -->
                  <div align="center">
                  <img src="imagenes/inscripcion4.jpg" class="img-responsive">
                  </div>
                </div> 
                <br>
            <div align="center">
              <input type="submit" value="Guardar" name="Guardar" class="btn btn-info" onclick="location='/proyectoDi/#'" >
               <input type="submit" value="Cancelar" name="cancelar" class="btn-secondary">
             
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