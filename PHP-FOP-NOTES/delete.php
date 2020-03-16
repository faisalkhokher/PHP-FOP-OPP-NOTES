
<?php
require('connection_db.php') ; 


// $roll is get from db name 
// rn is button  var name 

$roll  = $_GET['rn'] ;


$query = "DELETE FROM USER WHERE roll = '$roll'" ;  

$data  = mysqli_query($conn , $query) ; 

if ($data) {
    # code...
    echo "Delete Record in DB" ; 
}else {
    echo "ERROR" ; 
}




?>