<?php
include_once './molde/inicio.php';
include_once './molde/menu_navegacion.php';
?>
<div class="content-wrapper">
    <!--Comienza container fluid-->
    <div class="container-fluid">
        <div align="center">
            <font face="Arial Narrow" size="5" color="#001f4d">Registrar Notas</font>
            <img src="imagenes/lapizA.ico" width="50" height="50">
        </div>
        <div>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-group" type="text" name="maestro" size="50" placeholder="        Nombre del Maestro">  &nbsp &nbsp
            <input class="form-group" type="text" name="grado" size="15" placeholder="          Grado">  &nbsp &nbsp
            <input class="form-group" type="text" name="ano" size="15" placeholder="          Año">
            <br>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input class="form-group" type="text" name="asig" size="30" placeholder="        Asignatura">  &nbsp &nbsp &nbsp
            <input class="form-group" type="text" name="period" size="20" placeholder="             Periodo">
        </div>


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
                        <td class="text-center">1224554</td>
                        <td class="text-center">Maria de los Angeles Mejia Martinez</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                        <td class="text-center">3.3</td>
                                                
                        <td class="text-center">
                            <a class="btn btn-success btn-block btn-large" href="calificar.php">Calificar
                            </a></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!--termina tabla-->
            </div>
        </div><!--fin de row-->
        
        

    </div><!--terminada container fluid-->
</div><!--termina mi codigo-->
<?php
include_once './molde/fin.php';
?>