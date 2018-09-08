<?php

require_once "connection.php";

$data = $fetchmyconnection->prepare("delete from user where id = ".$_GET['id']);
$data->execute();

header('Location: readdata.php');


?>