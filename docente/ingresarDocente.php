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

<!-- /.content-wrapper mi codigo-->
<div class="content-wrapper">
    <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalayudaIngresarDocente" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
        <?php include_once '../ayuda/ayudaIngresarDocente.php'; ?>
    </div>

    <div class="container-fluid"> <!--Comienza container Fluid-->

        &nbsp &nbsp &nbsp<font face="Arial Narrow" size="5" color="#001f4d">Ingresar docente.</font>
        <form action="" id="FORMULARIO_VALIDADO"  method="post" class="form-register" enctype="multipart/form-data" >
            <div class="row"> 

                <div class="col-md-8">
                    <div class="panel panel-default">
                        <br>
                        <div class="panel-heading" align="center">Datos de docente</div>
                        <div class="panel-body">
                            <br>
                            <!--comienza formulario-->

                            <input type="hidden" name="tirar" id="pase"/>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">

                                    <INPUT class="form-control" id="Idnom" name="nombreDo" type="text" autocomplete="off" autofocus placeholder=" Nombres del docente" required="" minlength="2" onkeypress="return soloLetras(event)" onpaste="return false">
                                </div>
                                <div class="col-md-5">
                                    <INPUT class="form-control" type="text" id="Idapellido" name="apellidosDo"autocomplete="off" autofocus  placeholder="Apellidos del docente" required="" minlength="2" onkeypress="return soloLetras(event)" onpaste="return false"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">

                                    <input class="form-control" type="text" id="Iddireccion" name="direccionDo" autocomplete="off" autofocus placeholder="     Dirección      " required="" minlength="2"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <INPUT class="form-control mask-telefono" type="text" id="Idtel" name="telDo" autocomplete="off" autofocus placeholder="   Teléfono" size="10" required="" minlength="2">
                                </div>
                                <div class="col-md-3">

                                    <select class="form-control" name="genero">

                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>

                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="date" name="fecha"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="coDo" autocomplete="off" autofocus placeholder="     Correo electrónico      " required="" minlength="2"> 
                                    <br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" autocomplete="off" autofocus placeholder="        NIP      "name="nip" required="" minlength="2">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control mask-nit" type="text" autocomplete="off" autofocus placeholder="        NIT      "  name="nit" required="" minlength="2">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control mask-dui" type="text" autocomplete="off" autofocus placeholder="           DUI     " name="dui" required="" minlength="2"> <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="esp" autocomplete="off" autofocus placeholder=" Especialidad     " required="" minlength="2"> 
                                    <br>

                                </div>
                            </div>


                            <div align="center">
                                <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                                <input type="button" value="Cancelar" name="cancel" class=" btn btn-cancelar" onclick="location='/proyectoDi/doc/principal.php'">

                            </div>
                            <br>

                        </div><!--cierre del panel body-->
                        <br>

                        <br>
                        <br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel">
                            <!--imagen   -->
                            <div align="center">
                                <br/>
                                <img src="../imagenes/docente1.png" class="img-responsive">
                            </div>
                            <br/>
                            <div id="fotos1">
                                <font face="Arial Narrow" size="5" color="#001f4d">Agregar foto</font>
                                <input class="form-control "type="file" name="imagenG" id="foto"/><br/><br/>
                            </div>
                        </div>
                        <br> <br> <br>

                    </div>
                </div>

            </div><!--row-->
        </form><!--termina formulario-->
        </form><!--fin form-->

    </div><!--Termina container fluid-->


</div><!--cierrre de content-wrapper mi codigo-->
<?php
if (isset($_REQUEST['tirar'])) {
    try {
        
    include_once '../conexion/php_conexion.php';
    $nombre = $_POST["nombreDo"];
    $apellido = $_POST["apellidosDo"];
    $direc = $_POST["direccionDo"];
    $tel = $_POST["telDo"];
    $sexo = $_POST["genero"];
    $fec = $_POST["fecha"];
    $co = $_POST["coDo"];
    $np = $_POST["nip"];
    $nt = $_POST["nit"];
    $du = $_POST["dui"];
    $esp = $_POST["esp"];
    $img = addslashes(file_get_contents($_FILES['imagenG']['tmp_name']));

    mysqli_query($conexion, "INSERT INTO docente(nom_doc,ape_doc,dir_doc,tel_doc,gen_doc,f_nac_doc,cor_doc,nip_doc,nit,dui_doc,esp_doc,foto_doc) VALUES ('$nombre','$apellido','$direc','$tel','$sexo','$fec','$co','$np','$nt','$du','$esp','$img')");
    echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="ingresarDocente.php";
                    
                });</script>';
    } catch (Exception $exc) {
         echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
               
    }





}
include_once '../plantilla/fin_plantilla.php';
?>
<script type="text/javascript">
    $('.mask-dui').mask('00000000-0');
    $('.mask-telefono').mask('0000-0000');
    $('.mask-nit').mask('0000-000000-000-0');
</script>
<script>
$.validator.setDefaults({
    submitHandler: function () {
        document.getElementById('tirar').value="ok";    
        document.FORMULARIO_VALIDADO.submit();
    }
});

$(document).ready(function () {
    $("#FORMULARIO_VALIDADO").validate({
        rules: {
             nombreDo: {
                required: true,
                minlength: 1

               
            },
             apellidosDo: {
                required: true,
                minlength: 2
            },
            direccionDo: {
                required: true,
                minlength: 2
            },
            telDo: {
                required: true,

                minlength: 2
            },
            coDo: {
                required: true,
                minlength: 2,
                
            },
            nip: {
                required: true,
                minlength: 2,
                
            },
            nit: {
                required: true,
                minlength: 2,
                
            },
            dui: {
                required: true,
                minlength: 2,
                
            },
            esp: {
                required: true,
                minlength: 2,
                
            }
            
        },

        messages: {
             nombreDo: {
                required: "Campo vacío",
                minlength: ""
                
            },
             apellidosDo: {
                required: "Campo vacío",
                minlength: ""
            },
            direccionDo: {
                required: "Campo vacío",
                minlength: ""
            },
            telDo: {
                required: "Campo vacío",
                minlength: ""
            },
            coDo: {
                required: "Campo vacío",
                minlength: ""
            },
            nip: {
                required: "Campo vacío",
                minlength: ""
            },
            nit: {
                required: "Campo vacío",
                minlength: ""
            },
            dui: {
                required: "Campo vacío",
                minlength: ""
            },
            esp: {
                required: "Campo vacío",
                minlength: ""
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


