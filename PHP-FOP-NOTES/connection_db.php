<?php 

$servername = 'localhost' ; 
$username   = 'root' ; 
$password   = '' ; 
$dbname     = 'sample_php' ; 


$conn  =  mysqli_connect($servername , $username , $password , $dbname) ; 

if ($conn) {
    # code...
    echo "<b> DB-Connected </b>" ; 
}else 
{
    echo "DB Connection Error";
}



?>