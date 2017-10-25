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
                                        $idRe=$row['id_alumno'];
                                    echo '<option value='."$row[0]".'>Alumno/a: '.$row['1'].'&nbsp&nbsp'.$row['2'].'</option>';
                                    
                                    }
                                    ?>
                      
                                </select>
              <br>
              
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomP" autocomplete="off" autofocus placeholder="     Nombres del Padre " size="35"> 
                <INPUT class="form-group" type="text"  name="apelliP" autocomplete="off" autofocus placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionP" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telP" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiP" placeholder="    DUI  " size="15">
                 <INPUT class="form-control" type="text"  name="diP" autocomplete="off" autofocus placeholder="  Dirección  ">
                 <br>
            
                      

            </div><!--Cierre de panel body -->
            <div class="panel-heading" align="center">Datos de la madre</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomM" autocomplete="off" autofocus placeholder="     Nombres de la Madre " size="35">
                <INPUT class="form-group" type="text"  name="apelliM" autocomplete="off" autofocus placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionM" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telM" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiM" placeholder="      DUI  " size="15">
                 <INPUT class="form-control" type="text"  name="dirM" autocomplete="off" autofocus placeholder="  Dirección  ">
                 <br/>
            </div><!--cierre de panel body-->
            <div class="panel-heading" align="center">Datos del encargado</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomE" autocomplete="off" autofocus placeholder="     Nombres del Encargado/a " size="35"> 
                <INPUT class="form-group" type="text"  name="apelliE" autocomplete="off" autofocus placeholder=" Apellidos  " size="35"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionE" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="telE" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group" type="text"  name="duiE" placeholder="  DUI  " size="15">
                 <INPUT class="form-control" type="text"  name="direE" autocomplete="off" autofocus  placeholder="  Dirección  ">
                 <br/>
            </div><!--cierre de panel body-->
            
         
        </div>
     </div>
      <div class="col-md-4">
            <div class="panel panel-default">
            <div class="panel">
                  <!--imagen   -->
                  <div align="center">
                      <img src="../imagenes/inscripcion4.jpg" class="img-responsive">
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
    $dir=$_POST["diP"];
    mysqli_query($conexion,"INSERT INTO padre(nom_pad,ape_pad,profe_pad,tel_pad,dui_pad,dir_trab_pad,id_alumno) values('$nomp','$apelli','$profesion','$tel','$dui','$dir','$idRe')");
    
    $nompM = $_POST["nomM"];
    $apelliM = $_POST["apelliM"];
    $profesionM = $_POST["profesionM"];
    $telM = $_POST["telM"];
    $duiM=$_POST["duiM"];
    $dM=$_POST["dirM"];
    
    mysqli_query($conexion,"INSERT INTO madre(nom_mad,ape_mad,profe_mad,tel_mad,dui_mad,dir_mad,id_alumno) VALUES ('$nompM','$apelliM','$profesionM','$telM','$duiM','$dM','$idRe')");
    
     $nompE = $_POST["nomE"];
    $apelliE = $_POST["apelliE"];
    $profesionE = $_POST["profesionE"];
    $telE = $_POST["telE"];
    $duiE=$_POST["duiE"];
    $dieE=$_POST["direE"];
     
    mysqli_query($conexion,"INSERT INTO encargado(nom_enc,ape_enc,profe_enc,tel_enc,dui_enc,dir_trab_enc,id_alumno) VALUES ('$nompE','$apelliE','$profesionE','$telE','$duiE','$dieE','$idRe')");
    echo '<script>location.href="inscripcionNuevo1.php";</script>';

}
include_once '../plantilla/fin_plantilla.php';
?>