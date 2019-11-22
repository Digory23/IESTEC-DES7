<?php
require '../fpdf/fpdf.php';
require '../inserts/conexion.php';


$pdf= new FPDF();
$pdf->Addpage();

$pdf->SetFont('Arial','B','20');
$pdf->Image('../img/certificado.png',20,20,-300);

$pdf->SetXY(55,60);
$pdf->Cell(100, 20, 'Nombre',20,20,'C');

$pdf->output();


?>