<?php

include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
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
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <br>
                    <div class="panel-heading" align="center">Datos de docente</div>
                    <div class="panel-body">
                        <br>
                        <!--comienza formulario-->
                        <form id="FORMULARIO_VALIDADO"  method="post" class="form-register" >

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <INPUT class="form-control" id="Idnom" name="nom" type="text"  placeholder=" Nombres del docente" required="" minlength="2" pattern="[a-z]{1,15}">
                                </div>
                                <div class="col-md-5">
                                    <INPUT class="form-control" type="text" id="Idapellido" name="apellido" placeholder="Apellidos del docente" required="" minlength="2" ><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">

                                    <input class="form-control" type="text" id="Iddireccion" name="direccion" placeholder="     Dirección      "><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <INPUT class="form-control" type="text" id="Idtel" name="tel" placeholder="   Teléfono" size="10">
                                </div>
                                <div class="col-md-3">

                                    <select class="form-control" name="genero">
                                       
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>

                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="date" name="fecha"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="correo" placeholder="     Correo electrónico      "> 
                                    <br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" placeholder="        NIP      "name="nip">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" placeholder="        NIT      "  name="nit">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" placeholder="           DUI     " name="dui"> <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                      <input class="form-control" type="text" name="especialidad" placeholder=" Especialidad     "> 
                                    <br>

                                </div>
                            </div>

                          
                            <div align="center">
                                <input type="submit" value="Guardar" name="guardar" class="btn btn-info">
                                <input type="submit" value="Cancelar" name="cancel" class=" btn btn-cancelar">
                               
                            </div>
                             <br>
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
                            <img src="../imagenes/docente1.png" class="img-responsive">
                        </div>
                    </div>
                    <br> <br> <br>

                </div>
            </div>
        </div>
        </form><!--fin form-->

    </div><!--Termina container fluid-->


</div><!--cierrre de content-wrapper mi codigo-->
<?php

include_once '../plantilla/fin_plantilla.php';
?>