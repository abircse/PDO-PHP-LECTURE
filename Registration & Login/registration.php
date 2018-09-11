<?php

require_once 'connection.php';

/**
 * check error variable
 */
$error = "";

if(isset($_POST['clicked_for_register']))
{
    /*Initialize Varible for use post methord to post data into database*/
    $name = $_POST['name'];
    $username= $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $repassword = $_POST['reenterpassword'];

    /*check reenterpassword value with password value*/
    if ($password != $repassword) 
    {
        $error = "Password not match";   
    } 

    else 
    {

        $temppassword = md5($password);
        $query = "Insert into registration (name,user_name,email,phone,password) values ('$name','$username','$email','$phone','$temppassword')";
        $result = mysqli_query($con,$query);
        
        /*check the query & connection before insert data into database*/
        if ($result)
        {
            $error = "Registration Succesfull";
        } 
        else 
        {
            $error = "Registration Succesfull"; 
        }
    }
    

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Here</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php echo $error; ?>

<form action="" method="post">

<label>Name</label>
<input type="text" name="name" >
<br>
<br>
<label>username</label>
<input type="text" name="user_name" >
<br>
<br>
<label>Email</label>
<input type="text" name="email" >
<br>
<br>
<label>Phone</label>
<input type="text" name="phone" >
<br>
<br>
<label>Password</label>
<input type="text" name="password" >
<br>
<br>
<label>Re-EnterPassword</label>
<input type="text" name="reenterpassword" >
<br>
<br>
<button type="submit" name = "clicked_for_register">Register Here</button>


</form>

</body>
</html>