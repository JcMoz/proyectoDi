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
        $this->Cell(104, 6, 'LISTADO DE ALUMNOS', 1, 0, 'C');
 
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
$reporte_grado = mysqli_query($conexion, " SELECT  @rownum:=@rownum+1 AS rownum,alumno.*, nom_alumno,ape_alumno,nie FROM (SELECT @rownum:=0) r, alumno INNER JOIN inscripcion ON alumno.id_alumno=inscripcion.id_inscripcion WHERE id_grado='$gradoRe' ORDER BY ape_alumno ASC");

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

$pdf->Cell(10, 6, 'N', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'NIE', 1, 0, 'C', 1);
$pdf->Cell(70, 6, 'APELLIDO', 1, 0, 'C', 1);
$pdf->Cell(70, 6, 'NOMBRE', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);


while ($row = $reporte_grado->fetch_assoc()) {
    $pdf->Cell(10, 6,utf8_decode($row['rownum']), 1, 0, 'C');
    $pdf->Cell(20, 6, utf8_decode($row['nie']), 1, 0, 'C');
    $pdf->Cell(70, 6, $row['ape_alumno'], 1, 0, 'C');
    $pdf->Cell(70, 6, utf8_decode($row['nom_alumno']), 1, 1, 'C');
    ;
}

$pdf->Output();
?>
