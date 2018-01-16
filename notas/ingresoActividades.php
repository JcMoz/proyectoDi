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
$grado = $_GET['ir'];
$materia = $_GET['llego'];
?>
<style >
    .btn-atras{
        background-color: #607d8b;
        color: white;
    }

</style>
<!--comienza mi codigo-->
<div class="content-wrapper">
     <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalIngresoAMaterias" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
        <?php include_once '../ayuda/ayudaIngresoAMaterias.php'; ?>
    </div>
    <!--Comienza container fluid-->
    <form action="" id="FORMULARIO_VALIDADO"  method="post" class="form-register" enctype="multipart/form-data" >
        <div class="container-fluid">
            <?php
//para extraer el nombre de la materia
            $sacar = mysqli_query($conexion, "SELECT*FROM materias WHERE id_materia='$materia'");
            while ($mi_materia = mysqli_fetch_array($sacar)) {
                $nom_m = $mi_materia['nombre'];
            }
//fin de codigo para extraer la materia
//******para extraer el grado*****
            $extraer = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado='$grado'");
            while ($m_grado = mysqli_fetch_array($extraer)) {
                $nom_g = $m_grado['nom_grado'];
            }
//******fin de extraccion de grado
//******para extraer el id de la asiganacion_a_g
//este if es para ingresar las actividades por materia por la asignacionn de materias 
//que un docente da una materia para cada grado y artistica para 5 y 6
            if ($grado == 1 || $grado == 2 || $grado == 3 || $grado == 4) {
                $id_a_g = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN grado on asignacion_a_g.id_gra=grado.id_grado WHERE id_docentes='$profesor' AND turno_grado=1");
                while ($id_sacar = mysqli_fetch_array($id_a_g)) {
                    $mi_id = $id_sacar['id_asignacion'];
                }
//*****fin de extraer el id de la asignacion querido amigo cuando veas este codigo no te asustes, solo Dios sabe
//**** como funciona XD
///**********para sacar las catividades y validar que ya estan ingresadas
                $verificar = mysqli_query($conexion, "SELECT*FROM actividades WHERE id_asignacion_a_g='$mi_id'");
                while ($a_verificar = mysqli_fetch_array($verificar)) {
                    $a_periodo = $a_verificar['periodo'];
                    $a_materia = $a_verificar['id_materia'];
                    $a_turno = $a_verificar['turno_a'];
                }
            } else {
                //***********para ingresar actividades de artistica*****************************
                if ($grado == 5 || $grado == 6 && $nom_m=='Artistica') {
                    $id_m = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_docente='$profesor'");
                    while ($id_sacar = mysqli_fetch_array($id_m)) {
                        $mi_id = $id_sacar['id_asig_m'];
                    }
//*****fin de extraer el id de la asignacion querido amigo cuando veas este codigo no te asustes, solo Dios sabe
//**** como funciona XD
///**********para sacar las catividades y validar que ya estan ingresadas
                    $verificar = mysqli_query($conexion, "SELECT*FROM actividades_materia WHERE id_asignacion_m='$mi_id'");
                    while ($a_verificar = mysqli_fetch_array($verificar)) {
                        $a_periodo = $a_verificar['periodo'];
                        $a_grado = $a_verificar['id_grado'];
                        $a_turno = $a_verificar['turno_a'];
                        $a_materia=$a_verificar['id_materia'];
                    }
                } else {
                    //***********para ingresar actividades de artistica*****************************            
                    $id_m = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_docente='$profesor' AND id_materia='$materia'");
                    while ($id_sacar = mysqli_fetch_array($id_m)) {
                        $mi_id = $id_sacar['id_asig_m'];
                    }
//*****fin de extraer el id de la asignacion querido amigo cuando veas este codigo no te asustes, solo Dios sabe
//**** como funciona XD
///**********para sacar las catividades y validar que ya estan ingresadas
                    $verificar = mysqli_query($conexion, "SELECT*FROM actividades_materia WHERE id_asignacion_m='$mi_id'");
                    while ($a_verificar = mysqli_fetch_array($verificar)) {
                        $a_periodo = $a_verificar['periodo'];
                        $a_grado = $a_verificar['id_grado'];
                        $a_turno = $a_verificar['turno_a'];
                        $a_materia=$a_verificar['id_materia'];
                    }
                }
            }
            //*************fin de extraer datos
            ?>
            <div align="center">
                <font face="Arial Narrow" size="5" color="#001f4d">Ingresar actividades</font>
                <img src="../imagenes/pencil.png" width="50" height="50"><br/>
                <font face="Arial Narrow" size="5" color="#001f">Asignatura: <?php echo $nom_m; ?>&nbsp &nbsp Grado:<?php echo $nom_g; ?></font>
            </div>
            <input type="hidden" name="tirar" id="pase"/>
            <div class="pt-2" align="center">
                <select name="periodo" required="">
                    <option value=1>Primer</option>
                    <option value=2>Segundo</option>
                    <option value=3">Tercer</option>
                </select>  &nbsp &nbsp &nbsp

            </div>

            <div class="row"><!--comienza row-->


                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br/>
                        <div class="panel-heading" align="center">Actividades 35%</div>
                        <div class="panel-body">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act1" placeholder="                 Actividad 1" size="35" required="" minlength="2">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act2" placeholder="                 Actividad 2" size="35" required="" minlength="2">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act3" placeholder="                 Actividad 3" size="35" required="" minlength="2">
                            <br>   
                        </div><!--cierre del panel body-->
                        <br/>
                    </div>

                </div><!--Termina las columnas de la pantalla-->

                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br>
                        <div class="panel-heading" align="center">Actividades 35%</div>
                        <div class="panel-body">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act4" placeholder="                 Actividad 1" size="35" required="" minlength="2">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act5" placeholder="                 Actividad 2" size="35" required="" minlength="2">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act6" placeholder="                 Actividad 3" size="35" required="" minlength="2">
                            <br>   
                        </div><!--cierre del panel body-->
                        <br>
                    </div>
                </div><!--Termina las columnas de la pantalla-->

                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br>
                        <div class="panel-heading" align="center">Actividades 30%</div>
                        <div class="panel-body">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act7" placeholder="                 Actividad 1" required="" minlength="2">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act8" placeholder="                 Actividad 2" required="" minlength="2">
                            &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="act9" placeholder="                 Actividad 3" required="" minlength="2">
                            <br>   
                        </div><!--cierre del panel body-->
                        <br>
                    </div>
                </div><!--Termina las columnas de la pantalla-->

            </div><!--fin class row-->
            <div align="center">
                <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                <input type="button" value="Cancelar" name="cancel" class=" btn btn-dark" onclick="location = '/proyectoDi/doc/principal.php'">
            </div>

        </div><!--terminada container fluid-->
    </form><!--termina formulario-->
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';

