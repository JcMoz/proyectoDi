<?php
session_start();
include_once '../conexion/php_conexion.php';
include_once '../plantilla/incio_plantilla.php';
try {
    if ($_SESSION['tipo_user'] == 'ad' or $_SESSION['tipo_user'] == 'p') {
        $profesor = $_SESSION['id_profesor'];
        $sacar = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc='$profesor'");

        while ($row = mysqli_fetch_array($sacar)) {
            $nombre = $row['nom_doc'];
            $ape = $row['ape_doc'];
        }
    }
} catch (Exception $exc) {
    echo '<script>swal("EROR", "Favor revisar los datos e intentar nuevamente", "error");</script>';
}
?>
<?php
//body
include_once '../plantilla/incio_plantilla.php';
if ($_SESSION['tipo_user'] == 'ad') {
    include_once '../plantilla/menu_navegacion.php';
} else {
    if ($_SESSION['tipo_user'] == 'p') {
        include_once '../plantilla/menu_navegacion_1.php';
    }
}
$antiguo = $_GET['ir'];
?>
<style >

    .btn-cancelar{
        background-color: #9e9e9e;
        color: white;
    }
</style>
<script>
    function soloNumero(e) {
        key = e.keyCode || e.which;
        teclado = String.fromCharCode(key);
        numerito = "0123456789";
        especiales = "8-37-38-46";
        teclado_especial = false;
        for (var i in especiales) {
            if (key == especiales[i]) {
                teclado_especial = true;
            }
        }
        if (numerito.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }
    }


    function soloLetras(e) {
        key = e.keyCode || e.which;
        teclado = String.fromCharCode(key).toLowerCase();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
        especiales = "8-37-38-46-164";
        teclado_especial = false;
        for (var i in especiales) {
            if (key == especiales[i]) {
                teclado_especial = true;
                break;
            }
        }
        if (letras.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }
    }

</script>
<!-- /.content-wrapper Mi codigo -->
<div class="content-wrapper">
    <div class="container-fluid">
        <font face="Arial Narrow" size="5" color="#001f4d">Ficha de registro de estudiantes.
        </font>
        <form id="FORMULARIO_VALIDADO"  method="post" class="form-register" action="">
            <input type="hidden" name="pasar" id="pasar"/>  
            <div class="panel panel-default">


                <div class="row">             

                    <div class="col-md-8">

                        <div class="panel-heading" align="center">Datos del padre</div>
                        <div class="panel-body">
                            <br/>

                            <select class="form-control" name="x" disabled="false" >

                                <?php
                                include_once '../conexion/php_conexion.php';
                                $palumno = mysqli_query($conexion, "SELECT id_alumno,nom_alumno,ape_alumno FROM alumno WHERE id_alumno='$antiguo'");
                                while ($row = mysqli_fetch_array($palumno)) {
                                    $idAre = $row['id_alumno'];
                                    echo '<option value=' . "$row[0]" . '>Alumno/a: ' . $row['1'] . '&nbsp&nbsp' . $row['2'] . '</option>';
                                }
                                ?>

                            </select>
                            <br>
                            <?php
                            $padre = mysqli_query($conexion, "SELECT*FROM padre WHERE id_alumno='$antiguo'");
                            while ($s_padre = mysqli_fetch_array($padre)) {
                                ?>

                                &nbsp &nbsp<INPUT class="form-group" type="text" value="<?php echo $s_padre['nom_pad']; ?>"  name="nomP" autocomplete="off" autofocus placeholder="     Nombres del Padre " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> 
                                <INPUT class="form-group" type="text" value="<?php echo $s_padre['ape_pad']; ?>" name="apelliP" autocomplete="off" autofocus placeholder=" Apellidos  " size="35" required="" minlength="2"><br>
                                &nbsp &nbsp<INPUT class="form-group" type="text" value="<?php echo $s_padre['profe_pad']; ?>"  name="profesionP" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                                &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-telefono" value="<?php echo $s_padre['tel_pad']; ?>" type="text"  name="telP" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-dui" type="text" value="<?php echo $s_padre['dui_pad']; ?>" name="duiP" autocomplete="off" autofocus placeholder="    DUI  " size="15" required="" minlength="2">
                                <INPUT class="form-control" type="text" value="<?php echo $s_padre['direccion']; ?>"  name="diP" autocomplete="off" autofocus placeholder="  Dirección  " onkeypress="return soloLetras(event)" onpaste="return false">
                                <br>
                            <?php } ?>


                        </div><!--Cierre de panel body -->
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
                            <div align="center">
                                <input type="submit" value="Guardar" name="Guardar" class="btn btn-primary">

                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="panel-heading" align="center">Datos de la madre</div>
                        <div class="panel-body">
                            <!-- codigo-->
                            <?php
                            $madre = mysqli_query($conexion, "SELECT*FROM madre WHERE id_alumno='$antiguo'");
                            while ($s_madre = mysqli_fetch_array($madre)) {
                                ?>
                                <br>
                                &nbsp &nbsp<INPUT class="form-group" type="text" value="<?php echo $s_madre['nom_mad']; ?>"  name="nomM" autocomplete="off" autofocus placeholder="     Nombres de la Madre " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                                <INPUT class="form-group" type="text" value="<?php echo $s_madre['ape_mad']; ?>" name="apelliM" autocomplete="off" autofocus placeholder=" Apellidos  " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"><br>
                                &nbsp &nbsp<INPUT class="form-group" type="text" value="<?php echo $s_madre['profe_mad']; ?>" name="profesionM" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                                &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-telefono" type="text" value="<?php echo $s_madre['tel_mad']; ?>"  name="telM" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-dui" type="text" value="<?php echo $s_madre['dui_mad']; ?>"  name="duiM" autocomplete="off" autofocus placeholder="      DUI  " size="15" required="" minlength="2">
                                <INPUT class="form-control" type="text" value="<?php echo $s_madre['dir_mad']; ?>" name="dirM" autocomplete="off" autofocus placeholder="  Dirección  " onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                                <br/>

                            <?php } ?>
                            <div class="text-center">
                                <select name="encargado">

                                    <option >Seleccione Encargado</option>
                                    <option value="padre">Padre</option>
                                    <option value="madre">Madre</option>
                                    <option value="0">Otros</option>

                                </select>
                            </div>
                            <br/>
                        </div><!--cierre de panel body-->

                    </div>
                    <br/>
                    <!-- encargado-->
                    <div class="col-md-8">
                        <?php
                        $encargado = mysqli_query($conexion, "SELECT*FROM encargado WHERE id_alumno='$antiguo'");
                        if (mysqli_num_rows($encargado)) {
                            while ($ver_en = mysqli_fetch_array($encargado)) {
                                ?>   
                                <div class="panel-heading" align="center">Datos del Encargado</div>
                                <div class="panel-body">
                                    <br/>
                                    <!-- codigo-->
                                    <br>
                                    &nbsp<INPUT class="form-group" type="text" value="<?php echo $ver_en['nom_enc']; ?>"  name="nomE" autocomplete="off" autofocus placeholder="     Nombres del Encargado/a " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> 
                                    <INPUT class="form-group" type="text" value="<?php echo $ver_en['ape_enc']; ?>"  name="apelliE" autocomplete="off" autofocus placeholder=" Apellidos  " size="35" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"><br>
                                    &nbsp &nbsp<INPUT class="form-group" type="text" value="<?php echo $ver_en['profe_enc']; ?>"  name="profesionE" autocomplete="off" autofocus placeholder="Profesión u oficio " size="15" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                                    &nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-telefono" type="text" value="<?php echo $ver_en['tel_enc']; ?>"  name="telE" autocomplete="off" autofocus placeholder=" Teléfono" size="15">&nbsp &nbsp &nbsp &nbsp<INPUT class="form-group mask-dui" type="text" value="<?php echo $ver_en['dui_enc']; ?>" name="duiE" placeholder="  DUI  " size="15" required="" minlength="2">
                                    <INPUT class="form-control" type="text" value="<?php echo $ver_en['dir_trab_enc']; ?>"  name="direE" autocomplete="off" autofocus  placeholder="  Dirección  " onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2">
                                    <br/>

                                </div><!--cierre de panel body-->
                                <?php
                            }
                        } else {
                            ?>
                            <div class="panel-heading" align="center">Datos del Encargado</div>
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
                    <?php } ?>
                    <!--fin encargado-->


                </div><!--cierre de row-->



            </div><!--cierre panel default-->
        </form>
    </div>

