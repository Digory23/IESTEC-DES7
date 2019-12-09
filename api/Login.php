<?php
    $con = mysqli_connect("localhost", "root", "", "iestec");
    //$con = mysqli_connect("mysql.congreso1.ds507.online", "congreso1", "db.congreso_2019", "congreso_utp1");

    
    $tiquete = $_POST['tiquete'];
    $statement = mysqli_prepare($con, "SELECT Nombre, Apellido FROM usuario INNER JOIN entrada ON usuario.Cedula = entrada.ID_Cedula WHERE cod_entrada = ? ");
    mysqli_stmt_bind_param($statement, "s",$tiquete );
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $nombre, $apellido);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["name"] = $nombre;
        $response["last_name"] = $apellido;
    }
    
    echo json_encode($response);
?>