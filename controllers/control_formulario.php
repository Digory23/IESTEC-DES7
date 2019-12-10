
<?php 
//Este archivo es para controlar la seleccion del tipo de formulario que selecciona el usuario
$select_user = $_POST['select_part'];

switch ($select_user) 
{
    case 'Est_NPre':{
        header("Location: ../php/Frm_EN.php?titulo=Estudiante Nacional Pregrado&tipo=Est_NPre");
    break;
    }
    case 'Est_NPost':{
        header("Location: ../php/Frm_EN.php?titulo=Estudiante Nacional Postgrado&tipo=Est_NPost");
    break;
    }
    case 'Est_Int':{
        header('Location: ../php/Frm_EI.php?titulo=Estudiante Internacional&tipo=Est_Int');
    break;
    }
    case 'Est_Art':{
        header('Location: ../php/Frm_AR.php?titulo=Estudiante de Pregrado con Artículo&tipo=Est_Art');
    break;
    }
    case 'Pro_Art':{
        header('Location: ../php/Frm_AR.php?titulo=Profesional con Artículo&tipo=Pro_Art');
    break;
    }
    case 'Pro_Nac':{
        header('Location: ../php/Frm_PI.php?titulo=Profesionales Nacionales&tipo=Pro_Nac');
    break;
    }
    case 'Par_Int':{
        header('Location: ../php/Frm_PI.php?titulo=Participante Internacional&tipo=Par_Int');
    break;
    }
}
?>