<?php 
include "conexion.php";

//variables de usuario
$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$cedula = $_POST['ID'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$telefono = $_POST['phone_number'];
$ieee = $_POST['opcion1'];
$tipo_user = 'par';
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$institucion = $_POST['institucion'];
$departamento = $_POST['departamento'];

//variables de participante
$cena = 'si';
$tipo_participante = 'est_nac';



//sql de insercion a usuario
$sql = "INSERT INTO usuario (Nombre, Apellido, Sexo, Email, Telefono, Miembro_IEEE, Tipo_Ussuario, Cedula, Institucion, Unidad, Ciudad, Provincia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nombre, $apellido, $sexo, $email, $telefono, $ieee, $tipo_user, $cedula, $institucion, $departamento, $ciudad, $provincia]);

       if($stmt->rowCount() > 0)
        {
            echo "Registro exitoso";
            header('Location: ../php/RegistroExitoso.php');
        }
        else{
            echo "Error";
            echo "$nombre, $apellido, $sexo, $email, $telefono, $ieee, $tipo_user, $cedula, $institucion, $departamento, $ciudad, $provincia";
            
        }

        if(isset($_POST['ar1'])){
                $area = $_POST['ar1'];
            
                $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$cedula, $area]);       
        }

        if(isset($_POST['ar2'])){
            $area = $_POST['ar2'];
        
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
            }

            if(isset($_POST['ar3'])){
                $area = $_POST['ar3'];
            
                $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
                $stmt = $dbh->prepare($sql);
                $stmt->execute([$cedula, $area]);
                }
?>