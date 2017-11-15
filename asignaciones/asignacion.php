<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
?>
<!--inicio de content wrapper mi codigo-->
<div class="content-wrapper">
    <div class="container-fluid"> <!--Comienza container Fluid-->
    <div class="col-md-12"><!--Dimencion de la pantalla-->
    <!--Encabezado de la pantalla-->
    <div class="row-fluid" align="center">
                            <div class="span6">
                              <h2 class="text-info">
                                  <img src="../imagenes/asignacion.png" width="90" height="90">
                                    Asignación.
                                </h2>
                            </div>
                        </div> <!--Fin de Encabezado de la pantalla-->
                        <br>
                        <!--Comienza tabla-->
                <div class="panel-body">
                <table class="table table-bordered table table-hover">
                    <thead class="">
                    <th class="text-center">Grados</th>
                    <th class="text-center">Sección</th>
                    <th class="text-center">Aula</th>
                    <th class="text-center">Docente</th>
                    </thead>
        <!--*****************************************************************-->
                    <tbody>
                        <tr>
                            <td class="text-center">
                            </td>
                            <td class="text-center">
                              
                            </td>
                            <td class="text-center">
                              <select name="aula">
                                  <option value="pri">Aulas</option>
                                
                                    </select>
                            </td>
                            <td class="text-center">
                               <select name="docentes">
                                  <option value="pri">Nombres de los docentes</option>
                                
                                    </select>
                            </td>
                           
                        </tr>

                    </tbody>
      <!--*****************************************************************-->

                </table>
            </div> <!--termina tabla-->
            
          
                       
      </div><!--Fin de Dimencion de la pantalla-->

    </div><!--termina container fluid-->

</div><!--Fin de content wrapper mi codigo-->

<?php
include_once '../plantilla/fin_plantilla.php';
?>
    

