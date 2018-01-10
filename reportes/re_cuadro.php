<?php

require '../conexion/php_conexion.php';



///********************plantilla encabezado******************
require '../fpdf/fpdf.php';

class PDF extends FPDF {

    function Header() {
        $this->Image('../imagenes/sicno.png', 300, 10, 30);
        $this->Image('../imagenes/cc.jpg', 20, 10, 30);
        //$this->Image('images/ayuda.PNG', 0,0,600,600);

        $this->SetFont('Arial', 'B', 15);
        $this->Cell(40, 6, '', 0, 0, 'C');
        $this->SetTextColor(0);
        $this->SetDrawColor(231, 169, 249);
        $this->SetLineWidth(1.5);
        $this->Cell(250, 10, 'CENTRO ESCOLAR CANTON CERRO COLORADO.', 0, 0, 'C');

        $this->SetDrawColor(0, 80, 180);
        $this->SetFillColor(230, 230, 0);
        $this->SetTextColor(220, 50, 50);
        // Ancho del borde (1 mm)
        $this->SetLineWidth(1);
        #Establecemos los márgenes izquierda, arriba y derecha: 
        $this->SetMargins(5,5,5);

#Establecemos el margen inferior: 
        $this->SetAutoPageBreak(true, 20);
        // Título
        // Salto de línea
        $this->Ln(10);
    }

