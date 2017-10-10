<?php
include_once '../plantilla/incio_plantilla.php';
include_once '../plantilla/menu_navegacion.php';
?>

<style>
    .btn-cancelar{
        background-color: #9e9e9e;
        color: white;
    }

</style>
<!--******************************Dialog**************************-->
<div class="modal modal-info fade in" id="actividad_R">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title">Seleccione Cuadro de Notas </h4>
            </div>

            <div class="modal-body">
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">

                        <div class="row" > 


                            <div align="center" class="col-md-12">
                                <select name="Grado">
                                    <option value="gra">Grado</option>
                                </select> &nbsp &nbsp &nbsp &nbsp
                                <select name="seccion">
                                    <option value="sec">Sección</option>
                                </select>&nbsp &nbsp &nbsp &nbsp
                                <select name="mate">
                                    <option value="mat">Materia</option>
                                </select>


                            </div><!--fin columna-->


                        </div><!--fin row-->

                    </div>

                </form>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Atras </button>
                <button type="button"  class="btn btn-primary"onclick="location = '/proyectoDi/notas/registrarNotas.php'" >Continuar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<!--****************************fin Dialo******************************-->
<?php
include_once '../plantilla/fin_plantilla.php';

?>