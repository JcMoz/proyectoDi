<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';

?>
<style >
 .btn-cancelar{
    background-color: #9e9e9e;
    color: white;
  }
  .btn-siguiente{
    background-color: #607d8b;
    color: white;
  }
</style>
    <!-- /.content-wrapper -->
     <div class="content-wrapper">
     <div class="container-fluid">
     <font face="Arial Narrow" size="5" color="#001f4d">Ficha de registro de estudiantes.
     </font>
       
       <div class="row">
         <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-heading" align="center">Datos personales</div>
              <div class="panel-body">
              <br>
                  <INPUT class="form-control" type="text"  name="nombreA"  placeholder=" Nombres del Alumno/a" auto placeholder="Ingrese el nombre del alumno">
                     <INPUT class="form-control" type="text"  name="apellidosA" placeholder=" Apellidos del Alumno/a"><br>
                      <font face="Arial Narrow" size="4" color="#001f4d">Género : </font>
                      <select name="Genero">
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    
</select>
                       &nbsp &nbsp &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d">Fecha de nacimiento : </font> 
                       <input class="form-group" type="date" name="fecha">
                       <br>
                       
                         &nbsp &nbsp &nbsp &nbsp <input class="form-group" type="text" placeholder="           NIE     " align="center" name="nie"> &nbsp &nbsp
                        
                   
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
                  <INPUT class="form-control" type="text"  name="direccion" placeholder=" Dirección "><br>
                  <INPUT class="form-control" type="text"  name="distanciaC" placeholder="Distancia en kilómetros entre el Centro Educativo y recidencia">
                  <br>
                     &nbsp &nbsp<INPUT class="form-group" type="text"  name="depto" placeholder=" Departamento">  &nbsp &nbsp&nbsp 
                       <input class="form-group" type="text"  placeholder="  Municipio  " name="municipio"> &nbsp 
                      <input class="form-group" type="text" placeholder="  Teléfono   " name="telefono">

            </div><!--cierre de panel body-->
            <br>
          </div>
     </div>
          <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel">
                  <!--imagen   -->
                  <div align="center">
                  <img src="imagenes/inscripcion1.gif" class="img-responsive">
                  </div>
              
                </div>

                <br> <br> <br>
                <div align="center">
              <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-siguiente" onclick="location='/proyectoDi/inscripcion/inscripcionNuevo3.php'">
              <input type="submit" value="Cancelar" name="cancel" class=" btn btn-cancelar" >
             
            </div>    
        </div>
     </div>
   
   
        
     </div>
     </div>
     </div>
    
        <!--ojo -->

<?php
include_once '../plantilla/fin_plantilla.php';
?>