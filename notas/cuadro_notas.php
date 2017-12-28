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
        <!--<link href="../css/bootstrap.min.css" rel="stylesheet">-->

        <!-- Custom fonts for this template -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="../css/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/sb-admin.css" rel="stylesheet">
        <link href="../css/notas.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <!--<script src="../js/jquery.js"></script> -->

        <script src="../js/funciones.js"></script>
        <!--<script src="../js/reglas_validacion.js"></script>-->

        <link href="../css/sweetalert.css" rel="stylesheet">
        <script src="../js/sweetalert.min.js"></script>



    </head>

    <body bg-color="red">
        <?php
        session_start();
        include_once '../conexion/php_conexion.php';
        include_once '../plantilla/incio_plantilla.php';
        try {
            if ($_SESSION['tipo_user'] == 'ad' or $_SESSION['tipo_user'] == 'p') {
                $profesor = $_SESSION['id_profesor'];
                $sacar = mysqli_query($conexion, "SELECT*FROM docente WHERE id_doc='$profesor'");

                while ($row = mysqli_fetch_array($sacar)) {
                    $nombre = $row['nom_doc'];
                    $ape = $row['ape_doc'];
                }
            }
        } catch (Exception $exc) {
            echo '<script>swal("EROR", "Favor revisar los datos e intentar nuevamente", "error");</script>';
        }
        $grado = $_GET['ir'];
        $materia = $_GET['llego'];
        ?>
        <?php
        $cuadro_materia = mysqli_query($conexion, "SELECT*FROM materias WHERE id_materia='$materia'");
        while ($ver = mysqli_fetch_array($cuadro_materia)) {
            $nom_materia = $ver['nombre'];
        }
        $cuadro_grado = mysqli_query($conexion, "SELECT*FROM grado WHERE id_grado='$grado'");
        while ($row1 = mysqli_fetch_array($cuadro_grado)) {
            $nom_grado = $row1['nom_grado'];
        }
//********************Extraer las actividades de este docente
        $extraer_id = mysqli_query($conexion, "SELECT*FROM actividades LEFT JOIN asignacion_a_g ON actividades.id_asignacion_a_g=asignacion_a_g.id_asignacion WHERE id_docentes='$profesor' AND id_gra='$grado' AND id_materia='$materia' AND estado_a='enProceso'");
        while ($xyz = mysqli_fetch_array($extraer_id)) {
            $a_actividad = $xyz['id_asignacion'];
            $pe = $xyz['periodo'];
            $a1 = $xyz['act_1'];
            $a2 = $xyz['act_2'];
            $a3 = $xyz['act_3'];
            $a4 = $xyz['act_4'];
            $a5 = $xyz['act_5'];
            $a6 = $xyz['act_6'];
            $a7 = $xyz['act_7'];
            $a8 = $xyz['act_8'];
            $a9 = $xyz['act_9'];
        }
//*********************************************
        ?>
        <div class="container">
            <!--******************titulo-->
            <div class="text-center">
                <font face="Arial Narrow" size="5" color="#001f4d">Cuadro de notas</font>
                <img src="../imagenes/cuadro.png" width="65" height="65"><br/>
                <font face="Arial Narrow" size="4" color="#001f4d">Centro Escolar Cantón Cerro Colorado</font><br/>
                <font face="Arial Narrow" size="4" color="#001f4d">Docente: <?php echo $nombre; ?> <?php echo $ape; ?> &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbspGrado:<?php echo $nom_grado; ?>&nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp Sección:"A"</font>
                &nbsp &nbsp &nbsp <font face="Arial Narrow" size="4" color="#001f4d">Asignatura: <?php echo $nom_materia; ?>  &nbsp &nbsp Periodo: <?php echo $pe; ?> </font>

            </div>
            <br/> <br/>
            <!--****************** fin titulo-->
            <div class="panel-body">


                <table class="table table-striped table-bordered" cellspacing="0" width="100%" >
                    <thead class="">

                    <th style="font-size:11px" class="text-center">NIE</th>
                    <th style="font-size:11px" class="text-center" >Nombres</th>
                    <th style="font-size:11px" class="text-center"><?php echo $a1; ?></th>
                    <th style="font-size:11px" class="text-center"><?php echo $a2; ?></th>
                    <th style="font-size:11px" class="text-center"><?php echo $a3; ?></th>
                    <th style="font-size:10px" class="text-center">35%</th>
                    <th style="font-size:11px" class="text-center"><?php echo $a4; ?></th>
                    <th style="font-size:11px" class="text-center"><?php echo $a5; ?></th>
                    <th style="font-size:11px" class="text-center"><?php echo $a6; ?></th>
                    <th style="font-size:10px" class="text-center">35%</th>
                    <th style="font-size:11px" class="text-center"><?php echo $a7; ?></th>
                    <th style="font-size:11px" class="text-center"><?php echo $a8; ?></th>
                    <th style="font-size:11px" class="text-center"><?php echo $a9; ?></th>
                    <th style="font-size:10px" class="text-center">30%</th>
                    <th style="font-size:10px"class="text-center">R</th>
                    <th style="font-size:10px" class="text-center">PF</th>


                    </thead>

                    <tbody>
                        <?php
                        
                        $notas = mysqli_query($conexion, "SELECT*FROM inscripcion i, alumno a, notas_2 n WHERE i.id_alumno=a.id_alumno AND i.id_inscripcion=n.id_inscripcion AND n.id_grado='$grado' AND n.id_materia='$materia' AND n.estado_n='enProceso'");
                        while ($row = mysqli_fetch_array($notas)) {
                            $nombre = $row['nie'];
                            ?>

                                <tr>
                                    <td style="font-size:11px" class="text-center"><?php echo $row['nie']; ?></td>
                                    <td style="font-size:11px" class="text-center"><?php echo $row['nom_alumno']; ?> <?php echo $row['ape_alumno']; ?></td> 
                                    <td style="font-size:11px" class="text-center"><?php echo $row['nota1']; ?></td>
                                    <td style="font-size:11px" class="text-center"><?php echo $row['nota2']; ?></td>
                                    <td style="font-size:11px" class="text-center"><?php echo $row['nota3']; ?></td>
                                    <td style="font-size:10px" class="text-center"><?php echo $row['por35']; ?></td>
                                <td style="font-size:11px" class="text-center"><?php echo $row['nota4']; ?></td>   
                                <td style="font-size:11px" class="text-center"></td>
                                <td style="font-size:11px" class="text-center"></td>
                                <td style="font-size:10px" class="text-center"></td>
                                    <td style="font-size:11px" class="text-center"></td>
                                    <td style="font-size:11px" class="text-center"></td>
                                    <td style="font-size:11px" class="text-center"></td>
                                    <td style="font-size:10px" class="text-center"></td>
                                    <td style="font-size:10px" class="text-center"></td>
                                    <td style="font-size:10px" class="text-center"></td
                           </tr>
                        
                    <?php } ?>

                    </tbody>
                </table> <!--termina tabla-->
            

        </div><!--termina content-wrapper-->
        <div>
               <input type="button" value="Procesar" name="cancel" class=" btn btn-outline-primary"/>
        </div><!--div panel body-->
        </div><!--Container-->
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

