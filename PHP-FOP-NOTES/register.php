<?php


require('connection_db.php'); 
require('controller.php') ; 
require('image.php') ; 

error_reporting(0) ; 

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
   
      <form class="signup" method="POST" enctype="multipart/form-data">
         <h1 class="signup1">SIGN UP</h1>
         <br><br><br><br>
			<input name="name" type="text" placeholder="Username-" class="username" />
			
         
         
         <input name="email" type="email" placeholder="Email*" class="username"/>

         <input name="num" type="number" placeholder="Number*" class="username"/>

         <input name="roll" type="number" placeholder="Roll-Number*" class="username"/>
			
         <input name="pass" type="password" placeholder="Password*" class="username"/>
         
         <input type="file" name="image"  class="username">

         <button name="submit" class="btn">Sign Up</button>
      </form>
      <form class="signin">
         
         <h1 class="signup1">SIGN IN</h1>
         <br><br><br><br>
         <input name="username" type="text" placeholder="Username*" class="username"/>
			
			<input name="password" type="password" placeholder="Password*" class="username"/>
         
         <button class="btn">Get Started</button>
         
         <br><br><br><br>
         <a href=""><p class="signup2">Forget Password?</p></a>
      </form>
      
   </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
