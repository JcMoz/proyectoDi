<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<!-- /.content-wrapper mi codigo-->
<div class="content-wrapper">
    <div class="container-fluid"> <!--Comienza container Fluid-->
        <font face="Arial Narrow" size="5" color="#001f4d">Modificar docente.</font>
        <div class="row"> <!--Comienza los row-->
            <div class="col-md-8">
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Datos de docente</div>
                    <div class="panel-body">
                        <br>
                        &nbsp<INPUT class="form-group" type="text"  name="nombreDo" placeholder="        Nombres del docente" size="35">
                        &nbsp &nbsp<INPUT class="form-group" type="text"  name="apellidosDo" placeholder="      Apellidos del docente" size="35"><br>
                        <input class="form-control" type="text" name="direccionDo" placeholder="     Direccion      "> 
                        <br>
                        <div align="center">
                            <INPUT class="form-group" type="text"  name="telDo" placeholder="   Telefono" size="15"> &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
                            <font face="Arial Narrow" size="4" color="#001f4d">Genero : </font>
                            <select name="Genero">
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>

                            </select>
                        </div>
                        &nbsp &nbsp &nbsp &nbsp<font face="Arial Narrow" size="4" color="#001f4d">Fecha de nacimiento : </font> 
                        <input class="form-group" type="date" name="fecha">
                        <br>
                        <input class="form-control" type="text" name="direccionDo" placeholder="     Correo electronico      "> 
                        <br>
                        &nbsp &nbsp &nbsp &nbsp<input class="form-group" type="text" placeholder="           Nip      " align="center" name="nip"> &nbsp &nbsp
                        <input class="form-group" type="text" placeholder="           Nit      " align="center" name="nit">&nbsp &nbsp <input class="form-group" type="text" placeholder="           Dui      " align="center" name="dui">
                        <br>
                        <input class="form-control" type="text" name="direccionDo" placeholder="    Especialidad     "> 
                        <br>
                    </div><!--cierre del panel body-->
                    <br>

                    <br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!--imagen   -->
                        <div align="center">
                            <img src="imagenes/inscripcion1.gif" class="img-responsive">
                        </div>
                    </div>
                    <br> <br> <br>
                    <div align="center">
                        <input type="submit" value="Modificar" name="moDo" class="btn btn-info">
                        <input type="submit" value="Cancelar" name="cancel" class="btn-secondary">
                    </div>    
                </div>
            </div>
        </div> <!--Termina los row-->
    </div><!--Termina container fluid-->
</div><!--cierrre de content-wrapper mi codigo-->
<?php
include_once './molde/fin.php';
?>