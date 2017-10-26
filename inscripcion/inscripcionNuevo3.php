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
        <form id="FORMULARIO_VALIDADO"  method="post" class="form-register" >
            
            <input type="hidden" name="pase" id="pase"/>
            
            <div class="row">




                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">Estudios Realizados</div>
                        <div class="panel-body"><!--panel estudios realizados-->
                            <br>
                            <select class="form-control" name="x" disabled="false" >

                    <?php
                    include_once '../conexion/php_conexion.php';
                   $palumno = mysqli_query($conexion, "SELECT id_alumno,nom_alumno,ape_alumno FROM alumno ORDER BY id_alumno DESC LIMIT 1");
                                    while ($row = mysqli_fetch_array($palumno)) {
                                         $idAre=$row['id_alumno'];
                                           echo '<option value='."$row[0]".'>Alumno/a: '.$row['1'].'&nbsp&nbsp'.$row['2'].'</option>';
                                    }
                                    ?>
                     
                                </select>
                            <br>
                           
                            &nbsp &nbsp&nbsp<INPUT class="form-group" type="text"  name="Ugrado" autocomplete="off" autofocus placeholder=" Último Grado que cursó " required="" minlength="1">
                            &nbsp &nbsp &nbsp <INPUT class="form-group" type="text"  name="añoC" autocomplete="off" autofocus placeholder="Año que lo Cursó" required="" minlength="2"> &nbsp &nbsp <input class="form-group" type="text" autocomplete="off" autofocus placeholder="       Código" name="cod" required="" minlength="2"> &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <input class="form-control" type="text" autocomplete="off" autofocus  placeholder=" Nombre del centro educativo  " name="inCurso" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> 
                            <br>
                            <div align="center">
                                
                            </div>


                        </div>
                        <br> <br>
                        <div class="panel-heading" align="center">Datos de matricula</div>
                        <div class="panel-body">
                            <br>
                            
                            <div align="center">
                                <font face="Arial Narrow" size="4" color="#001f4d">Fecha de matricula: </font> 
                       <input class="form-group" type="date" name="fechaM">
                       
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

                            <div align="center">
                                <br>
                                <font face="Arial Narrow" size="4" color="#001f4d">Grado a matricular : </font>

                                <select name="Grado">

                                    <?php
                                    include_once '../conexion/php_conexion.php';
                                    $pgrado = mysqli_query($conexion, "SELECT id_grado, nom_grado FROM grado");
                                    while ($row = mysqli_fetch_array($pgrado)) {
                                        $idGrecuperado=$row['id_grado'];?>
                                    <option value="<?php echo$row['id_grado'];?>"><?php echo $row['nom_grado'];?></option>
                                   <?php
                                    }
                                    ?>
                                    
                                </select>
                                &nbsp &nbsp &nbsp <font face="Arial Narrow" size="4" color="#001f4d">Secciones: </font>
                                <select name="Secciones">
                                    <?php
                                    include_once '../conexion/php_conexion.php';
                                    $pame = mysqli_query($conexion, "SELECT id_seccion, nombre_seccion FROM seccion");
                                    while ($row = mysqli_fetch_array($pame)) {
                                        $idSrecuperado=$row['id_seccion'];?>
                                    
                                    <option value="<?php echo$row['id_seccion'];?>"><?php echo$row['nombre_seccion'];?></option>
                                    <?php   
                                    }
                                    ?>

                                </select>

                            </div>


                            <br>
                             <input class="form-control" type="text" autocomplete="off" autofocus  placeholder=" Docmuentos a presentar  " name="docpre" onkeypress="return soloLetras(event)" onpaste="return false" required="" minlength="2"> 
                            <br>
                            <br>

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
                            <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-siguiente">
                        </div>    
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!--Cierre Mi codigo -->

<?php
if (isset($_REQUEST['pase'])) {
    try {
    include_once '../conexion/php_conexion.php';
    $ultimo = $_POST["Ugrado"];
    $añoq = $_POST["añoC"];
    $intcurso = $_POST["inCurso"];
    $codigo = $_POST["cod"];
    $turno = $_POST["turno"];
    $nivel=$_POST["nivel"];
    $seccion=$_POST["Secciones"];
    $gra=$_POST["Grado"];
    $fM=$_POST["fechaM"];
    $pre=$_POST["docpre"];


    mysqli_query($conexion, "INSERT INTO inscripcion(ult_grado,anio_cgrado,nom_cea,cod_inst_ant,turno,nivel,id_seccion,id_grado,id_alumno,f_matricula,pres_docs) VALUES ('$ultimo','$añoq','$intcurso','$codigo','$turno','$nivel','$seccion','$gra','$idAre','$fM','$pre')");
   // mysqli_query($conexion, "INSERT INTO inscripcion(id_seccion,id_grado,id_alumno,f_matricula) values('$seccion','$gra','$idAre','$fM')");
   
     echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inscripcionNuevo1.php";
                    
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

</script>
