<?php
session_start();
include '../conexion/php_conexion.php';
include_once '../mensajes.php';
?>
<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="">
        <meta name="author" content="">
        <title>Entrada</title>
        <!-- Bootstrap core CSS -->
        <!--<link href="../css/bootstrap.min.css" rel="stylesheet">-->

        <!-- Custom fonts for this template -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="../css/dataTables.bootstrap4.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/sb-admin.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <!--<script src="../js/jquery.js"></script> -->

        <script src="../js/funciones.js"></script>
        <!--<script src="../js/reglas_validacion.js"></script>-->

        <link href="../css/sweetalert.css" rel="stylesheet">
        <script src="../js/sweetalert.min.js"></script>
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
    </head>

    <body class="bg-secondary">
        <div class="container">
           
            <form name="form1" method="post" action="" class="form-signin">

                <center><img src="../imagenes/cc.jpg" width="200" height="200"></center><br>
                <?php
                if (!empty($_POST['usu']) and ! empty($_POST['con'])) {
                    $usu = $_POST['usu'];
                    $con = $_POST['con'];
                    $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE user='$usu' AND con='$con'");
                    if ($row = mysqli_fetch_array($consulta)) {
                        if ($row['estado'] == 'a') {
                            $nombre = $row['user'];
                            $nombre = explode(" ", $nombre);
                            $nombre = $nombre[0];
                            $_SESSION['user_name'] = $nombre;
                            $_SESSION['tipo_user'] = $row['tipo'];
                            $_SESSION['id_profesor'] = $row['id_doc'];
                          
                            echo mensajes('Bienvenido<br>' . $row['user'] . '', 'verde') . '<br>';
                            echo '<center><img src="../imagenes/cargando2.gif" width="90" height="90"></center><br>';
                            echo '<meta http-equiv="refresh" content="2;url=principal.php">';
                        }
                    }
                } else {
                    echo '	<input type="text" name="usu" class="form-control" placeholder="Documento" autocomplete="off" required>
			        <input type="password" name="con" class="form-control" placeholder="Password" autocomplete="off" required>
			        <div align="right"><button class="btn btn-large btn-primary" type="submit"><strong>Entrar</strong></button></div>';
                }
                ?>

            </form>
            
        </div>

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