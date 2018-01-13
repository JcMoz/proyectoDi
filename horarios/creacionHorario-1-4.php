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
            $mostrar=mysqli_query($conexion, "select * FROM docente d, asignacion_a_g a,grado g WHERE d.id_doc= a.id_docentes AND a.id_gra = g.id_grado "
                    . "AND g.turno_grado = 1 AND d.id_doc='$profesor' ");
            if(mysqli_num_rows($mostrar)){
                
            $sacarDocente = mysqli_query($conexion, "select * FROM docente d, asignacion_a_g a,grado g WHERE d.id_doc= a.id_docentes AND a.id_gra = g.id_grado "
                    . "AND g.turno_grado = 1 AND d.id_doc='$profesor' ");
            while ($row = mysqli_fetch_array($sacarDocente)){
            $nombreD = $row['nom_doc'];
            $apellidoD = $row['ape_doc'];
            $grado = $row['nom_grado'];
            $idGrado = $row['id_grado'];
            
            }
            ?>
            <font face="Arial Narrow" size="5" color="#001f4d">Docente : <?php echo $nombreD.' '.$apellidoD ; ?></font>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<font face="Arial Narrow" size="5" color="#001f4d">Grado : <?php echo $grado ?></font>
        </div>
        <br/>
        
        <?php
        $validar = mysqli_query($conexion, "SELECT * FROM horarios WHERE id_docente = '$profesor' AND id_grado = '$idGrado'");
        if(mysqli_num_rows($validar)> 0){ ?>
        <div class="text-center">
            <font face="Arial Narrow" size="5" color="#001f4d">EL horario ya fue ingresado</font>
        </div>
        <?php }else {
            
         ?>
        
        <form action="" id="formularioHorario" name="formularioHorario" method="post" class="form-register" enctype="multipart/form-data">
            
            <div class="row">
                <div class="col">
                    <input type="hidden" name="tirar" id="pase"/>
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
                          
                            </thead>

                            <tbody>

                                <!--hora-->
                                <tr>
                                    <td  class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora1" value="7:15-8:00 am" type="text" disabled="false" >                        
                                    </td>
                                    <td  class="text-center">
                                        <select name="materia1" id="maa1" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia2" id="ma1" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "SELECT*FROM materias WHERE turno_materia=1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia3" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while ($row = mysqli_fetch_array($materia)) {
                                                echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia4" id="mal" class="form-control" required="Seleccione">
                                            <option value="" >Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia5" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora2" value="8:00-8:45 am" type="text" disabled="false" >                      
                                    </td>
                                    <td class="text-center">
                                        <select name="materia6" id="mal" class="form-control"required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia7" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia8" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                       <select name="materia9" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia10" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora3" value="9:05-9:50 am" type="text" disabled="false" >                      
                                    </td>
                                    <td class="text-center">
                                        <select name="materia11" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia12" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia13" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia14" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia15" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora4" value="9:50-10:35 am" type="text" disabled="false" >                    
                                    </td>
                                    <td class="text-center">
                                        <select name="materia16" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia17" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia18" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia19" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia20" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><INPUT style="font-size:13px" class="form-control" size="10" name="hora5" value="10:55-11:45 am" type="text" disabled="false" >               
                                    </td>
                                    <td class="text-center">
                                        <select name="materia21" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia22" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                       <select name="materia23" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia24" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="text-center">
                                        <select name="materia25" id="mal" class="form-control" required="Seleccione">
                                            <option value="">Materia</option>
                                            <?php
                                            $materia = mysqli_query($conexion, "select * from materias WHERE turno_materia =1");
                                            while($row = mysqli_fetch_array($materia)){
                                            echo '<option value= "' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <!--fin hora-->  

                            </tbody>

                        </table>
                    </div>
                    <!--termina tabla-->
                </div><!--col-->
                
            </div><!--fin de row-->
             <!--botones-->
        <div align="center">
            <input type="submit" value="Guardar" name="Siguiente" class="btn btn-info">
            <input type="submit" value="Cancelar" name="cancel" class="btn btn-cancelar">
        </div>    
        </form><!--fin de formulario-->
            <?php } }else{ ?>
        <div align="center">
           <font face="Arial Narrow" size="5" color="#001f4d">No posee grado asignado de 1-4 grado</font>
        </div>  
            <?php }?>
       
    </div><!--fin container fluid-->
</div><!--fin contant wrapper-->
<?php
if (isset($_REQUEST['tirar'])) {
    try {
        
        //insertar una linea 1 del horario
        include_once '../conexion/php_conexion.php';
        $materia1 = $_POST["materia1"];
        $materia2 = $_POST["materia2"];
        $materia3 = $_POST["materia3"];
        $materia4 = $_POST["materia4"];
        $materia5 = $_POST["materia5"];
        $hora1 = $_POST["hora1"];        
        mysqli_query($conexion, "INSERT INTO horarios(lunes,martes,miercoles,jueves,viernes,hora,id_grado,id_docente) VALUES ('$materia1','$materia2','$materia3','$materia4','$materia5','7:15-8:00 am','$idGrado','$profesor')");
        
        
        //insertar una linea 2 del horario
        $materia6 = $_POST["materia6"];
        $materia7 = $_POST["materia7"];
        $materia8 = $_POST["materia8"];
        $materia9 = $_POST["materia9"];
        $materia10 = $_POST["materia10"];
        $hora2 = $_POST["hora2"];
        mysqli_query($conexion, "INSERT INTO horarios(lunes,martes,miercoles,jueves,viernes,hora,id_grado,id_docente) VALUES ('$materia6','$materia7','$materia8','$materia9','$materia10','8:00-8:45 am','$idGrado','$profesor')");
        
        
        //insertar una linea 3 del horario
        $materia11 = $_POST["materia11"];
        $materia12 = $_POST["materia12"];
        $materia13 = $_POST["materia13"];
        $materia14 = $_POST["materia14"];
        $materia15 = $_POST["materia15"];
        $hora3 = $_POST["hora3"];
        mysqli_query($conexion, "INSERT INTO horarios(lunes,martes,miercoles,jueves,viernes,hora,id_grado,id_docente) VALUES ('$materia11','$materia12','$materia13','$materia14','$materia15','9:05-9:50 am','$idGrado','$profesor')");
        
        
         //insertar una linea 4 del horario
        $materia16 = $_POST["materia16"];
        $materia17 = $_POST["materia17"];
        $materia18 = $_POST["materia18"];
        $materia19 = $_POST["materia19"];
        $materia20 = $_POST["materia20"];
        $hora4 = $_POST["hora4"];
        mysqli_query($conexion, "INSERT INTO horarios(lunes,martes,miercoles,jueves,viernes,hora,id_grado,id_docente) VALUES ('$materia16','$materia17','$materia18','$materia19','$materia20','9:50-10:35 am','$idGrado','$profesor')");
        
        
        //insertar una linea 5 del horario
        $materia21 = $_POST["materia21"];
        $materia22 = $_POST["materia22"];
        $materia23 = $_POST["materia23"];
        $materia24 = $_POST["materia24"];
        $materia25 = $_POST["materia25"];
        $hora5 = $_POST["hora5"];
        mysqli_query($conexion, "INSERT INTO horarios(lunes,martes,miercoles,jueves,viernes,hora,id_grado,id_docente) VALUES ('$materia21','$materia22','$materia23','$materia24','$materia25','10:55-11:45 am','$idGrado','$profesor')");
        
        echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="creacionHorario-1-4.php";
                    
                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}
include_once '../plantilla/fin_plantilla.php';
?>

<script>
    $(".formularioHorario").submit(function () {
var select = $("#maa1").val();
if (select == null) {
    $('.error').text("Seleccione una Casa de Apuestas");
    return false;
} else {
    $('.errors').hide();
    alert('OK');
    return true;
}
});
</script>
