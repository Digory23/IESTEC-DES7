<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../correo/lib/PHPMailer-master/src/Exception.php';
require '../correo/lib/PHPMailer-master/src/PHPMailer.php';
require '../correo/lib/PHPMailer-master/src/SMTP.php';

  
    require '../conexion/conexion.php';
    require '../fpdf/fpdf.php';
    require '../conexion/conexion.php';


$consulta = $dbh->prepare("SELECT ID_Cedula FROM entrada  WHERE asistencia=:asi");
$asistencia= 'SI';
$consulta->bindParam(':asi', $asistencia);
  $consulta -> execute();
  $arrDatos=$consulta->fetchAll(PDO::FETCH_ASSOC);


      



  foreach ($arrDatos as $consulta) 
{
  $cedula= $consulta['ID_Cedula'];
  $stmt2 = $dbh->prepare("SELECT Nombre, Apellido, Email FROM usuario WHERE Cedula=:cedu");
  $stmt2->bindParam(':cedu', $cedula);
      $stmt2->setFetchMode(PDO::FETCH_ASSOC);
      $stmt2->execute();
      $row = $stmt2->fetch();
      $Email=$row['Email'];

$pdf= new FPDF('L','mm','A4');
$pdf->Addpage();
$pdf->SetFont('times','B','20');
$pdf->Image('../img/certificado.png',15,10,-190);

$pdf->SetXY(55,60);
$pdf->Cell(140, 60, $row['Nombre'],20,0,'C');

$pdf->SetXY(80,60);
$pdf->Cell(-50, 60, $row['Apellido'],20,20,'C');


$pdf->output("F","../certificados/$cedula.pdf");
$archivo = "../certificados/$cedula.pdf";


  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'iestec2019@gmail.com';                 // SMTP username
      $mail->Password = 'Taco12345';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to
  
      //Recipients
      $mail->setFrom('iestec2019@gmail.com');
      $mail->addAddress($Email);                             // Add a recipient
  
      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'IESTEC 2021: Certificado de Asistencia';
      $mail->Body    = "¡Hola, $Nombre $Apellido! Gracias por asistir al IESTEC 2021. Aqui adjuntamos tu certificado de asistencia.";                                   
      $mail->AltBody = 'CERTIFICADO DE ASISTENCIA';
      $mail->AddAttachment($archivo,$archivo);              //Agregar el archivo adjunto al correo 
      
      $mail->send();
  
  } catch (Exception $e) {
      echo 'EL mensaje no ha podido ser enviado. Error: ', $mail->ErrorInfo;
  }
  header('Location: ../php/RegistroExitoso.php');
  
}




  


?>
