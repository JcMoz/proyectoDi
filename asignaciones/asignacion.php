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
        <div class="col-md-12"><!--Dimencion de la pantalla-->
            <!--Encabezado de la pantalla-->
            <div class="row-fluid" align="center">
                <div class="span6">
                    <h2 class="text-info">
                        <img src="../imagenes/asignacion.png" width="90" height="90">
                        Asignación de grado.
                    </h2>
                </div>
            </div> <!--Fin de Encabezado de la pantalla-->
            <br>
            <!--Comienza tabla-->
            <div class="panel-body">
                <?php
                $v_primero = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Primero'");
                while ($row_primero = mysqli_fetch_array($v_primero)) {
                    $primero = $row_primero['nom_grado'];
                    $seccion_primero = $row_primero['nombre_seccion'];
                    $id_primero = $row_primero['id_grado'];
                    $id_s_primero = $row_primero['id_seccion'];
                }
                ///// segundo
                $v_segundo = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Segundo'");
                while ($row_segundo = mysqli_fetch_array($v_segundo)) {
                    $segundo = $row_segundo['nom_grado'];
                    $seccion_segundo = $row_segundo['nombre_seccion'];
                    $id_segundo = $row_segundo['id_grado'];
                    $id_s_se = $row_segundo['id_seccion'];
                }
                ///******************
                ///// tercero
                $v_tercero = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Tercero'");
                while ($row_tercero = mysqli_fetch_array($v_tercero)) {
                    $ter = $row_tercero['nom_grado'];
                    $seccion_ter = $row_tercero['nombre_seccion'];
                    $id_ter = $row_tercero['id_grado'];
                    $id_s_ter = $row_tercero['id_seccion'];
                }
                ///******************
                ///// cuarto
                $v_cu = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Cuarto'");
                while ($row_cu = mysqli_fetch_array($v_cu)) {
                    $cu = $row_cu['nom_grado'];
                    $seccion_cu = $row_cu['nombre_seccion'];
                    $id_cu = $row_cu['id_grado'];
                    $id_s_cu = $row_cu['id_seccion'];
                }
                ///******************
                ///// quinto
                $v_qui = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Quinto'");
                while ($row_qui = mysqli_fetch_array($v_qui)) {
                    $qui = $row_qui['nom_grado'];
                    $seccion_qui = $row_qui['nombre_seccion'];
                    $id_qui = $row_qui['id_grado'];
                    $id_s_qui = $row_qui['id_seccion'];
                }
                ///******************
                ///// sexto
                $v_sex = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Sexto'");
                while ($row_sex = mysqli_fetch_array($v_sex)) {
                    $sex = $row_sex['nom_grado'];
                    $seccion_sex = $row_sex['nombre_seccion'];
                    $id_sex = $row_sex['id_grado'];
                    $id_s_sex = $row_sex['id_seccion'];
                }
                ///******************
                ///// septimo
                $v_sep = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Septimo'");
                while ($row_sep = mysqli_fetch_array($v_sep)) {
                    $sep = $row_sep['nom_grado'];
                    $seccion_sep = $row_sep['nombre_seccion'];
                    $id_sep = $row_sep['id_grado'];
                    $id_s_sep = $row_sep['id_seccion'];
                }
                ///******************
                ///// octavo
                $v_oc = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Octavo'");
                while ($row_oc = mysqli_fetch_array($v_oc)) {
                    $oc = $row_oc['nom_grado'];
                    $seccion_oc = $row_oc['nombre_seccion'];
                    $id_oc = $row_oc['id_grado'];
                    $id_s_oc = $row_oc['id_seccion'];
                }
                ///******************
                ///// Noveno
                $v_no = mysqli_query($conexion, "SELECT*FROM grado g, seccion s WHERE g.nom_grado='Noveno'");
                while ($row_no = mysqli_fetch_array($v_no)) {
                    $no = $row_no['nom_grado'];
                    $seccion_no = $row_no['nombre_seccion'];
                    $id_no = $row_no['id_grado'];
                    $id_s_no = $row_no['id_seccion'];
                }
                ///******************
                ?>
                <table class="table table-bordered table table-hover">
                    <thead class="">
                    <th class="text-center" width="50">Grados</th>
                    <th class="text-center" width="50">Sección</th>
                    <th class="text-center" width="100">Docente</th>
                    <th class="text-center" width="50">Accion</th>
                    </thead>
                    <!--*****************************************************************-->
                    <tbody>
                        <!--*********************fila para primero********************-->
                    <form action="" id="asignar1"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar1" id="pase"/>  
                        <?php
                        $va_pri = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_primero' AND id_secci='$id_s_primero'");
                        while ($p1=  mysqli_fetch_array($va_pri)){
                            $selec1=$p1['id_docentes'];
                        }
                        if (mysqli_num_rows($va_pri)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $primero; ?> </td>
                            <td class="text-center"><?php echo '"' . $seccion_primero . '"'; ?> </td>
                            <td class="text-center" >

                                <select name="docentes1" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT*FROM docente");
                                    while ($row = mysqli_fetch_array($materia)) {
                                        echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>

                    <!--*********************fila para primero********************-->

                    <!--*********************fila para segundo********************-->
                    <form action="" id="asignar2"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar2" id="pase"/>
                        <?php
                        $va_seg = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_segundo' AND id_secci='$id_s_se'");
                        while ($p2=  mysqli_fetch_array($va_seg)){
                            $selec2=$p2['id_docentes'];
                        }
                        if (mysqli_num_rows($va_seg)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>

                            <td class="text-center"><?php echo $segundo; ?></td>
                            <td class="text-center"> <?php echo '"' . $seccion_segundo . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes2" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                        $materia1 = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc!='$selec1'");
                                        while ($row1 = mysqli_fetch_array($materia1)) {
                                            echo '<option value="' . $row1['id_doc'] . '">' . $row1['nom_doc'] . '  ' . $row1['ape_doc'] . '</option>';
                                        }
                                  
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para segundo********************-->

                    <!--*********************fila para tercero********************-->
                    <form action="" id="asignar3"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar3" id="pase"/>
                        <?php
                        $va_ter = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_ter' AND id_secci='$id_s_ter'");
                        while ($p3=  mysqli_fetch_array($va_ter)){
                            $selec3=$p3['id_docentes'];
                        }
                        if (mysqli_num_rows($va_ter)) {
                            // echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $ter; ?> </td>
                            <td class="text-center"><?php echo '"' . $seccion_ter . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes3" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                   
                                        $materia2 = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc!='$selec1' AND id_doc!='$selec2' ");
                                        while ($row = mysqli_fetch_array($materia2)) {
                                            echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                        }
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para tercero********************-->

                    <!--*********************fila para cuarto********************-->
                    <form action="" id="asignar4"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar4" id="pase"/>
                        <?php
                        $va_cu = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_cu' AND id_secci='$id_s_cu'");
                        while ($p4=  mysqli_fetch_array($va_cu)){
                            $selec4=$p4['id_docentes'];
                        }
                        if (mysqli_num_rows($va_cu)) {
                            // echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $cu; ?> </td>
                            <td class="text-center"><?php echo '"' . $seccion_cu . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes4" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                   
                                        $materia = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc!='$selec1' AND id_doc!='$selec2' AND id_doc!='$selec3'");
                                        while ($row = mysqli_fetch_array($materia)) {
                                            echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                        }
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para cuarto********************-->

                    <!--*********************fila para quinto********************-->
                    <form action="" id="asignar5"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar5" id="pase"/>
                        <?php
                        $va_quin = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_qui' AND id_secci='$id_s_qui'");
                        while ($x1=  mysqli_fetch_array($va_quin)){
                            $se1=$x1['id_docentes'];
                        }
                        if (mysqli_num_rows($va_quin)) {
                            // echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $qui; ?> </td>
                            <td class="text-center"><?php echo '"' . $seccion_qui . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes5" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                   
                                        $materia = mysqli_query($conexion, "SELECT*FROM docente");
                                        while ($row = mysqli_fetch_array($materia)) {
                                            echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                        }
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para quinto********************-->

                    <!--*********************fila para sexto********************-->
                    <form action="" id="asignar6"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar6" id="pase"/>
                        <?php
                        $va_sex = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_sex' AND id_secci='$id_s_sex'");
                        while ($x2=  mysqli_fetch_array($va_sex)){
                            $se2=$x2['id_docentes'];
                        }
                        if (mysqli_num_rows($va_sex)) {
                            // echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $sex; ?> </td>
                            <td class="text-center"><?php echo '"' . $seccion_sex . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes6" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                <?php
                                   
                                        $materia = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc!='$se1'");
                                        while ($row = mysqli_fetch_array($materia)) {
                                            echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                        }
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para sexto********************-->

                    <!--*********************fila para septimo********************-->
                    <form action="" id="asignar7"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar7" id="pase"/>
                        <?php
                        $va_sep = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_sep' AND id_secci='$id_s_sep'");
                        while ($x3=  mysqli_fetch_array($va_sep)){
                            $se3=$x3['id_docentes'];
                        }
                        if (mysqli_num_rows($va_sep)) {
                            // echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $sep; ?> </td>
                            <td class="text-center"><?php echo '"' . $seccion_sep . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes7" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                     <?php
                                   
                                        $materia = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc!='$se1' AND id_doc!='$se2'");
                                        while ($row = mysqli_fetch_array($materia)) {
                                            echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                        }
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para septimo********************-->

                    <!--*********************fila para octavo********************-->
                    <form action="" id="asignar8"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar8" id="pase"/>
                        <?php
                        $va_oc = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_oc' AND id_secci='$id_s_oc'");
                        while ($x4=  mysqli_fetch_array($va_oc)){
                            $se4=$x4['id_docentes'];
                        }
                        if (mysqli_num_rows($va_oc)) {
                            // echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $oc; ?> </td>
                            <td class="text-center"><?php echo '"' . $seccion_oc . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes8" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                   <?php
                                   
                                        $materia = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc!='$se1' AND id_doc!='$se2' AND id_doc!='$se3'");
                                        while ($row = mysqli_fetch_array($materia)) {
                                            echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                        }
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para octavo********************-->

                    <!--*********************fila para noveno********************-->
                    <form action="" id="asignar9"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar9" id="pase"/>
                        <?php
                        $va_no = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_no' AND id_secci='$id_s_no'");
                        if (mysqli_num_rows($va_no)) {
                            //  echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $no; ?> </td>
                            <td class="text-center"><?php echo'"' . $seccion_no . '"'; ?></td>

                            <td class="text-center" >
                                <select name="docentes9" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                   
                                        $materia = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc!='$se1' AND id_doc!='$se2' AND id_doc!='$se3' AND id_doc!='$se4'");
                                        while ($row = mysqli_fetch_array($materia)) {
                                            echo '<option value="' . $row['id_doc'] . '">' . $row['nom_doc'] . '  ' . $row['ape_doc'] . '</option>';
                                        }
                                    ?>

                                </select>
                            </td>
                            <td class="text-center"><input type="submit" value="Asignar" name="asignar" class=" btn btn-outline-primary"/>
                            </td>
                        <?php } ?>
                        </tr>
                    </form>
                    <!--*********************fila para noveno********************-->
                    </tbody>
                    <!--*****************************************************************-->
                </table>

            </div> <!--termina tabla-->



        </div><!--Fin de Dimencion de la pantalla-->

    </div><!--termina container fluid-->

</div><!--Fin de content wrapper mi codigo-->

<?php
include_once '../plantilla/fin_plantilla.php';
include_once '../conexion/php_conexion.php';
$va_pri1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_primero' AND id_secci='$id_s_primero'");
if (mysqli_num_rows($va_pri1)) {
    
}else{
    if (isset($_REQUEST['tirar1'])) {
        try {
            $doc = $_POST["docentes1"];

            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_primero','$id_s_primero','$doc')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }
}
//*****************segundo***************
$va_seg1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_segundo' AND id_secci='$id_s_se'");
if (mysqli_num_rows($va_seg1)) {

}  else {
    if (isset($_REQUEST['tirar2'])) {
        try {
            $doc2 = $_POST["docentes2"];

            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_segundo','$id_s_se','$doc2')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }
}
//******************************************
//*********************tercero
$va_ter1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_ter' AND id_secci='$id_s_ter'");
if (mysqli_num_rows($va_ter1)) {
   
}  else {
     if (isset($_REQUEST['tirar3'])) {
        try {
            $doc3 = $_POST["docentes3"];

            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_ter','$id_s_ter','$doc3')");
      echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }
}
//********************************************
//*****************cuarto******************
$va_cu1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_cu' AND id_secci='$id_s_cu'");
if (mysqli_num_rows($va_cu1)) {
    
}  else {
  if (isset($_REQUEST['tirar4'])) {
        try {
            $doc4 = $_POST["docentes4"];
            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_cu','$id_s_cu','$doc4')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
}
//***********************************
//*************quinto
$va_quin1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_qui' AND id_secci='$id_s_qui'");
if (mysqli_num_rows($va_quin1)) {
    
}  else {
  if (isset($_REQUEST['tirar5'])) {
        try {
            $doc5 = $_POST["docentes5"];
            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_qui','$id_s_qui','$doc5')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
}
//*****************************

//******************sexto
$va_sex1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_sex' AND id_secci='$id_s_sex'");
if (mysqli_num_rows($va_sex1)) {
    
}  else {
  if (isset($_REQUEST['tirar6'])) {
        try {
            $doc6 = $_POST["docentes6"];
            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_sex','$id_s_sex','$doc6')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
}
//***********septimo
$va_sep1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_sep' AND id_secci='$id_s_sep'");
if (mysqli_num_rows($va_sep1)) {
    
}  else {
  if (isset($_REQUEST['tirar7'])) {
        try {
            $doc7 = $_POST["docentes7"];
            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_sep','$id_s_sep','$doc7')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
}
//*****************
//************octavo
$va_oc1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_oc' AND id_secci='$id_s_oc'");
if (mysqli_num_rows($va_oc1)) {
    
}  else {
  if (isset($_REQUEST['tirar8'])) {
        try {
            $doc8 = $_POST["docentes8"];
            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_oc','$id_s_oc','$doc8')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
}
//*****************************
//****************noveno
$va_no1 = mysqli_query($conexion, "SELECT*FROM asignacion_a_g WHERE id_gra='$id_no' AND id_secci='$id_s_no'");
if (mysqli_num_rows($va_no1)) {
    
}  else {
  if (isset($_REQUEST['tirar9'])) {
        try {
            $doc9 = $_POST["docentes9"];
            mysqli_query($conexion, "INSERT INTO asignacion_a_g(id_gra,id_secci,id_docentes) VALUES ('$id_no','$id_s_no','$doc9')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacion.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
}
//******************************
?>
    

