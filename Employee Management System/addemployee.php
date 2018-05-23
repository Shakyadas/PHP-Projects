<?php
session_start();
if(!isset($_SESSION['username'])){
     header("location:adminlogin.php");
    }

?>
<!DOCTYPE html>
<html>
	
<head>
	
 
	<meta charset="utf-8">
  <title>All EMployee List</title>
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

  
  <link href="css/style.css" rel="stylesheet">
    <style>
        body{
            background: url("img/intro-carousel/28.jpg");
            background-size:cover;
            background-repeat:repeat-y;
            color:black;
        }
        .box{
            background: rgba(0,0,0,0.1);
        }
        .add_employee_form span{
            color:red;
        }
		
		
        p{
            color:red;
        }
		
		.form-control input[type="text"]
		{
			color: blue;
		}
		
		
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px;}
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;background-color:white;}
    </style>
   
    <script>
    
        /*function checkUserName()
		{
			var x=document.getElementById('uname').value;
			if (x!="")
			{
				document.getElementById('uname').style.background="url(../../img/checking.gif) no-repeat";
				document.getElementById('uname').style.backgroundSize="25px 25px";
				document.getElementById('uname').style.backgroundPosition="right";
				var ajx = new XMLHttpRequest();
				ajx.onreadystatechange=function()
				{
                    //alert(this.readyState);
                    alert(this.status);
					if(this.readyState==4 && this.status==200)
					{
                        alert(this.responseText);
						if(this.responseText=="length of uname should be between 3 to 16")
						{
							document.getElementById('uname').style.background="url(../../img/error.gif) no-repeat";
							document.getElementById('uname').style.backgroundSize="25px 25px";
							document.getElementById('uname').style.backgroundPosition="right";
							document.getElementById('uname').title="Lenght of uname should be between 3 to 16";
						}
						else if(this.responseText=="not alphanumeric")
						{
							document.getElementById('uname').style.background="url(../../img/error.gif) no-repeat";
							document.getElementById('uname').style.backgroundSize="25px 25px";
							document.getElementById('uname').style.backgroundPosition="right";
							document.getElementById('uname').title="uname should be alphanumeric";
						}
						else if(this.responseText=="uname taken")
						{
							document.getElementById('uname').style.background="url(../../img/error.gif) no-repeat";
							document.getElementById('uname').style.backgroundSize="25px 25px";
							document.getElementById('uname').style.backgroundPosition="right";
							document.getElementById('uname').title="This uname is already taken (Try another one)";
						}
						else if(this.responseText=="ok")
						{
							document.getElementById('uname').style.background="url(../../img/ok.gif) no-repeat";
							document.getElementById('uname').style.backgroundSize="25px 25px";
							document.getElementById('uname').style.backgroundPosition="right";
							document.getElementById('uname').title="uname accepted";
						}
					}
				}
				ajx.open("POST","checkExistingUser.php",true);
				ajx.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				ajx.send("checkuname="+x);
			}
			else
			{
				document.getElementById('uname').style.background="none";
			}
		}*/
    
    </script>
