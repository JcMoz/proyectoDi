<?php

require '../conexion/php_conexion.php';



///********************plantilla encabezado******************
require '../fpdf/fpdf.php';

class PDF extends FPDF {

    function Header() {
        $this->Ln(10);
        $this->Image('../imagenes/sicno.png', 150, 10, 30);
        $this->Image('../imagenes/cc.jpg', 20, 10, 30);
        //$this->Image('images/ayuda.PNG', 0,0,600,600);

        $this->SetFont('Arial', 'B', 15);
        $this->Cell(40, 6, '', 0, 0, 'C');
        $this->SetTextColor(0);
        $this->SetDrawColor(231, 169, 249);
        $this->SetLineWidth(1.5);
        $this->Cell(104, 6, 'MI HORARIO', 0, 0, 'C');
 
        $this->SetDrawColor(0, 80, 180);
        $this->SetFillColor(230, 230, 0);
        $this->SetTextColor(220, 50, 50);
        // Ancho del borde (1 mm)
        $this->SetLineWidth(1);
        #Establecemos los márgenes izquierda, arriba y derecha: 
        $this->SetMargins(20, 25, 30);

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
$reporte_horario = mysqli_query($conexion, "SELECT*FROM horarios WHERE id_grado='$gradoRe'");

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//Para los grados
        $pdf->Cell(30);
       $gradosRe=  mysqli_query($conexion,"SELECT* FROM grado WHERE id_grado='$gradoRe'");
       while ($reGra= $gradosRe->fetch_assoc()){
        $pdf->Cell(90, 10, 'GRADO:'.$reGra['nom_grado'], 0, 0, 'C');
         }
        $pdf->Ln(10);
        $pdf->Cell(30);
        $pdf->Cell(90, 10, 'SECCION: A', 0, 0, 'C');
        $pdf->Ln(20);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(30, 6, 'HORA', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'LUNES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MARTES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MIERCOLES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'JUEVES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'VIERNES', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);


while ($row = $reporte_horario->fetch_assoc()) {
    $pdf->Cell(30, 6,utf8_decode($row['hora']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['lunes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['martes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['miercoles']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['jueves']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['viernes']), 1, 1, 'C');
}


$pdf->Output();
?>


