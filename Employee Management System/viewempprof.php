<?php
session_start();
if(!isset($_SESSION['username'])){
        echo "<script>location.href='adminlogin.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Admin Add Employee</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeadmin.php">Admin Home</a></li>
          <li><a href="addemployee.php" >Add Employee</a></li>
          <li class="menu-active"><a href="viewall.php">View All Employee</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>
	<br><br><br><br><br><br><br><br><br>
	
    <style>
        #photo{height:200px;width:190px;}
        #back{
            background-image:url("img/intro-carousel/34.jpg");
            background-size:cover;
        }
        h3,h4
		{
            color:white;
        }
		h4{
			text-align: center;
		}
		
		span,label
		{
			color: white;
			font-weight: bold;
			font-size: 18px;
		}
		
		img	
		{
		border-radius: 80px;
		}
		
		.pic{
	width:250px;
	height:250px;
}
.picbig{
	position: absolute;
	width:0px;
	-webkit-transition:width 0.3s linear 0s;
	transition:width 0.3s linear 0s;
	z-index:10;
}
.pic:hover + .picbig{
	width:500px;
	height: 500px;
}
		
		
    </style>
</head>
<body id="back">

    <?php
        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
        $name=$_POST['ID'];
        //echo "<script>alert('$name')</script>";
        $query = "select * from employee where uname='$name'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            
            $row = mysqli_fetch_assoc($result);
            
            $empid=$row['empid'];
            $title=$row['title'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $uname=$row['uname'];
            $password=$row['password'];
            $photo=$row['photo'];
            $mobile=$row['mobile'];
            $dob=$row['dob'];
            $email=$row['email'];
            $nationality=$row['nationality'];
            $c_address=$row['c_address'];
            $p_address=$row['p_address'];
            $gender=$row['gender'];
            $doj=$row['doj'];
            $type=$row['type'];
            $basic=$row['basic'];
            $hra=$row['hra'];
            $conveyance=$row['conveyance'];
            $medical=$row['medical'];
            $special=$row['special'];
            $provident=$row['provident'];
            $bankname=$row['bankname'];
            $account=$row['account'];
            $pan=$row['pan'];
            $m_degree=$row['m_degree'];
            $m_institute=$row['m_institute'];
            $m_year=$row['m_year'];
            $m_cgpa=$row['m_cgpa'];
            $b_degree=$row['b_degree'];
            $b_institute=$row['b_institute'];
            $b_year=$row['b_year'];
            $b_cgpa=$row['b_cgpa'];
            $f_name=$row['f_name'];
            $m_status=$row['m_status'];
            $s_name=$row['s_name'];
         }

    ?>
    
    <div class="container">
    <div class="row">
        <div class="col-md-3 box text-center"><?php echo"<td>"."<img class='pic' src='".$row['photo']."' alt= 'Image Not Found' style=height:250px; width=250px>"."<img class='picbig' src='".$row['photo']."' alt= ''>"."</td>"; ?> </div>    
        <div class="col-md-1"></div>
        <div class="col-md-3">
        <div class="row"><h3 class="page-header"><?php echo $title." ".$fname." ".$lname ?></h3></div>
        <div class="row"><h3><?php echo "EMP10".$empid ?></h3></div>
        </div>
        <div class="col-md-3">
			<br><br>
		
		</div>
        <div class="col-md-2.5">
        <br><br><br><br><br><br><br><br>
            <div class="box-sm text-center"><label>Password&nbsp;:&nbsp;</label><span id="password"><?php echo $password ?></span></div>
			<div><button type="button" class="btn btn-primary" onClick="window.print();"><span class="glyphicon glyphicon-print"></span>  Print Details </button></div>
        </div>
    </div>
    </div>
    <br><br>
    
    
    <div class="container-fluid row">
    <div class="col-md-5 box" style="margin-left:80px;">
        <h3 class="page-header text-center">Personal Information</h3><br>
        <table class="table box-sm">
            <tr><td><label>Username</label></td><td><span id="uname"><?php echo $uname ?></span></td></tr>
            <tr><td><label>Date of Birth</label></td><td><span id="dob"><?php echo $dob ?></span></td></tr>
            <tr><td><label>Age</label></td><td><span id="age"><?php   $diff=date_diff(date_create($dob),date_create(date("Y-m-d")));    echo $diff->format("%y years"); ?></span></td></tr>
            <tr><td><label>Gender</label></td><td><span id="gender"><?php echo $gender ?></span></td></tr>
            <tr><td><label>Mobile</label></td><td><span id="mobile"><?php echo $mobile ?></span></td></tr>
            <tr><td><label>Email</label></td><td><span id="email"><?php echo $email ?></span></td></tr>
            <tr><td><label>Father's Name</label></td><td><span id="f_name"><?php echo $f_name ?></span></td></tr>
            <tr><td><label>Marital Status</label></td><td><span id="m_status"><?php echo $m_status ?></span></td></tr>
            <tr><td><label>Spouse Name</label></td><td><span id="s_name"><?php echo $s_name ?></span></td></tr>
            <tr><td><label>Nationality</label></td><td><span id="nationality"><?php echo $nationality ?></span></td></tr>
        </table>
    </div>

    <div class="col-md-5 box" style="margin-left:80px;margin-bottom:40px;">
        <h3 class="page-header text-center">Education Details</h3>
        <table class="table box-sm">
            <tr><td colspan="2"><h4>Master Degree Details</h4></td></tr>
            <tr><td><label>Degree</label></td><td><span id="m_degree"><?php echo $m_degree ?></span></td></tr>
            <tr><td><label>Institute</label></td><td><span id="m_institute"><?php echo $m_institute ?></span></td></tr>
            <tr><td><label>Passing year</label></td><td><span id="m_year"><?php echo $m_year ?></span></td></tr>
            <tr><td><label>CGPA/Percentage</label></td><td><span id="m_cgpa"><?php echo $m_cgpa ?></span></td></tr>
        </table>
        <table class="table box-sm" style="margin-bottom:0px;">
            <tr><td colspan="2"><h4>Bachelor Degree Details</h4></td></tr>
            <tr><td><label>Degree</label></td><td><span id="b_degree"><?php echo $b_degree ?></span></td></tr>
            <tr><td><label>Institute</label></td><td><span id="b_institute"><?php echo $b_institute ?></span></td></tr>
            <tr><td><label>Passing year</label></td><td><span id="b_year"><?php echo $b_year ?></span></td></tr>
            <tr><td><label>CGPA/Percentage</label></td><td><span id="b_cgpa"><?php echo $b_cgpa ?></span></td></tr>
        </table>
        
    </div>
    </div>
    
    <div class="container-fluid row">
    <div class="col-md-3 box" style="margin-left:80px;margin-bottom:40px;">
        <h3 class="page-header text-center">Joining Details</h3><br>
        <table class="table box-sm">
            <tr><td><label>Type of Employee</label></td><td><span id="type"><?php echo $type ?></span></td></tr>
            <tr><td><label>Joined On</label></td><td><span id="doj"><?php echo $doj ?></span></td></tr>
        </table>
    </div>

    <div class="col-md-7 box" style="margin-left:80px;margin-bottom:40px;">
        <h3 class="page-header text-center">Payment Details</h3>
        <table class="table box-sm">  
            <tr><td><label>Basic Pay</label></td><td><span id="basic"><?php echo $basic ?></span></td>
            <td><label>HRA</label></td><td><span id="hra"><?php echo $hra ?></span></td>
            <td><label>Conveyance</label></td><td><span id="conveyance"><?php echo $conveyance ?></span></td></tr>
            <tr><td><label>Medical Allowance</label></td><td><span id="medical"><?php echo $medical ?></span></td>
            <td><label>Special Allowance</label></td><td><span id="special"><?php echo $special ?></span></td>
            <td><label>Provident Fund</label></td><td><span id="provident"><?php echo $provident ?></span></td></tr>
        </table>
        
    </div>
    </div>
    
    <div class="container-fluid row">
    <div class="col-md-3 box" style="margin-left:80px;margin-bottom:40px;">
        <h3 class="page-header text-center">Bank Details</h3><br>
        <table class="table box-sm">
            <tr><td><label>Bank Name</label></td><td><span id="bankname"><?php echo $bankname ?></span></td></tr>
            <tr><td><label>Account No.</label></td><td><span id="account"><?php echo $account ?></span></td></tr>
            <tr><td><label>PAN</label></td><td><span id="pan"><?php echo $pan ?></span></td></tr>
        </table>
    </div>

    <div class="col-md-7 box" style="margin-left:80px;margin-bottom:40px;">
        <h3 class="page-header text-center">Address Details</h3>
        <table class="table box-sm">  
            <tr><td><label>Current Address</label></td><td><span id="c_address"><?php echo $c_address ?></span></td>
            <tr><td><label>Permanent Address</label></td><td><span id="p_address"><?php echo $p_address ?></span></td>
        </table>
        
    </div>
	
    </div>
	<div align="center">
	
    </div>
	<br>
	
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
  <script src="js/main.js"></script>
</body>
</html>