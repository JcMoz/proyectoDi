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
$grado = $_GET['ir'];
$materia = $_GET['llego'];
$alumno = $_GET['id'];
 $validarMaterias=  mysqli_query($conexion,"SELECT * FROM asignacion_a_g WHERE id_docentes='$profesor' AND id_gra='$grado'");
 while ($teto=  mysqli_fetch_array($validarMaterias)){
     $id_Asignacion=$teto['id_asignacion'];
 }
 $hoysi=  mysqli_query($conexion,"SELECT * FROM actividades WHERE id_asignacion_a_g='$id_Asignacion' AND id_materia='$materia' AND estado_a='enProceso'");

if($grado==1|| $grado==2|| $grado==3|| $grado==4){
//********************Extraer id de asiganacion de grado c 1-4...
$extraer_id = mysqli_query($conexion, "SELECT*FROM actividades LEFT JOIN asignacion_a_g ON actividades.id_asignacion_a_g=asignacion_a_g.id_asignacion WHERE id_docentes='$profesor' AND id_gra='$grado' AND id_materia='$materia' AND estado_a='enProceso'");
while ($xyz = mysqli_fetch_array($extraer_id)) {
    //$a_actividad = $xyz['id_asignacion'];
    $pe=$xyz['periodo'];
    $a1=$xyz['act_1'];
    $a2=$xyz['act_2'];
    $a3=$xyz['act_3'];
    $a4=$xyz['act_4'];
    $a5=$xyz['act_5'];
    $a6=$xyz['act_6'];
    $a7=$xyz['act_7'];
    $a8=$xyz['act_8'];
    $a9=$xyz['act_9'];
}//cierre de while
}else{
    //********************Extraer id de asiganacion de grado c 1-4...
$extraer_id = mysqli_query($conexion, "SELECT *FROM actividades_materia a, asignacion_m m WHERE a.id_asignacion_m=m.id_asig_m AND a.id_materia='$materia'"
        . " AND m.id_docente='$profesor' AND a.id_grado='$grado' AND a.estado_a='enProceso'");
while ($xyz = mysqli_fetch_array($extraer_id)) {
    //$a_actividad = $xyz['id_asignacion'];
    $pe=$xyz['periodo'];
    $a1=$xyz['act_1'];
    $a2=$xyz['act_2'];
    $a3=$xyz['act_3'];
    $a4=$xyz['act_4'];
    $a5=$xyz['act_5'];
    $a6=$xyz['act_6'];
    $a7=$xyz['act_7'];
    $a8=$xyz['act_8'];
    $a9=$xyz['act_9'];
    
}
}
//*********************************************
//****************       

?>
<script>
        function validaNotas(e){
        key=e.keyCode || e.which;
        teclado=String.fromCharCode(key);
        numerito="0123456789.";
        especiales="37";
        teclado_especial=false;
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
            }
        }
        if(numerito.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
        }

</script>
<style >
    .btn-atras{
        background-color: #607d8b;
        color: white;
    }

