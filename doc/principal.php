<?php
session_start();
if($_SESSION['tipo_user']!=''){
include_once '../conexion/php_conexion.php';
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
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8">
        <div aling="center">
            <h2>Bienvenido/a: &nbsp<?php echo ''.$nombre.' &nbsp'.$ape.'';?></h2>
        </div>
        </div><!--col-->
        </div><!--row-->
    </div>
</div>                               
  

<?php
include '../plantilla/fin_plantilla.php';
}  else {
    header("Location: index.php");
}
?>