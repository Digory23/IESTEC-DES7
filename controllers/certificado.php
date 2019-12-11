<?php
require '../fpdf/fpdf.php';
require '../conexion/conexion.php';
//require_once ('../class.phpmailer.php');

$cedula= $_GET['cedula'];
//$para = $_GET['email'];
//$para = 'user1@iestec.local';

  $stmt2 = $dbh->prepare("SELECT Nombre.usuario, Apellido.usuario, Email.usuario, asistencia.entrada FROM usuario  INNER JOIN  entrada  WHERE Cedula.entrada=:cedu");
  $stmt2->bindParam(':cedu', $cedula);
      $stmt2->setFetchMode(PDO::FETCH_ASSOC);
      $stmt2->execute();
      $row = $stmt2->fetch();
      $Email=$row['Email']
      $Asistencia=$row['asistencia']

$pdf= new FPDF('L','mm','A4');
$pdf->Addpage();
$pdf->SetFont('times','B','20');
$pdf->Image('../img/certificado.png',15,10,-190);

$pdf->SetXY(55,60);
$pdf->Cell(140, 60, $row['Nombre'],20,0,'C');
$pdf->Cell(-50, 60, $row['Apellido'],20,20,'C');

//header('Location: RegistroExitoso.php');
$pdf->output("F","../certificados/$cedula.pdf");
$archivo = "../certificados/$cedula.pdf"

if ($Asistencia='si')
{
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
      $mail->Subject = 'CODIGO DE ENTRADA';
      $mail->Body    = "Hola $Nombre $Apellido gracias por inscribirte aqui esta su tiquete de entrada: $d , debera mostrarlo el dia del evento ";                                              //OJO ESTO HAY QUE CAMBIARLO POR PALABRAS MAS BONITAS
      $mail->AltBody = 'CODIGO DE ENTRADA';
      $mail->AddAttachment($archivo,$archivo);              //Agregar el archivo adjunto al correo 
      
      $mail->send();
  
  } catch (Exception $e) {
      echo 'EL mensaje no ha podido ser enviado. Error: ', $mail->ErrorInfo;
  }
  header('Location: ../php/RegistroExitoso.php');
  
}
else 
{
  echo 'EL mensaje no ha podido ser enviado. Error: ';
}



?>
