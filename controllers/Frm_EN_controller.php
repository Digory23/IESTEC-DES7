<?php 
$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$cedula = $_POST['ID'];
$sexo = $_POST['opcion'];
$email = $_POST['email'];
$telefono = $_POST['phone_number'];
$tipo_user = "par";
$IEEE = $_POST['opcion1'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$institucion = $_POST['institucion'];
$departamento = $_POST['departamento'];
$tipo_par = 'Nac';

header('Location: ../php/Cena.php');
?>