<?php
require_once("../conexion/php_conexion.php");
$gradoEstadistico=$_GET['ir'];
$sacare=  mysqli_query($conexion,"SELECT*FROM grado WHERE id_grado='$gradoEstadistico'");
while ($row=  mysqli_fetch_array($sacare)){
    $grado=$row['nom_grado'];
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Estadisticas</title>

                <script type="text/javascript" src="../Highcharts-4.1.5/js/jquery.min.js"></script>
		<style type="text/css">
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Estadistica de genero de <?php echo $grado;?>'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Genero',
            data: [
			
			<?php
			$sql=mysqli_query($conexion,"SELECT COUNT(gen_alumno) as Femenino FROM alumno INNER JOIN inscripcion ON alumno.id_alumno=inscripcion.id_alumno "
                                . "WHERE gen_alumno='F' AND id_grado='$gradoEstadistico'");
			while($res=mysqli_fetch_array($sql)){
			?>
			
                ['<?php echo 'Femenino: '.$res['Femenino']; ?>', <?php echo $res['Femenino'] ?>],
			
			<?php
			}
			?>	
              <?php
			$sql=mysqli_query($conexion,"SELECT COUNT(gen_alumno) as Masculino FROM alumno INNER JOIN inscripcion ON alumno.id_alumno=inscripcion.id_alumno "
                                . "WHERE gen_alumno='M' AND id_grado='$gradoEstadistico'");
			while($res=mysqli_fetch_array($sql)){
			?>
			
                ['<?php echo 'Masculino: '.$res['Masculino']; ?>', <?php echo $res['Masculino'] ?>],
			
			<?php
			}
			?>	
            ],
        }]
    });
});


		</script>
	</head>
	<body>
            <script src="../Highcharts-4.1.5/js/highcharts.js"></script>
            <script src="../Highcharts-4.1.5/js/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<br><br>
        <center><a href="../reportes/estadisticas_principal.php">Volver</a></center>

	</body>
</html>
