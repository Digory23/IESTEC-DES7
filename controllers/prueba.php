<?php
require('../fpdf/fpdf.php');
require '../conexion/conexion.php';
require "../phpqrcode/qrlib.php"; 

$stmt2 = $dbh->prepare("SELECT Nombre, Apellido, Cedula, Email FROM usuario WHERE Cedula=:8-925-1520");
$stmt2->bindParam(':cedu', $cedula);
  $stmt2->setFetchMode(PDO::FETCH_ASSOC);
  $stmt2->execute();
  $row = $stmt2->fetch();

$Nombre = $row['Nombre'];
$Apellido = $row['Apellido'];
$Email = $row['Email'];

//$precio= $row[''];
//$cena = $row[''];



$d=rand(100000,999999);                                   //Generar el numero de formal aleatorea sin que se repita 


$dir = '../codigo_QR/';                                     //Declaramos una carpeta temporal para guardar la imagenes generadas

//Si no existe la carpeta la creamos
if (!file_exists($dir))
    mkdir($dir);

    
$filename = $dir."$cedula.png";                             //Declaramos la ruta y nombre del archivo a generar

    //Parametros de Condiguración

$tamaño = 10; //Tamaño de Pixel
$level = 'M'; //Precisión Baja
$framSize = 0; //Tamaño en blanco
$contenido =  "Código de Entrada: $d" ; //Texto

    
QRcode::png($contenido, $filename, $level, $tamaño, $framSize);      //Enviamos los parametros a la Función para generar código QR 

// header("Location: certificado.php?cedula=$cedula");

$codigo= "../codigo_QR/$cedula.png";

//insercion del codigo tiquete
$sql = "INSERT INTO entrada (cod_entrada, ID_Cedula) VALUES (?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$d, $cedula]);


    //Generar la palntilla para enviar el correo
    $pdf= new FPDF('P','mm','A4');
    $pdf->Addpage();
    $pdf->SetFont('times','B','20');
    $pdf->Image('../img/Factura.png',0,0,210,305);
    
    $pdf->SetXY(55,60);

   /* $pdf->Cell(140, 60, '100.00',20,0,'C');
    $pdf->Cell(140, 60, '100.00',20,0,'C');*/


    $pdf->Cell(190, 60, '100.00',20,0,'C');

    $pdf->Image("$codigo",125,175, 60, 60);
    $pdf->Cell(190, 216, $d,15,15,'C');
    
    $pdf->output("F","../codigo_QR/$cedula.pdf");
    
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');

$pdf->Output();
?>