<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<style >
 .btn-cancelar{
    background-color: #9e9e9e;
    color: white;
  }
</style>
<!-- /.content-wrapper mi codigo-->
<div class="content-wrapper">
    <div class="container-fluid"> <!--Comienza container Fluid-->
    
         &nbsp &nbsp &nbsp<font face="Arial Narrow" size="5" color="#001f4d">Ingresar docente.</font>
        <div class="row"> <!--Comienza los row-->
            <div class="col-md-8">
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Datos de docente</div>
                    <div class="panel-body">
                    <br>
<!--comienza formulario--><form id="Docente_validado" method="post" class="form-horizontal" action="">
        
                        &nbsp<INPUT class="form-group" id="nomDo" name="nomDo" type="text"  placeholder="        Nombres del docente" size="35">
                        &nbsp &nbsp<INPUT class="form-group" type="text"  name="apellidosDo" placeholder="      Apellidos del docente" size="35"><br>
                        <input class="form-control" type="text" name="direccionDo" placeholder="     Dirección      "> 
                        <br>
                        <div align="">
                            &nbsp&nbsp<INPUT class="form-group" type="text"  name="telDo" placeholder="   Teléfono" size="10">
                            <font face="Arial Narrow" size="4" color="#001f4d">Género : </font>
                            <select name="Genero">
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>

                            </select>
                            <font face="Arial Narrow" size="3" color="#001f4d">Fecha de nacimiento : </font> <input class="form-group" type="date" name="fecha">
                        </div>
                        <input class="form-control" type="text" name="direccionDo" placeholder="     Correo electrónico      "> 
                        <br>
                        &nbsp &nbsp &nbsp<input class="form-group" type="text" placeholder="           NIP      " align="center" name="nip"> &nbsp &nbsp
                        <input class="form-group" type="text" placeholder="           NIT      " align="center" name="nit">&nbsp &nbsp <input class="form-group" type="text" placeholder="           DUI     " align="center" name="dui">
                        <br>
                        <input class="form-control" type="text" name="direccionDo" placeholder=" Especialidad     "> 
                        <br>
                        <div align="center">
                        <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                        <input type="submit" value="Cancelar" name="cancel" class=" btn btn-cancelar">
                    </div>    
                    </form><!--termina formulario-->
                    </div><!--cierre del panel body-->
                    <br>

                    <br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel">
                        <!--imagen   -->
                        <div align="center">
                            <img src="imagenes/docente1.png" class="img-responsive">
                        </div>
                    </div>
                    <br> <br> <br>
                    
                </div>
            </div>
            </form><!--fin form-->
        </div> <!--Termina los row-->
    </div><!--Termina container fluid-->
</div><!--cierrre de content-wrapper mi codigo-->
<?php
include_once './molde/fin.php';
?>