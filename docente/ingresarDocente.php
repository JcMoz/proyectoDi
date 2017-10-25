<?php
include_once '../plantilla/incio_plantilla.php';
;
include_once '../plantilla/menu_navegacion.php';
;
?>
<style >
    .btn-cancelar{
        background-color: #9e9e9e;
        color: white;
    }
</style>

<!-- /.content-wrapper mi codigo-->
<div class="content-wrapper">

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

                                    <INPUT class="form-control" id="Idnom" name="nombreDo" type="text" autocomplete="off" autofocus placeholder=" Nombres del docente" required="" minlength="2" pattern="[a-z]{1,15}">
                                </div>
                                <div class="col-md-5">
                                    <INPUT class="form-control" type="text" id="Idapellido" name="apellidosDo"autocomplete="off" autofocus  placeholder="Apellidos del docente" required="" minlength="2" ><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">

                                    <input class="form-control" type="text" id="Iddireccion" name="direccionDo" autocomplete="off" autofocus placeholder="     Dirección      "><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <INPUT class="form-control mask-telefono" type="text" id="Idtel" name="telDo" autocomplete="off" autofocus placeholder="   Teléfono" size="10">
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
                                    <input class="form-control" type="text" name="coDo" autocomplete="off" autofocus placeholder="     Correo electrónico      "> 
                                    <br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" autocomplete="off" autofocus placeholder="        NIP      "name="nip">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control mask-nit" type="text" autocomplete="off" autofocus placeholder="        NIT      "  name="nit">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control mask-dui" type="text" autocomplete="off" autofocus placeholder="           DUI     " name="dui"> <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="esp" autocomplete="off" autofocus placeholder=" Especialidad     "> 
                                    <br>

                                </div>
                            </div>


                            <div align="center">
                                <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                                <input type="submit" value="Cancelar" name="cancel" class=" btn btn-cancelar">

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

