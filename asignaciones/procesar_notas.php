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
<style >

    .btn-atras{
        background-color: #607d8b;
        color: white;
    }
</style>
<div class="content-wrapper">
    <div align="right">
        <img  name="edit" data-toggle="modal" data-target="#modalayudaProcesarNotas" data-html="true" title="Ayuda"  src="../imagenes/ayu.ico" width="35" height="35">
       <?php include_once '../ayuda/ayudaProcesarNotas.php'; ?>
        
    </div>
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <br/><br/>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <br/>
                <!--Comienza tabla-->
               

                    <form action="" id="FORMULARIO_VALIDADO"  method="post" class="form-register" >
                        <input type="hidden" name="tirar" id="pase"/>
                    <table class="table table-bordered table table-active">
                        <thead class="">

                        <th class="text-center">
                            <div align="center">
                                <font face="Arial Narrow" size="5" color="#001f4d">Activar procesamiento de notas</font>
                                <img src="../imagenes/procesarNotas.png" width="70" height="70">
                            </div> 
                        </th>
                        </thead>

                        <tbody>

                            
                            <tr>
                                
                                <td class="text-center">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-3">
                                    <select name="proceso" class="form-control">
                                        <option value="len">Opción</option>
                                        <option value="activar">Activar</option>
                                        <option value="desactivar">Desactivar</option>
                                        
                                    </select>
                                        </div>
                                        <div class="col-md-4"></div>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                        
                                 <td>
                                     <div class="row">
                                          <div class="col-md-6">
                                              <input class="form-control" type="text" name="fechaLi" autocomplete="off" value="Fecha limite para procesar:" disabled="false"/>
                                        </div>
                                         <div class="col-md-6">
                                             <input class="form-control" type="date" name="fecha" id="fecha" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
                                        </div>
                                          </div>
                                 </td>
                              
                            </tr>
                        </tbody>
                    </table> <!--termina tabla-->
                     <div align="center">
                <input type="submit" value="Actualizar" name="guardar" class="btn btn-info">
                <input type="button" value="Cancelar" name="cancel" class=" btn btn-dark" onclick="location = '/proyectoDi/doc/principal.php'">
            </div>

                    </form>
                
            </div><!--div row 10-->
            <div class="col-md-2"></div><!--margen de dos-->
        </div><!--fin de row-->
       
    </div><!--fin container fluid-->

</div>

</div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
if (isset($_REQUEST['tirar'])) {
    try {
        
    include_once '../conexion/php_conexion.php';
    $proce = $_REQUEST['proceso'];
    $fe = $_REQUEST['fecha'];
    $habi="desactivar";
    $acti="activar";
    mysqli_query($conexion, "UPDATE proceso SET habilitar='$proce',fecha='$fe' WHERE id=1");
    if($acti==$proce){
    echo '<script>swal({
                    title: "Exito",
                    text: "Procesar notas activado",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="procesar_notas.php";
                    
                });</script>';
    }  else {
         echo '<script>swal({
                    title: "Exito",
                    text: "Procesar notas desactivado",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="procesar_notas.php";
                    
                });</script>';
        
    }
    } catch (Exception $exc) {
         echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
               
    }
}
?>
