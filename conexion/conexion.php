<?php

//Definicion de variables de conexion local
define("bdNom", "iestec");
define("bdUser", "root");
define("bdPass", "");
define("bdHost", "localhost");

//conexion en el host
/* define("bdNom", "congreso_utp1");
define("bdUser", "congreso1");
define("bdPass", "db.congreso_2019");
define("bdHost", "mysql.congreso1.ds507.online"); */

//Conexion a la base de datos
try{
	$dsn = "mysql:host=".bdHost.";dbname=".bdNom;
    $dbh = new PDO($dsn, bdUser, bdPass);
   
}
catch(PDOException $ex){
echo $ex->getMessage();
}
?>