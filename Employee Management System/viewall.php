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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
 
  
	
	<link href="css/style.css" rel="stylesheet">
	
    <style>
		
		
        body{
            background: url("img/intro-carousel/34.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            color:black;
        }
		
		table,th,td{
			margin: auto;
			border: none;
			border-radius: 20px;
			border-collapse: collapse;
			text-align: center;
			font-size: 16px;
			table-layout: auto;
			background-color:#043E63;
			color: black;
			margin-top: 100px;
		}
		
		th,td{
			padding: 20px;
			opacity: 0.9;
			color: black;
			
		}
		
		th{
			background-color: darkblue;
			color: white;	
		}
		
		
		td:hover
		{
			background-color: cornflowerblue;
			color: black;
		}
		
		tr:hover{
			background-color: black;
		}
		
		
		.pic{
	width:250px;
	height:250px;
}
.picbig{
	position: relative;
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
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto" >All Employee List</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeadmin.php">Admin Home</a></li>
          <li><a href="addemployee.php" >Add Employee</a></li>
          <li class="menu-active"><a href="viewall.php" >View All Employee</a></li>
			<li><a href="leave_main.php">Employee Leave Management</a></li>
		  <li><a href="logout.php" >Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
    <div style="text-align:center">
        <h3 >Here is The List Of All Employee</h3>
		<div align="center"><button type="button" class="btn btn-primary" onClick="window.print();"><span class="glyphicon glyphicon-print"></span>  Print Details </button></div>
		<form method="POST">
    <div style="text-align: right">
	<label>Search: </label>	
    <input type="text" placeholder="Type To Search" name="key" autocomplete="off" style="border-right:none; border-left: none; border-top:none;outline: none;border-bottom: 1px solid white;background-color:transparent; color: black"  >
			
			 <button type="submit" class="btn btn-info btn-xs" name="sub" >
     			 <span class="glyphicon glyphicon-search"></span> Search
   					 </button>
		</form>
		
		
		</div>
    </div>
	
	
	
	
   <table style="width:100%;"> 
	   
        <thead>
            <tr>
                <th style="width:10%;"><h4>Photo</h4></th>
                <th style="width:10%;"><h4>Emp Id</h4></th>
                <th style="width:20%;"><h4>Name</h4></th>
                <th style="width:10%;"><h4>Username</h4></th>
                <th style="width:10%;"><h4>DOJ</h4></th>
                <th style="width:10%;"><h4>Mobile</h4></th>
                <th style="width:10%;"><h4>Action</h4></th>
            </tr>
        </thead>
        <tbody>
            <?php
			
			
			
			
			if(isset($_POST['sub']))
				{
						$link=mysqli_connect("localhost","root","","project") or die($link);
					$k=$_POST['key'];
	
				$k=mysqli_real_escape_string($link,$k);

				$result=mysqli_query($link,"select * from employee where fname like '%".$k."%' or lname like '%".$k."%' or empid like '%".$k."%' or mobile like '%".$k."%' or uname like '%".$k."%' or email like '%".$k."%'") or die("failed to query database".mysqli_error($link));
                if ($result->num_rows > 0) 
				{
                    while($row = $result->fetch_assoc()) 
					{
                        echo "<tr><form action='viewempprof.php' method='post'>
						<input type='text' style='display:none;' name='ID' value=".$row['uname']."><tr><td>"."<img class='pic' src='".$row['photo']."' alt= 'Image Not Found' style=height:150px; width=150px>"."<img class='picbig' src='".$row['photo']."' alt= ''>"."</td><td>"."EMP10".$row['empid']."</td><td>".
                            $row['fname']." ".$row['lname']."</td><td>".
                            $row['uname']."</td><td>".$row['doj']."</td><td>".$row['mobile']."</td><td>".
                             "<button type='submit' class='btn btn-xs btn-success' name='_view'>View Profile</button></form> <br> <br>
							<form action='' method='POST'> <input type='text' style='display:none;' name='IDD' value=".$row['uname']."><button type='submit' class='btn btn-xs btn-danger' name='del_emp'>Delete Employee Data</button></form></td></tr>";
						if(isset($_POST['IDD']))
						 {
						$name=$_POST['IDD'];
						$query = "delete from employee where uname='$name'";
						$result = $conn->query($query);
						echo"<script>alert('Employee Record Is Deleted')</script>";
						echo "<script>location.href='viewall.php'</script>";
						 }
                    }
                }
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Employee Found</h4></td></tr>";
				}
				
				
				
	
			}
			else if(!isset($_POST['sub']))
			{
				$conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
                $query = "select * from employee";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><form action='viewempprof.php' method='post'><input type='text' style='display:none;' name='ID' value=".$row['uname']."><tr><td>"."<img class='pic' src='".$row['photo']."' alt= 'Image Not Found' style=height:150px; width=150px>"."<img class='picbig' src='".$row['photo']."' alt= ''>"."</td><td>"."EMP10".$row['empid']."</td><td>".
                            $row['fname']." ".$row['lname']."</td><td>".
                            $row['uname']."</td><td>".$row['doj']."</td><td>".$row['mobile']."</td><td>".
                            "<button type='submit' class='btn btn-xs btn-success' name='_view'>View Profile</button></form> <br> <br>
							<form action='' method='POST'> <input type='text' style='display:none;' name='IDD' value=".$row['uname']."><button type='submit' class='btn btn-xs btn-danger' name='del_emp'>Delete Employee Data</button></form></td></tr>";
						 if(isset($_POST['IDD']))
						 {
						$name=$_POST['IDD'];
						$query = "delete from employee where uname='$name'";
						$result = $conn->query($query);
						echo"<script>alert('Employee Record Is Deleted')</script>";
						echo "<script>location.href='viewall.php'</script>";
						 }
						
                    }
                }
				
				
				
				else
				{
					echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Employee Found</h4></td></tr>";
				}
				
			}  
			
			
                
                else
				{
                    echo "<tr><td colspan='7' class='box-sm'><h4 class='page-header'>No Employee Found</h4></td></tr>";
                }
			   
			   ?>
			
		

        </tbody>
    </table>
    </form>
	
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

