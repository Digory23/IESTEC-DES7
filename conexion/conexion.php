<?php

//Definicion de variables de conexion
define("bdNom", "iestec3.0");
define("bdUser", "root");
define("bdPass", "");
define("bdHost", "localhost");

//Conexion a la base de datos
try{
	$dsn = "mysql:host=".bdHost.";dbname=".bdNom;
    $dbh = new PDO($dsn, bdUser, bdPass);
   
}
catch(PDOException $ex){
echo $ex->getMessage();
}
?>