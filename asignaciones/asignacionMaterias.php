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
                        Asignación de materias.
                    </h2>
                </div>
            </div> <!--Fin de Encabezado de la pantalla-->
            <br>
            <!--Comienza tabla-->
            <div class="panel-body">
                <?php
                //extraer fisica
                $v_fisica=  mysqli_query($conexion,"SELECT*FROM materias WHERE nombre!='Artistica' AND nombre='Fisica'");
                while ($rowF =mysqli_fetch_array($v_fisica)){
                    $fi_materia=$rowF['nombre'];
                    $id_fi=$rowF['id_materia'];
                }
                //***************
                //extraer sociales
                $v_so=  mysqli_query($conexion,"SELECT*FROM materias WHERE nombre!='Artistica' AND nombre='Sociales'");
                while ($rowS =mysqli_fetch_array($v_so)){
                    $so_materia=$rowS['nombre'];
                    $id_so=$rowS['id_materia'];
                }
                //***************
                //extraer matematica
                $v_ma=  mysqli_query($conexion,"SELECT*FROM materias WHERE nombre!='Artistica' AND nombre='Matematica'");
                while ($rowM =mysqli_fetch_array($v_ma)){
                    $ma_materia=$rowM['nombre'];
                    $id_ma=$rowM['id_materia'];
                }
                //***************
                //extraer ciencia
                $v_ci=  mysqli_query($conexion,"SELECT*FROM materias WHERE nombre!='Artistica' AND nombre='Ciencia'");
                while ($rowC =mysqli_fetch_array($v_ci)){
                    $ci_materia=$rowC['nombre'];
                    $id_ci=$rowC['id_materia'];
                }
                //***************
                //extraer Lenguaje
                $v_len=  mysqli_query($conexion,"SELECT*FROM materias WHERE nombre!='Artistica' AND nombre='Lenguaje'");
                while ($rowL =mysqli_fetch_array($v_len)){
                    $le_materia=$rowL['nombre'];
                    $id_le=$rowL['id_materia'];
                }
                //***************
                //extraer ingles
                $v_ingles=  mysqli_query($conexion,"SELECT*FROM materias WHERE nombre!='Artistica' AND nombre='Ingles'");
                while ($rowI =mysqli_fetch_array($v_ingles)){
                    $in_materia=$rowI['nombre'];
                    $id_in=$rowI['id_materia'];
                }
                //***************
                
                ?>
                <table class="table table-bordered table table-hover">
                    <thead class="">
                    <th class="text-center" width="50">Materia</th>
                    <th class="text-center" width="100">Docente</th>
                    <th class="text-center" width="50">Accion</th>
                    </thead>
                    <!--*****************************************************************-->
                    <tbody>
                        <!--*********************fila para Fisica********************-->
                    <form action="" id="asignar1"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar1" id="pase"/>  
                        <?php
                        $va_f = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_materia='$id_fi'");
                        while ($p1=  mysqli_fetch_array($va_f)){
                            $selec1=$p1['id_docente'];
                        }
                        if (mysqli_num_rows($va_f)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $fi_materia; ?> </td>
                            <td class="text-center" >

                                <select name="docentes1" class="form-control" required>
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc"
                                            . " WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4");
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

                    <!--*********************Sociales********************-->
                    
                     <form action="" id="asignar2"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar2" id="pase"/>  
                        <?php
                        $va_so = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_materia='$id_so'");
                        while ($p2=  mysqli_fetch_array($va_so)){
                            $selec2=$p2['id_docente'];
                        }
                        if (mysqli_num_rows($va_so)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $so_materia; ?> </td>
                            <td class="text-center" >

                                <select name="docentes2" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc"
                                            . " WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_doc!='$selec1'");
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

                    <!--*********************fin********************-->

                     <!--*********************Lenguaje********************-->
                    
                     <form action="" id="asignar3"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar3" id="pase"/>  
                        <?php
                        $va_le = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_materia='$id_le'");
                        while ($p3=  mysqli_fetch_array($va_le)){
                            $selec3=$p3['id_docente'];
                        }
                        if (mysqli_num_rows($va_le)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $le_materia; ?> </td>
                            <td class="text-center" >

                                <select name="docentes3" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc"
                                            . " WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_doc!='$selec1' AND id_doc!='$selec2'");
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

                    <!--*********************fin********************-->
                    
                       <!--*********************matematica********************-->
                    
                     <form action="" id="asignar4"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar4" id="pase"/>  
                        <?php
                        $va_ma = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_materia='$id_ma'");
                        while ($p4=  mysqli_fetch_array($va_ma)){
                            $selec4=$p4['id_docente'];
                        }
                        if (mysqli_num_rows($va_ma)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $ma_materia; ?> </td>
                            <td class="text-center" >

                                <select name="docentes4" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc"
                                            . " WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_doc!='$selec1' AND id_doc!='$selec2' AND id_doc!='$selec3'");
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

                    <!--*********************fin********************-->
                       <!--*********************ciencia********************-->
                    
                     <form action="" id="asignar5"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar5" id="pase"/>  
                        <?php
                        $va_ci = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_materia='$id_ci'");
                        while ($p5=  mysqli_fetch_array($va_ci)){
                            $selec5=$p5['id_docente'];
                        }
                        if (mysqli_num_rows($va_ci)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $ci_materia; ?> </td>
                            <td class="text-center" >

                                <select name="docentes5" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc"
                                            . " WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_doc!='$selec1' AND id_doc!='$selec2' AND id_doc!='$selec3' AND id_doc!='$selec4'");
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

                    <!--*********************fin********************-->
                       <!--*********************Ingles********************-->
                    
                     <form action="" id="asignar6"  method="post" class="form-register" enctype="multipart/form-data" >
                        <tr>
                        <input type="hidden" name="tirar6" id="pase"/>  
                        <?php
                        $va_in = mysqli_query($conexion, "SELECT*FROM asignacion_m WHERE id_materia='$id_in'");
                        if (mysqli_num_rows($va_in)) {
                            //echo '<script>swal("Asignacion ya existe!");</script>';
                        } else {
                            ?>
                            <td class="text-center"><?php echo $in_materia; ?> </td>
                            <td class="text-center" >

                                <select name="docentes6" class="form-control">
                                    <option value="pri">   --Nombres de los docentes--</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc"
                                            . " WHERE id_doc!='$selec1' AND id_doc!='$selec2' AND id_doc!='$selec3' AND id_doc!='$selec4' AND id_doc!='$selec5'");
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

                    <!--*********************fin********************-->

                   
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

    if (isset($_REQUEST['tirar1'])) {
        try {
            $doc = $_POST["docentes1"];

            mysqli_query($conexion, "INSERT INTO asignacion_m(id_docente,id_materia) VALUES ('$doc','$id_fi')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacionMaterias.php";
                    
                });</script>';
            } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }
