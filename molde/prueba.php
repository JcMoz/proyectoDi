<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">
        <meta name="author" content="">
        <title>SICNO</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">


        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>



    </head>

    <body class="fixed-nav sticky-footer  bg-info" id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="mainNav">
            <a class="navbar-brand" href="#">CECCC</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav bg-secondary " id="exampleAccordion">
                    <div align="center">
                        <img src="imagenes/sicno.png" width="150" height="150">
                    </div>

                    <!--Modulo de inscripcion-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-circle" style="color: white"></i>
                            <span class="nav-link-text" style="color: white">
                                Inscripción</span>
                        </a>
                        <ul class="sidenav-second-level collapse bg-secondary " id="collapseComponents">
                            <li>
                                <a href="inscripcionNuevo.php" style="color: white">Nuevo</a>
                            </li>
                            <li>
                                <a href="buscarAlumno.php" style="color: white">Antiguo</a>
                            </li>
                        </ul> 
                    </li>
                    <!--Termina Modulo de inscripcion-->
                    <!--Modulo de Creacion de Horarios-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Creacion de horarios">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCreacion" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-circle" style="color: white"></i>
                            <span class="nav-link-text" style="color: white">
                                Creación de Horarios</span>
                        </a>
                        <ul class="sidenav-second-level collapse bg-secondary " id="collapseCreacion">
                            <li>
                                <a href="ingreso_G_S_A.php" style="color: white">Ingresar Grados, Aulas, Materias</a>
                            </li>
                            <li>
                                <a href="creacionHorario-1-2.php" style="color: white">Grados 1-2</a>
                            </li>
                            <li>
                                <a href="modificacionHorario-1-2.php" style="color: white">Modificación Grados 1-2</a>
                            </li>
                            <li>
                                <a href="creacionHorario-3-4.php"  style="color: white">Grados 3-4</a>
                            </li>
                            <li>
                                <a href="modificacionHorario-3-4.php"  style="color: white">Modificación Grados 3-4</a>
                            </li>
                            <li>
                                <a href="horario-6-9.php"  style="color: white">Horario 5-9 Grado</a>
                            </li>
                        </ul>
                    </li>
                    <!--Termina Modulo de Creacion de horarios-->
                    <!--Modulo de Seguridad-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Seguridad">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSeguridad" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-circle"  style="color: white"></i>
                            <span class="nav-link-text"  style="color: white">
                                Seguridad</span>
                        </a>
                        <ul class="sidenav-second-level collapse collapse bg-secondary " id="collapseSeguridad">
                            <li>
                                <a href="crearCopiaSeguridad.php" style="color: white">Copia de Seguridad</a>
                            </li>
                            <li>
                                <a href="registrarUsuario.php" style="color: white">Registrar Usuario</a>
                            </li>
                            <li>
                                <a href="Bitácora.php"  style="color: white">Bitácora</a>
                            </li>
                            <li>
                                <a href="mantenimientoUsuarios.php"  style="color: white">Mantenimiento de usuarios</a>
                            </li>
                        </ul>
                    </li>

                    <!--Termina Modulo de seguridad-->
                    <!--Modulo de Control de Notas-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="cntrNotas">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNotas" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-circle"  style="color: white"></i>
                            <span class="nav-link-text"  style="color: white">
                                Control de notas</span>
                        </a>
                        <ul class="sidenav-second-level collapse collapse bg-secondary " id="collapseNotas">
                            <li><!--poner codigo de los que contiene el control de notas-->
                                <a href="ingresoActividades.php"  style="color: white">Ingreso de Actividades</a>
                            </li>
                            <li>
                                <a class="btn btn-secondary btn-block btn-large " type="button"  data-toggle="modal" data-target="#actividad_R"  style="color: white">Registrar Notas</a>

                            </li>
                            <li>
                                <a href="modificarNotas.php"  style="color: white">Modificar Notas</a>
                            </li>
                        </ul>
                    </li>
                    <!--Termina Modulo de Control de notas-->

                    <!--Modulo de Expediente Docente-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Docentes">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDocentes" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-circle"  style="color: white"></i>
                            <span class="nav-link-text"  style="color: white">
                                Expediente docente</span>
                        </a>
                        <ul class="sidenav-second-level collapse collapse bg-secondary " id="collapseDocentes">
                            <li><!--poner codigo de los que contiene el modulo de expediente docente-->
                                <a href="ingresarDocente.php"  style="color: white">Registrar Docente</a>
                            </li>
                            <li>
                                <a href="buscarDocente.php"  style="color: white">Buscar Docente</a>
                            </li>
                        </ul>
                    </li>
                    <!--Termina Modulo de Expediente docente-->
                    <!--asignacion-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="asignacion.php">
                            <i class="fa fa-fw fa-circle" style="color: white"></i>
                            <span class="nav-link-text" style="color: white">Asignacion</span>
                        </a>
                    </li>
                    <!--asignacion-->

                    <!--Modulo de Reportes-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Re">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseRe" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-circle"  style="color: white"></i>
                            <span class="nav-link-text"  style="color: white">
                                Reportes</span>
                        </a>
                        <ul class="sidenav-second-level collapse collapse bg-secondary " id="collapseRe">
                            <li><!--poner codigo de los que contiene el modulo de Reportes-->
                                <a href="login.html"  style="color: white">Login Page</a>
                            </li>
                            <li>
                                <a href="register.html"  style="color: white">Registration Page</a>
                            </li>
                            <li>
                                <a href="forgot-password.html"  style="color: white">Forgot Password Page</a>
                            </li>
                            <li>
                                <a href="blank.html"  style="color: white">Blank Page</a>
                            </li>
                        </ul>
                    </li>
                    <!--Termina Modulo de Reportes-->


                </ul><!--cierre-->
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center bg-secondary "  id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left" style="color: white"></i>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal"  style="color: white" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out" style="color: white"></i>
                            Usuario</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Fin navegacion -->

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
                    <button type="button"  class="btn btn-primary"onclick="location = '/proyectoDi/registrarNotas.php'" >Continuar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



    <!--****************************fin Dialo******************************-->

    <!--ojo -->

    <footer class="sticky-footer" >
        <div class="container">
            <div class="text-center">

                <small>Derechos Reservados UES-FMP 2017</small>
                <img src="imagenes/mine.png" width="50" height="50">
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
                    <button class="btn btn-success btn-block btn-large " type="button"  data-toggle="modal" data-target="#cambiar">Cambiar Contraseña </button>
                    <a class="btn btn-primary" href="#">Cerrar sesión</a>
                </div>
            </div>
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for this template -->
<script src="js/sb-admin.min.js"></script>
<!--Validaciones-->
<script src="js/reglas_validacion.js"></script>
<script src="js/validacionesDocente.js"></script>
<!--fin de las validaciones-->


</body>

</html>