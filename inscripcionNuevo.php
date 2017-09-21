<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
    <!-- /.content-wrapper -->
     <div class="content-wrapper">
     <div class="container-fluid">
     <font face="Arial Narrow" size="5" color="#001f4d">Ficha de resgistro de estudiantes.
     </font>
       
       <div class="row">
         <div class="col-md-8">
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
            <br>
          </div>
     </div>
          <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                  <!--imagen   -->
                  <div align="center">
                  <img src="imagenes/inscripcion1.gif" class="img-responsive">
                  </div>
              
                </div>
                <br> <br> <br>
                <div align="center">
              <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-info" onclick="location='/proyectoDi/inscripcionNuevo3.php'">
              <input type="submit" value="Cancelar" name="cancel" class="btn-secondary">
            </div>    
        </div>
     </div>
   
   
        
     </div>
     </div>
     </div>
    
        <!--ojo -->

<?php
include_once './molde/fin.php';
?>