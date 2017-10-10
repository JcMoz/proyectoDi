<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
?>

<!--comienza mi codigo-->
<div class="content-wrapper">
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <div align="center">
            <font face="Arial Narrow" size="5" color="#001f4d">Ingresar</font>
            <img src="../imagenes/aulas.png" width="90" height="90">
        </div>

        <div class="row"><!--comienza row-->

            <div class="col-md-3"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Grados</div>
                    <div class="panel-body">
                    <br>
                    <div align="center">
                    <INPUT class="form-group" type="text"  name="act1" placeholder="     Grado" size="15">
                    </div>
                        <br> <br><br>
                    </div><!--cierre del panel body-->
                    <br>
                </div>

            </div><!--Termina las columnas de la pantalla-->

            <div class="col-md-3"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Secciones y turno</div>
                    <div class="panel-body">
                    <br>
                    <div align="center">
                   <INPUT class="form-group" type="text"  name="act1" placeholder="   Sección" size="15">
                   <INPUT class="form-group" type="text"  name="nota1" placeholder=" Turno " size="5">
                   </div>
                         <br>
                       
                    </div><!--cierre del panel body-->
                    <br>
                </div>
            </div><!--Termina las columnas de la pantalla-->

            <div class="col-md-3"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Aulas</div>
                    <div class="panel-body">
                    <br>
                    <div align="center">
                <INPUT class="form-group" type="text"  name="act1" placeholder="N° de Aula" size="15">
                </div>
                 <br>  <br>  <br>
                       
                    </div><!--cierre del panel body-->
                    <br>  <br>  <br>  <br>
                </div>
            </div><!--Termina las columnas de la pantalla-->
             <div class="col-md-3"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Materias</div>
                    <div class="panel-body">
                    <br>
                    <div align="center">
                <INPUT class="form-group" type="text"  name="act1" placeholder="   Materias" size="15">
                       </div>
                        <br>  <br>  <br>
                    </div><!--cierre del panel body-->
                    <br>
                </div>
            </div><!--Termina las columnas de la pantalla-->
        </div><!--fin class row-->
        <div align="center">
            <input type="submit" style="color:white" value="Cancelar" name="atras" class="btn btn-secondary">
             <input type="submit" style="color:white" value="Guardar" name="atras" class="btn btn-primary">
        </div>
       
    </div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once '../plantilla/fin_plantilla.php';
?>