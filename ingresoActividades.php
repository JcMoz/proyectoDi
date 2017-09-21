<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<!--comienza mi codigo-->
<div class="content-wrapper">
<!--Comienza container fluid-->
	<div class="container-fluid">
	<div align="center">
		<font face="Arial Narrow" size="5" color="#001f4d">Ingresar Actividades</font>
		 <img src="imagenes/pencil.png" width="50" height="50">
	</div>
	<div class="pt-5">
		<select name="perido">
    <option value="pe">Periodos</option>
    <option value="pri">Primer Perido</option>
    <option value="se">Segundo Perido</option>
    <option value="te">Tercer Perido</option>
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
include_once './molde/fin.php';
?>