</style>
<!--comienza mi codigo-->
<div class="content-wrapper">
    <?php
    if(mysqli_num_rows($hoysi)){
$verificar_insert = mysqli_query($conexion, "SELECT*FROM notas_2 WHERE id_inscripcion='$alumno' AND id_materia='$materia' AND id_grado='$grado' AND estado_n='enProceso'");
if (mysqli_num_rows($verificar_insert) > 0) { 
    
} else {
   include_once '../conexion/php_conexion.php';
   $estado_n="enProceso";
    mysqli_query($conexion, "INSERT INTO notas_2(id_inscripcion,id_materia,id_grado,periodo,estado_n)VALUES('$alumno','$materia','$grado','$pe','$estado_n')");
}

//*******************para sacar las notas
$notas=  mysqli_query($conexion,"SELECT*FROM notas_2 WHERE id_inscripcion='$alumno' AND id_materia='$materia' AND id_grado='$grado' AND periodo='$pe' AND estado_n='enProceso'");
while ($ver_notas=  mysqli_fetch_array($notas)){
    $n1=$ver_notas['nota1'];
    $n2=$ver_notas['nota2'];
    $n3=$ver_notas['nota3'];
    $n4=$ver_notas['nota4'];
    $id_update=$ver_notas['id'];
}
    ?>
     <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalayudaINotasAlumno" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
        <?php include_once '../ayuda/ayudaINotasAlumno.php'; ?>
    </div>
    <!--Comienza container fluid-->
    <form action="" id="FORMULARIO_VALIDADO"  method="post" class="form-register" >
        <div class="container-fluid">
            <?php
//para extraer el nombre y apellido del alumno
            $sacar = mysqli_query($conexion, "SELECT*FROM alumno INNER JOIN inscripcion on alumno.id_alumno=inscripcion.id_alumno WHERE id_inscripcion='$alumno'");
            while ($alumnito = mysqli_fetch_array($sacar)) {
                $nom_alumno = $alumnito['nom_alumno'];
                $ape = $alumnito['ape_alumno'];
            }
//fin de codigo*************************************
//*************fin de extraer datos
            ?>
            <div align="center">
                <font face="Arial Narrow" size="5" color="#001f4d">Ingresar notas.</font>
                <img src="../imagenes/pencil.png" width="50" height="50"><br/>
                <font face="Arial Narrow" size="5" color="#001f">Alumno/a: <?php echo $nom_alumno; ?> <?php echo $ape; ?></font>
            </div>
            <input type="hidden" name="tirar" id="pase"/>


            <div class="row"><!--comienza row-->


                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br/>
                        <div class="panel-heading" align="center">Actividades 35%</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">  
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a1;?>">
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a2;?>">
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a3;?>">
                                    <br> 
                                </div>
                                <div class="col-md-4">  
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text" placeholder="0.0" value="<?php echo $n1;?>" name="nota1" onkeypress="return validaNotas(event)" onpaste="return false" maxlength="4">
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text" name="nota2" placeholder="0.0" value="<?php echo $n2;?>">
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota3" placeholder="0.0" value="<?php echo $n3;?>">
                                   <br> 
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div><!--cierre del panel body-->
                        <br/>
                    </div>

                </div><!--Termina las columnas de la pantalla-->

                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br/>
                        <div class="panel-heading" align="center">Actividades 35%</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">  
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a4;?>">
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a5;?>">
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a6;?>">
                                    <br> 
                                </div>
                                <div class="col-md-3">  
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota4" placeholder="0.0">
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota5" placeholder="0.0">
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota6" placeholder="0.0">
                                    <br> 
                                </div>
                                <div class="col-md-1"></div>
                            </div>

                        </div><!--cierre del panel body-->
                        <br/>
                    </div>
                </div><!--Termina las columnas de la pantalla-->

                <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                    <div class="panel panel-default">
                        <br>
                        <div class="panel-heading" align="center">Actividades 30%</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">  
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a7;?>">
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a8;?>">
                                    &nbsp<INPUT class="form-control" type="text" disabled="false" value="<?php echo $a9;?>">
                                    <br> 
                                </div>
                                <div class="col-md-3">  
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text" name="nota7" placeholder="0.0">
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota8" placeholder="0.0">
                                    &nbsp<INPUT class="form-control" autocomplete="off" autofocus type="text"  name="nota9" placeholder="0.0">
                                    <br> 
                                </div>
                                <div class="col-md-1"></div>
                            </div>

                        </div><!--cierre del panel body-->
                        <br>
                    </div>
                </div><!--Termina las columnas de la pantalla-->

            </div><!--fin class row-->
            <div align="center">
                <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                <input type="button" value="Cancelar" name="cancel" class=" btn btn-dark" onclick="location = '/proyectoDi/doc/principal.php'">
            </div>

        </div><!--terminada container fluid-->
    </form><!--termina formulario-->
<?php }else{?>
    <div class="text-center">
        <br/>
        <img src="../imagenes/validaNotas.png" width="90" height="90"><br/>
        NO HAS INGRESADO ACTIVIDADES<br/>
        CONSULTA LA AYUDA PARA LA INSERCION<br/>
    </div>
<?php    
}?>
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
if (isset($_REQUEST['tirar'])) {
    try {
        
    include_once '../conexion/php_conexion.php';
    $not1 = $_REQUEST['nota1'];
    $not2 = $_REQUEST['nota2'];
    $not3 = $_REQUEST['nota3'];
    $por35=  round((($not1+$not2+$not3)/3)*0.35,2);
    mysqli_query($conexion, "UPDATE notas_2 SET nota1='$not1',nota2='$not2',nota3='$not3', por35='$por35' WHERE id='$id_update'");
    //bitacora
    $verUsu=  mysqli_query($conexion,"SELECT*FROM usuarios WHERE id_doc='$profesor'");
    while ($row=  mysqli_fetch_array($verUsu)){
        $usuario=$row['id_usuario'];
    }
    $vergra=  mysqli_query($conexion,"SELECT*FROM grado WHERE id_grado='$grado'");
    while ($row=  mysqli_fetch_array($vergra)){
        $nom=$row['nom_grado'];
    }
    ini_set('date.timezone', 'America/El_Salvador');
    $hora = date("Y/m/d ") . date("h-i-s");
    $actividad="Registro notas de:".$nom_alumno.' '.$ape.' '."Grado :".$nom;
    mysqli_query($conexion,"INSERT INTO bitacora(id_usuario,actividad,fecha) VALUES('$usuario','$actividad','$hora')");
   //fin bitacora
    echo '<script>swal({
                    title: "Exito",
                    text: "Calificaciones almacenadas",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="registrarNotas.php";
                    
                });</script>';
    } catch (Exception $exc) {
         echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
               
    }
}
?>
