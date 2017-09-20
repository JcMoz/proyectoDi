<?php 
  session_start();
  include_once "php_conexion.php";
    error_reporting(0);
?>
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

  </head>

  <body class="fixed-nav sticky-footer  bg-info" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">SICNO</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav bg-secondary " id="exampleAccordion">

<!--Modulo de inscripcion-->
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-circle" style="color: white"></i>
              <span class="nav-link-text" style="color: white">
                Inscripción</span>
            </a>
            <ul class="sidenav-second-level collapse bg-secondary " id="collapseComponents">
              <li>
                <a href="inscripcionNuevo.html" style="color: white">Nuevo</a>
              </li>
              <li>
                <a href="#" style="color: white">Antiguo</a>
              </li>
            </ul> 
          </li>
<!--Termina Modulo de inscripcion-->
<!--Modulo de Creacion de Horarios-->
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Creacion de horarios">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCreacion" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-circle" style="color: white"></i>
              <span class="nav-link-text" style="color: white">
                Creacion de Horarios</span>
            </a>
            <ul class="sidenav-second-level collapse bg-secondary " id="collapseCreacion">
              <li>
                <a href="login.html" style="color: white">Login Page</a>
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
              </li>s
              <li>
                <a href="buscarDocente.php"  style="color: white">Modificar Docente</a>
              </li>
            </ul>
          </li>
