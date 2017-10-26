<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
?>
<style>
    .btn-atras{
        background-color: #607d8b;
        color: white;
    }

</style>
<!--inicio de content wrapper mi codigo-->

<div class="content-wrapper">

    <div class="container-fluid"> <!--Comienza container Fluid-->
        <div class="col-md-12"><!--Dimencion de la pantalla-->
            <!--Encabezado de la pantalla-->
            <div class="row-fluid" align="center">
                <div class="span6">
                    <h2 class="text-info">
                        <img src="../imagenes/alumnoB.png" width="90" height="90">
                        Buscar Alumno
                    </h2>
                    <script src="../js/jquery-1.7.2.min.js" ></script>
                    <script src="../js/buscaresc.js"></script>
                </div>
                <div class="span6">
                    <form name="form1" method="post" action="">
                        <div class="input-append">
                            <input type="text" name="buscar" id="filtrar" class="input-xlarge" autocomplete="off" autofocus placeholder="   Buscar Alumno">
                      

                        </div>

                    </form>
                    <br>
                </div>
            </div> <!--Fin de Encabezado de la pantalla-->
            <br>
            <!--Comienza tabla-->

            <div class="panel-body">

                <table class="table table-striped table-condensed table-hover">
                    <thead>

                    <th width="50">Acción</th>
                    <th width="150">Nombres</th>
                    <th width="150">Apellidos</th>
                    <th width="70">NIE</th>
                    <th width="200">Dirección</th>
                    </thead>

                    <tbody class="buscar">
                        <?php
                        include_once '../conexion/php_conexion.php';
                        $enca = mysqli_query($conexion, "SELECT * FROM encargado");
                        while ($row1 = mysqli_fetch_array($enca)) {
                            $idEn = $row1['id_encargado'];
                            $nomEnca = $row1['nom_enc'];
                            $apeX = $row1['ape_enc'];
                            $prof = $row1['profe_enc'];
                            $tX=$row1['tel_enc'];
                            $duX=$row1['dui_enc'];
                            $trab=$row1['dir_trab_enc'];
                        }
                        $pame = mysqli_query($conexion, "SELECT * FROM alumno");
                        while ($row = mysqli_fetch_array($pame)) {
                            $nomY = $row['nom_alumno'];
                            $apeY = $row['ape_alumno'];
                            $dirY = $row['dir_alum'];
                            $nieY = $row['nie'];
                            $dY=$row['distancia'];
                            $depY=$row['depto_alum'];
                            $m2=$row['mun_alum'];
                            $idA = $row['id_alumno'];
                            ?>

                            <tr>
                                <td class="text-center"><!--boton de modificar-->
                                    <a href=""  data-toggle="modal" data-target="#modal-default" onclick="editar_alumno('<?php echo $nomY; ?>', '<?php echo $nomEnca; ?>', '<?php echo $apeY; ?>', '<?php echo $apeX; ?>', '<?php echo $dirY; ?>', '<?php echo $prof; ?>','<?php echo $dY; ?>',
                                                '<?php echo $tX; ?>','<?php echo $duX; ?>','<?php echo $depY; ?>','<?php echo $m2; ?>','<?php echo $trab; ?>','<?php echo $idA; ?>', '<?php echo $idEn; ?>')">Editar </a>
                                </td>
                                <td><?php echo $row['nom_alumno']; ?></td>
                                <td><?php echo $row['ape_alumno']; ?></td>
                                <td><?php echo $row['nie']; ?></td>
                                <td><?php echo $row['dir_alum']; ?></td>

                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div> <!--termina tabla-->
            <?php
            include_once'../inscripcion/editar_alumno.php'
            ?>

        </div><!--Fin de Dimencion de la pantalla-->

    </div><!--termina container fluid-->

</div><!--Fin de content wrapper mi codigo-->
<script>
    function editar_alumno(nom, nomc, ap, ap1, dir, profX, d, t,du,dep,mu, pr,pass, pass1) {
        $("#nomA").val(nom);
        $("#nomEnc").val(nomc);
        $("#apeA").val(ap);
        $("#apE").val(ap1);
        $("#diA").val(dir);
         $("#prE").val(profX);
        $("#disA").val(d);
        $("#tel").val(t);
        $("#depAl").val(dep);
        $("#dui").val(du);
         $("#muA").val(mu);
         $("#pro").val(pr);
        $("#actu").val(pass);
        $("#actul").val(pass1);

    }
</script>
<?php
include_once '../plantilla/fin_plantilla.php';
?>
    

