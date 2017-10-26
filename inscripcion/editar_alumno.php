<!--******************************Dialog**************************-->
<form name="editaA" method="post" action="">
     <input type="hidden" name="actualizar" id="actu" value="00000">
     <input type="hidden" name="actualizar1" id="actul" value="00000">
    <div class="modal modal-info fade in" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                 
                  <h4 class="modal-title"> Antiguo ingreso<img src="../imagenes/alumnoA.png" width="70" height="70"> </h4>
              </div>

              <div class="modal-body">

<div class="box-body">
              <!-- Date -->
              


              <div class="box box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
          
              <div class="box-body">

                  <div class="row" > 
          

     <div class="col-md-12">
        <input class="form-group" type="text"id="nomA" name="nombreA" placeholder="    Nombre Alumno/a" size="25">
        <input class="form-group" type="text" id="apeA" name="apeA" placeholder="    Apellido Alumno/a" size="25">
        <input class="form-group" type="text" id="diA" name="dirA" placeholder="    Dirección   " size="50"> <br>

        <input class="form-group" type="text" id="disA" name="disA" placeholder=" Distancia" size="10"> &nbsp &nbsp
        <input class="form-group" type="text" id="depAl" name="depA" placeholder=" Departamento" size="15"> &nbsp &nbsp
        <input class="form-group" type="text" id="muA" name="muniA" placeholder=" Municipio" size="15">
    <div align="center">
       <br>
         <h4 class="modal-title">Datos del encargado.</h4>
    </div>
     <input class="form-group" type="text" id="nomEnc" name="nombE" placeholder="    Nombre Encargado/a" size="25">
     <input class="form-group" type="text" id="apE" name="apeE" placeholder="    Apellido Encargado/a" size="25"><br>

     <input class="form-group" type="text" id="prE"name="profe" placeholder=" Profesión" size="15">&nbsp &nbsp

     <input class="form-group" type="text" id="tel" name="telE" placeholder=" Teléfono" size="15">&nbsp
     <input class="form-group" type="text" id="dui" name="duiE" placeholder=" DUI" size="15"><br>
     <input class="form-group" type="text" id="pro" name="dirE" placeholder="    Dirección   " size="50"> <br>
     </div><!--fin columna-->

                
              </div><!--fin row-->

              </div>
            

          </div>
     
            </div>


              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-atras" data-dismiss="modal">Atrás  <img src="../public/dist/img/ico/Backup Green Button.ico"></button>
                <button type="submit" class="btn btn-primary" >Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</form>
            <!--****************************fin Dialo******************************-->
<?php
if (!empty($_REQUEST['nombreA'])) {
    try {
        
    
    $nom=$_REQUEST['nombreA'];
    $nom1=$_REQUEST['nombE'];
    $ape=$_REQUEST['apeA'];
    $ap1=$_REQUEST['apeE'];
    $di=$_REQUEST['dirA'];
    $pro=$_REQUEST['profe'];
    $dis=$_REQUEST['disA'];
    $tel=$_REQUEST['telE'];
    $dep=$_REQUEST['depA'];
    $duiZ=$_REQUEST['duiE'];
    $idA=$_REQUEST['actualizar'];
    $idE=$_REQUEST['actualizar1'];
     mysqli_query($conexion, "UPDATE alumno SET nom_alumno='$nom',ape_alumno='$ape',dir_alum='$di',distancia='$dis',depto_alum='$dep' WHERE id_alumno='$idA'");
     mysqli_query($conexion, "UPDATE encargado SET nom_enc='$nom1',ape_enc='$ap1',profe_enc='$pro',tel_enc='$tel',dui_enc='$duiZ' WHERE id_encargado='$idE'");
       echo '<script>swal({
                    title: "Exito",
                    text: "Informacion actualizada!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="buscarAlumno.php";
                    
                });</script>';
     } catch (Exception $exc) {
    }

}
?>