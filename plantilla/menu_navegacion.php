
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">CECCC</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav bg-secondary " id="exampleAccordion">
            <div align="center">
                <img src="../imagenes/sicno.png" width="150" height="150">
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
                        <a href="../inscripcion/inscripcionNuevo.php" style="color: white">Nuevo</a>
                    </li>
                    <li>
                        <a href="../inscripcion/buscarAlumno.php" style="color: white">Antiguo</a>
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
                        <a href="../horarios/ingreso_G_S_A.php" style="color: white">Ingresar Grados, Aulas, Materias</a>
                    </li>
                    <li>
                        <a href="../horarios/creacionHorario-1-4.php" style="color: white">Grados 1-4</a>
                    </li>
                    <li>
                        <a href="../horarios/modificacionHorario-1-4.php"  style="color: white">Modificación Grados 1-4</a>
                    </li>
                    <li>
                        <a href="../horarios/horario-6-9.php"  style="color: white">Horario 5-9 Grado</a>
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
                        <a href="../seguridad/crearCopiaSeguridad.php" style="color: white">Copia de Seguridad</a>
                    </li>
                    <li>
                        <a href="../seguridad/registroUsuario.php" style="color: white">Registrar Usuario</a>
                    </li>
                    <li>
                        <a href="../seguridad/bitacora.php"  style="color: white">Bitácora</a>
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
                        <a href="../notas/grados_registrar.php"  style="color: white">Ingreso de Actividades</a>
                    </li>
                    <li>
                        <a href="../notas/registrarNotas.php"  style="color: white">Registrar Notas</a>
                    </li>
                    <li>
                        <a href="../notas/modificarNotas.php"  style="color: white">Modificar Notas</a>
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
                        <a href="../docente/ingresarDocente.php"  style="color: white">Registrar Docente</a>
                    </li>
                    <li>
                        <a href="../docente/buscarDocente.php"  style="color: white">Buscar Docente</a>
                    </li>
                </ul>
            </li>
            <!--Termina Modulo de Expediente docente-->
            <!--asignacion-->
            <!--Modulo de asignacion-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Asig">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAsig" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-circle" style="color: white"></i>
                    <span class="nav-link-text" style="color: white">
                        Asignación</span>
                </a>
                <ul class="sidenav-second-level collapse bg-secondary " id="collapseAsig">
                    <li>
                        <a href="../asignaciones/asignacion.php" style="color: white">Asignación grados</a>
                    </li>
                    <li>
                        <a href="../asignaciones/asignacionMaterias.php" style="color: white">Asignación materias</a>
                    </li>
                </ul> 
            </li>
            <!--Termina Modulo de asignacion-->
            <!-- termina asignacion-->
              <!--ProcesarNotas-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="../asignaciones/procesar_notas.php">
                    <i class="fa fa-fw fa-circle" style="color: white"></i>
                    <span class="nav-link-text" style="color: white">Procesar notas</span>
                </a>
            </li>
            <!--termina procesar notas-->
            <!--CIERRE-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="../cierre/cierre_principal.php">
                    <i class="fa fa-fw fa-circle" style="color: white"></i>
                    <span class="nav-link-text" style="color: white">Cierre de año</span>
                </a>
            </li>
            <!--CIERRE-->

            <!--Modulo de Reportes-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Re">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseRe" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-circle"  style="color: white"></i>
                    <span class="nav-link-text"  style="color: white">
                        Reportes</span>
                </a>
                <ul class="sidenav-second-level collapse collapse bg-secondary " id="collapseRe">
                    <li><!--poner codigo de los que contiene el modulo de Reportes-->
                        <a href="../reportes/inscripcion_principal.php"  style="color: white">Inscripción</a>
                    </li>
                    <li>
                        <a href="../reportes/notasB_principal.php"  style="color: white">Boletas de notas</a>
                    </li>
                    <li>
                        <a href="../reportes/cuadro_principal.php"  style="color: white">Cuadros de notas</a>
                    </li>
                    <li>
                        <a href="../reportes/horario_principal.php"  style="color: white">Horarios</a>
                    </li>
                    <li>
                        <a href="../reportes/estadisticas_principal.php"  style="color: white">Estadisticas</a>
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
