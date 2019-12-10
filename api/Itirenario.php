<?php
    $con = mysqli_connect("localhost", "root", "", "iestec");
    //$con = mysqli_connect("mysql.congreso1.ds507.online", "congreso1", "db.congreso_2019", "congreso_utp1");

    
    //$tiquete = $_POST['tiquete'];
    $tiquete = '763211';
    $statement = mysqli_prepare($con, "SELECT ID_Cedula FROM `entrada` WHERE cod_entrada = ? ");
    mysqli_stmt_bind_param($statement, "s",$tiquete );
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $cedula);


    
    $statement = mysqli_prepare($con, "SELECT eventos.Nombre_Evento, sala.Nombre from 
    eventos INNER JOIN participante_interes INNER JOIN sala
    ON eventos.ID_area = participante_interes.Cod_Area AND eventos.ID_Sala = sala.ID_Sala
    WHERE participante_interes.ID_Cedula = ? ");

    $cedula = '8-968-7744';
    mysqli_stmt_bind_param($statement, "s",$cedula);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $evento, $sala);


    
    $response = array();
    //$response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["evento"] = $evento;
        $response["sala"] = $sala;
        
    }
    
    echo json_encode($response);
?>