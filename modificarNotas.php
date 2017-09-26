<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<!--comienza mi codigo-->
<div class="content-wrapper">
	<!--Comienza container fluid-->
    <div class="container-fluid">
    	<!--Encabezado de la pantalla-->
    <div class="row-fluid" align="center">
                            <div class="span6">
                              <h2 class="text-info">
                                    <img src="imagenes/bus.png" width="50" height="50">
                                    Buscar Notas
                                </h2>
                            </div>
                            <div class="span6">
                              <form name="form1" method="post" action="">
                                  <div class="input-append">
                                  <input type="text" name="buscar" class="input-xlarge" autocomplete="off" autofocus placeholder="         Alumno ">
                                    <button type="submit" class="btn-secondary">
                                    <strong>
                                    <i class="icon-search"></i> Buscar
                                    </strong>
                                    </button>
                                     
                                    </div>

                                </form>
                              <br>
                            </div>
                        </div> <!--Fin de Encabezado de la pantalla-->
           <div>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-group" type="text" name="maestro" size="50" placeholder="        Nombre del Maestro">  &nbsp &nbsp
            <input class="form-group" type="text" name="grado" size="15" placeholder="          Grado">  &nbsp &nbsp
            <input class="form-group" type="text" name="ano" size="15" placeholder="          Año">
            <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-group" type="text" name="asig" size="30" placeholder="        Asignatura">  &nbsp &nbsp &nbsp
            <input class="form-group" type="text" name="period" size="20" placeholder="             Periodo">
        </div>
        <!--**************************codigo de la tabla ***********************************-->
        <div class="row">
            <div class="col">
                <!--Comienza tabla-->
        <div class="panel-body">
            <table class="table table-bordered table table-hover table-sm table-responsive">
                <thead class="">
                <th class="text-center">NIE</th>
                <th class="text-center">Alumnos</th>
                <th class="text-center">Act1</th>
                <th class="text-center">Act2</th>
                <th class="text-center">Act3</th>
                <th class="text-center">R</th>
                <th class="text-center">P</th>
                <th class="text-center">Act1</th>
                <th class="text-center">Act2</th>
                <th class="text-center">Act3</th>
                <th class="text-center">R</th>
                <th class="text-center">P</th>
                <th class="text-center">Act1</th>
                <th class="text-center">Act2</th>
                <th class="text-center">Act3</th>
                <th class="text-center">R</th>
                <th class="text-center">P</th>
                <th class="text-center">PF</th>
                <th class="text-center">Accion</th>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                                                
                        <td class="text-center">
                            <a class="btn btn-success btn-block btn-large" href="notasModificar.php">Modificar
                            </a></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!--termina tabla-->
            </div>
        </div><!--fin de row-->
        
        <!--***************************fin de codigo*****************************************-->


    </div><!--fin de container fluid-->
</div><!--fin de mi codigo content wrapper-->
<?php
include_once './molde/fin.php';
?>