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
    .btn-cancelar{
        background-color: #9e9e9e;
        color: white;
    }

</style>
<!--inicio de content wrapper mi codigo-->
<div class="content-wrapper">
    <div class="container-fluid"> <!--Comienza container Fluid-->
        <!--titulo-->
        <div align="center">
            <font face="Arial Narrow" size="5" color="#001f4d">Creación de Horarios de 1°- 4° Grado.</font>
            <img src="../imagenes/horario1.png" width="60" height="60"> <br/>
            <?php
            $mostrar = mysqli_query($conexion, "select * FROM docente d, asignacion_a_g a,grado g WHERE d.id_doc= a.id_docentes AND a.id_gra = g.id_grado "
                    . "AND g.turno_grado = 1 AND d.id_doc='$profesor' ");
            if (mysqli_num_rows($mostrar)) {

                $sacarDocente = mysqli_query($conexion, "select * FROM docente d, asignacion_a_g a,grado g WHERE d.id_doc= a.id_docentes AND a.id_gra = g.id_grado "
                        . "AND g.turno_grado = 1 AND d.id_doc='$profesor' ");
                while ($row = mysqli_fetch_array($sacarDocente)) {
                    $nombreD = $row['nom_doc'];
                    $apellidoD = $row['ape_doc'];
                    $grado = $row['nom_grado'];
                    $idGrado = $row['id_grado'];
                }
                ?>
                <font face="Arial Narrow" size="5" color="#001f4d">Docente : <?php echo $nombreD . ' ' . $apellidoD; ?></font>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<font face="Arial Narrow" size="5" color="#001f4d">Grado : <?php echo $grado ?></font>
            </div>
            <br/>


            <div class="row">
                <div class="col">
                    <!--Comienza tabla-->
                    <div class="panel-body">
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="">
                            <th width="140">Hora</th>
                            <th class="">Lunes</th>
                            <th class="">Martes</th>
                            <th class="">Miércoles</th>
                            <th class="">Jueves</th>
                            <th class="">Viernes</th>
                            <th class="">Accion</th>

                            </thead>

                            <tbody>

                                <!--hora  1-->
                                <?php
                                $modificar = mysqli_query($conexion, "SELECT*FROM horarios WHERE id_docente='$profesor' AND id_grado='$idGrado' AND hora='7:15-8:00 am'");
                                while ($row_mo = mysqli_fetch_array($modificar)) {
                                    $id_hora1 = $row_mo['id_horario'];
                                    ?>
                                    <tr>
                                <form action="" id="formularioHorario"  method="post" class="form-register" enctype="multipart/form-data">
                                    <input type="hidden" name="tirar1" id="pase"/>

                                    <td  class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora1" value="<?php echo $row_mo['hora']; ?>" type="text" disabled="false" >                        
                                    </td>
                                    <td  class="text-center">
                                        <select name="materia1" id="maa1" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo['lunes'] . '">' . $row_mo['lunes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia2" id="ma1" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo['martes'] . '">' . $row_mo['martes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia3" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo['miercoles'] . '">' . $row_mo['miercoles'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia4" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo['jueves'] . '">' . $row_mo['jueves'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia5" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo['viernes'] . '">' . $row_mo['viernes'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td  class="text-center"><input type="submit" value="Actualizar" name="Siguiente" class="btn btn-info">                       
                                    </td>
                                </form><!--fin de formulario-->
                                </tr>
                            <?php } ?>

                            <!--fin hora************************************************  2-->  
                            <?php
                            $modificar2 = mysqli_query($conexion, "SELECT*FROM horarios WHERE id_docente='$profesor' AND id_grado='$idGrado' AND hora='8:00-8:45 am'");
                            while ($row_mo2 = mysqli_fetch_array($modificar2)) {
                                $id_hora2 = $row_mo2['id_horario'];
                                ?>
                                <tr>
                                <form action="" id="formularioHorario"  method="post" class="form-register" enctype="multipart/form-data">
                                    <input type="hidden" name="tirar2" id="pase"/>

                                    <td  class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora1" value="<?php echo $row_mo2['hora']; ?>" type="text" disabled="false" >                        
                                    </td>
                                    <td  class="text-center">
                                        <select name="materia6" id="maa1" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo2['lunes'] . '">' . $row_mo2['lunes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia7" id="ma1" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo2['martes'] . '">' . $row_mo2['martes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia8" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo2['miercoles'] . '">' . $row_mo2['miercoles'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia9" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo2['jueves'] . '">' . $row_mo2['jueves'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia10" id="mal" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo2['viernes'] . '">' . $row_mo2['viernes'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td  class="text-center"><input type="submit" value="Actualizar" name="Siguiente" class="btn btn-info">                       
                                    </td>
                                </form><!--fin de formulario-->
                                </tr>
                            <?php } ?>
                            <!--fin hora-->
                            

                             <!--fin hora************************************************  3-->  
                            <?php
                            $modificar3 = mysqli_query($conexion, "SELECT*FROM horarios WHERE id_docente='$profesor' AND id_grado='$idGrado' AND hora='9:05-9:50 am'");
                            while ($row_mo3 = mysqli_fetch_array($modificar3)) {
                                $id_hora3 = $row_mo3['id_horario'];
                                ?>
                                <tr>
                                <form action="" id="formularioHorario"  method="post" class="form-register" enctype="multipart/form-data">
                                    <input type="hidden" name="tirar3" id="pase"/>

                                    <td  class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora1" value="<?php echo $row_mo3['hora']; ?>" type="text" disabled="false" >                        
                                    </td>
                                    <td  class="text-center">
                                        <select name="materia11" id="maa1" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo3['lunes'] . '">' . $row_mo3['lunes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia12" id="ma1" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo3['martes'] . '">' . $row_mo3['martes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia13" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo3['miercoles'] . '">' . $row_mo3['miercoles'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia14" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo3['jueves'] . '">' . $row_mo3['jueves'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia15" id="mal" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo3['viernes'] . '">' . $row_mo3['viernes'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td  class="text-center"><input type="submit" value="Actualizar" name="Siguiente" class="btn btn-info">                       
                                    </td>
                                </form><!--fin de formulario-->
                                </tr>
                            <?php } ?>
                            <!--fin hora-->
                            
                             <!--fin hora************************************************  4-->  
                            <?php
                            $modificar4 = mysqli_query($conexion, "SELECT*FROM horarios WHERE id_docente='$profesor' AND id_grado='$idGrado' AND hora='9:50-10:35 am'");
                            while ($row_mo4 = mysqli_fetch_array($modificar4)) {
                                $id_hora4 = $row_mo4['id_horario'];
                                ?>
                                <tr>
                                <form action="" id="formularioHorario"  method="post" class="form-register" enctype="multipart/form-data">
                                    <input type="hidden" name="tirar4" id="pase"/>

                                    <td  class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora1" value="<?php echo $row_mo4['hora']; ?>" type="text" disabled="false" >                        
                                    </td>
                                    <td  class="text-center">
                                        <select name="materia16" id="maa1" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo4['lunes'] . '">' . $row_mo4['lunes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia17" id="ma1" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo4['martes'] . '">' . $row_mo4['martes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia18" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo4['miercoles'] . '">' . $row_mo4['miercoles'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia19" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo4['jueves'] . '">' . $row_mo4['jueves'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia20" id="mal" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo4['viernes'] . '">' . $row_mo4['viernes'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td  class="text-center"><input type="submit" value="Actualizar" name="Siguiente" class="btn btn-info">                       
                                    </td>
                                </form><!--fin de formulario-->
                                </tr>
                            <?php } ?>
                            <!--fin hora-->
                            
                             <!--fin hora************************************************  4-->  
                            <?php
                            $modificar5 = mysqli_query($conexion, "SELECT*FROM horarios WHERE id_docente='$profesor' AND id_grado='$idGrado' AND hora='10:55-11:45 am'");
                            while ($row_mo5 = mysqli_fetch_array($modificar5)) {
                                $id_hora5 = $row_mo5['id_horario'];
                                ?>
                                <tr>
                                <form action="" id="formularioHorario"  method="post" class="form-register" enctype="multipart/form-data">
                                    <input type="hidden" name="tirar5" id="pase"/>

                                    <td  class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora1" value="<?php echo $row_mo5['hora']; ?>" type="text" disabled="false" >                        
                                    </td>
                                    <td  class="text-center">
                                        <select name="materia21" id="maa1" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo5['lunes'] . '">' . $row_mo5['lunes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia22" id="ma1" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo5['martes'] . '">' . $row_mo5['martes'] . '</option>';
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia23" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo5['miercoles'] . '">' . $row_mo5['miercoles'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia24" id="mal" class="form-control">
                                            <?php
                                            echo'<option value="' . $row_mo5['jueves'] . '">' . $row_mo5['jueves'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia25" id="mal" class="form-control">

                                            <?php
                                            echo'<option value="' . $row_mo5['viernes'] . '">' . $row_mo5['viernes'] . '</option>';
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td  class="text-center"><input type="submit" value="Actualizar" name="Siguiente" class="btn btn-info">                       
                                    </td>
                                </form><!--fin de formulario-->
                                </tr>
                            <?php } ?>
                            <!--fin hora-->
                            


                            </tbody>

                        </table>
                    </div>
                    <!--termina tabla-->
                </div><!--col-->

            </div><!--fin de row-->
            <!--botones-->
            <div align="center">
                <input type="submit" value="Cancelar" name="cancel" class="btn btn-cancelar">
            </div>    

        <?php } else { ?>
            <div align="center">
                <font face="Arial Narrow" size="5" color="#001f4d">No posee grado asignado de 1-4 grado</font>
            </div>  
        <?php } ?>

    </div><!--fin container fluid-->
</div><!--fin contant wrapper-->
<?php
if (isset($_REQUEST['tirar1'])) {
    try {

        //insertar una linea 1 del horario
        include_once '../conexion/php_conexion.php';
        $materia1 = $_REQUEST['materia1'];
        $materia2 = $_REQUEST['materia2'];
        $materia3 = $_REQUEST['materia3'];
        $materia4 = $_REQUEST['materia4'];
        $materia5 = $_REQUEST['materia5'];

        mysqli_query($conexion, "UPDATE horarios SET lunes='$materia1',martes='$materia2', miercoles='$materia3',jueves='$materia4',viernes='$materia5'  WHERE id_horario='$id_hora1'");

        echo '<script>swal({
                    title: "Exito",
                    text: "Modificación actualizado exitosamente!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="modificacionHorario-1-4.php";
                    
                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}
if (isset($_REQUEST['tirar2'])) {
    try {

        ///*******************************2 
        $materia6 = $_REQUEST['materia6'];
        $materia7 = $_REQUEST['materia7'];
        $materia8 = $_REQUEST['materia8'];
        $materia9 = $_REQUEST['materia9'];
        $materia10 = $_REQUEST['materia10'];

        mysqli_query($conexion, "UPDATE horarios SET lunes='$materia6',martes='$materia7', miercoles='$materia8',jueves='$materia9',viernes='$materia10'  WHERE id_horario='$id_hora2'");

        echo '<script>swal({
                    title: "Exito",
                    text: "Modificación actualizado exitosamente!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="modificacionHorario-1-4.php";
                    
                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}if (isset($_REQUEST['tirar3'])) {
    try {

        ///*******************************3 
        $materia11 = $_REQUEST['materia11'];
        $materia12 = $_REQUEST['materia12'];
        $materia13 = $_REQUEST['materia13'];
        $materia14 = $_REQUEST['materia14'];
        $materia15 = $_REQUEST['materia15'];

        mysqli_query($conexion, "UPDATE horarios SET lunes='$materia11',martes='$materia12', miercoles='$materia13',jueves='$materia14',viernes='$materia15'  WHERE id_horario='$id_hora3'");

        echo '<script>swal({
                    title: "Exito",
                    text: "Modificación actualizado exitosamente!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="modificacionHorario-1-4.php";
                    
                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}if (isset($_REQUEST['tirar4'])) {
    try {

        ///*******************************4 
        $materia16 = $_REQUEST['materia16'];
        $materia17 = $_REQUEST['materia17'];
        $materia18 = $_REQUEST['materia18'];
        $materia19 = $_REQUEST['materia19'];
        $materia20 = $_REQUEST['materia20'];

        mysqli_query($conexion, "UPDATE horarios SET lunes='$materia16',martes='$materia17', miercoles='$materia18',jueves='$materia19',viernes='$materia20'  WHERE id_horario='$id_hora4'");

        echo '<script>swal({
                    title: "Exito",
                    text: "Modificación actualizado exitosamente!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="modificacionHorario-1-4.php";
                    
                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}if (isset($_REQUEST['tirar5'])) {
    try {

        ///*******************************4 
        $materia21 = $_REQUEST['materia21'];
        $materia22 = $_REQUEST['materia22'];
        $materia23 = $_REQUEST['materia23'];
        $materia24 = $_REQUEST['materia24'];
        $materia25 = $_REQUEST['materia25'];

        mysqli_query($conexion, "UPDATE horarios SET lunes='$materia21',martes='$materia22', miercoles='$materia23',jueves='$materia24',viernes='$materia25'  WHERE id_horario='$id_hora5'");

        echo '<script>swal({
                    title: "Exito",
                    text: "Modificación actualizado exitosamente!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="modificacionHorario-1-4.php";
                    
                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}


include_once '../plantilla/fin_plantilla.php';
?>


