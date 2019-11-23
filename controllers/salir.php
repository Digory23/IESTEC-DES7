<?php
session_start();

// Borra contenido de las sesiones
unset ($SESSION['sw']);
unset ($SESSION['user']);

//Destruye las sesiones
session_destroy();

header('Location: ../index.html');
?>