if (isset($_REQUEST['tirar'])) {
    try {
        include_once '../conexion/php_conexion.php';
        $ac1 = $_POST["act1"];
        $ac2 = $_POST["act2"];
        $ac3 = $_POST["act3"];
        $ac4 = $_POST["act4"];
        $ac5 = $_POST["act5"];
        $ac6 = $_POST["act6"];
        $ac7 = $_POST["act7"];
        $ac8 = $_POST["act8"];
        $act9 = $_POST["act9"];
        $pe = $_POST["periodo"];
        if ($grado == 1 || $grado == 2 || $grado == 3 || $grado == 4) {
            $turno = 1;
        } else {
            $turno = 0;
        }

        if ($pe == 1) {
            $estado = "enProceso";
        } else {
            if ($pe == 2 || $pe == 3) {
                $estado = "esperando";
            }
        }
         if ($grado == 1 || $grado == 2 || $grado == 3 || $grado == 4) {
        ///validar para los grados 1-4 actividades
        $arregle=mysqli_query($conexion,"SELECT*FROM actividades WHERE id_materia='$materia' AND turno_a='$turno' AND periodo='$pe' AND id_asignacion_a_g='$mi_id'");
        if (mysqli_num_rows($arregle)> 0) {
                echo '<script>swal({
                    title: "Actividades para este periodo ya fueron registradas",
                    text: "Registre actividades para el siguiente periodo",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="grados_registrar.php";
                    
                });</script>';
            } else {
                mysqli_query($conexion, "INSERT INTO actividades(id_asignacion_a_g,periodo,act_1,act_2,act_3,act_4,act_5,act_6,act_7,act_8,act_9,id_materia,turno_a,estado_a) VALUES ('$mi_id','$pe','$ac1','$ac2','$ac3','$ac4','$ac5','$ac6','$ac7','$ac8','$act9','$materia','$turno','$estado')");
                //bitacora
    $verUsu=  mysqli_query($conexion,"SELECT*FROM usuarios WHERE id_doc='$profesor'");
    while ($row=  mysqli_fetch_array($verUsu)){
        $usuario=$row['id_usuario'];
    }
    $vergra=  mysqli_query($conexion,"SELECT*FROM grado WHERE id_grado='$grado'");
    while ($row=  mysqli_fetch_array($vergra)){
        $nom=$row['nom_grado'];
    }
    ini_set('date.timezone', 'America/El_Salvador');
    $hora = date("Y/m/d ") . date("h-i-s");
    $actividad="Ingreso actividades de la materia:". $nom_m.' '."Grado :".$nom;
    mysqli_query($conexion,"INSERT INTO bitacora(id_usuario,actividad,fecha) VALUES('$usuario','$actividad','$hora')");
   //fin bitacora
                echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="grados_registrar.php";
                    
                });</script>';
        }
        }else {
         //para ingresar las actividades por materia.
          $arregle=mysqli_query($conexion,"SELECT * FROM actividades_materia WHERE id_grado='$grado' AND "
                  . "id_materia='$materia' AND periodo='$pe' AND id_asignacion_m='$mi_id'");
        if (mysqli_num_rows($arregle)> 0) {
                echo '<script>swal({
                    title: "Actividades para este periodo ya fueron registradas",
                    text: "Registre actividades para el siguiente periodo",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="grados_registrar.php";
                    
                });</script>';
            } else {
                mysqli_query($conexion, "INSERT INTO actividades_materia(id_asignacion_m,periodo,act_1,act_2,act_3,act_4,act_5,act_6,act_7,act_8,act_9,id_materia,turno_a,estado_a,id_grado) VALUES ('$mi_id','$pe','$ac1','$ac2','$ac3','$ac4','$ac5','$ac6','$ac7','$ac8','$act9','$materia','$turno','$estado','$grado')");
                //bitacora
    $verUsu=  mysqli_query($conexion,"SELECT*FROM usuarios WHERE id_doc='$profesor'");
    while ($row=  mysqli_fetch_array($verUsu)){
        $usuario=$row['id_usuario'];
    }
    $vergra=  mysqli_query($conexion,"SELECT*FROM grado WHERE id_grado='$grado'");
    while ($row=  mysqli_fetch_array($vergra)){
        $nom=$row['nom_grado'];
    }
    ini_set('date.timezone', 'America/El_Salvador');
    $hora = date("Y/m/d ") . date("h-i-s");
    $actividad="Ingreso actividades de la materia:". $nom_m.' '."Grado :".$nom;
    mysqli_query($conexion,"INSERT INTO bitacora(id_usuario,actividad,fecha) VALUES('$usuario','$actividad','$hora')");
   //fin bitacora
                echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="grados_registrar.php";
                    
                });</script>';
            }
        } 
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}
?>
<script>
    $.validator.setDefaults({
        submitHandler: function () {
            document.getElementById('tirar').value = "ok";
            document.FORMULARIO_VALIDADO.submit();
        }
    });

    $(document).ready(function () {
        $("#FORMULARIO_VALIDADO").validate({
            rules: {
                act1: {
                    required: true,
                    minlength: 1


                },
                act2: {
                    required: true,
                    minlength: 2
                },
                act3: {
                    required: true,
                    minlength: 2
                },
                act4: {
                    required: true,
                    minlength: 2
                },
                act5: {
                    required: true,
                    minlength: 2,
                },
                act6: {
                    required: true,
                    minlength: 2,
                },
                act7: {
                    required: true,
                    minlength: 2,
                },
                act8: {
                    required: true,
                    minlength: 2,
                },
                act9: {
                    required: true,
                    minlength: 2,
                }
            },
            messages: {
                act1: {
                    required: "Campo vacío",
                    minlength: ""

                },
                act2: {
                    required: "Campo vacío",
                    minlength: ""
                },
                act3: {
                    required: "Campo vacío",
                    minlength: ""
                },
                act4: {
                    required: "Campo vacío",
                    minlength: ""
                },
                act5: {
                    required: "Campo vacío",
                    minlength: ""
                },
                act6: {
                    required: "Campo vacío",
                    minlength: ""
                },
                act7: {
                    required: "Campo vacío",
                    minlength: ""
                },
                act8: {
                    required: "Campo vacío",
                    minlength: ""
                },
                act9: {
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
