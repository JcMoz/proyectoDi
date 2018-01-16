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

<div class="content-wrapper">


    <font class="p-3" face="Arial Narrow" size="5" color="#001f4d">Registro de Usuario</font>

    <div class="container" id="conta">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Instrucciones
                        </h3>

                    </div>
                    <div class="panel-body p-3 mr-10 text-center">
                        <br>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit praesentium sunt ipsum sit accusamus aut repellendus laborum, laudantium sint voluptate, quibusdam ut, facilis nobis pariatur qui optio, voluptatibus doloremque reiciendis.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Introduce tus datos
                        </h3>
                    </div>
                    <div class="panel-body p-3 mr-10 text-center">
                        <form action="" id="formularioHorario"  method="post" class="form-register" enctype="multipart/form-data">
                            <input type="hidden" name="tirar" id="pase"/>
                            <div class="form-group"> 
                                <label>Nombre de Usuario</label>
                                <input type="text" class="form-control" name="nombre" placeholder="usuario">
                            </div>
                            <div class="form-group"> 
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="clave1">  
                            </div>
                            <div class="form-group"> 
                                <label>Repite la contraseña</label>
                                <input type="password" class="form-control" name="clave2" > 
                            </div>
                            <div class="form-group">
                                <label>Estado del Usuario</label>
                                <select name="estado" id="maa1" class="form-control" required="Seleccione">
                                    <option value="0">Estados</option>
                                    <option value='a'>Activo</option>
                                     <option value='d'>Desactivado</option>

                                </select>
                            </div>
                            
                             <div class="form-group">
                                <label>Tipo de Usuario</label>
                                <select name="tipo" id="maa1" class="form-control" required="Seleccione">
                                    <option value="0">Seleccione tipo de usuario</option>
                                    <option value="ad">Administrado</option>
                                    <option value="p">Profesor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Seleccione docente</label>
                                <select name="selec" id="maa1" class="form-control" required="Seleccione">
                                    <option value="pri">Docentes disponibles</option>
                                    <?php
                                    $materia = mysqli_query($conexion, "SELECT * FROM docente");
                                    while ($row = mysqli_fetch_array($materia)) {
                                        //$idRe=$row['id_alumno'];
                                    echo '<option value='."$row[id_doc]".'>Alumno/a: '.$row['1'].'&nbsp&nbsp'.$row['2'].'</option>';
                                   // echo '<option value=' . $row['$id_doc'] . '>' .$row['nom_doc'] . ' '.$row['ape_doc']. '</option>';
                                    
                                    }
//                                    while ($row = mysqli_fetch_array($materia)) {
//                                        echo '<option value="' . $row['$id_doc'] . '">' .$row['nom_doc'] . ' '.$row['ape_doc']. '</option>';
//                                    }
                                    ?>

                                </select>
                            </div>
                            
                            
                            
                     
                            <div align="center">
                                <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                                <input type="submit" value="Cancelar" name="cancel" class="btn btn-cancelar">
                            </div> 

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<?php
if (isset($_REQUEST['tirar'])) {
    try {
        
        //insertar una linea 1 del horario
        
        $nom = $_POST["nombre"];
        $clave =  password_hash($_POST["clave1"], PASSWORD_DEFAULT) ;
        $tipo = $_POST["tipo"];
        $estadoU = $_POST["estado"];
         $pro = $_POST["selec"];
        include_once '../conexion/php_conexion.php'; 
        mysqli_query($conexion, "INSERT INTO usuarios(user,con,estado,tipo,id_doc) VALUES ('$nom','$clave','$estadoU','$tipo','$pro')");
        
       
        echo '<script>swal({
                    title: "Exito",
                    text: "Usuario guardado exitosamente!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="registroUsuario.php";
                    
                });</script>';
    } catch (Exception $exc) {
        echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "error");</script>';
    }
}
include_once '../plantilla/fin_plantilla.php';
?>