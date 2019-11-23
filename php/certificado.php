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


$pdf->output("F","../certificados/$cedula.pdf");
header('Location: RegistroExitoso.php');



//enviando correo con la función Mail

$para      = $_GET['email'];
$titulo    = 'CERTIFICADO DE PARTICIPACION';
$mensaje   = 'GRACIAS POR PARTICIPAR';

//configuracion de Header HTML
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: congreso@iestec.local';

//Mensaje en HTML
 $mensajeContenido='<html>
    <head>
    </head>
    <body>
    <table width="100%"  border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td><h3 align="center"><img src="http://www.utp.ac.pa/sites/default/files/tropical_utp_logo.jpg" width="125" height="125"><br>
          Congreso IESTEC<br>
        </h3>
        </td>
      </tr>
      <tr>
        <td>'.$mensaje.'</td>
      </tr>
      <tr>
        <td bgcolor="#660066">&nbsp;</td>
      </tr>
    </table>
    </body>
    </html>';

	//Función mail
	if (mail($para, $titulo, $mensajeContenido, $cabeceras))
	echo "El mensaje se ha enviado correctamente";

?>
