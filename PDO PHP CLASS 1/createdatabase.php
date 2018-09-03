<?php

$host = "mysql:host=localhost";
$user = "root";
$password = "";

try
{	
	$fetchmyconnection = new PDO($host,$user,$password);
	$fetchmyconnection->query('CREATE DATABASE IF NOT EXISTS pdodatabase')
	or die("Database Create failed");
	echo "Database created Success";
}

catch (PDOException $e)
{
	echo "Error".$e->getmessage();
	die();	
}

?>