</head>
<body> 
	<br><br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">New Employee Registration</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeadmin.php">Admin Home</a></li>
          <li class="menu-active"><a href="addemployee.php">Add Employee</a></li>
          <li><a href="viewall.php">View All Employee</a></li>
		  <li><a href="leave_main.php">Employee Leave Management</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	<br><br>
	
	
    

    
    <div style="text-align:center">
    <h3 class="page-header">Let's Welcome a new Member</h3>
    </div>
    <br><br>
    
    <div class="container add_employee_form">
    <form action="" method="POST" enctype="multipart/form-data" id="add_emp_form">
        <h4 class="page-header" align="center">Personal Details</h4>
        <div class="box">
            <div class="form-group">  
                  <div class="row">
                      <div class="col-md-2 form-inline">
                        <label for="title">Title&nbsp;</label>
                      <select class="form-control" name="title" id="title" style="height: 50px">
                        <option value="Mr." style="background-color: #f1f1f1; color: black" selected>Mr.</option>
                        <option value="Mrs." style="background-color: #f1f1f1; color: black">Mrs.</option>
                      </select>
                      </div> 

                     <div class="col-md-1"><label for="fname">First&nbsp;Name<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" pattern=[A-Za-z]{2,30} title="Only alphabet" onblur="checkFName()" required></div>                 
                     <div class="col-md-2 text-right"><label for="lname">&nbsp;&nbsp;Last&nbsp;Name<span>&#42;</span></label></div>
                     <div class="col-md-3"><input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" pattern=[A-Za-z]{2,30} title="Only alphabet" onblur="checkLName()" required></div>    
                       
                  </div>
                
                  <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3"><p id="errfname"></p> </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-3"><p id="errlname"></p></div>
                  </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-1"><label for="uname">Username<span>&#42;</span></label></div>
                    <div class="col-md-5">
                    <input type="text" class="form-control has-success" id="uname" placeholder="Enter username" name="uname" onblur="checkUName()" onkeyup="checkUserName()" required></div> 
                    <div class="col-md-2 text-right"><label for="photo">&nbsp;&nbsp;Photo</label></div>
                    <div class="col-md-3"><input type="file" class="form-control" id="photo" name="photo" style="height:45px" /></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erruname"></p></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-1"><label for="mobile">Mobile<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" onkeypress="return( event.charCode >47 && event.charCode < 58)" maxlength="10" minlength="10" required></div> 
                    <div class="col-md-2 text-right"><label for="dob">&nbsp;&nbsp;Date&nbsp;of&nbsp;Birth<span>&#42;</span></label></div>           
                    <div class="col-md-3"><input type="date" class="form-control" id="dob" name="dob" onblur="checkDOB()" required/></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="errmobile"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3"><p id="errdob"></p></div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                   <div class="col-md-1"><label for="email">Email<span>&#42;</span></label></div>
                    <div class="col-md-5"><input type="email" class="form-control" id="email" placeholder="Enter email address" name="email" onblur="checkEmail()" required></div> 
                    <div class="col-md-1"></div>
                    <div class="col-md-1"><label for="nationality">Nationality</label></div>
                    <div class="col-md-2">
                        <input list="country_list" name="nationality" id="nationality" class="form-control" onchange="checkNationality()" >
                        <datalist id="country_list">
                        <?php  
							include("country_list.php"); ?>
                        </datalist>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5"><p id="erremail"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p id="errnationality"></p></div>
                </div>
            </div>

             <div class="form-group">
                <div class="row">
                   <div class="col-md-1"><label for="address">Address&nbsp;</label></div>
                    <div class="col-md-5">
                    <textarea class="form-control" id="p_address" name="p_address" row="4" placeholder="Enter permanent address"></textarea></div> 
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <table id="gender">
                            <tr><th style="padding-top:10px;"><label>&nbsp;&nbsp;Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></th>
                                <td><label class="radio radio-inline" ><input type="radio" name="gender" value="male" checked/>Male&nbsp;&nbsp;</label></td>
                                <td><label class="radio radio-inline" ><input type="radio" name="gender" value="female"/>Female</label></td>
                            </tr>
                        </table>
                    </div> 
                 </div>
            </div>
        </div>
        
        <h4 class="page-header"align="center">Employment Details</h4>
        
        <div class="box">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-1"><label for="empid">Employee&nbsp;ID&nbsp;</label></div>&nbsp;
                    <div class="col-md-3"><input type="text" class="form-control" id="empid" name="empid" value="EMP####" readonly="readonly" /></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2 text-right"><label for="doj">Date&nbsp;of&nbsp;Joining<span>&#42;</span></label></div>
                    <div class="col-md-2"><input type="date" class="form-control" id="doj" name="doj" onblur="checkDOJ()" style="width: 180px" required/></div>                    
                </div>
                <div class="row">
                    <div class="col-md-9"></div>       
                    <div class="col-md-3"><p id="errdoj"></p></div>       
                </div>
            </div>
            <div class="form-group form-inline">
				<div class="row">
                    <div class="col-md-7"></div>
					<div class="col-md-2 text-center"><label for="type">Type&nbsp;of&nbsp;Employee</label></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="col-md-2">	
						<select class="form-control" name="type" style="height: 40px">
							<option value="Permanent" style="background-color: #f1f1f1; color: black">Permanent</option>
							<option value="Contract"  style="background-color: #f1f1f1; color: black">Contract</option>
						</select>
					</div>  
				</div>
			</div>
        </div>
        
        <h4 class="page-header" align="center">Salary Details</h4>
        
        <div class="box">
           <div class="form-group">
                <div class="row">
                    <div class="col-md-2"><label for="basic">Basic&nbsp;Salary<span>&#42;</span></label></div>
                    <div class="col-md-2"><input type="text" class="form-control" id="basic" name="basic" onblur="checkBasic()" required/></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 text-right"><label for="hra">HRA</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" id="hra" name="hra" onblur="checkHRA()"/></div>  
                    <div class="col-md-2 text-right"><label for="conveyance">Conveyance</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" id="conveyance" name="conveyance" onblur="checkConveyance()"/></div>    
               </div>  
               <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3"><p id="errbasic"></p></div>
                <div class="col-md-1"></div>
                <div class="col-md-3"><p id="errhra"></p></div>
                <div class="col-md-1"></div>
                <div class="col-md-3 text-right"><p id="errconveyance"></p></div>
               </div>
            </div>
            <div class="form-group">
                 <div class="row">
                    <div class="col-md-2"><label for="medicalAllowance">Medical&nbsp;Allowance&nbsp;</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" id="medical" name="medical" onblur="checkMedical()"/></div>
                    <div class="col-md-2 text-right"><label for="specialAllowance">Special&nbsp;Allowance&nbsp;</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" id="special" name="special" onblur="checkSpecial()"/></div>
                    <div class="col-md-2 text-right"><label for="providentfund">Provident&nbsp;Fund&nbsp;</label></div>
                    <div class="col-md-2"><input type="text" class="form-control" id="provident" name="provident" onblur="checkProvident()"/></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3"><p id="errmedical"></p></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3"><p id="errspecial"></p></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3 text-right"><p id="errprovident"></p></div>
               </div>
            </div>
        </div>
        
        <h4 class="page-header"align="center">Bank Account Details</h4>
        
        <div class="box">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"><label for="bankname">Bank&nbsp;Name<span>&#42;</span></label></div>
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Enter Bank Name" id="bankname" name="bankname" onblur="checkBankName()" required/></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6"><p id="errbankname"></p></div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col-md-2"><label for="account">Account&nbsp;Number<span>&#42;</span></label></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter Account Number" id="account" name="account" onblur="checkAccount()" required/></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 text-right"><label for="pan">PAN&nbsp;</label></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter PAN" id="pan" name="pan" onblur="checkPAN()" required/></div>
                </div> 
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4"><p id="erraccount"></p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4"><p id="errpan"></p></div>
                </div>
            </div>
        </div>
        
        <br><br>
        
        <div class="form-group">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <button class="btn btn-success btn-lg btn-outline-* btn-block" id="submit" name="submit">Add&nbsp;Employee</button>
                </div>
				<div class="col-md-4"></div>
            </div>
        </div>
    </form>
    </div>
    
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



