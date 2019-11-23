<?php
require '../fpdf/fpdf.php';
require '../conexion/conexion.php';
$cedula= $_GET['cedula'];

  $stmt2 = $dbh->prepare("SELECT Nombre, Apellido FROM usuario WHERE Cedula=:cedu");
  $stmt2->bindParam(':cedu', $cedula);
      $stmt2->setFetchMode(PDO::FETCH_ASSOC);

  
      $stmt2->execute();
      $row = $stmt2->fetch();


$pdf= new FPDF('L','mm','A4');
$pdf->Addpage();
$pdf->SetFont('times','B','20');
$pdf->Image('../img/certificado.png',15,10,-190);

$pdf->SetXY(55,60);
$pdf->Cell(140, 60, $row['Nombre'],20,0,'C');
$pdf->Cell(-50, 60, $row['Apellido'],20,20,'C');

header('Location: RegistroExitoso.php');
$pdf->output();


?>