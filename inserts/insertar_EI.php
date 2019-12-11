<?php 
include "../conexion/conexion.php";

//variables de usuario
$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$cedula = $_POST['ID'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$telefono = $_POST['phone_number'];
$ieee = $_POST['opcion1'];
$tipo_user = 'par';
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$institucion = $_POST['institucion'];
$departamento = $_POST['departamento'];

//variables de participante
$cena = $_POST['cena'];
$tipo_participante = $_POST['tipo'];



//sql de insercion a usuario
$sql = "INSERT INTO usuario (Nombre, Apellido, Sexo, Email, Telefono, Miembro_IEEE, Tipo_Ussuario, Cedula, Institucion, Unidad, Pais, Ciudad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nombre, $apellido, $sexo, $email, $telefono, $ieee, $tipo_user, $cedula, $institucion, $departamento, $pais, $ciudad]);

       if($stmt->rowCount() > 0)
        {
            echo "Registro exitoso";
            //header('Location: ../php/RegistroExitoso.php');
            //header("Location: ../controllers/certificado.php?cedula=$cedula");
            header("Location: ../controllers/Qr.php?cedula=$cedula&email=$email");
        }
        else{
            echo "Error";
            echo "$nombre, $apellido, $sexo, $email, $telefono, $ieee, $tipo_user, $cedula, $institucion, $departamento, $ciudad, $provincia";
            
        }

        //sql de insercion a participante
        $sql = "INSERT INTO participantes (ID_Cedula, Cena, Tipo_Participante, email_facultad) VALUES (?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$cedula, $cena, $tipo_participante, $email2]);

        
            
            //aqui proceden los inserts de los checkbox
        if(isset($_POST['ar1'])){//isset verifica que este seleccionado
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

        if(isset($_POST['ar4'])){
            $area = $_POST['ar4'];
            
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }   

        if(isset($_POST['ar5'])){
            $area = $_POST['ar5'];
                
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }

        if(isset($_POST['ar6'])){
            $area = $_POST['ar6'];
    
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }

        if(isset($_POST['ar7'])){
            $area = $_POST['ar7'];
    
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }

        if(isset($_POST['ar8'])){
            $area = $_POST['ar8'];
    
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }

        if(isset($_POST['ar9'])){
            $area = $_POST['ar9'];
    
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }   

        if(isset($_POST['ar10'])){
            $area = $_POST['ar10'];
    
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }   

        if(isset($_POST['ar11'])){
            $area = $_POST['ar11'];
    
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }   

        if(isset($_POST['ar12'])){
            $area = $_POST['ar12'];
    
            $sql = "INSERT INTO participante_interes (ID_Cedula, Cod_Area) VALUES (?, ?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$cedula, $area]);
        }

        

?>