//*****************sociales***************
    if (isset($_REQUEST['tirar2'])) {
        try {
            $doc2 = $_POST["docentes2"];

            mysqli_query($conexion, "INSERT INTO asignacion_m(id_docente,id_materia) VALUES ('$doc2','$id_so')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacionMaterias.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }
//******************************************
//*********************Lenguaje
     if (isset($_REQUEST['tirar3'])) {
        try {
            $doc3 = $_POST["docentes3"];

            mysqli_query($conexion, "INSERT INTO asignacion_m(id_docente,id_materia) VALUES ('$doc3','$id_le')");
      echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacionMaterias.php";
                    
                });</script>';
            } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
     }
//********************************************
//*****************matematica******************
  if (isset($_REQUEST['tirar4'])) {
        try {
            $doc4 = $_POST["docentes4"];
            mysqli_query($conexion, "INSERT INTO asignacion_m(id_docente,id_materia) VALUES ('$doc4','$id_ma')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacionMaterias.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
//***********************************
//*************Ciencia

  if (isset($_REQUEST['tirar5'])) {
        try {
            $doc5 = $_POST["docentes5"];
            mysqli_query($conexion, "INSERT INTO asignacion_m(id_docente,id_materia) VALUES ('$doc5','$id_ci')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacionMaterias.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    } 
//*****************************

//******************ingles

  if (isset($_REQUEST['tirar6'])) {
        try {
            $doc6 = $_POST["docentes6"];
            mysqli_query($conexion, "INSERT INTO asignacion_m(id_docente,id_materia) VALUES ('$doc6','$id_in')");
        echo '<script>swal({
                    title: "Asignado",
                    text: "Correcto!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="asignacionMaterias.php";
                    
                });</script>';
            
        } catch (Exception $exc) {
            echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
    }  
?>
    

