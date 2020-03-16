<?php
include('connection_db.php'); 
?>

<?php

$query = "SELECT * FROM gallery" ; 
$data  = mysqli_query($conn , $query) ; 

while ($result = mysqli_fetch_assoc($data)) {
    # code...
    echo "<img src='".$result['image']."' height = '150' widht = '100'   >" ; 
}


?>