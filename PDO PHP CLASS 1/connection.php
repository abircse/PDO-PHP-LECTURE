<?php


$host = "mysql:host=localhost;dbname=pdodatabase";
$user = "root";
$password = "";

try{
	
	$fetchmyconnection = new PDO($host,$user,$password);
	echo "Connection Success";
	
}

catch (PDOException $e)
{
	echo "Error".$e->getmessage();
	die();
	
}


?>