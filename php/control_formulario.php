<?php 
$select_user = $_POST['select_part'];
$titulo_form;



switch ($select_user) 
{
    case 'Est_NPre':{
        
        header('Location: Estudiantes_Nacionales_Postgrado.php?titulo=Estudiante Nacional Pregrado');
    break;
    }
    case 'Est_NPost':{
        
        header('Location: Estudiantes_Nacionales_Postgrado.php?titulo=Estudiante Nacional Postgrado');
    break;
    }
    case 'Est_Int':{
        $titulo_form = 'Estudiante Internacional';
    break;
    }
    case 'Est_Art':{
        $titulo_form = 'Estudiante con Articulo';
    break;
    }
    case 'Pro_Art':{
        $titulo_form = 'Profesional con Articulo';
    break;
    }
    case 'Pro_Nac':{
        header('Location: Profesionales_Nacionales.php?titulo=Ente maligno Nacional Postgrado');
    break;
    }
    case 'Par_Int':{
        $titulo_form = 'Participante Internacional';
    break;
    }
}
?>