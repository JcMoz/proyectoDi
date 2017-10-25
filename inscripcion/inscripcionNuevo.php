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
       <!--comienza formulario-->
   <form id="FORMULARIO_VALIDADO"  method="post" class="form-register" >
    <input type="hidden" name="pase" id="pase"/>

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
    <option value="Salvadoreña">Salvadoreña</option>
    <option value="Extranjera">Extranjero</option>
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
                      <input class="form-group mask-telefono" type="text" placeholder="  Teléfono   " name="telefono">

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
             <!--termina formulario-->
            </div>    
        </div>
     </div>
   
   
        
     </div> 
   </form>
     </div>
     </div>
    
        <!--ojo -->

<?php

if (isset($_REQUEST['pase'])) {
    include_once '../conexion/php_conexion.php';
    $nombre = $_POST["nombreA"];
    $apellido = $_POST["apellidosA"];
    $gen = $_POST["Genero"];
    $fecha = $_POST["fecha"];
    $nie = $_POST["nie"];
    $nac = $_POST["na"];
    $dir = $_POST["direccion"];
    $distancia = $_POST["distanciaC"];
    $depa = $_POST["depto"];
    $muni = $_POST["municipio"];
    $telefono = $_POST["telefono"];

     mysqli_query($conexion,"INSERT INTO alumno( nom_alumno,ape_alumno,gen_alumno,f_nac_alum,nie,nac_alum,dir_alum,distancia,depto_alum,mun_alum,tel) VALUES ('$nombre','$apellido','$gen','$fecha','$nie','$nac','$dir','$distancia','$depa','$muni','$telefono')");
    echo '<script>location.href="inscripcionNuevo3.php";</script>';

}

include_once '../plantilla/fin_plantilla.php';
?>
<script type="text/javascript">
 $('.mask-dui').mask('00000000-0');
 $('.mask-telefono').mask('0000-0000');
  $('.mask-nit').mask('0000-000000-000-0')
  </script>