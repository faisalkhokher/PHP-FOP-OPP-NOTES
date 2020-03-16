<?php
require('connection_db.php') ; 

?>


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <table class="table table-dark" border = "2">
           <tbody>
               <tr>
                   <td>Name</td> 

                   <td>Email</td>
                   <td>Number</td>
                   <td>Password</td>
                   <td>ROLL</td>
                   <td>EDIT </td>
                   <td >DELETE </td>

                   
               </tr>
          

         
<?php

include('connection_db.php');


$query = 'SELECT * FROM user' ;

$data  = mysqli_query ($conn , $query) ; 

$total  = mysqli_num_rows ($data);


if ($total !=0) {
    # code...
    while ($table = mysqli_fetch_assoc($data) ) {
        # code...
        echo
         "
        <tr>
        <td>".$table['name']." </td>
        <td>".$table['email']."</td>
        <td>".$table['num']."</td>
        <td>".$table['pass']."</td> 
     
        <td>".$table['roll']."</td> 
        <td>
        <a href = 'update.php?name=$table[name]&rn=$table[roll]&email=$table[email]&num=$table[num]&pass=$table[pass]&roll=$table[roll]'> EDIT
         </td> 
        <td>
        <a href ='delete.php?rn=$table[roll]'> DELETE
        </td>  
         
        " ; 
    }
   

}else {
    echo "Not Found" ; 
}

?>

</tbody>
       </table> 


</body>
</html>