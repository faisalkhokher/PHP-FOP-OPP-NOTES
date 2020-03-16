<?php
include('connection_db.php') ; 
?>

<?php

if (isset($_POST['submit'])) {
    # code...
    $name = $_FILES['image'] ['name'] ; 

    $tmpName = $_FILES['image'] ['tmp_name'] ; 

    $folder = "uploads/" . $name ;

    move_uploaded_file($tmpName , $folder) ;
    
    if ($folder !="") {
        # code...
        $query = "INSERT INTO gallery VALUES ('$folder')" ; 

        $data = mysqli_query($conn , $query) ; 

    }

    if ($data) {
        # code...
    echo "Upload Image" ; 
    }


}



?>