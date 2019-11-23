<?php
require '../fpdf/fpdf.php';
require '../inserts/conexion.php';
//$cedula= $_GET['ID'];

  $stmt2 = $dbh->prepare("SELECT Nombre, Apellido FROM usuario WHERE ID_Usuario = 7");
  $stmt2->bindParam(':user', $username);
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


$pdf->output();

?>