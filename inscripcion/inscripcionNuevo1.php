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
              
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomP" autocomplete="off" autofocus placeholder="     Nombres del Padre " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> 
                <INPUT class="form-group" type="text"  name="apelliP" autocomplete="off" autofocus placeholder=" Apellidos  " size="35" required="" minlength="2"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionP" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-telefono" type="text"  name="telP" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-dui" type="text"  name="duiP" autocomplete="off" autofocus placeholder="    DUI  " size="15" required="" minlength="2">
                 <INPUT class="form-control" type="text"  name="diP" autocomplete="off" autofocus placeholder="  Dirección  " onkeypress="return soloLetras(event)" onpaste="return false">
                 <br>
            
                      

            </div><!--Cierre de panel body -->
            <div class="panel-heading" align="center">Datos de la madre</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomM" autocomplete="off" autofocus placeholder="     Nombres de la Madre " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                <INPUT class="form-group" type="text"  name="apelliM" autocomplete="off" autofocus placeholder=" Apellidos  " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionM" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-telefono" type="text"  name="telM" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-dui" type="text"  name="duiM" autocomplete="off" autofocus placeholder="      DUI  " size="15" required="" minlength="2">
                 <INPUT class="form-control" type="text"  name="dirM" autocomplete="off" autofocus placeholder="  Dirección  " onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                 <br/>
            </div><!--cierre de panel body-->
            <div class="panel-heading" align="center">Datos del encargado</div>
              <div class="panel-body">
              <!-- codigo-->
              <br>
               &nbsp &nbsp<INPUT class="form-group" type="text"  name="nomE" autocomplete="off" autofocus placeholder="     Nombres del Encargado/a " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> 
                <INPUT class="form-group" type="text"  name="apelliE" autocomplete="off" autofocus placeholder=" Apellidos  " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"><br>
                 &nbsp &nbsp<INPUT class="form-group" type="text"  name="profesionE" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                 &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-telefono" type="text"  name="telE" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-dui" type="text"  name="duiE" placeholder="  DUI  " size="15" required="" minlength="2">
                 <INPUT class="form-control" type="text"  name="direE" autocomplete="off" autofocus  placeholder="  Dirección  " onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
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
              <input type="submit" value="Guardar" name="Guardar" class="btn btn-primary">
             
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
    try{
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
   
     echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inscripcionNuevo.php";
                    
                });</script>';
    } catch (Exception $exc) {
         echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos", "error");</script>';
               
    }

}
include_once '../plantilla/fin_plantilla.php';
?>
<script type="text/javascript">
    $('.mask-dui').mask('00000000-0');
    $('.mask-telefono').mask('0000-0000');
</script>
<script>
$.validator.setDefaults({
    submitHandler: function () {
        document.getElementById('pasar').value="ok";    
        document.FORMULARIO_VALIDADO.submit();
    }
});

$(document).ready(function () {
    $("#FORMULARIO_VALIDADO").validate({
        rules: {
             nomP: {
                required: true,
                minlength: 2

               
            },
             apelliP: {
                required: true,
                minlength: 2
            },
            profesionP: {
                required: true,
                minlength: 2
            },
            telP: {
                required: true,

                minlength: 2
            },
            diP: {
                required: true,
                minlength: 2,
                
            },
            nomM: {
                required: true,
                minlength: 2,
            },
            apelliM: {
                required: true,
                minlength: 2,
            },
            profesionM: {
                required: true,
                minlength: 2,
            },
            telM: {
                required: true,
                minlength: 2,
            },
            dirM: {
                required: true,
                minlength: 2,
            },
            nomE: {
                required: true,
                minlength: 2,
            },
            apelliE: {
                required: true,
                minlength: 2,
            },
            profesionE: {
                required: true,
                minlength: 2,
            },
            telE: {
                required: true,
                minlength: 2,
            },
            direE: {
                required: true,
                minlength: 2,
            }
            
        },

        messages: {
             nomP: {
                required: "Campo vacío",
                minlength: ""
                
            },
              apelliP: {
                required: "Campo vacío",
                minlength: ""
            },
            profesionP: {
                required: "Campo vacío",
                minlength: ""
            },
            telP: {
                required: "Campo vacío",
                minlength: ""
            },
            diP: {
                required: "Campo vacío",
                minlength: ""
            },
            nomM: {
                required: "Campo vacío",
                minlength: "",
                
            },
            
            apelliM: {
                required: "Campo vacío",
                minlength: "",
            },
            profesionM: {
                required: "Campo vacío",
                minlength: "",
            },telM: {
                required: "Campo vacío",
                minlength: "",
            } ,dirM: {
                required: "Campo vacío",
                minlength: "",
            },nomE: {
                required: "Campo vacío",
                minlength: "",
            }
            ,apelliE: {
                required: "Campo vacío",
                minlength: "",
            },profesionE: {
                required: "Campo vacío",
                minlength: "",
            },telE: {
                required: "Campo vacío",
                minlength: "",
            },direE: {
                required: "Campo vacío",
                minlength: "",
            }
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            // Add `has-feedback` class to the parent div.form-group
            // in order to add icons to inputs
            element.parents(".col-sm-5").addClass("has-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }

            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!element.next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
            }
        },
        success: function (label, element) {
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!$(element).next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
            $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
            $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
        }
    });
});

</script>
