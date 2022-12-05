<?php
require('./FPDF/fpdf.php');
$nombre= $_POST['nombre'];

$apellidos =$_POST['apellidos'];

$calificacion = $_POST['calificacion'];

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10,"Nombre:"." ".$nombre." ".$apellidos,2,'C');
$pdf->Ln();
$pdf->Cell(40,10,"Sueldo:"." ".$calificacion,2,'C');
$pdf->Ln();
$pdf->Output();
?>
