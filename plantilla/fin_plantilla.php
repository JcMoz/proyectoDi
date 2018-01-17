<!--ojo -->
<footer class="sticky-footer" >
    <div class="container">
        <div class="text-center">

            <small>Derechos Reservados UES-FMP 2017</small>
            <img src="../imagenes/mine.png" width="50" height="50">
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up" ></i>
</a>

<!-- Logout Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
          <??>      
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Seleccione "Cerrar sesión" si está listo para finalizar su sesión actual.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="../seguridad/cambiar.php" class="btn">
                <button class="btn btn-success btn-block btn-large " type="button">Cambiar Contraseña </button>
                </a>
                <a class="btn btn-primary" href="../doc/cerrar.php">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>

<!--******************************Dialog**************************-->
<div class="modal modal-info fade in" id="cambiar">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title">Cambiar contraseña de usuario.</h4>
            </div>

            <div class="modal-body">
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">

                        <div class="row" > 


                            <div align="center" class="col-md-12">
                                <input class="form-control" type="text" name="nombreA" placeholder="Contraseña actual"><br>
                                <input class="form-control" type="text" name="nombreA" placeholder="Nueva contraseña">

                            </div><!--fin columna-->


                        </div><!--fin row-->

                    </div>

                </form>

            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Atras </button>
                <button type="button"  class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<!--****************************fin Dialo******************************-->

<!-- Bootstrap core JavaScript -->
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/Chart.min.js"></script>
<script src="../vendor/datatables/jquery.dataTables.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/sb-admin.min.js"></script>

<!--Validaciones-->
<script src="../js/jquery.mask.min.js"></script>

<script src="../js/reglas_validacion.js"></script>
<script src="../js/validacionesDocente.js"></script>



</body>

</html>