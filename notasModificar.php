<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<!--comienza mi codigo-->
<div class="content-wrapper">
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <div align="center">
            <font face="Arial Narrow" size="5" color="#001f4d">Modificar</font>
            <img src="imagenes/modificar.png" width="70" height="70">
        </div>

        <div class="row"><!--comienza row-->

            <div class="col-md-4"><!--comienza las columnas de la pantalla-->
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Actividades 35%</div>
                    <div class="panel-body">
                    <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 1" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota1" placeholder="   10.0" size="5">
                         <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 2" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota2" placeholder="   10.0" size="5">
                         <br>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 3" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota3" placeholder="   10.0" size="5">
                         <br> 
                         <div align="center">
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    R" size="5">
                         &nbsp<INPUT class="form-group" type="text"  name="nota2" placeholder="    P " size="5">
                         </div>
                         <div align="center">
                             <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                             <input type="submit" value="Cancelar" name="cancel" class="btn btn-secundary">
                             </div> 
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
                    <br>
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 1" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota1" placeholder="   10.0" size="5">
                         <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 2" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota2" placeholder="   10.0" size="5">
                         <br>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 3" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota3" placeholder="   10.0" size="5">
                         <br> 
                          <div align="center">
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    R" size="5">
                         &nbsp<INPUT class="form-group" type="text"  name="nota2" placeholder="    P " size="5">
                         </div>
                         <div align="center">
                             <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                             <input type="submit" value="Cancelar" name="cancel" class="btn btn-secundary">
                             </div> 
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
                    <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 1" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota1" placeholder="   10.0" size="5">
                         <br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 2" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota2" placeholder="   10.0" size="5">
                         <br>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    Actividad 3" size="15">
                         &nbsp<INPUT class="form-group" type="text"  name="nota3" placeholder="   10.0" size="5">
                         <br>
                         <div align="center">
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<INPUT class="form-group" type="text"  name="act1" placeholder="    R" size="5">
                         &nbsp<INPUT class="form-group" type="text"  name="nota2" placeholder="    P " size="5">
                         </div>
                         <div align="center">
                             <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                             <input type="submit" value="Cancelar" name="cancel" class="btn btn-secundary">
                             </div> 
                             <br>
                    </div><!--cierre del panel body-->
                    <br>
                </div>
            </div><!--Termina las columnas de la pantalla-->
        </div><!--fin class row-->
        <div align="center">
            <input type="submit" style="color:white" value="Atras" name="atras" class="btn btn-warning" onclick="location='/proyectoDi/modificarNotas.php'">
        </div>
       
    </div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once './molde/fin.php';
?>