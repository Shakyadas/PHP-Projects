<?php
	session_start();
if(isset($_SESSION['username']))
{
	header("location:welcomeadmin.php");
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>Admin Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap-v3/css/bootstrap.css">
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" />

  
  <link href="css/style.css" rel="stylesheet">
	<style>
		
		h1,h2,h3,h4{
   		font-family: "Montserrat", sans-serif;
  		font-weight: 400;
  		margin: 0 0 20px 0;
 	    padding: 0;
	    text-align: center;
		color: #30DC59
}
	
    .login-box{
    width: 360px;
    height: 420px;
    background: rgba(0,0,0,0.6);
    color: #fff;
    top: 450%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box; 
    padding: 70px 40px;
}

.avatar{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    position: absolute;
    top:-21%;
    left: calc(50% - 75px);
}
		
		
	.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	color: #30DC59;
}

.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"],input[type="password"]
{
    border:none;
    border-bottom: 1px solid #fff;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    background: transparent;
    outline: none;
    height: 25px;
    color: #fff;
    font-size: 16px;
}
		

.login-box input[type="submit"]
{
    border:none;
    outline: none;
    height: 40px;
    background: #30DC59; 
    color:#fff;
    font-size: 18px;
    border-radius: 20px;
	top: 30px;
}

.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #1c8adb;
    color: #30DC59;
}
		
		input[type="password"]{
			color: #FFFFFF;
		}

.login-box a
{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}

.login-box a:hover
{
    color:#1c8adb;
}

input[type="password"]
		{
		border:none;
		border-bottom: 1px solid #fff;
		border-top: 0;
		border-left: 0;
		border-right: 0;
		background: transparent;
		outline: none;
		height: 25px;
		color: #fff;
		font-size: 16px;
		width: 5px;
		}
		
		
	</style>
	
 
</head>

<body>
	
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Admin Login</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="home.php">Home</a></li>
          <li class="menu-active"><a href="#about">Admin Login</a></li>
          <li><a href="employeelogin.php">Employee Login</a></li>
        </ul>
      </nav>
    </div>
		
		<div class="login-box">
        <img src="img/Admin.png" class="avatar" alt="Image Not Found">
        <h2><b>ADMIN</b></h2>
        <form action="#" method="POST">
			<br>
            <p> Admin User ID  </p> 
            <input type="text" id="user" placeholder="Enter Email ID" name="user" autocomplete="off" >
			<br><br>
            <p> Admin Password </p>
      	<input data-toggle="password"
        data-placement="after"
        class="form-control"
        type="password"
	    style="outline:none"
        placeholder="Enter Password"
        data-eye-class="material-icons"
        data-eye-open-class="visibility"
        data-eye-close-class="visibility_off"
        data-eye-class-position-inside="true" name="pass">
			<br><br>
            <input type="submit" id="btn" name="submit" value="Login">
			
			<script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap-v3/js/bootstrap.js"></script>
  <script src="bootstrap-show-password.js"></script>
  <script>
    $('[data-attr="show-password"]').password({
      placement: 'before',
      eyeClass: 'material-icons',
      eyeOpenClass: 'visibility',
      eyeCloseClass: 'visibility_off',
      eyeClassPositionInside: true
    })
  </script>
		
			
        </form>      
        </div>
  </header>
	
	
	
	<section id="intro">
		
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
			
          <div class="carousel-item active">
			 
            <div class="carousel-background"><img src="img/intro-carousel/19.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/17.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/21.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/22.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/23.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
	</section>	
		
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
	
</body>
</html>

<?php

if(isset($_POST['submit']))
{
 
 $username= $_POST['user'];
 $password= $_POST['pass'];
 

 $link=mysqli_connect("localhost","root","","project") or die($link); 
  $username =mysqli_real_escape_string($link,$username);
  $password =mysqli_real_escape_string($link,$password);

$result=mysqli_query($link,"select * from admin where id='$username' and password='$password'") or die("failed to query database".mysqli_error($link));
	
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION["username"] = $username;
		if(!isset($_SESSION['username']))
		{	
		echo "<script>alert('Invalid ID or Password. You are in admin page if you are not admin then go to employee Login.')</script>";
		}
		else
		{
		  echo"<script>location.href='welcomeadmin.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid ID or Password. You are in admin page if you are not admin then go to employee Login.')</script>";
	}
		
}
?>
