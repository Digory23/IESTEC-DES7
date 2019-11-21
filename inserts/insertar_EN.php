<?php 
include "conexion.php";
//include "../inserts/insertar_EN.php";

//variables del metodo POST
/*$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$cedula = $_POST['ID'];
//$sexo = $_POST['opcion'];
$email = $_POST['email'];
$telefono = $_POST['phone_number'];
$tipo_user = "est";*/

//insercion en la tabla
$sql = "INSERT INTO usuario (Nombre, Apellido, Sexo, Email, Telefono,Tipo_Ussuario, Cedula) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nombre, $apellido, $sexo, $email, $telefono, $tipo_user, $cedula]);

        if($stmt->rowCount() > 0)
        {
            echo "Registro exitoso";
            header('Location: ../index.html');
        }
        else{
            echo "Error";
            
        }
?>