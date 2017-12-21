<?php
session_start();
include_once '../conexion/php_conexion.php';
include_once '../plantilla/incio_plantilla.php';
try {
if ($_SESSION['tipo_user']=='ad' or $_SESSION['tipo_user']=='p') {
    $profesor=$_SESSION['id_profesor'];
    $sacar= mysqli_query($conexion,"SELECT*FROM docente WHERE id_doc='$profesor'");
    
    while ($row=  mysqli_fetch_array($sacar)){
        $nombre=$row['nom_doc'];
        $ape=$row['ape_doc'];
    }   
   
}
} catch (Exception $exc) {
     echo '<script>swal("EROR", "Favor revisar los datos e intentar nuevamente", "error");</script>';              
}
?>
<?php
//body
include_once '../plantilla/incio_plantilla.php';
if ($_SESSION['tipo_user']=='ad') {
    include_once '../plantilla/menu_navegacion.php';
}else{
    if ($_SESSION['tipo_user']=='p') {
       include_once '../plantilla/menu_navegacion_1.php';  
    }
}
$grado = $_GET['ir'];
$materia=$_GET['llego'];

?>
<style >
      .btn-atras{
    background-color: #607d8b;
    color: white;
  }
    
</style>
<!--comienza mi codigo-->
<div class="content-wrapper">
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <?php 
        $sacar=  mysqli_query($conexion,"SELECT*FROM materias WHERE id_materia='$materia'");
        while ($mi_materia=  mysqli_fetch_array($sacar)){
            $nom_m=$mi_materia['nombre'];
        }
        ?>
        <div align="center">
            <font face="Arial Narrow" size="5" color="#001f4d">Ingresar actividades de la asignatura de <?php echo $nom_m;?></font>
            <img src="../imagenes/pencil.png" width="50" height="50">
        </div>
        <div class="pt-5" align="center">
            <select name="perido">
                <option value="pe">Periodos</option>
                <option value="pri">Primer</option>
                <option value="se">Segundo</option>
                <option value="te">Tercer</option>
            </select>  &nbsp &nbsp &nbsp
            <select name="grado">
                <option value="gra">Grado</option>
                
            </select> &nbsp &nbsp &nbsp
             <select name="ma">
                <option value="mat">Materia</option>
                
            </select>
        </div>

        <div class="row"><!--comienza row-->

            <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Actividades 35%</div>
                    <div class="panel-body">
                        &nbsp<INPUT class="form-control" type="text"  name="act1" placeholder="                 Actividad 1" size="35">
                        &nbsp<INPUT class="form-control" type="text"  name="act2" placeholder="                 Actividad 2" size="35">
                        &nbsp<INPUT class="form-control" type="text"  name="act3" placeholder="                 Actividad 3" size="35">
                        <br>   
                    </div><!--cierre del panel body-->
                    <br>
                </div>

            </div><!--Termina las columnas de la pantalla-->

            <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Actividades 35%</div>
                    <div class="panel-body">
                        &nbsp<INPUT class="form-control" type="text"  name="act1" placeholder="                 Actividad 1" size="35">
                        &nbsp<INPUT class="form-control" type="text"  name="act2" placeholder="                 Actividad 2" size="35">
                        &nbsp<INPUT class="form-control" type="text"  name="act3" placeholder="                 Actividad 3" size="35">
                        <br>   
                    </div><!--cierre del panel body-->
                    <br>
                </div>
            </div><!--Termina las columnas de la pantalla-->

            <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Actividades 30%</div>
                    <div class="panel-body">
                        &nbsp<INPUT class="form-control" type="text"  name="act1" placeholder="                 Actividad 1">
                        &nbsp<INPUT class="form-control" type="text"  name="act2" placeholder="                 Actividad 2">
                        &nbsp<INPUT class="form-control" type="text"  name="act3" placeholder="                 Actividad 3" >
                        <br>   
                    </div><!--cierre del panel body-->
                    <br>
                </div>
            </div><!--Termina las columnas de la pantalla-->
        </div><!--fin class row-->
        <div align="center">
            <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
        </div>
       
    </div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>