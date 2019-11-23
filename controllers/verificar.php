<?php

include ("../conexion/conexion.php");
//Iniciar la sesión 
session_start(); 
// verifica la sesión

$user =$_POST['username'];
$pass =($_POST['pass']);
//Prepare
$stmt = $dbh->prepare("SELECT * FROM administrador WHERE ID_Cedula=:user AND Pass=:pass");
$stmt->bindParam(':user', $user, PDO::PARAM_STR);
$stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
$stmt->execute();

    if($stmt->rowCount() > 0)
    {
        $_SESSION["sw"] = 1; 
        $_SESSION["user"] = $user; 
        header('Location: ../php/Estadisticas.php');
    }
    else{
        header('Location: ../php/login.php');
    }


?>
