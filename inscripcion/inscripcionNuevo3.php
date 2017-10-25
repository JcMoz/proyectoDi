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
                            &nbsp &nbsp&nbsp<INPUT class="form-group" type="text"  name="Ugrado" placeholder=" Último Grado que cursó ">
                            &nbsp &nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<INPUT class="form-group" type="text"  name="añoC" placeholder="Año que lo Cursó">  &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <input class="form-control" type="text"  placeholder=" Nombre del centro educativo  " name="inCurso"> 
                            <br>
                            <div align="center">
                                <input class="form-group" type="text" placeholder="       Código" name="cod">
                            </div>


                        </div>
                        <br> <br>
                        <div class="panel-heading" align="center">Datos de matricula</div>
                        <div class="panel-body">
                            <br>
                            &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d" name="grado">Turno : </font>
                            <input type="radio" name="Mañana">Mañana
                            <input type="radio" name="Tarde">Tarde &nbsp &nbsp &nbsp &nbsp &nbsp
                            <font face="Arial Narrow" size="4" color="#001f4d" name="rnivel"> Nivel : </font>
                            <input type="radio" name="Primer">Primer &nbsp &nbsp
                            <input type="radio" name="Segundo">Segundo &nbsp &nbsp
                            <input type="radio" name="Tercero">Tercer 

                            <div align="center">
                                <br>
                                <font face="Arial Narrow" size="4" color="#001f4d">Grado a matricular : </font>

                                <select name="Grado">

                                    <?php
                                    include_once '../conexion/php_conexion.php';
                                    $pgrado = mysqli_query($conexion, "SELECT id_grado, nom_grado FROM grado");
                                    while ($row = mysqli_fetch_array($pgrado)) {
                                        echo '<option value=' . "$row[0]" . '>' . $row['1'] . '</option>';
                                    }
                                    ?>
                                    
                                </select>
                                &nbsp &nbsp &nbsp <font face="Arial Narrow" size="4" color="#001f4d">Secciones: </font>
                                <select name="Secciones">
                                    <?php
                                    include_once '../conexion/php_conexion.php';
                                    $pame = mysqli_query($conexion, "SELECT id_seccion, nombre_seccion FROM seccion");
                                    while ($row = mysqli_fetch_array($pame)) {
                                        echo '<option value=' . "$row[0]" . '>' . $row['1'] . '</option>';
                                    }
                                    ?>

                                </select>

                            </div>


                            <br>
                            &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d">Documentos : </font>
                            <input type="radio" name="Partida">Partida de Nacimiento &nbsp
                            <input type="radio" name="certificado">Certificado de Notas &nbsp &nbsp &nbsp
                            <input type="radio" name="dui">DUI &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                            <input type="radio" name="conducta">Cetficado de Conducta


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
                            <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-siguiente" onclick="location = '/proyectoDi/inscripcion/inscripcionNuevo1.php'">
                            <input type="submit" value="Cancelar" name="cancel" class="btn btn-cancelar">

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
    include_once '../conexion/php_conexion.php';
    $ultimo = $_POST["Ugrado"];
    $añoq = $_POST["añoC"];
    $intcurso = $_POST["inCurso"];
    $codigo = $_POST["cod"];
    $turno = $_POST["rturno"];


    mysqli_query($conexion, "INSERT INTO inscripcion( ult_grado,anio_cgrado,nom_cea,cod_inst_ant,turno) VALUES ('$ultimo','$añoq','$intcurso','$codigo','$turno')");
    echo '<script>location.href="inscripcionNuevo3.php";</script>';
}


include_once '../plantilla/fin_plantilla.php';
?>