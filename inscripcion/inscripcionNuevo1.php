<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
?>
<style >

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
       <form id="FORMULARIO_VALIDADO"  method="post" class="form-register" >
    <input type="hidden" name="pasar" id="pasar"/>
       <div class="row">
         
                                
   
          <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-heading" align="center">Datos del padre</div>
              <div class="panel-body">
                  <br/>
                  <select class="form-control" name="" disabled="false" >

                    <?php
                    include_once '../conexion/php_conexion.php';
                   $palumno = mysqli_query($conexion, "SELECT id_alumno,nom_alumno,ape_alumno FROM alumno ORDER BY id_alumno DESC LIMIT 1");
                                    while ($row = mysqli_fetch_array($palumno)) {
                                    echo '<option value='."$row[0]".'>Alumno/a: '.$row['1'].'&nbsp&nbsp&nbsp'.$row['2'].'</option>';
                                    
                                    }
                                    ?>
                      
                                </select>
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
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomM" placeholder="     Nombres de la Madre " size="35">
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
        </form>
     </div>
     </div>
    
        <!--cierre Mi codigo -->

<?php
if (isset($_REQUEST['pasar'])) {
    include_once '../conexion/php_conexion.php';
    $nomp = $_POST["nomP"];
    $apelli = $_POST["apelliP"];
    $profesion = $_POST["profesionP"];
    $tel = $_POST["telP"];
    $dui=$_POST["duiP"];
    $dir=$_POST["direcionP"];
    
     $nompM = $_POST["nomM"];
    $apelliM = $_POST["apelliM"];
    $profesionM = $_POST["profesionM"];
    $telM = $_POST["telM"];
    $duiM=$_POST["duiM"];
    $dirM=$_POST["direcionM"];
    
     $nompE = $_POST["nomE"];
    $apelliE = $_POST["apelliE"];
    $profesionE = $_POST["profesionE"];
    $telE = $_POST["telE"];
    $duiE=$_POST["duiE"];
    $dirE=$_POST["direcionE"];
    

     mysqli_query($conexion,"INSERT INTO padre( nom_pad,ape_pad,profe_pad,tel_pad,dui_pad,dir_tra_pad) VALUES ('$nomp','$apelli','$profesion','$tel','$dui','$dir')");
    echo '<script>location.href="inscripcionNuevo1.php";</script>';

    mysqli_query($conexion,"INSERT INTO madre( nom_mad,ape_mad,profe_mad,tel_mad,dui_mad,lugar_tra_pad) VALUES ('$nompM','$apelliM','$profesionM','$telM','$duiM','$dirM')");
    echo '<script>location.href="inscripcionNuevo1.php";</script>';
    
    mysqli_query($conexion,"INSERT INTO encargado( nom_enc,ape_enc,profe_enc,tel_enc,dui_enc,lugar_tra_enc) VALUES ('$nompE','$apelliE','$profesionE','$telE','$duiE','$dirE')");
    echo '<script>location.href="inscripcionNuevo1.php";</script>';

}
include_once '../plantilla/fin_plantilla.php';
?>