<?php
require '../fpdf/fpdf.php';
require '../conexion/conexion.php';
//require_once ('../class.phpmailer.php');

$cedula= $_GET['cedula'];
//$para = $_GET['email'];
//$para = 'user1@iestec.local';

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

//header('Location: RegistroExitoso.php');
$pdf->output("F","../certificados/$cedula.pdf");
header('Location: ../php/RegistroExitoso.php');

/*correo 
$filename = "$cedula.pdf";
$ruta = "../certificados";
$mail = new PHPMailer();

$mail->From = "congreso@iestec.local";
$mail->FromName = "Congreso IESTEC 2020";
$mail->Subject = "Certificado de Participacion";
$mail->Body = "Gracias por haber participado";
$mail->AddAddress($para,"Usuario");
$mail->AddAttachment("$ruta/$filename");
$mail->Send();*/


//enviando correo con la función Mail
/*
$titulo    = 'CERTIFICADO DE PARTICIPACION';
$mensaje   = 'GRACIAS POR PARTICIPAR';
$filename = "$cedula.pdf";
$ruta = "../certificados/";

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
        <td><h3 align="center"><embed src="../certificados/'.$filename.'" type="application/pdf" width="100%" height="600px" /><br>
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
*/
?>
