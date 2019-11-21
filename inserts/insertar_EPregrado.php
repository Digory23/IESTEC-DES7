<?php 
include "conexion.php";


//variables del metodo POST
$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$cedula = $_POST['ID'];
$sexo = $_POST['opcion'];
$email = $_POST['email'];
$telefono = $_POST['phone_number'];
$tipo_user = 'par';
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$institucion = $_POST['institucion'];
$departamento = $_POST['departamento'];


$sql = "INSERT INTO usuario (Nombre, Apellido, Sexo, Email, Telefono,Tipo_Ussuario, Cedula, Institucion, Unidad, Ciudad, Provincia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nombre, $apellido, $sexo, $email, $telefono, $tipo_user, $cedula, $institucion, $departamento, $ciudad, $provincia]);

        if($stmt->rowCount() > 0)
        {
            echo "Registro exitoso";
            header('Location: ../php/RegistroExitoso.php');
        }
        else{
            echo "Error";
            
        }
?>