<?php

require '../conexion/php_conexion.php';



///********************plantilla encabezado******************
require '../fpdf/fpdf.php';

class PDF extends FPDF {

    function Header() {
        $this->Ln(10);
        $this->Image('../imagenes/sicno.png', 170, 10, 30);
        $this->Image('../imagenes/cc.jpg', 10, 10, 30);
        //$this->Image('images/ayuda.PNG', 0,0,600,600);

        $this->SetFont('Arial', 'B', 15);
        $this->Cell(30);
        $this->Cell(120, 10, 'CODIGO:', 0, 0, 'C');
        $this->Ln(15);
        $this->Cell(30);
        $this->Cell(135, 10, 'CENTRO ESCOLAR CANTON CERRO COLORADO.', 0, 0, 'C');
        //$this->Ln(10);

        $this->SetDrawColor(0, 80, 180);
        $this->SetFillColor(230, 230, 0);
        $this->SetTextColor(220, 50, 50);
        // Ancho del borde (1 mm)
        $this->SetLineWidth(1);
        #Establecemos los márgenes izquierda, arriba y derecha: 
        $this->SetMargins(30, 25, 30);

#Establecemos el margen inferior: 
        $this->SetAutoPageBreak(true, 25);
        // Título
        // Salto de línea
        $this->Ln(10);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

//****************************fin de la plantilla encabezado.******************
$gradoRe = $_GET['ir'];
$nino=$_GET['id'];
//***************verificacion a insertar en la tabla boleta 1-6
if ($gradoRe==1 || $gradoRe==2 || $gradoRe==3 || $gradoRe==4 || $gradoRe==5 || $gradoRe==6){
    //****para matematica
    $ver_mat=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Matematica' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_mat) > 0) {    
     } else {
         $mate="Matematica";
         mysqli_query($conexion, "INSERT INTO boleta1_6(asignaturas,id_inscripcion)VALUES('$mate','$nino')");
     }
     //***
       //****para Ciencia
    $ver_ciencia=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Ciencia' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_ciencia) > 0) {    
     } else {
         $cien="Ciencia";
         mysqli_query($conexion, "INSERT INTO boleta1_6(asignaturas,id_inscripcion)VALUES('$cien','$nino')");
     }
     //***
       //****para Lenguaje
    $ver_lengua=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Lenguaje' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_lengua) > 0) {    
     } else {
         $len="Lenguaje";
         mysqli_query($conexion, "INSERT INTO boleta1_6(asignaturas,id_inscripcion)VALUES('$len','$nino')");
     }
     //***
       //****para Sociales
    $ver_socio=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Sociales' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_socio) > 0) {    
     } else {
         $socio="Sociales";
         mysqli_query($conexion, "INSERT INTO boleta1_6(asignaturas,id_inscripcion)VALUES('$socio','$nino')");
     }
     //***
       //****para Fisica
    $ver_fis=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Fisica' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_fis) > 0) {    
     } else {
         $fisico="Fisica";
         mysqli_query($conexion, "INSERT INTO boleta1_6(asignaturas,id_inscripcion)VALUES('$fisico','$nino')");
     }
     //***
       //****para artistica
    $ver_arte=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Artistica' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_arte) > 0) {    
     } else {
         $artistico="Artistica";
         mysqli_query($conexion, "INSERT INTO boleta1_6(asignaturas,id_inscripcion)VALUES('$artistico','$nino')");
     }
     //*******************
    //PARA ALMACENAR LAS NOTAS POR PERIODO
    //
    ///***** para almacenar notas del primer periodo de matematica
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarMa1=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=1 AND estado_n='procesado' AND nombre='Matematica'");
    if (mysqli_num_rows($validarMa1) > 0) { 
    /// fin validacion
    $in_mate1=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Matematica' AND estado_n='procesado' AND periodo=1 AND id_inscripcion='$nino'");   
    while ($row_mat1=  mysqli_fetch_array($in_mate1)){
      $ma1=$row_mat1['nombre'];
      $noMa1=$row_mat1['notaF'];
    }
    //****para matematica
    $ver_mat1=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Matematica' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_mat1) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe1='$noMa1' WHERE asignaturas='Matematica'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del primer periodo de matematica
     
     ///***** para almacenar notas del segundo periodo de matematica
    //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarMa2=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=2 AND estado_n='procesado' AND nombre='Matematica'");
    if (mysqli_num_rows($validarMa2) > 0) { 
    /// fin validacion
    $in_mate2=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Matematica' AND estado_n='procesado' AND periodo=2 AND id_inscripcion='$nino'");   
    while ($row_mat2=  mysqli_fetch_array($in_mate2)){
      $ma2=$row_mat2['nombre'];
      $noMa2=$row_mat2['notaF'];
    }
    //****para matematica
    $ver_mat2=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Matematica' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_mat2) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe2='$noMa2' WHERE asignaturas='Matematica'");
     } 
    }//fin if de validacion
     //*** fin de almacenar notas del segundo periodo de matematica
    
     
     ///***** para almacenar notas del tercer periodo de matematica
    //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarMa3=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=3 AND estado_n='procesado' AND nombre='Matematica'");
    if (mysqli_num_rows($validarMa3) > 0) { 
    /// fin validacion
    $in_mate3=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Matematica' AND estado_n='procesado' AND periodo=3 AND id_inscripcion='$nino'");   
    while ($row_mat3=  mysqli_fetch_array($in_mate3)){
      $ma3=$row_mat3['nombre'];
      $noMa3=$row_mat3['notaF'];
    }
    //****para matematica
    $ver_mat3=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Matematica' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_mat3) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe3='$noMa3' WHERE asignaturas='Matematica'");
     } 
    }//fin Validar
     //*** fin de almacenar notas del tercer periodo de matematica
    
    ///***** para almacenar notas del primer periodo de CIENCIA
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarCi1=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=1 AND estado_n='procesado' AND nombre='Ciencia'");
    if (mysqli_num_rows($validarCi1) > 0) { 
    /// fin validacion
    $in_Ci1=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Ciencia' AND estado_n='procesado' AND periodo=1 AND id_inscripcion='$nino'");   
    while ($row_Ci1=  mysqli_fetch_array($in_Ci1)){
      $ci1=$row_Ci1['nombre'];
      $no_Ci1=$row_Ci1['notaF'];
    }
    //****para CIENCIA.
    $ver_Ci1=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Ciencia' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_Ci1) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe1='$no_Ci1' WHERE asignaturas='Ciencia'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del primer periodo de CIENCIA
    
    ///***** para almacenar notas del segundo periodo de CIENCIA
    //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarCi2=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=2 AND estado_n='procesado' AND nombre='Ciencia'");
    if (mysqli_num_rows($validarCi2) > 0) { 
    /// fin validacion
    $in_Ci2=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Ciencia' AND estado_n='procesado' AND periodo=2 AND id_inscripcion='$nino'");   
    while ($row_Ci2=  mysqli_fetch_array($in_Ci2)){
      $Ci2=$row_Ci2['nombre'];
      $no_Ci2=$row_Ci2['notaF'];
    }
    //****para CIENCIA
    $ver_Ci2=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Ciencia' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_Ci2) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe2='$no_Ci2' WHERE asignaturas='Ciencia'");
     } 
    }//fin if de validacion
     //*** fin de almacenar notas del segundo periodo de CIENCIA
    
     
     ///***** para almacenar notas del tercer periodo de CIENCIA
    //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarCi3=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=3 AND estado_n='procesado' AND nombre='Ciencia'");
    if (mysqli_num_rows($validarCi3) > 0) { 
    /// fin validacion
    $in_Ci3=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Ciencia' AND estado_n='procesado' AND periodo=3 AND id_inscripcion='$nino'");   
    while ($row_Ci3=  mysqli_fetch_array($in_Ci3)){
      $Ci3=$row_Ci3['nombre'];
      $no_Ci3=$row_Ci3['notaF'];
    }
    //****para matematica
    $ver_Ci3=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Ciencia' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_Ci3) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe3='$no_Ci3' WHERE asignaturas='Ciencia'");
     } 
    }//fin Validar
     //*** fin de almacenar notas del tercer periodo de Ciencia
   
    ///*****************************************************************************
    
    
    ///***** para almacenar notas del primer periodo de LENGUAJE
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarLen1=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=1 AND estado_n='procesado' AND nombre='Lenguaje'");
    if (mysqli_num_rows($validarLen1) > 0) { 
    /// fin validacion
    $in_Len1=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Lenguaje' AND estado_n='procesado' AND periodo=1 AND id_inscripcion='$nino'");   
    while ($row_Len1=  mysqli_fetch_array($in_Len1)){
      $Len1=$row_Len1['nombre'];
      $no_Len1=$row_Len1['notaF'];
    }
    //****para LENGUAJE
    $ver_Len1=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Lenguaje' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_Len1) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe1='$no_Len1' WHERE asignaturas='Lenguaje'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del primer periodo de LENGUAJE
    
     ///***** para almacenar notas del segundo periodo de LENGUAJE
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarLen2=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=2 AND estado_n='procesado' AND nombre='Lenguaje'");
    if (mysqli_num_rows($validarLen2) > 0) { 
    /// fin validacion
    $in_Len2=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Lenguaje' AND estado_n='procesado' AND periodo=2 AND id_inscripcion='$nino'");   
    while ($row_Len2=  mysqli_fetch_array($in_Len2)){
      $Len2=$row_Len2['nombre'];
      $no_Len2=$row_Len2['notaF'];
    }
    //****para LENGUAJE
    $ver_Len2=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Lenguaje' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_Len2) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe2='$no_Len2' WHERE asignaturas='Lenguaje'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del segundo periodo de LENGAUJE
    
     ///***** para almacenar notas del tercer periodo de LENGUAJE
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarLen3=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=3 AND estado_n='procesado' AND nombre='Lenguaje'");
    if (mysqli_num_rows($validarLen3) > 0) { 
    /// fin validacion
    $in_Len3=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Lenguaje' AND estado_n='procesado' AND periodo=3 AND id_inscripcion='$nino'");   
    while ($row_Len3=  mysqli_fetch_array($in_Len3)){
      $Len3=$row_Len3['nombre'];
      $no_Len3=$row_Len3['notaF'];
    }
    //****para LENGUAJE
    $ver_Len3=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Lenguaje' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_Len3) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe3='$no_Len3' WHERE asignaturas='Lenguaje'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del tercer periodo de LENGUAJE.
    
    ///***** para almacenar notas del primer periodo de SOCIALES
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarSo1=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=1 AND estado_n='procesado' AND nombre='Sociales'");
    if (mysqli_num_rows($validarSo1) > 0) { 
    /// fin validacion
    $in_So1=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Sociales' AND estado_n='procesado' AND periodo=1 AND id_inscripcion='$nino'");   
    while ($row_So1=  mysqli_fetch_array($in_So1)){
      $So1=$row_So1['nombre'];
      $no_So1=$row_So1['notaF'];
    }
    //****para
    $ver_So1=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Sociales' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_So1) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe1='$no_So1' WHERE asignaturas='Sociales'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del primer periodo de SOCIALES
     //
    ///***** para almacenar notas del segundo periodo de SOCIALES
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarSo2=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=2 AND estado_n='procesado' AND nombre='Sociales'");
    if (mysqli_num_rows($validarSo2) > 0) { 
    /// fin validacion
    $in_So2=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Sociales' AND estado_n='procesado' AND periodo=2 AND id_inscripcion='$nino'");   
    while ($row_So2=  mysqli_fetch_array($in_So2)){
      $So2=$row_So2['nombre'];
      $no_So2=$row_So2['notaF'];
    }
    //****para
    $ver_So2=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Sociales' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_So2) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe2='$no_So2' WHERE asignaturas='Sociales'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del segundo periodo de SOCIALES
    
    ///***** para almacenar notas del tercero periodo de SOCIALES
     //validamos que las notas este procesadas para que el rows aye notas procesadas y las muestre
    $validarSo3=  mysqli_query($conexion,"SELECT * FROM notas_2 n, materias m WHERE n.id_materia=m.id_materia AND id_inscripcion='$nino' AND periodo=3 AND estado_n='procesado' AND nombre='Sociales'");
    if (mysqli_num_rows($validarSo3) > 0) { 
    /// fin validacion
    $in_So3=  mysqli_query($conexion,"SELECT*FROM notas_2 n,materias m WHERE n.id_materia=m.id_materia AND nombre='Sociales' AND estado_n='procesado' AND periodo=3 AND id_inscripcion='$nino'");   
    while ($row_So3=  mysqli_fetch_array($in_So3)){
      $So3=$row_So3['nombre'];
      $no_So3=$row_So3['notaF'];
    }
    //****para
    $ver_So3=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE asignaturas='Sociales' AND id_inscripcion='$nino'");
    if (mysqli_num_rows($ver_So3) > 0) { 
          mysqli_query($conexion, "UPDATE boleta1_6 SET pe3='$no_So3' WHERE asignaturas='Sociales'");
     } 
    }//fin cierre de if de validacion
     //*** fin de almacenar notas del tercero periodo de SOCIALES
   
   
    
     
     ////*******FIN DE ALMACENAR NOTAS POR PERIODO
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//Para los grados
$pdf->Cell(30);
$gradosRe = mysqli_query($conexion, "SELECT* FROM grado WHERE id_grado='$gradoRe'");
while ($reGra = $gradosRe->fetch_assoc()) {
    $pdf->Cell(10, 10, 'GRADO: ' . $reGra['nom_grado'], 0, 0, 'C');
}
//$pdf->Ln(10);
//$pdf->Cell(30);
$pdf->Cell(90, 10, 'SECCION: A', 0, 0, 'C');
$pdf->Ln(10);
$ver_nino=  mysqli_query($conexion,"SELECT nie, nom_alumno,ape_alumno FROM alumno INNER JOIN inscripcion ON alumno.id_alumno=inscripcion.id_inscripcion WHERE id_inscripcion='$nino'");
while ($reNino = $ver_nino->fetch_assoc()) {
$pdf->Cell(40, 10, 'NIE: '.$reNino['nie'], 0, 0, 'C');
$pdf->Cell(70, 10, 'ALUMNO/A: '.$reNino['ape_alumno'].' '.$reNino['nom_alumno'], 0, 0, 'C');
}
$pdf->Ln(20);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(60, 6, 'ASIGNATURAS', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'PERIODO I', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'PERIODO II', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'PERIODO III', 1, 1, 'C', 1);


$pdf->SetFont('Arial', '', 10);
//while ($row = $materiasB->fetch_assoc()) {
// 
//    $pdf->Cell(70, 6, utf8_decode($row['nombre']), 1, 0, 'C');
//    //$pdf->Ln(1);
//}
 $boleta=  mysqli_query($conexion,"SELECT * FROM boleta1_6 WHERE id_inscripcion='$nino'");
while ($row = $boleta->fetch_assoc()) {
    $pdf->Cell(60, 6, utf8_decode($row['asignaturas']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['pe1']), 1, 0, 'C');
    $pdf->Cell(30, 6, $row['pe2'], 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['pe3']), 1, 1, 'C');
}
mysqli_query($conexion,"DELETE FROM boleta1_6 ");
$pdf->Output();
?>
