<?php
	session_start();
if(isset($_SESSION['username']))
{
	header("location:welcomeemployee.php");
}

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee Login</title>
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

  
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
	
	
  <link href="css/style.css" rel="stylesheet">
	
	<style>
		
		h1,h2,h3,h4{
   		font-family: "Montserrat", sans-serif;
  		font-weight: 400;
  		margin: 0 0 20px 0;
 	    padding: 0;
	    text-align: center;
		color: crimson;
}
		
		
	
    .login-box{
    width: 360px;
    height: 420px;
    background: rgba(0,0,0,0.6);
    color: #fff;
    top: 455%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box; 
    padding: 70px 40px;
}

.avatar{
    width: 185px;
    height: 150px;
    border-radius: 50%;
    position: absolute;
    top:-28%;
    left: calc(50% - 91px);
}
		
		
	.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	color: crimson;;
}

.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"],input[type="password"]
{
    border: :none;
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
    background: crimson; 
    color:#fff;
    font-size: 18px;
    border-radius: 20px;
	top: 30px;
}

.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #30DC59;
    color: #1c8adb;
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
		
.modal
{
 	top: 180px;
}		
	
	</style>

	
	
</head>	
<body>
	
	
	
	
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Employee Login</a></h1>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="home.php">Home</a></li>
			<li> <a href="adminlogin.php">Admin Login</a> </li>
			<li class="menu-active"><a href="#intro">Employee Login</a></li>
		 </ul>
      </nav>
    </div>
			<div class="login-box">
		<img src="img/employee.png" class="avatar" alt="Image Not Found">
        <h2><b>Employee</b></h2>
        <form action="#" method="POST">
			<br>
            <p> Username  </p> 
            <input type="text" name="user" id="user" placeholder="Enter Email ID" autocomplete="off">
			<br><br>
            <p> Password </p>
            <input data-toggle="password"
       				 data-placement="after"
       				 class="form-control"
        				type="password"
        				placeholder="Enter Password"
        				data-eye-class="material-icons"
        				data-eye-open-class="visibility"
       				    data-eye-close-class="visibility_off"
       					 data-eye-class-position-inside="true" name="pass" id="pass">
					<br><br>
            <input type="submit" id="btn" name="submit" value="Login">
			
			
			<u><a href="#" data-toggle="modal" data-target="#myModal"> Have you forgotten your password</u> ? </a>
			
			
			
  
			
			
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
	

	<div class="modal fade" id="myModal" role="dialog">
		
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-titel">Enter Your Username, And We Will Send Your Password To Your Email Address.</h4>
        </div>
        <div class="modal-body" align="center">
          <form method="POST">
			<input type="text" name="funame" id="funame" placeholder="Enter Your Username" style="width: 220px; text-align: center;height: 30px;border-radius: 6px;outline: none; border-bottom-color: lightgreen; border-top-color: lightgreen; border-right-color: lightgreen; border-left-color: lightgreen;">
			  <br>
			  <br>
				<button type="submit" class="btn btn-success" name="btn">Send Password</button>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	
	
	
	<section id="intro">
		
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
			
          <div class="carousel-item active">
			 
            <div class="carousel-background"><img src="img/intro-carousel/9.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/10.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/16.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/20.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/24.jpg" alt=""></div>
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

$result=mysqli_query($link,"select * from employee where uname='$username' and password='$password'") or die("failed to query database".mysqli_error($link));
	
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION["username"] = $username;
		if(!isset($_SESSION['username']))
		{	
		echo "<script>alert('wrong')</script>";
		}
		else
		{
		  echo"<script>location.href='welcomeemployee.php'</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid ID or Password.')</script>";
	}
	
	mysqli_close($link);
		
}
?>



<?php
	if(isset($_POST['btn']))
	{
		$funame = $_POST['funame'];
		$conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
		$query = "select * from employee where uname like '$funame'";
		$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result) > 0)
			{
				if($row = mysqli_fetch_assoc($result))
				{

					$uname=$row['uname'];
					$password=$row['password'];
					$email=$row['email'];
	
	

				if($funame!=$uname)
				{
					echo "<script>alert('Username Does Not Exist');</script>";
				}
	
	 	 	else if($funame==$uname)
								{	
											$mailto=$email;
											$mailsub='Password';
											$mailmsg='Your forgotten Password Request Is Recived. Your Password is here: '.$password.'. Use this password to login. Thank You.';
											error_reporting(E_ALL);
											require("PHPMailer_5.2.4/class.phpmailer.php");

											$mail=new PHPMailer();

											$mail->IsSMTP();
											$mail->SMTPDebug=0;
											$mail->From = "//email id";
											$mail->FromName = "Shakya Das";
											$mail->Host="smtp.gmail.com";
											$mail->SMTPSecure='ssl';
											$mail->Port=465;
											$mail->SMTPAuth=true;

											$mail->Username='//email id ';
											$mail->Password='//password';
											$mail->From='//email id';
											$mail->FromName='Shakya Das';
											$mail->IsHTML(true);

											$mail->Subject=$mailsub;
											$mail->Body=$mailmsg;
											$mail ->AddAddress($mailto);

		
				if($mail ->Send())

						{
							echo "<script>alert('Mail Sent Successfully')</script>";
							echo "<script>location.href='employeelogin.php'</script>";
						}

						else
						{
						echo "<script>alert('Failed To Sent Mail, Verify Your mail Address.')</script>";
						}	
			}
		}
	}
		
				else
				{
					echo "<script>alert('Username Does Not Exist, Enter Your Valid Username.');</script>";
				}
		mysqli_close($conn);
	
}
	?>