    function myCell($w, $h, $x, $t) {
        $heigh = $h / 3;
        $first = $heigh + 2;
        $second = $heigh + $heigh + $heigh + 3;
        $len = strlen($t);
        if ($len > 15) {
            $txt = str_split($t, 15);
            $this->SetX($x);
            $this->Cell($w, $first, $txt[0], '', '', '');
            $this->SetX($x);
            $this->Cell($w, $second, $txt[1], '', '', '');
            $this->SetX($x);
            $this->Cell($w, $h, '', 'LTRB', 0, 'L', 0);
        } else {
            $this->SetX($x);
            $this->Cell($w, $h, $t, 'LTRB', 0, 'L', 0);
        }
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

//****************************fin de la plantilla encabezado.******************
$gradoRe = $_GET['ir'];
$materiaRe = $_GET['llego'];
$peRe = $_GET['pe'];
$reporte_grado = mysqli_query($conexion, " SELECT  @rownum:=@rownum+1 AS rownum,alumno.*, nom_alumno,ape_alumno,nie FROM (SELECT @rownum:=0) r, alumno INNER JOIN inscripcion ON alumno.id_alumno=inscripcion.id_inscripcion WHERE id_grado='$gradoRe' ORDER BY ape_alumno ASC");

$pdf = new PDF('L', 'mm', 'Legal');
$pdf->AliasNbPages();
$pdf->AddPage();
$w = 45;
$h = 16;
$x = $pdf->GetY();
//Para los grados


$pdf->Cell(30);
$gradosRe = mysqli_query($conexion, "SELECT* FROM grado WHERE id_grado='$gradoRe'");
while ($reGra = $gradosRe->fetch_assoc()) {
    $pdf->Cell(140, 10, 'GRADO:' . $reGra['nom_grado'], 0, 0, 'C');
}
//$pdf->Cell(30);
$pdf->Cell(60, 10, 'SECCION: A', 0, 0, 'C');
$pdf->Cell(60, 10, 'Periodo: ' . $peRe, 0, 0, 'C');
$pdf->Ln(10);
//****************************validacion******************
if ($gradoRe == 1 || $gradoRe == 2 || $gradoRe == 3 || $gradoRe == 4) {
    //if para validar los nombres de los docentes con respecto alas asignaciones de grado
    // y asignaciones de materia
    $sacar_docente = mysqli_query($conexion, "SELECT * FROM actividades a, asignacion_a_g g, docente d WHERE a.id_asignacion_a_g=g.id_asignacion AND g.id_docentes=d.id_doc AND id_materia='$materiaRe' AND id_gra='$gradoRe' AND periodo='$peRe'");
    while ($ver_doc = $sacar_docente->fetch_assoc()) {
        $pdf->Cell(220, 10, 'Docente:' . $ver_doc['nom_doc'] . ' ' . $ver_doc['ape_doc'], 0, 0, 'C');
    }
} else { //else validacion
    $sacar_docente = mysqli_query($conexion, "SELECT *FROM actividades_materia a, asignacion_m m, docente d WHERE a.id_asignacion_m=m.id_asig_m AND m.id_docente=d.id_doc "
            . "AND a.id_materia='$materiaRe' AND a.id_grado='$gradoRe' AND a.periodo='$peRe'");
    while ($ver_doc = $sacar_docente->fetch_assoc()) {
        $pdf->Cell(220, 10, 'Docente:' . $ver_doc['nom_doc'] . ' ' . $ver_doc['ape_doc'], 0, 0, 'C');
    }
}
//*******************************************************************
$sacar_materia = mysqli_query($conexion, "SELECT*FROM materias WHERE id_materia='$materiaRe'");
while ($ver_materias = $sacar_materia->fetch_assoc()) {
    $pdf->Cell(50, 10, 'Asignatura: ' . $ver_materias['nombre'], 0, 0, 'C');
}
$pdf->Ln(20);

$pdf->SetFillColor(231, 169, 249);
$pdf->SetFont('Arial', 'B', 8);
if ($gradoRe == 1 || $gradoRe == 2 || $gradoRe == 3 || $gradoRe == 4) {
//este if es para mostrar todas las actividades de acuerdo con las actividades por grado 
// y por materia que son diferente se valida que grado llego si esta entre 1-4 entra a todas las actividades
//para todos los grados si no ya se sabe que es para el rango de 5-9 que son docentes diferentes por materia    
    $sacar_acti = mysqli_query($conexion, "SELECT * FROM actividades a, asignacion_a_g g, docente d WHERE a.id_asignacion_a_g=g.id_asignacion AND g.id_docentes=d.id_doc AND id_materia='$materiaRe' AND id_gra='$gradoRe' AND periodo='$peRe'");
    while ($ver_act = $sacar_acti->fetch_assoc()) {
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, utf8_decode('N°'));
        $x = $pdf->GetX();
        $pdf->myCell(59, $h, $x, 'NOMBRES');
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_1']);
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_2']);
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_3']);
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, '35%');
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_4']);
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_5']);
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_6']);
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, '35%');
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_7']);
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_8']);
        $x = $pdf->GetX();
        $pdf->myCell(27, $h, $x, $ver_act['act_9']);
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, '35%');
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, 'R');
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, 'PF');
        $pdf->Ln();
    }
} else { ///else para sacar las actividades por materias rango 5-9
    $sacar_acti = mysqli_query($conexion, "SELECT *FROM actividades_materia a, asignacion_m m, docente d WHERE a.id_asignacion_m=m.id_asig_m AND m.id_docente=d.id_doc "
            . "AND a.id_materia='$materiaRe' AND a.id_grado='$gradoRe' AND a.periodo='$peRe'");
    while ($ver_act = $sacar_acti->fetch_assoc()) {
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, utf8_decode('N°'));
        $x = $pdf->GetX();
        $pdf->myCell(59, $h, $x, 'NOMBRES');
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_1']);
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_2']);
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_3']);
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, '35%');
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_4']);
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_5']);
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_6']);
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, '35%');
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_7']);
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_8']);
        $x = $pdf->GetX();
        $pdf->myCell(26, $h, $x, $ver_act['act_9']);
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, '35%');
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, 'R');
        $x = $pdf->GetX();
        $pdf->myCell(8, $h, $x, 'PF');
        $pdf->Ln();
    }
}

    $pdf->SetFont('Arial', '', 10);
    $notas = mysqli_query($conexion, "SELECT @rownum:=@rownum+1 AS rownum, nom_alumno, ape_alumno,nota1,nota2,nota3,nota4,por35,notaF "
            . "FROM (SELECT @rownum:=0) r, notas_2 n,alumno a, inscripcion i WHERE n.id_inscripcion=i.id_inscripcion AND a.id_alumno=i.id_inscripcion AND n.id_grado='$gradoRe' AND n.periodo='$peRe' AND n.id_materia='$materiaRe'");
    while ($row_notas = $notas->fetch_assoc()) {
        $pdf->Cell(8, 6, utf8_decode($row_notas['rownum']), 1, 0, 'C');
        $pdf->Cell(59, 6, utf8_decode($row_notas['ape_alumno'] . ' ' . $row_notas['nom_alumno']), 1, 0, 'L');
        $pdf->Cell(27, 6, $row_notas['nota1'], 1, 0, 'C');
        $pdf->Cell(27, 6, $row_notas['nota2'], 1, 0, 'C');
        $pdf->Cell(27, 6, $row_notas['nota3'], 1, 0, 'C');
        $pdf->Cell(8, 6, $row_notas['por35'], 1, 0, 'C');
        $pdf->Cell(27, 6, $row_notas['nota4'], 1, 0, 'C');
        $pdf->Cell(27, 6, 0, 1, 0, 'C');
        $pdf->Cell(27, 6, 0, 1, 0, 'C');
        $pdf->Cell(8, 6, 0, 1, 0, 'C');
        $pdf->Cell(27, 6, 0, 1, 0, 'C');
        $pdf->Cell(27, 6, 0, 1, 0, 'C');
        $pdf->Cell(27, 6, 0, 1, 0, 'C');
        $pdf->Cell(8, 6, 0, 1, 0, 'C');
        $pdf->Cell(8, 6, 0, 1, 0, 'C');
        $pdf->Cell(8, 6, utf8_decode($row_notas['notaF']), 1, 1, 'C');
    }

    $pdf->Output();
?>
