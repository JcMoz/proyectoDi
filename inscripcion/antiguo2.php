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

    .btn-siguiente{
        background-color: #607d8b;
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
<!-- /.content-wrapper -->

<div class="content-wrapper">
    <div class="container-fluid">
        <font face="Arial Narrow" size="5" color="#001f4d">Ficha de registro de estudiantes.
        </font>
        <form id="FORMULARIO_VALIDADO"  method="post" class="form-register" >

            <input type="hidden" name="pase" id="pase"/>

            <div class="row">




                <div class="col-md-8">
                    <div class="panel panel-default">

                        <br> <br>
                        <div class="panel-heading" align="center">Datos de matricula</div>
                        <div class="panel-body">
                            <br>
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
                            <br/>
                            <?php
                              $id_re = mysqli_query($conexion, "SELECT*FROM alumno INNER JOIN c_inscripcion ON alumno.id_alumno=c_inscripcion.id_alumno "
                                                . "WHERE alumno.id_alumno='$antiguo'");
                                        while ($row = mysqli_fetch_array($id_re)) {
                                            $id_incrip = $row['id_inscripcion'];
                                            $id_gra_r = $row['id_grado'];
                                        }
                             //si esta el de inscripcion en la tabla c_boleta
                                        $siEsta=  mysqli_query($conexion,"SELECT * FROM c_boleta WHERE id_inscripcion='$antiguo'");
                                        if (mysqli_num_rows($siEsta)) {           
                            ?>
                            <div align="center">
                                <font face="Arial Narrow" size="4" color="#001f4d">Fecha de matricula: </font> 

                                <input class="form-group" type="date" name="fechaM" required min=<?php ini_set('date.timezone', 'America/El_Salvador');
                                $hoy = date("Y-m-d");
                                echo $hoy; ?>>


                                <?php
                              
                                $repro = mysqli_query($conexion, "SELECT*FROM c_boleta WHERE estado='Reprobada' AND id_inscripcion='$id_incrip'");
                                 
                                ?>
                                <div align="center">
                                    <br>
                                    <font face="Arial Narrow" size="4" color="#001f4d">Grado a matricular : </font>
                                    <?php
                                    if (mysqli_num_rows($repro) == 1 || mysqli_num_rows($repro) == 2 || mysqli_num_rows($repro) == 3 ||
                                            mysqli_num_rows($repro) == 4 || mysqli_num_rows($repro) == 5 || mysqli_num_rows($repro) == 6) {
                                      
                                        $sacaGrado = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado='$id_gra_r'");
                                        while ($x = mysqli_fetch_array($sacaGrado)) {
                                            $id_g_inser = $x['id_grado'];
                                            $nom = $x['nom_grado'];
                                        }
                                        ?>
                                        <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                    <?php
                                    } else {
                                        
                                        if ($id_gra_r == 1) {
                                            $segundo = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=2");
                                            while ($row1 = mysqli_fetch_array($segundo)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>
                                        <?php
                                        if ($id_gra_r == 2) {
                                            $ter = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=3");
                                            while ($row1 = mysqli_fetch_array($ter)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>
                                        <?php
                                        if ($id_gra_r == 3) {
                                            $cua = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=4");
                                            while ($row1 = mysqli_fetch_array($cua)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>

                                        <?php
                                        if ($id_gra_r == 4) {
                                            $quin = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=5");
                                            while ($row1 = mysqli_fetch_array($quin)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>

                                        <?php
                                        if ($id_gra_r == 5) {
                                            $sexto = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=6");
                                            while ($row1 = mysqli_fetch_array($sexto)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>

                                        <?php
                                        if ($id_gra_r == 6) {
                                            $sep = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=7");
                                            while ($row1 = mysqli_fetch_array($sep)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>

                                        <?php
                                        if ($id_gra_r == 7) {
                                            $oct = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=8");
                                            while ($row1 = mysqli_fetch_array($oct)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>

                                        <?php
                                        if ($id_gra_r == 8) {
                                            $noveno = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado=9");
                                            while ($row1 = mysqli_fetch_array($noveno)) {
                                                $id_g_inser = $row1['id_grado'];
                                                $nom = $row1['nom_grado'];
                                            }
                                            ?>
                                            <input type="text" class="form-group" value="<?php echo $nom; ?>" size="8" disabled="false">
                                        <?php } ?>

                                            <?php if ($id_gra_r == 9) { ?>
                                            <input type="text" class="form-group" value="Egresado/a" size="8" disabled="false">
                                            <?php } ?>



                                        <?php } 
                                        
                                            ?>
                                    &nbsp &nbsp &nbsp <font face="Arial Narrow" size="4" color="#001f4d">Secciones: </font>
                                    <select name="Secciones">
                                        <?php
                                        include_once '../conexion/php_conexion.php';
                                        $pame = mysqli_query($conexion, "SELECT id_seccion, nombre_seccion FROM seccion");
                                        while ($row = mysqli_fetch_array($pame)) {
                                            $idSrecuperado = $row['id_seccion'];
                                            ?>

                                            <option value="<?php echo$row['id_seccion']; ?>"><?php echo$row['nombre_seccion']; ?></option>
    <?php
                                        } 
?>

                                    </select>

                                </div> <br/>
                                <font face="Arial Narrow" size="4" color="#001f4d">Turmo : </font>
                                <select name="turno">
                                    <option value="Mañana">Mañana</option>
                                    <option value="Tarde">Tarde</option>

                                </select>

                                &nbsp &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d">Nivel : </font>
                                <select name="nivel">

                                    <option >Seleccione</option>
                                    <option value="Primer">Primer</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercer">Tercer</option>

                                </select>
                            </div>
                            <!--                            &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d" name="grado">Turno : </font>
                                                        <input type="radio" name="Mañana">Mañana
                                                        <input type="radio" name="Tarde">Tarde &nbsp &nbsp &nbsp &nbsp &nbsp
                                                        <font face="Arial Narrow" size="4" color="#001f4d" name="rnivel"> Nivel : </font>
                                                        <input type="radio" name="Primer">Primer &nbsp &nbsp
                                                        <input type="radio" name="Segundo">Segundo &nbsp &nbsp
                                                        <input type="radio" name="Tercero">Tercer -->



                            <br>
                            <input class="form-control" type="text" autocomplete="off" autofocus  placeholder=" Docmuentos a presentar  " name="docpre" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> 
                            <br>
                            <br>
                                        <?php }?>
                        </div><!--cierre de panel body-->
                        <br>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel">
                            <!--imagen   -->
                            <div align="center">
                                <img src="../imagenes/inscripcion3.png" height="250px" width="300px">
                            </div>

                        </div>
                        <br> <br> <br>
                        <div align="center">
                            <input type="submit" value="Guardar" name="Siguiente" class="btn btn-siguiente">
                        </div>    
                    </div>
                </div>
            </div>
        </form>
         <form id="FORMULARIo"  method="post" class="form-register" action="antiguo3.php?ir=<?php echo $antiguo; ?>" >
             <div class="text-center">
                 <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-siguiente">
             </div>
        </form>

    </div>
</div>
<!--Cierre Mi codigo -->

<?php
if (isset($_REQUEST['Siguiente'])) {
    try {
    include_once '../conexion/php_conexion.php';
    $turno = $_REQUEST["turno"];
    $nivel=$_POST["nivel"];
    $seccion=$_POST["Secciones"];
    $fM=$_POST["fechaM"];
    $pre=$_POST["docpre"];


    mysqli_query($conexion, "INSERT INTO inscripcion(turno,nivel,id_seccion,id_grado,id_alumno,f_matricula,pres_docs) VALUES ('$turno','$nivel','$seccion','$id_g_inser','$antiguo','$fM','$pre')");
//   // mysqli_query($conexion, "INSERT INTO inscripcion(id_seccion,id_grado,id_alumno,f_matricula) values('$seccion','$gra','$idAre','$fM')");
//   
//     echo '<script>swal({
//                    title: "Exito",
//                    text: "El registro ha sido Guardado!",
//                    type: "success",
//                    confirmButtonText: "ok",
//                    closeOnConfirm: false
//                },
//                function () {
//                    location.href="i.php";
//                    
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
             Ugrado: {
                required: true,
                minlength: 1

               
            },
             cod: {
                required: true,
                minlength: 2
            },
            añoC: {
                required: true,
                minlength: 2
            },
            inCurso: {
                required: true,

                minlength: 2
            },
            docpre: {
                required: true,
                minlength: 2,
                
            }
            
        },

        messages: {
             Ugrado: {
                required: "Campo vacío",
                minlength: ""
                
            },
              cod: {
                required: "Campo vacío",
                minlength: ""
            },
            añoC: {
                required: "Campo vacío",
                minlength: ""
            },
            inCurso: {
                required: "Campo vacío",
                minlength: ""
            },
            docpre: {
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

</script>-->
