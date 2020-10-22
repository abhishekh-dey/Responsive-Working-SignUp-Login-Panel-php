<?php 

session_start();
if(!isset($_SESSION['user'])){
    header('location:registration.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Registration Confirmation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/templatemo-main.css">
        <link rel="stylesheet" href="css/owl-carousel.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    </head>

<body>

    

    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1><img src="img/b_w.png"></h1><br>
                <!--<h1>Welcome</h1><br>-->
                <span>Dear <em><?php  echo $_SESSION[ 'user' ] ?>. </em></span><br> <br>
                <span>Your Registration was successful.</span>
                <div class="primary-button">
                    <a href="index.php">Login</a>
                </div>
            </div>
        </div>
    </div>


   
</body>
</html>