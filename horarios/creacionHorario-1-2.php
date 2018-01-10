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
    	<font face="Arial Narrow" size="5" color="#001f4d">Creación de Horarios de 1°- 2° Grado.</font>
        <img src="../imagenes/horario1.png" width="60" height="60">
   </div>
   <br> <br>

    <div class="row">
            <div class="col">
                <!--Comienza tabla-->
        <div class="panel-body">
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="">
                <th width="250">Hora</th>
                <th class="">Lunes</th>
                <th class="">Martes</th>
                <th class="">Miércoles</th>
                <th class="">Jueves</th>
                <th class="">Viernes</th>
                <th class="">Grado</th>
                 <th class="">Docente</th>
                </thead>

                <tbody>

                   <!--hora-->
                    <tr>
                    <td class="text-center"><INPUT class="form-control-label" size="10" name="hora1" value="7:15-8:00am" type="text" disabled="false" >                        
                    </td>
                    <td class="text-center">
                        <select name="materia1" id="ma1" class="form-control">
                         <option value="len">Materia</option>
                         <?php
                         $materia=  mysqli_query($conexion,"SELECT*FROM materias WHERE turno_materia=1");
                         while ($row= mysqli_fetch_array($materia)){
                             echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
                         }
                         ?>
						    
		       </select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    </tr>
                    
                    <tr>
                    <td class="text-center"><INPUT class="form-control-label" size="10" name="hora2" value="8:00-8:45am" type="text" disabled="false" >                      
                    </td>
                   <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-center"><INPUT class="form-control-label" size="10" name="hora3" value="9:05-9:50am" type="text" disabled="false" >                      
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    </tr>
                    
                     <tr>
                    <td class="text-center"><INPUT class="form-control-label" size="10" name="hora4" value="9:50-10:35am" type="text" disabled="false" >                    
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    </tr>
                    <tr>
                        <td class="text-center"><INPUT class="form-control-label" size="10" name="hora5" value="10:55-11:00am" type="text" disabled="false" >               
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
						</select>
                    </td>
                    <td class="text-center">
                         <select name="materia">
                         <option value="len">Materia</option>
						    <option value="len">Lenguaje</option>
						    <option value="ma">Matemática</option>
						     <option value="ma">Ciencia</option>
						     <option value="ma">Sociales</option>
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
              <input type="submit" value="Guardar" name="Siguiente" class="btn btn-info" onclick="location='/proyectoDi/inscripcionNuevo3.php'">
              <input type="submit" value="Cancelar" name="cancel" class="btn btn-cancelar">
            </div>    
    </div><!--fin container fluid-->
    </div><!--fin contant wrapper-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>