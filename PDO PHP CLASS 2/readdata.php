<?php

require_once ("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Read data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 

$querytext = $fetchmyconnection->Prepare("SELECT * FROM user order by id desc");
$querytext -> execute();

$result = $querytext->fetchAll();
   
?>
<table>
    <thead>
        <td>Name</td>
        <td>Address</td>
        <td>Phone</td>  
        <td>Action</td>  
    </thead>

    <tbody>
<?php    
if(!empty($result))
{   
    foreach($result as $row)  
    {

    ?>
        <tr>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["address"];?></td>
            <td><?php echo $row["phone"];?></td>
            <td><a href = "update.php?id=<?php echo $row["id"];?>">Edit</a><a href = "#">Delete</a></td>  
        </tr>

<?php
    
    }
}
?>    
    </tbody>
</table>

</body>
</html>