</div>

<!--cierre Mi codigo -->

<?php
if (isset($_REQUEST['pasar'])) {
    try {
        include_once '../conexion/php_conexion.php';
        $nomp = $_POST["nomP"];
        $apelli = $_POST["apelliP"];
        $profesion = $_POST["profesionP"];
        $tel = $_POST["telP"];
        $dui = $_POST["duiP"];
        $dir = $_POST["diP"];
        $enca = $_POST["encargado"];

        if ($enca == "padre") {
            $soy = 1;
        } else {
            $soy = 0;
        }

        mysqli_query($conexion, "UPDATE  padre SET nom_pad='$nomp',ape_pad='$apelli',profe_pad='$profesion',tel_pad='$tel',dui_pad='$dui',direccion='$dir', encargado='$soy' WHERE id_alumno='$antiguo'");

        $nompM = $_POST["nomM"];
        $apelliM = $_POST["apelliM"];
        $profesionM = $_POST["profesionM"];
        $telM = $_POST["telM"];
        $duiM = $_POST["duiM"];
        $dM = $_POST["dirM"];
        if ($enca == "madre") {
            $soy = 1;
        } else {
            $soy = 0;
        }
        mysqli_query($conexion, "UPDATE  madre SET nom_mad='$nompM',ape_mad='$apelliM',profe_mad='$profesionM',tel_mad='$telM',dui_mad='$duiM',dir_mad='$dM',encargado='$soy' WHERE id_alumno='$antiguo'");
        if ($enca == 0) {
            if (mysqli_num_rows($encargado)) {
     $nompE = $_POST["nomE"];
    $apelliE = $_POST["apelliE"];
    $profesionE = $_POST["profesionE"];
    $telE = $_POST["telE"];
    $duiE=$_POST["duiE"];
    $dieE=$_POST["direE"];
//     
                mysqli_query($conexion, "UPDATE encargado SET nom_enc='$nompE',ape_enc='$apelliE',profe_enc='$profesionE',tel_enc='$telE',dui_enc='$duiE',dir_trab_enc='$dieE' WHERE id_alumno='$antiguo'");
            }else{
                     $nompE = $_POST["nomE"];
                $apelliE = $_POST["apelliE"];
                $profesionE = $_POST["profesionE"];
                $telE = $_POST["telE"];
                $duiE = $_POST["duiE"];
                $dieE = $_POST["direE"];

                mysqli_query($conexion, "INSERT INTO encargado(nom_enc,ape_enc,profe_enc,tel_enc,dui_enc,dir_trab_enc,id_alumno) VALUES ('$nompE','$apelliE','$profesionE','$telE','$duiE','$dieE','$antiguo')");

            }
        }

        echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="antiguo_encargado.php";
                    
//                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos", "error");</script>';
    }
}
include_once '../plantilla/fin_plantilla.php';
?>
<!--<script type="text/javascript">
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

</script>-->
