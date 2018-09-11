<?php 

$host = "Localhost";
$username = "root";
$password = "";
$database = "coxtunesdatabase";

$con = mysqli_connect($host,$username,$password,$database);

/**
 * if need to check connection is exist or not, just remove comment from below
 */
/*
if ($con) {
    
    echo "connection successs";
} else {
    
    echo "conection failed";
}
*/


?>