<!--Termina Modulo de Expediente docente-->

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
    </nav>

   
    <!-- /.content-wrapper -->
     <div class="content-wrapper">
     <div class="container-fluid">     
       <div class="row">
         <div class="col-md-12">
         <!--Aqui-->
          <div align="center">
      <table width="90%">
          <tr>
            <td>
              <table class="table table-bordered">
                  <tr class="info">
                    <td>
                      <div class="row-fluid">
                            <div class="span6">
                              <h2 class="text-info">
                                    <img src="img/profesor.png" width="80" height="80">
                                    Expediente Docente
                                </h2>
                            </div>
                            <div class="span6">
                              <form name="form1" method="post" action="">
                                  <div class="input-append">
                                  <input type="text" name="buscar" class="input-xlarge" autocomplete="off" autofocus placeholder="Buscar Profesores">
                                    <button type="submit" class="btn-secondary">
                                    <strong>
                                    <i class="icon-search"></i> Buscar
                                    </strong>
                                    </button>
                                     
                                    </div>

                                </form>
                                 <input type="submit" value="Ingresar nuevo docente" name="Guardar" class="btn btn-info" onclick="location='/proyectoDi/ingresarDocente.php'" > 

                            </div>
                        </div>
                    </td>
                  </tr>
                </table>
            </td>
          </tr>
        </table>
        
        <table width="90%">
          <tr>
            <td>
                 <!--Esta es la tabla de los maestros-->
              <table class="table table-bordered table table-hover">
                  <tr class="info">
                    
                    <td><strong class="text-info">Nombre y Apellido</strong></td>
                    <td><strong class="text-info">DUI</strong></td>
                    <td><strong class="text-info">NIP</strong></td>
                    <td><strong class="text-info">NIT</strong></td>
                    <td><strong class="text-info">Especialidad</strong></td>
                    <td><strong class="text-info">Celulares</strong></td>
                    <td><center><strong class="text-info">Estado</strong></center></td>
                    <td> </td>
                  </tr>
                  <?php
            if(!empty($_POST['buscar'])){
              $buscar=limpiar($_POST['buscar']);
              $pa=mysql_query("SELECT * FROM docente WHERE nom_doc LIKE '%$buscar%' or ape_doc LIKE '%$buscar%'");          
            }else{
              $pa=mysql_query("SELECT * FROM docente");        
            }
            while($row=mysql_fetch_array($pa)){
              if($row['tipo']=='a'){
                $tipo='Administrador';
              }else{
                $tipo='Profesor';
              }
          ?>
                  <tr>
                    <td><?php echo $row['nom_doc'].' '.$row['ape_doc']; ?></td>
                    <td><?php echo $row['dui_doc']; ?></td>
                    <td><?php echo $row['nip_doc']; ?></td>
                    <td><?php echo $row['nit']; ?></td>
                    <td><?php echo $row['esp_doc']; ?></td>
                    <td><?php echo $row['cel']; ?></td>
                    <td><center><?php echo estado($row['estado']); ?></center></td>
                    <td><a href="" class="btn btn-secondary" >editar</a></td>
                    <td>
                      <center>
                          <a href="#a<?php echo $row['id']; ?>" title="Editar Profesor" role="button" class="btn mine" data-toggle="modal">
                              <i class="icon-edit"></i>
                            </a>
                        </center>
                        
                        <div id="a<?php echo $row['id_doc']; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <form name="form2" method="post" action="">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Actualizar Profesor</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <strong>DUI</strong><br>
                                        <input type="text" name="doc" autocomplete="off" readonly value="<?php echo $row['doc']; ?>"><br>
                                        <strong>NIT</strong><br>
                                        <input type="text" name="nit" autocomplete="off" readonly value="<?php echo $row['nit']; ?>"><br>
                                        <strong>Nombre del Profesor</strong><br>
                                        <input type="text" name="nom" autocomplete="off" required value="<?php echo $row['nom']; ?>"><br>
                                        <strong>Apellidos del Profesor</strong><br>
                                        <input type="text" name="ape" autocomplete="off" required value="<?php echo $row['ape']; ?>"><br>
                                        <strong>Especialidades</strong><br>
                                        <input type="text" name="especialidad" autocomplete="off" required value="<?php echo $row['especialidad'];?>"><br>
                                        <strong>Correo</strong><br>
                                        <input type="email" name="correo" autocomplete="off" required value="<?php echo $row['correo']; ?>"><br>
                                        <strong>Tipo de Usuario</strong><br>
                                        <select name="tipo">
                                          <option value="p" <?php if($row['tipo']=='p'){ echo 'selected'; } ?>>Profesor</option>
                                            <option value="a" <?php if($row['tipo']=='a'){ echo 'selected'; } ?>>Administrador</option>
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <strong>NIP</strong><br>
                                        <input type="text" name="nip" autocomplete="off" readonly value="<?php echo $row['nip']; ?>"><br>
                                        <strong>Nivel</strong><br>
                                        <input type="text" name="nivel" autocomplete="off" required value="<?php echo $row['nivel']; ?>"><br>
                                        <strong>Dirección</strong><br>
                                        <input type="text" name="dir" autocomplete="off" required value="<?php echo $row['dir']; ?>"><br>
                                        <strong>Teléfonos</strong><br>
                                        <input type="text" name="tel" autocomplete="off" value="<?php echo $row['tel']; ?>"><br>
                                        <strong>Celulares</strong><br>
                                        <input type="text" name="cel" autocomplete="off" required value="<?php echo $row['cel']; ?>"><br>
                                        <strong>Fecha de Nacimiento</strong><br>
                                        <input type="date" name="fecha" autocomplete="off" required value="<?php echo $row['fecha']; ?>"><br>
                                        <strong>Estado</strong><br>
                                        <select name="estado">
                                            <option value="s" <?php if($row['estado']=='s'){ echo 'selected'; } ?>>Activo</option>
                                            <option value="n" <?php if($row['estado']=='n'){ echo 'selected'; } ?>>No Activo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
                                <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> <strong>Actualizar Registro</strong></button>
                            </div>
                            </form>
                       </div>
                        
                    </td>
                  </tr>
                  <?php } ?>
                </table>
                <!--Fin tabla maestro-->
            </td>
          </tr>
        </table>
    
    </div>

     </div>
     </div>
     </div>
     </div>
    
        <!--ojo -->

    <footer class="sticky-footer" >
      <div class="container">
        <div class="text-center">
          <img src="imagenes/mine.png" width="50" height="50">
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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>

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

  </body>

</html>