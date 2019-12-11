<?php
    require "../conexion/conexion.php";

    //Consulta de Cantidad de Participantes Interesados en Agroindustria
    $sql1= "SELECT COUNT(participantes.ID_Cedula) AS 'Agroindustria' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Agroind'";
    $consulta1 = $dbh->prepare($sql1);
    $consulta1 -> execute();
    $row1 = $consulta1->fetch();
    $a1 = $row1['Agroindustria'];

    //Consulta de Cantidad de Participantes Interesados en Ciencias Básicas
    $sql2= "SELECT COUNT(participantes.ID_Cedula) AS 'Ciencias Básicas' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Cien_Bas'";
    $consulta2 = $dbh->prepare($sql2);
    $consulta2 -> execute();
    $row2 = $consulta2->fetch();
    $a2 = $row2['Ciencias Básicas'];

    //Consulta de Cantidad de Participantes Interesados en Economía y Sociedad
    $sql3= "SELECT COUNT(participantes.ID_Cedula) AS 'Economía y Sociedad' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Econ_Soc'";
    $consulta3 = $dbh->prepare($sql3);
    $consulta3 -> execute();
    $row3 = $consulta3->fetch();
    $a3 = $row3['Economía y Sociedad'];

    //Consulta de Cantidad de Participantes Interesados en Educacion en Ingenieria
    $sql4= "SELECT COUNT(participantes.ID_Cedula) AS 'Educación en Ingeniería' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Edu_Ing'";
    $consulta4 = $dbh->prepare($sql4);
    $consulta4 -> execute();
    $row4 = $consulta4->fetch();
    $a4 = $row4['Educación en Ingeniería'];

    //Consulta de Cantidad de Participantes Interesados en Energia y Ambiente
    $sql5= "SELECT COUNT(participantes.ID_Cedula) AS 'Energía y Ambiente' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Ener_Amb'";
    $consulta5 = $dbh->prepare($sql5);
    $consulta5 -> execute();
    $row5 = $consulta5->fetch();
    $a5 = $row5['Energía y Ambiente'];

    //Consulta de Cantidad de Participantes Interesados en Gestion Empresarial
    $sql6= "SELECT COUNT(participantes.ID_Cedula) AS 'Gestión Empresarial' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Gest_Empre'";
    $consulta6 = $dbh->prepare($sql6);
    $consulta6 -> execute();
    $row6 = $consulta6->fetch();
    $a6 = $row6['Gestión Empresarial'];

    //Consulta de Cantidad de Participantes Interesados en Infraestructura
    $sql7= "SELECT COUNT(participantes.ID_Cedula) AS 'Infraestructura' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Infraes'";
    $consulta7 = $dbh->prepare($sql7);
    $consulta7 -> execute();
    $row7 = $consulta7->fetch();
    $a7 = $row7['Infraestructura'];

    //Consulta de Cantidad de Participantes Interesados en Logica y Transporte
    $sql8= "SELECT COUNT(participantes.ID_Cedula) AS 'Logística y Transporte' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Log_Trans'";
    $consulta8 = $dbh->prepare($sql8);
    $consulta8 -> execute();
    $row8 = $consulta8->fetch();
    $a8 = $row8['Logística y Transporte'];

    //Consulta de Cantidad de Participantes Interesados en Robot
    $sql9= "SELECT COUNT(participantes.ID_Cedula) AS 'Robot' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Robot'";
    $consulta9 = $dbh->prepare($sql9);
    $consulta9 -> execute();
    $row9 = $consulta9->fetch();
    $a9 = $row9['Robot'];

    //Consulta de Cantidad de Participantes Interesados en TIC
    $sql10= "SELECT COUNT(participantes.ID_Cedula) AS 'TIC' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='TIC'";
    $consulta10 = $dbh->prepare($sql10);
    $consulta10 -> execute();
    $row10 = $consulta10->fetch();
    $a10 = $row10['TIC'];

    //Consulta de Cantidad de Participantes Interesados en Otros
    $sql11= "SELECT COUNT(participantes.ID_Cedula) AS 'Otros' 
    FROM participantes INNER JOIN participante_interes 
    ON participantes.ID_Cedula = participante_interes.ID_Cedula 
    WHERE participante_interes.Cod_Area ='Otros'";
    $consulta11 = $dbh->prepare($sql11);
    $consulta11 -> execute();
    $row11 = $consulta11->fetch();
    $a11 = $row11['Otros'];

    //Consulta de cantidad de participantes de tipo: Estudiante con Articulo
    $sql12= "SELECT COUNT(ID_Cedula) AS 'con Articulo'
    FROM participantes
    WHERE Tipo_Participante = 'Est_Art'";
    $consulta12 = $dbh->prepare($sql12);
    $consulta12 -> execute();
    $row12 = $consulta12->fetch();
    $p1 = $row12['con Articulo'];

    //Consulta de cantidad de participantes de tipo: Estudiante Internacional
    $sql13= "SELECT COUNT(ID_Cedula) AS 'Internacional'
    FROM participantes
    WHERE Tipo_Participante = 'Est_Int'";
    $consulta13 = $dbh->prepare($sql13);
    $consulta13 -> execute();
    $row13 = $consulta13->fetch();
    $p2 = $row13['Internacional'];

    //Consulta de cantidad de participantes de tipo: Estudiante Nacional Postgrado
    $sql14= "SELECT COUNT(ID_Cedula) AS 'NPostgrado'
    FROM participantes
    WHERE Tipo_Participante = 'Est_NPost'";
    $consulta14 = $dbh->prepare($sql14);
    $consulta14 -> execute();
    $row14 = $consulta14->fetch();
    $p3 = $row14['NPostgrado'];

    //Consulta de cantidad de participantes de tipo: Estudiantes Nacionales de Pregrado
    $sql15= "SELECT COUNT(ID_Cedula) AS 'NPregrado'
    FROM participantes
    WHERE Tipo_Participante = 'Est_NPre'";
    $consulta15 = $dbh->prepare($sql15);
    $consulta15 -> execute();
    $row15 = $consulta15->fetch();
    $p4 = $row15['NPregrado'];

    //Consulta de cantidad de participantes de tipo: Participante Internacional
    $sql16= "SELECT COUNT(ID_Cedula) AS 'PInternacional'
    FROM participantes
    WHERE Tipo_Participante = 'Par_Int'";
    $consulta16 = $dbh->prepare($sql16);
    $consulta16 -> execute();
    $row16 = $consulta16->fetch();
    $p5 = $row16['PInternacional'];

    //Consulta de cantidad de participantes de tipo: Profesional con Artículo
    $sql17= "SELECT COUNT(ID_Cedula) AS 'ProArticulo'
    FROM participantes
    WHERE Tipo_Participante = 'Pro_Art'";
    $consulta17 = $dbh->prepare($sql17);
    $consulta17 -> execute();
    $row17 = $consulta17->fetch();
    $p6 = $row17['ProArticulo'];

    //Consulta de cantidad de participantes de tipo: Profesional Nacional
    $sql18= "SELECT COUNT(ID_Cedula) AS 'ProNacional'
    FROM participantes
    WHERE Tipo_Participante = 'Pro_Nac'";
    $consulta18 = $dbh->prepare($sql18);
    $consulta18 -> execute();
    $row18 = $consulta18->fetch();
    $p7 = $row18['ProNacional'];

?>