<?php
session_start(); 
// verifica si la sesion existe
    if (!isset($_SESSION["sw"])){ 
        header('Location: ../php/login.php');
    }
?>