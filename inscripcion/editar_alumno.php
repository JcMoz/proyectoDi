<!--******************************Dialog**************************-->
<script>
function soloNumero(e){
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key);
        numerito="0123456789";
        especiales="8-37-38-46";
        teclado_especial=false;
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }
        if(numerito.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
        }


        function soloLetras(e){
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key).toLowerCase();
        letras=" áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales="8-37-38-46-164";
        teclado_especial=false;
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;break;
            }
        }
        if(letras.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
        }

</script>
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
        <input class="form-group" type="text"id="nomA" name="nombreA" autocomplete="off" autofocus placeholder="    Nombre Alumno/a" size="25" onkeypress="return soloLetras(event)" onpaste="return false">
        <input class="form-group" type="text" id="apeA" name="apeA" autocomplete="off" autofocus placeholder="    Apellido Alumno/a" size="25" onkeypress="return soloLetras(event)" onpaste="return false">
        <input class="form-group" type="text" id="diA" name="dirA" autocomplete="off" autofocus placeholder="    Dirección   " size="50"> <br>

        <input class="form-group" type="text" id="disA" name="disA" autocomplete="off" autofocus placeholder=" Distancia" size="10"> &nbsp &nbsp
        <input class="form-group" type="text" id="depAl" name="depA" autocomplete="off" autofocus placeholder=" Departamento" size="15" onkeypress="return soloLetras(event)" onpaste="return false"> &nbsp &nbsp
        <input class="form-group" type="text" id="muA" name="muniA" autocomplete="off" autofocus placeholder=" Municipio" size="15" onkeypress="return soloLetras(event)" onpaste="return false">
    <div align="center">
       <br>
         <h4 class="modal-title">Datos del encargado.</h4>
    </div>
     <input class="form-group" type="text" id="nomEnc" name="nombE" autocomplete="off" autofocus placeholder="    Nombre Encargado/a" size="25" onkeypress="return soloLetras(event)" onpaste="return false">
     <input class="form-group" type="text" id="apE" name="apeE" autocomplete="off" autofocus placeholder="    Apellido Encargado/a" size="25" onkeypress="return soloLetras(event)" onpaste="return false"><br>

     <input class="form-group" type="text" id="prE"name="profe" autocomplete="off" autofocus placeholder=" Profesion" size="15" onkeypress="return soloLetras(event)" onpaste="return false">
     <input class="form-group mask-telefono" type="text" id="tel" name="telE" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp
     <input class="form-group mask-dui" type="text" id="dui" name="duiE" autocomplete="off" autofocus placeholder=" DUI" size="15"><br>
     <input class="form-group" type="text" id="pro" name="dirE" autocomplete="off" autofocus placeholder="    Dirección   " size="50"> <br>
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
    $dep=$_REQUEST['depA'];
    $duiZ=$_REQUEST['duiE'];
    $mu=$_REQUEST['muniA'];
     $dA=$_REQUEST['dirE'];
    
    $idA=$_REQUEST['actualizar'];
    $idE=$_REQUEST['actualizar1'];
     mysqli_query($conexion, "UPDATE alumno SET nom_alumno='$nom',ape_alumno='$ape',dir_alum='$di',distancia='$dis',depto_alum='$dep',mun_alum='$mu' WHERE id_alumno='$idA'");
     mysqli_query($conexion, "UPDATE encargado SET nom_enc='$nom1',ape_enc='$ap1',profe_enc='$pro',dui_enc='$duiZ',dir_trab_enc='$dA' WHERE id_encargado='$idE'");
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
<script type="text/javascript">
    $('.mask-dui').mask('00000000-0');
    $('.mask-telefono').mask('0000-0000');
</script>