<?php

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $empid = $_POST['empid'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $nationality = $_POST['nationality'];
    $p_address = $_POST['p_address'];
    $gender = $_POST['gender'];
    $doj = $_POST['doj'];
    $type = $_POST['type'];
    $basic = $_POST['basic'];
    $hra = $_POST['hra'];
    $conveyance = $_POST['conveyance'];
    $medical = $_POST['medical'];
    $special = $_POST['special'];
    $provident = $_POST['provident'];
    $bankname = $_POST['bankname'];
    $account = $_POST['account'];
    $pan = $_POST['pan'];
	$password=$_POST['mobile'];
    $target = "profile_photos/photoid".basename($_FILES['photo']['name']);

    $conn = mysqli_connect("localhost","root","","project") or die($conn);

    $empid = mysqli_real_escape_string($conn,$empid);
    $title = mysqli_real_escape_string($conn,$title);
    $fname = mysqli_real_escape_string($conn,$fname);
    $lname = mysqli_real_escape_string($conn,$lname);
    $uname = mysqli_real_escape_string($conn,$uname);
	$password = mysqli_real_escape_string($conn,$password);
    $photo = $_FILES['photo']['name'];
	$tmp_name= $_FILES['photo']['tmp_name'];
  	$new_name="profile_photos/photoid".$username.'@'.time().'.jpg';
    $mobile = mysqli_real_escape_string($conn,$mobile);
    $dob = mysqli_real_escape_string($conn,$dob);
    $email = mysqli_real_escape_string($conn,$email);
    $nationality = mysqli_real_escape_string($conn,$nationality);
    $p_address = mysqli_real_escape_string($conn,$p_address);
    $gender = mysqli_real_escape_string($conn,$gender);
    $doj = mysqli_real_escape_string($conn,$doj);
    $type = mysqli_real_escape_string($conn,$type);
    $basic = mysqli_real_escape_string($conn,$basic);
    $hra = mysqli_real_escape_string($conn,$hra);
    $conveyance = mysqli_real_escape_string($conn,$conveyance);
    $medical = mysqli_real_escape_string($conn,$medical);
    $special = mysqli_real_escape_string($conn,$special);
    $provident = mysqli_real_escape_string($conn,$provident);
    $bankname = mysqli_real_escape_string($conn,$bankname);
    $account = mysqli_real_escape_string($conn,$account);
    $pan = mysqli_real_escape_string($conn,$pan);
	
	$mailto=$_POST['email'];
	$mailsub='Welcome Employee';
	$mailmsg='Your Id is: '.$uname.' And Password is: '.$password;
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

	$mail->Username='//email id';
	$mail->Password='//password';
	$mail->From='//email id';
	$mail->FromName='Shakya Das';
	$mail->IsHTML(true);

	$mail->Subject=$mailsub;
	$mail->Body=$mailmsg;
	$mail ->AddAddress($mailto);
	
	

    $result = mysqli_query($conn,"insert into employee values ('','$title','$fname','$lname','$uname','$password','$new_name','$mobile','$dob','$email','$nationality','$p_address','$p_address','$gender','$doj','$type','$basic','$hra','$conveyance','$medical','$special','$provident','$bankname','$account','$pan','','','','','','','','','','','','')") or die("Query Failed".mysqli_error($conn));

    if(move_uploaded_file($tmp_name,$new_name))
	{
		echo "<script>alert('Profile Photo Is Uploaded')</script>";
		
		
		if($mail ->Send())
		
		{
    		echo "<script>alert('Mail Sent Successfully')</script>";
		}
	
		else
		{
			echo "<script>alert('Failed To Sent Mail, Verify Your mail Address.')</script>";
		}
		
		echo "<script>alert('Registration Successfull')</script>";
		echo "<script>location.href='welcomeadmin.php'</script>";

	}
	else
	{
		echo "<script>alert('Error In Uploading Profile Photo')</script>";
		echo "<script>alert('Registration Successfull')</script>";
		
	}
	
}
?>