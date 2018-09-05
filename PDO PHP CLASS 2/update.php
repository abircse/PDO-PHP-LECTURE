<?php

///----cheak the value record which initialize in html---//
if(!empty($_POST['update_record']))
{
	//----call conection file----//
	require_once("connection.php");	
	//----Execute querry----///

    $querytext = $fetchmyconnection->Prepare("UPDATE user set name='".$_POST['name']."',address='".$_POST['address']."',phone='".$_POST['phone']."' where id=".$_GET['id']);
    $querytext -> execute();

	
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<form action = "" method ="POST">

<label>Name: </label>

<input type = "text" name = "name"/>
<label>Address: </label>
<input type = "text" name = "address"/>
<label>Phone: </label>
<input type = "text" name = "phone"/>

<input type = "submit" value="UDPATE" name="update_record"/>

</form>


</body>
</html>