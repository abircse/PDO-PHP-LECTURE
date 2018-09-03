<?php

///----cheak the value record which initialize in html---//
if(!empty($_POST['add_record']))
{
	//----call conection file----//
	require_once("connection.php");	
	//----Execute querry----///
	$sql = "INSERT INTO user(name,address,phone) values (:name,:address,:phone)";
	//----first need to prepare for execute----//
	$prepare = $fetchmyconnection->prepare($sql);
	//-----then execute using post methord----////
	$result = $prepare->execute(array(':name'=>$_POST['name'],':address'=>$_POST['address'],'phone'=>$_POST['phone']));
	//----- Cheack excuted data if found or not----///
	if(!empty($result))
	{
		//----navigation after insert data---//
		header("index.php");
		
	}
}

?>

<html>
<head>
<title>PDO UI</title>
</head>
<body>

//---here action tag is empty coz php script already in this files----///

<form action = "" method ="POST">

<label>Name: </label>
//-------here name all tag is the name of all database column----//

<input type = "text" name = "name"/>
<label>Address: </label>
<input type = "text" name = "address"/>
<label>Phone: </label>
<input type = "text" name = "phone"/>

//------here name is define for line no 4 for POST mehord---->>
<input type = "submit" value="INSERT" name="add_record"/>

</form>

</body>
</html>
