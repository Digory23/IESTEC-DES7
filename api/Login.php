<?php
    $con = mysqli_connect("localhost", "root", "", "iestec");
    
    //$username = $_POST["username"];
    //$password = $_POST["password"];
    $cedula = 'mono-chino';
    $statement = mysqli_prepare($con, "SELECT Nombre, Apellido FROM `usuario` WHERE Cedula = ?");
    mysqli_stmt_bind_param($statement, "s",$cedula );
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