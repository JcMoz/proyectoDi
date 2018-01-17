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
$llegoUsu = $_GET['ir'];
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

<div class="content-wrapper">
    <div class="container-fluid">
        <form action="" id="asignar3"  method="post" class="form-register" enctype="multipart/form-data" >
            <input type="hidden" name="tirar" id="pase"/>  
            <?php
            $us = mysqli_query($conexion, "SELECT*FROM usuarios INNER JOIN docente ON usuarios.id_doc=docente.id_doc WHERE id_usuario='$llegoUsu'");
            while ($cambiar = mysqli_fetch_array($us)) {
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <div class="span6">
                                <h2 class="text-info">
                                    <img src="../imagenes/cambio.png" width="90" height="90">
                                    Cambiar contraseña.
                                </h2>
                            </div>
                        </div>
                        <br/>
                        <div class="text-center">
                            Docente &nbsp &nbsp&nbsp<input type="text" value="<?php echo $cambiar['nom_doc'].' '.$cambiar['ape_doc']; ?>" class="form-group"  name="usuario" size="33" disabled="true">
                            </label><br><br>
                            Contraseña &nbsp &nbsp&nbsp<input type="password" value="<?php echo $cambiar['con']; ?>" class="form-group" id="n" placeholder="**********" name="usuario" size="33"> <br>

                            Confirmar Nueva contraseña &nbsp &nbsp<input type="text" class="form-group" id="n" placeholder="**********" name="kontraseña" size="25"><br>

                            <div class="text-center">
                                <input type="submit" value="Actualizar" name="siguiente" class="btn btn-primary"  >
                                <input type="button" value="Cancelar" name="cancel" class=" btn btn-dark" onclick="location = '/proyectoDi/doc/principal.php'" >

                            </div>

                            </font> 

                        <?php } ?>
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
        $actu = password_hash($_POST["kontraseña"], PASSWORD_DEFAULT);

        mysqli_query($conexion, "UPDATE usuarios SET con='$actu' WHERE id_usuario='$llegoUsu'");

        echo '<script>swal("Contraseña Actualizada!", "Presione Ok!", "success")</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos", "error");</script>';
    }
}
include_once '../plantilla/fin_plantilla.php';
?>