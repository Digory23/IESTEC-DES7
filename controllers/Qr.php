<?php
//Librerias de PHPMAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../correo/lib/PHPMailer-master/src/Exception.php';
require '../correo/lib/PHPMailer-master/src/PHPMailer.php';
require '../correo/lib/PHPMailer-master/src/SMTP.php';

//Agregamos la libreria para genera códigos QR
    require "../phpqrcode/qrlib.php";    
    require '../conexion/conexion.php';
    require '../fpdf/fpdf.php';
    require '../conexion/conexion.php';


    $cedula= $_GET['cedula'];
    $para = $_GET['email'];
    //consulta de los datos para el certificado
    $stmt2 = $dbh->prepare("SELECT Nombre, Apellido, Cedula, Email, Miembro_IEEE FROM usuario WHERE Cedula=:cedu");
    $stmt2->bindParam(':cedu', $cedula);
      $stmt2->setFetchMode(PDO::FETCH_ASSOC);
      $stmt2->execute();
      $row = $stmt2->fetch();

    $Nombre = $row['Nombre'];
    $Apellido = $row['Apellido'];
    $Email = $row['Email'];
    $miembroIEEE = $row['Miembro_IEEE'];



    $stmt3 = $dbh->prepare("SELECT Cena FROM participantes WHERE Cedula=:cedu");
    $stmt3->bindParam(':cedu', $cedula);
      $stmt3->setFetchMode(PDO::FETCH_ASSOC);
      $stmt3->execute();
      $row = $stmt3->fetch();

    $cena = $row['Cena'];


    $stmt4 = $dbh->prepare("SELECT precios.Precio FROM precios INNER JOIN participantes ON precios.ID_TipoPart = participantes.Tipo_Participante WHERE participantes.ID_Cedula =:cedu");
    $stmt4->bindParam(':cedu', $cedula);
      $stmt4->setFetchMode(PDO::FETCH_ASSOC);
      $stmt4->execute();
      $row = $stmt4->fetch();

    $precio = $row['Precio'];

    //calculo del precio final
    $precio_Final= 0.0;
    $cena_total = 0.0;
    switch($cena)
    {
        case 'Solo':{
          $cena_total = 10.0;
        break;
        }
        case 'Duo':{
          $cena_total = 60.0;
        }
    }

    if($miembroIEEE== 'No Aplica'){
      $precio_Final = precio;
    }
    else
    {
      $precio_Final = precio - (precio * 0.15);
    }
    
    $precio_Final = $precio_Final + $cena_total;

    
    $d=rand(100000,999999);                                   //Generar el numero de formal aleatorea sin que se repita 
  
	
	$dir = '../codigo_QR/';                                     //Declaramos una carpeta temporal para guardar la imagenes generadas
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        
	$filename = $dir."$cedula.png";                             //Declaramos la ruta y nombre del archivo a generar

        //Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'M'; //Precisión Baja
	$framSize = 1; //Tamaño en blanco
	$contenido =  "Nombre: $Nombre, Apellido: $Apellido, ID: $cedula, Código de Entrada: $d" ; //Texto

  
        
   QRcode::png($contenido, $filename, $level, $tamaño, $framSize);      //Enviamos los parametros a la Función para generar código QR 
    
    //header("Location: certificado.php?cedula=$cedula");
   
    $codigo= "../codigo_QR/$cedula.png";
    
    //insercion del codigo tiquete
    $sql = "INSERT INTO entrada (cod_entrada, ID_Cedula) VALUES (?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$d, $cedula]);


        //Generar la palntilla para enviar el correo
        $pdf= new FPDF('P','mm','A4');
        $pdf->Addpage();
        $pdf->SetFont('times','B','20');
        $pdf->Image('../img/Factura.png',0,0,210,310);
        
        $pdf->SetXY(55,60);
       // $pdf->Cell(140, 60, $row['Nombre'],20,0,'C');
        $pdf->Image("$codigo",115,170, 70, 70);
        $pdf->Cell(190, 215, $d,15,15,'C');
        
        $pdf->output("F","../codigo_QR/$cedula.pdf");
        $archivo="../codigo_QR/$cedula.pdf";


//Envio de correo con PHPMAILER
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



/*
//enviando correo con la función Mail
$titulo    = 'CODIGO DE ENTRADA';
$mensaje   = "Hola $Nombre $Apellido gracias por inscribirte aqui esta su tiquete de entrada: $d , debera mostrarlo el dia del evento";
//$filename = "$cedula.pdf";
//$ruta = "../certificados/";

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
	echo "El mensaje se ha enviado correctamente";*/
?>