<?php   

// Main code
if (isset ($_POST['submit'])) {
    # code...
    
$n      = $_POST['name'] ; 
$rollnum  = $_POST['roll'] ; 
$email  = $_POST['email'] ; 
$num    = $_POST['num'] ; 
$pass   = $_POST['pass'] ; 


$query = "INSERT INTO User VALUES ('$n' , '$rollnum'  , '$email' , '$num' , '$pass') " ;

$data  = mysqli_query ($conn , $query) ; 

if ($data) {
    # code...
    echo "Inserted" ; 
}


}

?>


