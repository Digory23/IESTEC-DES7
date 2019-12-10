<?php
  
    $con = mysqli_connect("localhost", "root", "", "iestec");
    //$con = mysqli_connect("mysql.congreso1.ds507.online", "congreso1", "db.congreso_2019", "congreso_utp1");

    
    //$tiquete = $_POST['tiquete'];
    $tiquete = '763211';
    $statement = mysqli_prepare($con, "SELECT ID_Cedula FROM entrada WHERE cod_entrada = ? ");
    mysqli_stmt_bind_param($statement, "s",$tiquete );
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $cedula);

    if(mysqli_stmt_fetch($statement)){
        $cedula;
    }
    
  //Consulta join de evento y sala relacionado con las areaas que escogio el usuario

    $sql= "SELECT eventos.Nombre_Evento, sala.Nombre from 
    eventos INNER JOIN participante_interes INNER JOIN sala
    ON eventos.ID_area = participante_interes.Cod_Area AND eventos.ID_Sala = sala.ID_Sala
    WHERE participante_interes.ID_Cedula= '$cedula'";
    mysqli_set_charset($con, "utf8");
    $result = mysqli_query($con, $sql);
    
    $response = array();
    
    while($row = mysqli_fetch_array($result)){
        
        $nombre = $row['Nombre_Evento'];
        $sala = $row['Nombre'];
        
        $response[] = array('Nombre_Evento'=> $nombre, 'Sala'=> $sala);
    }
    $json_string =  json_encode($response);
    echo $json_string;
    
?>