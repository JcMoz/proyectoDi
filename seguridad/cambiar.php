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
?>
<style>
    .fondo{
        background-color: blue;
    }
    .borde{
        border:1px #000 solid; text-align: center; height: 50px;

    }
    .color1{background: #eeeeee}
    .color2{background: green}
    .color3{background: red}
    .color4{background: #295ba7}
    .color5{background: #295ba7; height: 500px}
    .cosita{align-items: center;}


</style>
<!--<script>
    function Habilitar(){
        var camp1=document.getElementById("campo1");
        var camp2=document.getElementById("campo2");
        var boton=document.getElementById("boton")
        if (camp1.value!=camp2.value) {
            boton.disabled=true;
        }else{
            boton.disabled=false;
        }
    }
</script>-->
<div class="content-wrapper">
    <div class="container-fluid">
        <form action="" id="asignar3"  method="post" class="form-register" enctype="multipart/form-data" >
            <input type="hidden" name="tirar" id="pase"/>  
            <?php
            $us = mysqli_query($conexion, "SELECT*FROM usuarios INNER JOIN docente ON usuarios.id_doc=docente.id_doc WHERE "
                    . "usuarios.id_doc='$profesor'");
            while ($cambiar = mysqli_fetch_array($us)) {
                $caContra=$cambiar['id_usuario'];
               $usC=$cambiar['user'];
            }
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <div class="span6">
                                <h2 class="text-info">
                                    <img src="../imagenes/cam.png" width="90" height="90">
                                    Modificar contraseña.
                                </h2>
                            </div>
                        </div>
                        <br/>
                        <div class="text-center">
                            Usuario &nbsp &nbsp&nbsp<input type="text" value=" <?php echo $usC;?>" class="form-group"  placeholder="" name="con1" size="33" disabled="true"> <br>
                           </label><br><br>
                           Contraseña Actual &nbsp &nbsp&nbsp<input type="password" id="campo1" class="form-group"  placeholder="**********" name="con1" size="33"> <br>

                           Confirmar Nueva contraseña &nbsp &nbsp<input type="password" id="campo2" class="form-group" placeholder="**********" name="con2" size="25"><br>

                            <div class="text-center">
                                <input type="submit" value="Cambiar" name="siguiente" id="boton" class="btn btn-primary"  >
                                <input type="button" value="Cancelar" name="cancel" class=" btn btn-dark" onclick="location = '/proyectoDi/doc/principal.php'" >

                            </div>

                            </font> 
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>

<?php
if (isset($_REQUEST['tirar'])) {
    try {
        include_once '../conexion/php_conexion.php';
        $actu = password_hash($_POST["con2"], PASSWORD_DEFAULT);

        mysqli_query($conexion, "UPDATE usuarios SET con='$actu' WHERE id_usuario='$caContra'");

        echo '<script>swal("Contraseña Actualizada!", "Presione Ok!", "success")</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos", "error");</script>';
    }
}
include_once '../plantilla/fin_plantilla.php';
?>
