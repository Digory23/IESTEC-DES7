<?php 
include "conexion.php";

$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$cedula = $_POST['ID'];
//$sexo = $_POST['opcion'];
$email = $_POST['email'];
$telefono = $_POST['phone_number'];

//$titulo= $_GET['titulo'];
$tipo_user = "est";

//$IEEE = $_POST['opcion1'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$institucion = $_POST['institucion'];
$departamento = $_POST['departamento'];
//$interes = $_POST['interes_select[]'];
$pago=$_POST['pago'];
$tipo_par = 'Nac';


$sql = "INSERT INTO usuario (Nombre, Apellido, Email, Telefono,Tipo_Ussuario, Cedula) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nombre, $apellido, $email, $telefono, $tipo_user, $cedula]);

        if($stmt->rowCount() > 0)
        {
            header('Location: ../RegistroExitoso.php');
        }
        else{
            echo "Error";
            //echo $sexo;
            
        }

?>