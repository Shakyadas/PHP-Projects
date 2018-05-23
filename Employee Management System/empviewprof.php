<?php
session_start();
if(!isset($_SESSION['username'])){
        echo "<script>location.href='employeelogin.php'</script>";
    }
else{
    $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
    $user = $_SESSION['username'];
    $query = "select * from employee where uname='$user'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        if($row = mysqli_fetch_assoc($result)) {
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
    } else {
        echo "0 results";
    }
    $emp_id = "EMP10".$empid;
}
?>


<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
	<title>Employee Profile Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link href="img/favicon.png" rel="icon">
 
	
	
	
	
	
 <link href="css/style.css" rel="stylesheet">
	
	
    <style>
        .heading{background-color:crimson;}
        .box{border:transparent;padding:20px;border-radius:5px; }
        .box-sm{border:transparent;padding:5px;border-radius:5px;}	
	
	
    
        .info h3{padding:0px;margin:5px;}
        .per_info h4{margin:5px;}
        #photo{height:200px;width:190px;}
        #edit_sign{height:20px;width:20px;}
        #personal{background-color:transparent;color:white}
        #education{background-color:transparent;color:white}
        #join_details{background-color:transparent;color:white}
        #pay_details{background-color:transparent;color:white}
        #bank_details{background-color:transparent;color:white}
        #address{background-color:transparent;color:white}
        .nameplate{background-color:transparent;color:white}
        .info{background-color:transparent;color:white}
        form span{
            color:red;
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
		
		.form-control{
			color: black;
			outline: none;
			background:transparent;
			
		}
		
		label{
			color: black;
		}
		
    </style>
    
    <script>
        function show_spouse(){
            var elem = document.getElementById("m_status");
            if(elem.value=="Married"){
                document.getElementById("spouse").style.display="block";
            }else{
                document.getElementById("spouse").style.display="none";
            }
        }
    
        function show_chg_pwd()
		{
            var elem = document.getElementById("chg_pwd");
            if(elem.style.display=="none")  elem.style.display="block";
            else    elem.style.display="none";
        }
        
		function show_pic_box()
		{
			var elem = document.getElementById("chg_pic");
            if(elem.style.display=="none")  elem.style.display="block";
            else    elem.style.display="none";
		}
        
    </script>
</head>
<body style="background-image:url(img/intro-carousel/31.jpg);background-size: cover; background-repeat: no-repeat;">
	
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Employee Details</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeemployee.php">Employee Home</a></li>
          <li class="menu-active"><a href="empviewprof.php">View Profile</a></li>
			<li class="menu-has-`children"><a href="applyleave.php">Leave</a>
            <ul>
              <li><a href="applyleave.php">Apply For Leave</a></li>
              <li><a href="lstatus.php">My Leave Request Status</a></li>
            </ul>
          </li>
		  <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container box info">
        <div class="row">
            <div class="col-md-3">
			<?php echo"<td>"."<img class='pic' src='".$row['photo']."' alt= 'Image Not Found' style=height:250px; width=250px>"."<img class='picbig' src='".$row['photo']."' alt= ''>"."</td>"; ?>
			</div>
            
            <div class="col-md-6 box nameplate">
                <div class="row">
                <div class="col-md-6"><h3 class="page-header" id="name"><?php echo $fname." ".$lname?></h3></div>
                </div><br>
                <div class="row">
                <div class="col-md-6"><h3 class="page-header" id="empid"><?php echo $emp_id ?></h3></div>
                </div><br>
                <br><br>
                <div class="row">
                <div class="col-md-6"><button type="button" class="btn btn-primary btn-sm" onClick="show_pic_box()">Change Photo</button>
				
					<div id="chg_pic" style="display:none;">
                <form action="update_profile.php" method="POST" id="chg_pic_form" enctype="multipart/form-data">
                    <div class="row form-group">
                    <div class="col-md-10"><input type="file" class="form-control" name="photo" id="photo"></div>
                    </div>
                   
                    <div class="row form-group">
                    <div class="col-md-10"><button type="submit" class="btn btn-sm btn-success" name="save_pic" >Save</button></div>
                    </div>
                </form>
                </div>
					
					
					
					
					
					
					
					
					
					
					
					</div>
                </div>
            </div>
            <div class="col-md-3 box-sm">
                <div class="row">
                    <div class="col-md-10 form-group"><button type="button" name="chg_pwd" class="btn btn-warning" onclick="show_chg_pwd()" >Change&nbsp;Password</button></div>
                </div>
                <div id="chg_pwd" style="display:none;">
                <form action="#" method="post" id="chg_pwd_form">
                    <div class="row form-group">
                    <div class="col-md-10"><input type="text" name="c_pass" class="form-control" placeholder="Enter Your Current Password" style="color:white" /></div>
                    </div>
                    <div class="row form-group">
                    <div class="col-md-10"><input type="text" name="n_pass" class="form-control" placeholder="Enter Your New Password" style="color:white"/></div>
                    </div>
                    <div class="row form-group">
                    <div class="col-md-10"><input type="text" name="r_pass" class="form-control" placeholder="Reenter Your New Password" style="color:white"/></div>
                    </div>

                    <div class="row form-group">
                    <div class="col-md-10"><button type="submit" class="btn btn-sm btn-success" name="save_pwd" >Save</button></div>
                    </div>
                </form>
					
                </div>
				<div><button type="button" class="btn btn-primary" onClick="window.print();"><span class="glyphicon glyphicon-print"></span>  Print Details </button></div>
				<br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
    <br>
    
    
    <div class="container">
        
    <div class="row">
        <div class="col-md-2"><button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-target="#personal">Personal Information</button></div>    
        <div class="col-md-1"></div>    
        <div class="col-md-9 collapse box" id="personal">
            <!---------------------------------------------------------------------------------------------->
            <div class="row">    
            <div class="col-md-11"></div>
                <div class="col-md-1"><button type="button" class="btn" name="edit_personal" data-toggle="modal" data-target="#edit_personal"><img src="edit_sign.png" id="edit_sign"/></button></div>
                <div class="modal fade" id="edit_personal" role="dialog">
                    <div class="modal-dialog">
                        <form action="update_profile.php" method="POST" id="personal_form">
                            <div class="modal-content">
                                    <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Personal Information</h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2"><label>Mobile</label></div>
                                                <div class="col-md-8"><input type="text" class="form-control" id="mobile" name="mobile" onblur='checkMobile()' value="<?php echo $mobile ?>"></div>                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8"><span id="errmobile"></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2"><label>Email</label></div>
                                                <div class="col-md-8"><input type="email" class="form-control" id="email" name="email" onblur='checkEmail()' value="<?php echo $email ?>"></div>                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8"><span id="erremail"></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-2"><label>Father's&nbsp;Name</label></div>
                                                <div class="col-md-8"><input type="text" class="form-control" id="f_name" name="f_name" onblur='checkF_name()' value="<?php echo $f_name ?>"></div>                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8"><span id="errf_name"></span></div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="color: black">
                                            <?php
                                                    $cmd = "<select class='form-control' name='m_status' id='m_status' onchange='show_spouse()'>";
                                                    $cmd = $cmd."<option value='Single' ";
                                                    if($m_status=="Single")
                                                        $cmd=$cmd."selected";
                                                    $cmd = $cmd.">Single</option>"; 
                                                    $cmd = $cmd."<option value='Married' ";
                                                    if($m_status=="Married")
                                                        $cmd=$cmd."selected";
                                                    $cmd = $cmd.">Married</option>";   
                                                    $cmd = $cmd."</select>";
                                            ?>
                                            <div class="row">
                                            <div class="col-md-2"><label>Marital&nbsp;Status</label></div>
                                            <div class="col-md-4" style="color: black">
                                                <?php echo $cmd; ?>   
                                            </div>                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group" id="spouse" >
                                            <div class="row">
                                                <div class="col-md-2"><label>Spouse&nbsp;Name</label></div>
                                                <div class="col-md-8"><input type="text" class="form-control" id="s_name" name="s_name" onblur='checkS_name()' value='<?php echo $s_name; ?>'></div>                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8"><span id="errs_name"></span></div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                <div class="modal-footer">
                                    <input type="submit" name="submit_personal" class="btn btn-info"  value="Save Changes">
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>  
            </div>
            <!-------------------------------------------------------------------------------------------->
            <h4 class="page-header">Personal Information</h4>
            <div class="box">
                <div class="row">
                <div class="col-md-4"><label>Username</label></div>
                <div class="col-md-4"><span id="uname"><?php echo $uname ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Date Of Birth</label></div>
                <div class="col-md-2"><span id="dob"><?php echo $dob ?></span></div>
                <div class="col-md-2"><label>Age</label></div>
                <div class="col-md-2"><span id="age"><?php   $diff=date_diff(date_create($dob),date_create(date("Y-m-d")));    echo $diff->format("%y years"); ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Gender</label></div>
                <div class="col-md-4"><span id="gender"><?php echo $gender ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Mobile</label></div>
                <div class="col-md-4"><span id="mobile"><?php echo $mobile ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Email</label></div>
                <div class="col-md-4"><span id="email"><?php echo $email ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Father's Name</label></div>
                <div class="col-md-4"><span id="father"><?php echo $f_name ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Marital Status</label></div>
                <div class="col-md-4"><span id="marital"><?php echo $m_status ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Spouse Name</label></div>
                <div class="col-md-4"><span id="spouse"><?php echo $s_name ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Nationality</label></div>
                <div class="col-md-4"><span id="nationality"><?php echo $nationality ?></span></div>
                </div>
            </div>
        </div>    
    </div>
    <br>
   
        
        
        
        
    <div class="row">
        <div class="col-md-2"><button type="button" class="btn btn-success btn-block" data-toggle="collapse" data-target="#education">Education</button></div>    
        <div class="col-md-1"></div>    
        <div class="col-md-9 collapse box" id="education">
            <!-------------------------------------------------------------------------------------------->
            <div class="row">
                
            <div class="col-md-11"></div>
                <div class="col-md-1"><button type="button" class="btn" data-toggle="modal" data-target="#edit_education"><img src="edit_sign.png" id="edit_sign"/></button></div>
                <div class="modal fade" id="edit_education" role="dialog">   
                    <div class="modal-dialog">
                     <form action="update_profile.php" method="post" id="education_form">
						<div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Education</h4>
                            </div>
                            
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Master Degree</label></div>
                                        <div class="col-md-9"><input type="text" class="form-control" id="m_degree" name="m_degree" value='<?php echo $m_degree; ?>'></div>                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Institue Name</label></div>
                                        <div class="col-md-9"><input type="text" class="form-control" id="m_institute" name="m_institute" value='<?php echo $m_institute; ?>'></div>                
                                    </div>           
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Passing Year</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="m_year" name="m_year" onblur="checkMYear()" value='<?php echo $m_year; ?>'></div> 
                                        <div class="col-md-3 text-right"><label>CGPA</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="m_cgpa" name="m_cgpa" onblur="checkMCGPA()" value='<?php echo $m_cgpa; ?>'></div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-5"><span id="errm_year"></span></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3"><span id="errm_cgpa"></span></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Bachelor Degree</label></div>
                                        <div class="col-md-9"><input type="text" class="form-control" id="b_degree" name="b_degree" value='<?php echo $b_degree; ?>'></div>                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Institue Name</label></div>
                                        <div class="col-md-9"><input type="text" class="form-control" id="b_institute" name="b_institute" value='<?php echo $b_institute; ?>'></div>                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Passing Year</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="b_year" name="b_year" onblur="checkBYear()" value='<?php echo $b_year; ?>'></div> 
                                        <div class="col-md-3 text-right"><label>CGPA</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="b_cgpa" name="b_cgpa" onblur="checkBCGPA()" value='<?php echo $b_cgpa; ?>'></div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-5"><span id="errb_year"></span></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3"><span id="errb_cgpa"></span></div>
                                    </div>
                                </div>             
                  
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" name="submit_education" class="btn btn-info" >Save Changes</button>
                            </div>
                        </div>
                     
                    </form>
                    </div>
                </div>  
            </div>
            
            <!---------------------------------------------------------------------------------------------->
            
            <h4 class="page-header">Master Degree Details</h4>
            <div class="box">
                <div class="row">
                <div class="col-md-4"><label>Master Degree</label></div>
                <div class="col-md-4"><span id="m_degree"><?php echo $m_degree ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Institue Name</label></div>
                <div class="col-md-4"><span id="m_institute"><?php echo $m_institute ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-2"><label>Passing Year</label></div>
                <div class="col-md-2"><span id="m_year"><?php echo $m_year ?></span></div>
                <div class="col-md-2"><label>CGPA/Percentage</label></div>
                <div class="col-md-2"><span id="m_cgpa"><?php echo $m_cgpa ?></span></div>
                </div>
            </div>
            <h4 class="page-header">Bachelor Degree Details</h4>
            <div class="box">
                <div class="row">
                <div class="col-md-4"><label>Bachelor Degree</label></div>
                <div class="col-md-4"><span id="b_degree"><?php echo $b_degree ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Institue Name</label></div>
                <div class="col-md-4"><span id="b_institute"><?php echo $b_institute ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-2"><label>Passing Year</label></div>
                <div class="col-md-2"><span id="b_year"><?php echo $b_year ?></span></div>
                <div class="col-md-2"><label>CGPA/Percentage</label></div>
                <div class="col-md-2"><span id="b_cgpa"><?php echo $b_cgpa ?></span></div>
                </div>
            </div>
            
        </div>    
    </div>
    <br>
    
        
    <div class="row">
        <div class="col-md-2"><button type="button" class="btn btn-warning btn-block" data-toggle="collapse" data-target="#join_details">Joining Details</button></div>    
        <div class="col-md-1"></div>    
        <div class="col-md-9 collapse box" id="join_details">    
            <div class="row">     
            <div class="col-md-11"></div>
                <div class="col-md-1"><button type="button" class="btn" data-toggle="modal" data-target="#edit_join_details"><img src="edit_sign.png" id="edit_sign"/></button></div>
                <div class="modal fade" id="edit_join_details" role="dialog">
                    <div class="modal-dialog">
					<form action="update_profile.php" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Joining Details</h4>
                            </div>
                            
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-md-4"><label>Type Of Employee</label></div>
                                    <div class="col-md-4">
                                        <?php
                                            if($type=="Permanent"){
                                                $cmd1 = "<select class='form-control' name='type'>"
                                                        ."<option value='Permanent'  selected>Permanent</option>"
                                                        ."<option value='Contract'>Contract</option>"
                                                        ."</select>";
                                            }
											else
											{
                                                $cmd1 = "<select  class='form-control'  name='type'>"
                                                        ."<option  value='Permanent' >Permanent</option>"
                                                        ."<option  value='Contract' selected>Contract</option>"
                                                        ."</select>";
                                            }
                                            echo $cmd1;
                                        ?>
                                    </div>                
                                    </div>
                                </div>               
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" name="submit_joining" class="btn btn-info" >Save Changes</button>
                            </div>
                        </div>
						</form>
                    </div>
                </div>  
            </div>
            <h4 class="page-header">Joining Details</h4>
            <div class="box">
                <div class="row">
                <div class="col-md-4"><label>Type Of Employee</label></div>
                <div class="col-md-4"><span id="emp_type"><?php echo $type ?></span></div>
                </div>

                <div class="row">
                <div class="col-md-4"><label>Joined On</label></div>
                <div class="col-md-4"><span id="doj"><?php echo $doj ?></span></div>    
                </div>
            </div>
        </div>
    </div>
    <br>
        
        
    <div class="row">
		
        <div class="col-md-2"><button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#pay_details">Payment Details</button></div>    
        <div class="col-md-1"></div>    
        <div class="col-md-9 collapse box" id="pay_details">    
            <div class="row">     
            <div class="col-md-11"></div>
                <div class="col-md-1"><button type="button" class="btn" data-toggle="modal" data-target="#edit_pay_details"><img src="edit_sign.png" id="edit_sign"/></button></div>
                <div class="modal fade" id="edit_pay_details" role="dialog">
                    <div class="modal-dialog">
					<form action="update_profile.php" method="post" id="payment_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Payment Details</h4>
                            </div>
                            
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Basic Pay</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="basic" name="basic" onblur="checkBasic()" value='<?php echo $basic; ?>'></div>                
                                        <div class="col-md-3 text-right"><label>HRA</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="hra" name="hra" onblur="checkHRA()" value='<?php echo $hra; ?>'></div>                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 text-right"><span id="errbasic"></span></div>
                                        <div class="col-md-6 text-right"><span id="errhra"></span></div>
                                    </div>
                                </div>    
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Conveyance</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="conveyance" name="conveyance" onblur="checkConveyance()" value='<?php echo $conveyance; ?>'></div>                
                                        <div class="col-md-3 text-right"><label>Medical&nbsp;Allowance</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="medical" name="medical" onblur="checkMedical()" value='<?php echo $medical; ?>'></div>                
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6 text-right"><span id="errconveyance"></span></div>
                                        <div class="col-md-6 text-right"><span id="errmedical"></span></div>
                                    </div>
                                </div>    
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Special&nbsp;Allowance</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="special" name="special" onblur="checkSpecial()" value='<?php echo $special; ?>'></div>                
                                        <div class="col-md-3 text-right"><label>Provident&nbsp;Fund</label></div>
                                        <div class="col-md-3"><input type="text" class="form-control" id="provident" name="provident" onblur="checkProvident()" value='<?php echo $provident; ?>'></div>                
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6 text-right"><span id="errspecial"></span></div>
                                        <div class="col-md-6 text-right"><span id="errprovident"></span></div>
                                    </div>
                                </div>    
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" name="submit_payment" class="btn btn-info" >Save Changes</button>
                            </div>
                        </div>
						</form>
                    </div>
                </div>  
            </div>
            <h4 class="page-header">Payment Details</h4>
            <div class="box">
                <div class="row">
                    <div class="col-md-2"><label>Basic Pay</label></div>
                    <div class="col-md-2"><span id="basic"><?php echo $basic ?></span></div>
                    <div class="col-md-2"><label>HRA</label></div>
                    <div class="col-md-2"><span id="hra"><?php echo $hra ?></span></div>
                    <div class="col-md-2"><label>Conveyance</label></div>
                    <div class="col-md-2"><span id="conveyance"><?php echo $conveyance ?></span></div>
                </div>

                <div class="row">
                    <div class="col-md-2"><label>Medical&nbsp;Allowance</label></div>
                    <div class="col-md-2"><span id="medical"><?php echo $medical ?></span></div>
                    <div class="col-md-2"><label>Special&nbsp;Allowance</label></div>
                    <div class="col-md-2"><span id="special"><?php echo $special ?></span></div>
                    <div class="col-md-2"><label>Provident Fund</label></div>
                    <div class="col-md-2"><span id="provident"><?php echo $provident ?></span></div>
                </div>
            </div>
        </div>
    
    </div>    
    <br>
        
        
        
        
     <div class="row">
        <div class="col-md-2"><button type="button" class="btn btn-danger btn-block" data-toggle="collapse" data-target="#bank_details">Bank Details</button></div>    
        <div class="col-md-1"></div>    
        <div class="col-md-9 collapse box" id="bank_details">    
            <div class="row">     
            <div class="col-md-11"></div>
                <div class="col-md-1"><button type="button" class="btn" data-toggle="modal" data-target="#edit_bank_details"><img src="edit_sign.png" id="edit_sign"/></button></div>
                <div class="modal fade" id="edit_bank_details" role="dialog">
                    <div class="modal-dialog">
					<form action="update_profile.php" method="post" id="bank_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Bank Details</h4>
                            </div>
                            
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Bank&nbsp;Name</label></div>
                                        <div class="col-md-7"><input type="text" class="form-control" id="bankname" name="bankname"  onblur="checkBankName()" value='<?php echo $bankname; ?>'></div>                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-7"><span id="errbankname"></span></div>
                                    </div>
                                </div>    
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Account No.</label></div>
                                        <div class="col-md-7"><input type="text" class="form-control" id="account" name="account" onblur="checkAccount()" value='<?php echo $account; ?>'></div>                
                                    </div>
                                     <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-7"><span id="erraccount"></span></div>
                                    </div>
                                </div>    
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>PAN</label></div>
                                        <div class="col-md-7"><input type="text" class="form-control" id="pan" name="pan" onblur="checkPAN()" value='<?php echo $pan; ?>'></div>                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-7"><span id="errpan"></span></div>
                                    </div>
                                </div>    
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" name="submit_bank" class="btn btn-info" >Save Changes</button>
                            </div>
                        </div>
						</form>
                    </div>
                </div>  
            </div>
            <h4 class="page-header">Bank Details</h4>
            <div class="box">
                <div class="row">
                    <div class="col-md-2"><label>Bank Name</label></div>
                    <div class="col-md-6"><span id="bankname"><?php echo $bankname ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><label>Account&nbsp;No.</label></div>
                    <div class="col-md-2"><span id="account"><?php echo $account ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><label>PAN</label></div>
                    <div class="col-md-2"><span id="pan"><?php echo $pan ?></span></div>
                </div>  
            </div>
        </div>
    
    </div>   
    <br>
        
        
        
        
    <div class="row">
        <div class="col-md-2"><button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#address">Address</button></div>    
        <div class="col-md-1"></div>    
        <div class="col-md-9 collapse box" id="address">    
            <div class="row">     
            <div class="col-md-11"></div>
                <div class="col-md-1"><button type="button" class="btn" data-toggle="modal" data-target="#edit_address"><img src="edit_sign.png" id="edit_sign"/></button></div>
                <div class="modal fade" id="edit_address" role="dialog">
                    <div class="modal-dialog">
					<form action="update_profile.php" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Address</h4>
                            </div>
                            
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-md-2"><label>Present</label></div>
                                    <div class="col-md-7"><textarea class="form-control" id="	c_address" name="c_address"><?php echo $c_address; ?></textarea></div>                
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <div class="row">
                                    <div class="col-md-2"><label>Permanent</label></div>
                                    <div class="col-md-7"><textarea class="form-control" id="p_address" name="p_address"><?php echo $p_address; ?></textarea></div>                
                                    </div>
                                </div>                 
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" name="submit_address" class="btn btn-info">Save Changes</button>
                            </div>
                        </div>
						</form>
                    </div>
                </div>  
            </div>
            <h4 class="page-header">Address Details</h4>
            <div class="box">
                <div class="row">
                    <div class="col-md-2"><label>Present</label></div>
                    <div class="col-md-6"><span id="c_address"><?php echo $c_address ?></span></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><label>Permanent</label></div>
                    <div class="col-md-6"><span id="p_address"><?php echo $p_address ?></span></div>
                </div>
            </div>
        </div>
    
    </div>   
        
   
        </div>
    <br><br>
	
	
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

if(isset($_POST['save_pwd'])){
    $c_pass = $_POST['c_pass'];
    $n_pass = $_POST['n_pass'];
    $r_pass = $_POST['r_pass'];
   
    if($n_pass!=$r_pass){
         echo "<script>alert('Password mismatch');</script>";
    }
    else if($password !=$c_pass){
        echo "<script>alert('Wrong pasword');</script>";
    }else{
        $password =$n_pass;
        $user = $uname ;
        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
        $query = "update employee set password='$n_pass' where uname='$user'";
        if ($conn->query($query) === TRUE) {
            echo "<script>alert('Password updated successfully');</script>";
        } else {
            echo "<script>alert('Some error occured');</script>" . $conn->error;
        }
    }
}

?>