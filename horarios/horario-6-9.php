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
<!--inicio de content wrapper mi codigo-->
<div class="content-wrapper">
    <div class="container-fluid"> <!--Comienza container Fluid-->
        <!--titulo-->
        <div align="center">
            <font face="Arial Narrow" size="5" color="#001f4d">Horarios de 6°- 9° Grado.</font>
            <img src="../imagenes/horario3.png" width="60" height="60">
        </div>
        <br>

        <div class="row">
            <div class="col">
                <!--Comienza tabla-->
                <!--consultas para los horarios de las asignaciones-->
                <?php
                $p_quinto = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
                        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=5");
                while ($row1 = mysqli_fetch_array($p_quinto)) {
                    $gradoQuin = $row1['nom_grado'];
                    $nomQuin = $row1['nom_doc'];
                    $apeQuin = $row1['ape_doc'];
                }
                //**********sexto
                $p_sex = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
                        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=6");
                while ($row1 = mysqli_fetch_array($p_sex)) {
                    $gradoSex = $row1['nom_grado'];
                    $nomSex = $row1['nom_doc'];
                    $apeSex = $row1['ape_doc'];
                }
                //*****************
                //*********septimo
                $p_sep = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
                        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=7");
                while ($row1 = mysqli_fetch_array($p_sep)) {
                    $gradoSep = $row1['nom_grado'];
                    $nomSep = $row1['nom_doc'];
                    $apeSep = $row1['ape_doc'];
                }
                //***********
                //**********octavo
                $p_oc = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
                        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=8");
                while ($row1 = mysqli_fetch_array($p_oc)) {
                    $gradoOc = $row1['nom_grado'];
                    $nomOc = $row1['nom_doc'];
                    $apeOc = $row1['ape_doc'];
                }
                //***********************
                //**********Noveno
                $p_No = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
                        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=9");
                while ($row1 = mysqli_fetch_array($p_No)) {
                    $gradoNo = $row1['nom_grado'];
                    $nomNo = $row1['nom_doc'];
                    $apeNo = $row1['ape_doc'];
                }
                //***********************
                ?>
                <!--consultas para los horarios de las asignaciones-->
                <div class="panel-body">
                    <table class="table table-bordered table table-hover table-sm table-responsive">
                        <thead class="">
                        <th class="text-center">Hora</th>
                        <th class="text-center">Lunes</th>
                        <th class="text-center">Martes</th>
                        <th class="text-center">Miércoles</th>
                        <th class="text-center">Jueves</th>
                        <th class="text-center">Viernes</th>
                        <th class="text-center">Grado</th>
                        <th class="text-center">Docente</th>
                        </thead>
                        <!--*********************************fila**************************************-->
                        <tbody>

                            <tr>
                                <td class="text-center">1:00-1:45<br>
                                    1:45-2:30<br>
                                    2:50-3:35<br>
                                    3:35-4:20<br>
                                    4:40-5:25
                                </td>
                                <td class="text-center">Lenguaje<br>
                                    Lenguaje<br>
                                    Sociales<br>
                                    Sociales<br>
                                    Artistica<br>

                                </td>
                                <td class="text-center">Sociales<br>
                                    Artistica<br>
                                    Artistica<br>
                                    Ciencia<br>
                                    Física<br>
                                </td>
                                <td class="text-center">Física<br>
                                    Física<br>
                                    Matemática<br>
                                    Ciencia<br>
                                    Ciencia<br>
                                </td>
                                <td class="text-center">Lenguaje<br>
                                    Lenguaje<br>
                                    Matemática<br>
                                    Matemática<br>
                                    Lenguaje<br>
                                </td>
                                <td class="text-center">Ciencia<br>
                                    Ciencia<br>
                                    Matemática<br>
                                    Matemática<br>
                                    Sociales<br>
                                </td>

                                <td class="text-center"><br/><?php echo $gradoQuin; ?></td>
                                <td class="text-center"><br/><?php echo $nomQuin . ' ' . $apeQuin; ?> </td>
                            </tr>

                        </tbody>
                        <!--*********************************fin fila**************************************-->

                        <!--*********************************fila**************************************-->
                        <tbody>

                            <tr>
                                <td class="text-center">1:00-1:45<br>
                                    1:45-2:30<br>
                                    2:50-3:35<br>
                                    3:35-4:20<br>
                                    4:40-5:25
                                </td>
                                <td class="text-center">Sociales<br>
                                    Sociales<br>
                                    Matemática<br>
                                    Matemática<br>
                                    Lenguaje<br>
                                </td>
                                <td class="text-center">Lenguaje<br>
                                    Lenguaje<br>
                                    Matemática<br>
                                    Artistica<br>
                                    Ciencia<br>

                                </td>
                                <td class="text-center">Matemática<br>
                                    Matemática<br>
                                    Artistica<br>
                                    Artistica<br>
                                    Sociales<br>
                                </td>
                                <td class="text-center">Sociales<br>
                                    Física<br>
                                    Física<br>
                                    Ciencia<br>
                                    Ciencia<br>
                                </td>
                                <td class="text-center">Lenguaje<br>
                                    Lenguaje<br>
                                    Ciencia<br>
                                    Ciencia<br>
                                    Física<br>
                                </td>

                                <td class="text-center"><br/><?php echo $gradoSex; ?></td>
                                <td class="text-center"><br/><?php echo $nomSex . ' ' . $apeSex; ?> </td>

                                </td>
                            </tr>

                        </tbody>
                        <!--*********************************fin fila**************************************-->

                        <!--*********************************fila**************************************-->
                        <tbody>

                            <tr>
                                <td class="text-center">1:00-1:45<br>
                                    1:45-2:30<br>
                                    2:50-3:35<br>
                                    3:35-4:20<br>
                                    4:40-5:25
                                </td>
                                <td class="text-center">Ciencia<br>
                                    Ciencia<br>
                                    Lenguaje<br>
                                    Lenguaje<br>
                                    Matemática<br>
                                </td>
                                <td class="text-center">Sociales<br>
                                    Sociales<br>
                                    Ingles<br>
                                    Matemática<br>
                                    Matemática<br>
                                </td>
                                <td class="text-center">Ciencia<br>
                                    Ciencia<br>
                                    Sociales<br>
                                    Sociales<br>
                                    Lenguaje<br>
                                </td>
                                <td class="text-center">Sociales<br>
                                    Ingles<br>
                                    Ingles<br>
                                    Física<br>
                                    Física<br>
                                </td>
                                <td class="text-center">Matemática<br>
                                    Matemática<br>
                                    Lenguaje<br>
                                    Lenguaje<br>
                                    Ciencia<br>
                                </td>
                                <td class="text-center"><br/><?php echo $gradoSep; ?></td>
                                <td class="text-center"><br/><?php echo $nomSep . ' ' . $apeSep; ?> </td>
                            </tr>

                        </tbody>
                        <!--*********************************fin fila**************************************-->

                        <!--*********************************fila**************************************-->
                        <tbody>

                            <tr>
                                <td class="text-center">1:00-1:45<br>
                                    1:45-2:30<br>
                                    2:50-3:35<br>
                                    3:35-4:20<br>
                                    4:40-5:25
                                </td>
                                <td class="text-center">Matemática<br>
                                    Matemática<br>
                                    Sociales<br>
                                    Sociales<br>
                                    Ciencia<br>

                                </td>
                                <td class="text-center">Ciencia<br>
                                    Ciencia<br>
                                    Lenguaje<br>
                                    Ingles<br>
                                    Sociales<br>
                                </td>
                                <td class="text-center">Ingles<br>
                                    Ingles<br>
                                    Lenguaje<br>
                                    Matemática<br>
                                    Matemática<br>
                                </td>
                                <td class="text-center">Ciencia<br>
                                    Ciencia<br>
                                    Lenguaje<br>
                                    Lenguaje<br>
                                    Matemática<br>
                                </td>
                                <td class="text-center">Física<br>
                                    Física<br>
                                    Sociales<br>
                                    Sociales<br>
                                    Lenguaje<br>
                                </td>

                                <td class="text-center"><br/><?php echo $gradoOc; ?></td>
                                <td class="text-center"><br/><?php echo $nomOc . ' ' . $apeOc; ?> </td>
                            </tr>

                        </tbody>
                        <!--*********************************fin fila**************************************-->

                        <!--*********************************fila**************************************-->
                        <tbody>

                            <tr>
                                <td class="text-center">1:00-1:45<br>
                                    1:45-2:30<br>
                                    2:50-3:35<br>
                                    3:35-4:20<br>
                                    4:40-5:25
                                </td>
                                <td class="text-center">Sociales<br>
                                    Sociales<br>
                                    Ciencia<br>
                                    Ciencia<br>
                                    Ingles<br>
                                </td>
                                <td class="text-center">Matemática<br>
                                    Matemática<br>
                                    Ciencia<br>
                                    Lenguaje<br>
                                    Lenguaje<br>

                                </td>
                                <td class="text-center">Lenguaje<br>
                                    Lenguaje<br>
                                    Ciencia<br>
                                    Lenguaje<br>
                                    Sociales<br>
                                </td>
                                <td class="text-center">Matemática<br>
                                    Matemática<br>
                                    Ciencia<br>
                                    Sociales<br>
                                    Sociales<br>
                                </td>
                                <td class="text-center">Ingles<br>
                                    Ingles<br>
                                    Física<br>
                                    Física<br>
                                    Matemática<br>
                                </td>
                                <td class="text-center"><br/><?php echo $gradoNo; ?></td>
                                <td class="text-center"><br/><?php echo $nomNo . ' ' . $apeNo; ?> </td>
                            </tr>

                        </tbody>
                        <!--*********************************fin fila**************************************-->
                    </table>
                </div>
                <!--termina tabla-->
            </div><!--col-->
        </div><!--fin de row-->
    </div><!--fin container fluid-->
</div><!--fin contant wrapper-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>