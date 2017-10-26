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
                  <INPUT class="form-control" type="text"  name="nombreA" autocomplete="off" autofocus  placeholder=" Nombres del Alumno/a" placeholder="Ingrese el nombre del alumno" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                     <INPUT class="form-control" type="text"  name="apellidosA" autocomplete="off" autofocus placeholder=" Apellidos del Alumno/a" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"><br>
                      <font face="Arial Narrow" size="4" color="#001f4d">Género : </font>
                      <select name="Genero">
    <option value="Femenino">Femenino</option>
    <option value="Masculino">Masculino</option>
    
</select>
                       &nbsp &nbsp &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d">Fecha de nacimiento : </font> 
                       <input class="form-group" type="date" name="fecha">
                       <br>
                       
                         &nbsp &nbsp &nbsp &nbsp <input class="form-group" type="text" autocomplete="off" autofocus placeholder="           NIE     " align="center" name="nie" required="" minlength="2"> &nbsp &nbsp
                        
                   
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
                  <INPUT class="form-control" type="text"  name="direccion" autocomplete="off" autofocus placeholder=" Dirección " required="" minlength="2"><br>
                  <INPUT class="form-control" type="text"  name="distanciaC" autocomplete="off" autofocus placeholder="Distancia en kilómetros entre el Centro Educativo y recidencia" required="" minlength="1">
                  <br>
                     &nbsp &nbsp<INPUT class="form-group" type="text"  name="depto" autocomplete="off" autofocus placeholder=" Departamento" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">  &nbsp &nbsp&nbsp 
                       <input class="form-group" type="text" autocomplete="off" autofocus  placeholder="  Municipio  " name="municipio" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> &nbsp 
                      <input class="form-group mask-telefono" type="text" autocomplete="off" autofocus placeholder="  Teléfono   " name="telefono" required="" minlength="2">

            </div><!--cierre de panel body-->
            <br>
          </div>
     </div>
          <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel">
                  <!--imagen   -->
                  <div align="center">
                      <img src="../imagenes/inscripcion1.gif" class="img-responsive">
                  </div>
              
                </div>

                <br> <br> <br>
                <div align="center">
              <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-siguiente">
              <input type="button" value="Cancelar" name="cancel" class=" btn btn-cancelar" onclick="location='/proyectoDi/doc/index.php'" >
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
    try{
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
    
     echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inscripcionNuevo3.php";
                    
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
  $('.mask-nit').mask('0000-000000-000-0')
  </script>
 <script>
$.validator.setDefaults({
    submitHandler: function () {
        document.getElementById('pase').value="ok";    
        document.FORMULARIO_VALIDADO.submit();
    }
});

$(document).ready(function () {
    $("#FORMULARIO_VALIDADO").validate({
        rules: {
             nombreA: {
                required: true,
                minlength: 2

               
            },
             apellidosA: {
                required: true,
                minlength: 2
            },
            nie: {
                required: true,
                minlength: 2
            },
            direccion: {
                required: true,

                minlength: 2
            },
            distanciaC: {
                required: true,
                minlength: 1,
                
            },
            depto: {
                required: true,
                minlength: 5,
            },
            municipio: {
                required: true,
                minlength: 5,
            },
            telefono: {
                required: true,
                minlength: 5,
            }
            
        },

        messages: {
             nombreA: {
                required: "Campo vacío",
                minlength: ""
                
            },
              apellidosA: {
                required: "Campo vacío",
                minlength: ""
            },
            direccionDo: {
                required: "Campo vacío",
                minlength: ""
            },
            nie: {
                required: "Campo vacío",
                minlength: ""
            },
            direccion: {
                required: "Campo vacío",
                minlength: ""
            },
            distanciaC: {
                required: "Campo vacío",
                minlength: "",
                
            },
            
            depto: {
                required: "Campo vacío",
                minlength: "",
            },
            municipio: {
                required: "Campo vacío",
                minlength: "",
            },telefono: {
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
