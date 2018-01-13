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
        $this->Cell(104, 6, 'HORARIOS QUINTO-NOVENO', 0, 0, 'C');

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
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//Para QUINTO GRADO
$pdf->Cell(30);

$p_quinto = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=5");
while ($row1 = mysqli_fetch_array($p_quinto)) {
    $gradoQuin = $row1['nom_grado'];
    $nomQuin = $row1['nom_doc'];
    $apeQuin = $row1['ape_doc'];
}
$pdf->Ln(20);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'DOCENTE: ' . $nomQuin . ' ' . $apeQuin, 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(70, 10, 'GRADO :' . $gradoQuin, 0, 0, 'C');

$pdf->Cell(60, 10, 'SECCION: A', 0, 0, 'C');
$pdf->Ln(10);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(30, 6, 'HORA', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'LUNES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MARTES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MIERCOLES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'JUEVES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'VIERNES', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);

$h_quinto = mysqli_query($conexion, "SELECT*FROM horario WHERE identificador=5");

while ($row = $h_quinto->fetch_assoc()) {
    $pdf->Cell(30, 6, utf8_decode($row['hora']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['Lunes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['martes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['miercoles']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['jueves']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['viernes']), 1, 1, 'C');
}
//********************fin de quinto
//Para SEXTO GRADO
//**********sexto
$p_sex = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=6");
while ($row1 = mysqli_fetch_array($p_sex)) {
    $gradoSex = $row1['nom_grado'];
    $nomSex = $row1['nom_doc'];
    $apeSex = $row1['ape_doc'];
}
//*****************
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'DOCENTE: ' . $nomSex . ' ' . $apeSex, 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(70, 10, 'GRADO :' . $gradoSex, 0, 0, 'C');

$pdf->Cell(60, 10, 'SECCION: A', 0, 0, 'C');
$pdf->Ln(10);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(30, 6, 'HORA', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'LUNES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MARTES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MIERCOLES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'JUEVES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'VIERNES', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);

$h_sex = mysqli_query($conexion, "SELECT*FROM horario WHERE identificador=6");

while ($row = $h_sex->fetch_assoc()) {
    $pdf->Cell(30, 6, utf8_decode($row['hora']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['Lunes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['martes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['miercoles']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['jueves']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['viernes']), 1, 1, 'C');
}
//********************fin de SEXTO
//Para SEPTIMO GRADO
//*********septimo
$p_sep = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=7");
while ($row1 = mysqli_fetch_array($p_sep)) {
    $gradoSep = $row1['nom_grado'];
    $nomSep = $row1['nom_doc'];
    $apeSep = $row1['ape_doc'];
}
//***********
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'DOCENTE: ' . $nomSep . ' ' . $apeSep, 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(70, 10, 'GRADO :' . $gradoSep, 0, 0, 'C');

$pdf->Cell(60, 10, 'SECCION: A', 0, 0, 'C');
$pdf->Ln(10);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(30, 6, 'HORA', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'LUNES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MARTES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MIERCOLES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'JUEVES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'VIERNES', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);

$h_sep = mysqli_query($conexion, "SELECT*FROM horario WHERE identificador=7");

while ($row = $h_sep->fetch_assoc()) {
    $pdf->Cell(30, 6, utf8_decode($row['hora']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['Lunes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['martes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['miercoles']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['jueves']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['viernes']), 1, 1, 'C');
}
//********************fin de SEPTIMO
$pdf->Ln(20);
//Para OCTAVO GRADO
//**********octavo
$p_oc = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=8");
while ($row1 = mysqli_fetch_array($p_oc)) {
    $gradoOc = $row1['nom_grado'];
    $nomOc = $row1['nom_doc'];
    $apeOc = $row1['ape_doc'];
}
//***********************
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'DOCENTE: ' . $nomOc . ' ' . $apeOc, 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(70, 10, 'GRADO :' . $gradoOc, 0, 0, 'C');

$pdf->Cell(60, 10, 'SECCION: A', 0, 0, 'C');
$pdf->Ln(10);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(30, 6, 'HORA', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'LUNES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MARTES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MIERCOLES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'JUEVES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'VIERNES', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);

$h_oc = mysqli_query($conexion, "SELECT*FROM horario WHERE identificador=8");

while ($row = $h_oc->fetch_assoc()) {
    $pdf->Cell(30, 6, utf8_decode($row['hora']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['Lunes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['martes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['miercoles']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['jueves']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['viernes']), 1, 1, 'C');
}
//********************fin de OCTAVO
//Para NOVENO GRADO
//**********Noveno
$p_No = mysqli_query($conexion, "SELECT*FROM asignacion_a_g INNER JOIN docente ON asignacion_a_g.id_docentes=docente.id_doc "
        . "INNER JOIN grado ON asignacion_a_g.id_gra=grado.id_grado WHERE id_gra!=1 AND id_gra!=2 AND id_gra!=3 AND id_gra!=4 AND id_gra=9");
while ($row1 = mysqli_fetch_array($p_No)) {
    $gradoNo = $row1['nom_grado'];
    $nomNo = $row1['nom_doc'];
    $apeNo = $row1['ape_doc'];
}
//***********************

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'DOCENTE: ' . $nomNo . ' ' . $apeNo, 0, 0, 'C');
$pdf->Ln(10);
$pdf->Cell(70, 10, 'GRADO :' . $gradoNo, 0, 0, 'C');

$pdf->Cell(60, 10, 'SECCION: A', 0, 0, 'C');
$pdf->Ln(10);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(30, 6, 'HORA', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'LUNES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MARTES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'MIERCOLES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'JUEVES', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'VIERNES', 1, 1, 'C', 1);

$pdf->SetFont('Arial', '', 10);

$h_no = mysqli_query($conexion, "SELECT*FROM horario WHERE identificador=9");

while ($row = $h_no->fetch_assoc()) {
    $pdf->Cell(30, 6, utf8_decode($row['hora']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['Lunes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['martes']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['miercoles']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['jueves']), 1, 0, 'C');
    $pdf->Cell(30, 6, utf8_decode($row['viernes']), 1, 1, 'C');
}
//********************fin de SEPTIMO

$pdf->Output();
?>



