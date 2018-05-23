<?php
session_start();
if(!isset($_SESSION['username'])){
        echo "<script>location.href='employeelogin.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link href="img/favicon.png" rel="icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
	<style>
        .heading{background-color:crimson;}
        .box{border:1px solid lightgrey;padding:20px;border-radius:5px; }
        .box-sm{border:1px solid lightgrey;padding:5px;border-radius:5px;}
    </style>
     <link href="css/style.css" rel="stylesheet">
    <style>
        body{
            background: url("img/intro-carousel/35.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            color:black;
        }
        .content{
            background: rgba(0,0,0,0.6);
			color:white;
			width: 1200px;
        }
        
        #days{margin:0px;text-align:center;}
    </style>
    <style>
        body{
            background: url("img/intro-carousel/36.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            color:black;
        }
        th{
            font-weight: bold;
            background-color:seagreen;
        }
        td{
            font-size:16px;
            color:white;
            background-color:beige;
            background: rgba(0,0,0,0.8);
        }
    </style>
</head>
<body>
	
	
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">My Leave Status</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeemployee.php">Employee Home</a></li>
          <li><a href="empviewprof.php">View Profile</a></li>
			<li><a href="applyleave.php">Apply For Leave</a></li>
			<li class="menu-active"><a href="lstatus.php">My Leave Request Status</a></li>
			 
		  <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
    <div style="text-align:center">
    <h3>Applied Leave List</h3>
    </div>
    
    <table class="table " style="width:100%;"> 
        <thead>
        <tr>
            <th style="width:10%;"><h4>Leave Id</h4></th>
            <th style="width:15%;"><h4 >Type</h4></th>
            <th style="width:15%;"><h4 >Start Date</h4></th>
            <th style="width:15%;"><h4 >End Date</h4></th>
            <th style="width:35%;"><h4 >Reason</h4></th>
            <th style="width:10%;"><h4 >Status</h4></th>
            <th style="width:10%;"><h4 >Action</h4></th>
        </tr>
        </thead>
        <tbody>
        <?php

            $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
            $username = $_SESSION['username'];
            $query = "select * from employee_leave where uname='$username'";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $cmd = "<tr><form action='#' method='post'><input type='text' style='display:none;' name='ID' value=".$row['id']."><td>".$row['id']."</td><td>".$row['type']."</td><td>".$row['start_date']."</td><td>".$row['end_date']."</td><td>".$row['reason']."</td><td>".$row['status']."</td>";
                    if($row['status']=="Cancelled")
                        $cmd = $cmd."<td><button type='submit' name='_reapply' class='btn btn-primary btn-block btn-sm'>Reapply</button>"."</td></form></tr>";
                    else 
                        $cmd = $cmd."<td><button type='submit' name='_cancel' class='btn btn-danger btn-block btn-sm'>Cancel</button>"."</td></form></tr>";            
                    echo $cmd;
                }
            } else {
                echo "0 results";
            }
            $conn->close();

        ?>
        </tbody>
    </table>
    
   
    
</body>
</html>


<?php
    if(isset($_POST['_cancel'])){
        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
        $ID= $_POST['ID'];
        $query = "update employee_leave set status='Cancelled' where id='$ID'";
        if ($conn->query($query) === TRUE) {
            //echo "<script>alert('cancelled');</script>";
            echo "<script>location.href='lstatus.php'</script>";
        } else {
            echo "<script>alert('NOT cancelled');</script>" . $conn->error;
        }  
        $conn->close();
    }

    if(isset($_POST['_reapply'])){
        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
        $ID= $_POST['ID'];
        $query = "update employee_leave set status='Pending' where id='$ID'";
        if ($conn->query($query) === TRUE) {
            //echo "<script>alert('cancelled');</script>";
            echo "<script>location.href='lstatus.php'</script>";
        } else {
            echo "<script>alert('Some error occured');</script>" . $conn->error;
        }  
        $conn->close();
    }

?>