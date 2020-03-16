<?php
include("connection_db.php") ; 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="assets/css/gradient-navbar.css">

    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand" href="#"><i class="icon ion-ios-infinite"
                    id="brand-logo"></i></a><button class="navbar-toggler" data-toggle="collapse"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
    </nav>
    <div class="login-card"><img class="profile-img-card"  src="assets/img/avatar_2x.png">
        <p class="profile-name-card"> </p>
        
        
        <!-- form -->
        <form class="form-signin" method="POST">
            <span class="reauth-email"> </span>
            <input class="form-control" type="email"   name="email" placeholder="Email address" autofocus="">
                <input class="form-control" type="password"  name="pass"  placeholder="Password">
            <div class="checkbox">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3">
                <label
                        class="form-check-label" for="formCheck-3">Remember me</label></div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="submit">Sign in</button>
        </form>
        <!-- End...  -->
        
        <a class="forgot-password" href="#">Forgot your password?</a>
    </div>
    <div></div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                        class="icon ion-social-snapchat"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark-1.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
</body>

</html>


<?php

if (isset($_POST['submit'])) {
    # code...

    // first input fron db and then get check from db 
    $email  = $_POST['email'] ; 
    $pwd  = $_POST['pass'] ; 

    // query  
    $query = "SELECT * FROM user WHERE EMAIL = '$email' &&  PASS ='$pwd'" ; 
    $data = mysqli_query($conn , $query) ; 
    $total = mysqli_num_rows($data) ; 
    if ($total == 1) {
        # code...
      header('location:display.php') ; 
    }else {
        echo "faild";
        }
}

?>