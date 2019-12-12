
<?php 
//Este archivo es para controlar la seleccion del tipo de formulario que selecciona el usuario
$select_user = $_POST['select_part'];

switch ($select_user) 
{
    case 'Est_NPre':{

       echo "<script>location.href='../php/Frm_EN.php?titulo=Estudiante Nacional Pregrado&tipo=Est_NPre'; </script>";     
    break;
    }
    case 'Est_NPost':{
        echo "<script>location.href='../php/Frm_EN.php?titulo=Estudiante Nacional Postgrado&tipo=Est_NPost'; </script>";
    break;
    }
    case 'Est_Int':{
        echo "<script>location.href='../php/Frm_EI.php?titulo=Estudiante Internacional&tipo=Est_Int'; </script>";
    break;
    }
    case 'Est_Art':{
        echo "<script>location.href='../php/Frm_AR.php?titulo=Estudiante de Pregrado con Artículo&tipo=Est_Art'; </script>";
    break;
    }
    case 'Pro_Art':{
        echo "<script>location.href='../php/Frm_AR.php?titulo=Profesional con Artículo&tipo=Pro_Art'; </script>";
    break;
    }
    case 'Pro_Nac':{
        echo "<script>location.href='../php/Frm_PI.php?titulo=Profesionales Nacionales&tipo=Pro_Nac'; </script>";
    break;
    }
    case 'Par_Int':{
        echo "<script>location.href='../php/Frm_PI.php?titulo=Participante Internacional&tipo=Par_Int'; </script>";
    break;
    }
}
?>