<?php
include_once'../conexion/php_conexion.php';
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
$id = $_REQUEST['id'];
$query = "SELECT * from docente WHERE id_doc='$id'";
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc();
?>
<!-- /.content-wrapper mi codigo-->
<div class="content-wrapper">
    <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalayudaModificarFoto" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico">
        <?php include_once '../ayuda/ayudaModificarFoto.php'; ?>
    </div>

    <div class="container-fluid"> <!--Comienza container Fluid-->

        &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp<font face="Arial Narrow" size="5" color="#001f4d">Cambiar foto.</font>


        <form action="proceso_modificar.php?id=<?php echo $row['id_doc']; ?>" name="form1" method="post" enctype="multipart/form-data">


            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['foto_doc']); ?>"/>
                    <div class="row">
                        <div class="col-6">
                            <input type="file" name="imagenG"/><br/><br/>
                            <input type="submit" value="Aceptar">
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>
<?php
include_once '../plantilla/fin_plantilla.php';
?>