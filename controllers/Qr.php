<?php

//Agregamos la libreria para genera códigos QR
    require "../phpqrcode/qrlib.php";    
    require '../conexion/conexion.php';



    $cedula= $_GET['cedula'];
    $para = $_GET['email'];
    
    $stmt2 = $dbh->prepare("SELECT Nombre, Apellido, Cedula FROM usuario WHERE Cedula=:cedu");
    $stmt2->bindParam(':cedu', $cedula);
      $stmt2->setFetchMode(PDO::FETCH_ASSOC);
      $stmt2->execute();
      $row = $stmt2->fetch();

    $Nombre = $row['Nombre'];
    $Apellido = $row['Apellido'];
    //Generar el numero de formal aleatorea sin que se repita 
    $d=rand(100000,999999);
    /*if ()
    {

    }*/

	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = '../codigo_QR/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir."$cedula.png";

        //Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'M'; //Precisión Baja
	$framSize = 2; //Tamaño en blanco
	$contenido =  "Nombre: $Nombre, Apellido: $Apellido, ID: $cedula, Código de Entrada: $d" ; //Texto
	
        //Enviamos los parametros a la Función para generar código QR 
    QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
    
    //header("Location: certificado.php?cedula=$cedula");
    header('Location: ../php/RegistroExitoso.php');

    //insercion del codigo tiquete
    $sql = "INSERT INTO entrada (cod_entrada, ID_Cedula) VALUES (?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$d, $cedula]);


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
	echo "El mensaje se ha enviado correctamente";
?>