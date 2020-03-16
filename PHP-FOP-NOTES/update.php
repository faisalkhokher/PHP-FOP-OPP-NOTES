<?php


require('connection_db.php'); 
// error_reporting(0);

$name   =$_GET['name'] ;
$roll  =$_GET['roll'] ;
$eail =$_GET['email'] ; 
$num  =$_GET['num']  ;
$pass =$_GET['pass'] ;

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - DailyUI#001</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
   <div class="c1">
      
      <div class="c11">
         <h1 class="mainhead">PICK YOUR SPOT</h1>
         <p class="mainp">Just click the buttons below to toggle between SignIn & SignUp</p>
      </div>
      <div id="left"><h1 class="s1class"><span>SIGN</span><span class="su">IN</span>
      </h1></div>
      <div id="right"><h1 class="s2class"><span>SIGN</span><span class="su">UP</span></h1></div>
   </div>
   <div class="c2">

   <form action=""class="singup" method="post"></form>
   
      <form class="signup" method="GET">
         <h1 class="signup1"></h1>
         <br><br><br><br>
			<input name="name" type="text" placeholder="Username..." class="username"  value="<?php echo "$name" ?>"/>
			

         
         <input name="email" type="email" placeholder="Email*" class="username" value="<?php echo "$eail" ?>"/>

         <input name="num" type="number" placeholder="Number*" class="username"  value="<?php echo "$num" ?>"/>

         <input name="roll" type="number" placeholder="Roll-Number*" class="username"  value="<?php echo "$roll" ?>"/>
			
			<input name="pass" type="password" placeholder="Password*" class="username" value="<?php echo "$pass" ?>"/>
         <br/>
         <button name="submit" class="btn">UPDATE</button>
      </form>      
   </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>


<?php

if (isset($_GET['submit'])) {
   # code...
   // Query 
   $name   =$_GET['name'] ;
   $roll  =$_GET['roll'] ;
   $eail =$_GET['email'] ; 
   $num  =$_GET['num']  ;
   $pass =$_GET['pass'] ;

$query = "UPDATE USER SET roll='$roll', name = '$name' , email = '$eail' , num = '$num' , pass = '$pass' WHERE roll = '$roll'"  ;   
$link  =mysqli_query($conn  ,$query) ; 

if ($link) {
   # code...
   echo "UPDARED" ; 
}else{
   echo "ERROR --- EDIT " ; 
}
}


?>