<?php
session_start();
if(!isset($_SESSION['username'])){
        echo "<script>location.href='adminlogin.php'</script>";
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
	<link href="css/style.css" rel="stylesheet">
    <style>
        body{
            background: url("img/intro-carousel/36.jpg");
            background-size:cover;
            background-repeat:no-repeat;
            color:black;
        }
        th{
            font-weight: bold;
           background: rgba(0,0,0,0.8);
			color: white;
        }
        td{
            font-size:16px;
            color:white;
            background-color:beige;
            background: rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Leave Request Management</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeadmin.php" >Admin Home</a></li>
          <li><a href="addemployee.php">Add Employee</a></li>
          <li><a href="viewall.php" >View All Employee</a></li>
			<li class="menu-active"><a href="leave_main.php">Employee Leave Management</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
	
    <div style="text-align:center;">
        <h3 >Leave Request Status</h3>
    </div>
    
    
<center>
    <form action="#" method="post">
        <button type="submit" class="btn btn-primary" data-toggle="collapse" data-target="#pending" name="pending">Pending Requests</button>
        <button type="submit" class="btn btn-success" data-toggle="collapse" data-target="#approved" name="approved">Approved Requests</button>
        <button type="submit" class="btn btn-danger"  data-toggle="collapse" data-target="#denied" name="denied">Denied Requests</button>
        <button type="submit" class="btn btn-warning" data-toggle="collapse" data-target="#cancelled" name="cancelled">Cancelled Requests</button>
    </form>
	</center>
	<br>
	
    <?php
        if(isset($_POST['pending'])){
            echo "<center><h4>Pending Leave Request List</h4></center>";
        }
        if(isset($_POST['approved'])){
            echo "<center><h4>Approved Leave Request List</h4></center>";
        }
        if(isset($_POST['denied'])){
            echo "<center><h4>Denied Leave Request List</h4></center>";
        }
        if(isset($_POST['cancelled'])){
            echo "<center><h4 >Cancelled Leaves</h4></center>";
        }

    ?>
    <br>

    <table class="table table-hover" style="width:100%;"> 
        <thead>
            <tr>
                <th style="width:10%;"><h4>Username</h4></th>
                <th style="width:10%;"><h4 >Leave ID</h4></th>
                <th style="width:10%;"><h4 >Type</h4></th>
                <th style="width:15%;"><h4 >Start Date</h4></th>
                <th style="width:15%;"><h4 >End Date</h4></th>
                <th style="width:25%;"><h4 >Reason</h4></th>
                <th style="width:15%;"><h4 >Status</h4></th>
                <th style="width:20%;"><h4 >Action</h4></th>
            </tr>
        </thead>
        <tbody>
            <?php
                    
                    if(isset($_POST['pending'])){
                        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
                        $query = "select * from employee_leave where status='Pending'";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><form action='#' method='post'><input type='text' style='display:none;' name='ID' value=".$row['id']."><td>"
                                        .$row['uname']."</td><td>".$row['id']."</td><td>".$row['type']."</td><td>".$row['start_date']."</td><td>".
                                        $row['end_date']."</td><td>".$row['reason']."</td><td>".$row['status']."</td><td>".
                                        "<button type='submit' class='btn btn-block btn-xs btn-success' name='_approved'>Approve</button>
                                         <button type='submit' class='btn btn-block btn-xs btn-danger' name='_denied'>Deny</button>"."</td></form></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8' class='text-center' class='box-sm'><h4 >No Pending Leave Found</h4></td></tr>";
                        }
                        $conn->close();
                    }
            
                    if(isset($_POST['approved'])){
                        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
                        $query = "select * from employee_leave where status='Approved'";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><form action='#' method='post'><input type='text' style='display:none;' name='ID' value=".$row['id']."><td>"
                                        .$row['uname']."</td><td>".$row['id']."</td><td>".$row['type']."</td><td>".$row['start_date']."</td><td>".
                                        $row['end_date']."</td><td>".$row['reason']."</td><td>".$row['status']."</td><td>".
                                        "<button type='submit' class='btn btn-block btn-xs btn-primary' name='_pending'>Pending</button>
                                         <button type='submit' class='btn btn-block btn-xs btn-danger' name='_denied'>Deny</button>"."</td></form></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8' class='text-center' class='box-sm'><h4 >No Approved Leave Found</h4></td></tr>";
                        }
                        $conn->close();
                    }
            
                    if(isset($_POST['denied'])){
                        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
                        $query = "select * from employee_leave where status='Denied'";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><form action='#' method='post'><input type='text' style='display:none;' name='ID' value=".$row['id']."><td>"
                                        .$row['uname']."</td><td>".$row['id']."</td><td>".$row['type']."</td><td>".$row['start_date']."</td><td>".
                                        $row['end_date']."</td><td>".$row['reason']."</td><td>".$row['status']."</td><td>".
                                        "<button type='submit' class='btn btn-block btn-xs btn-primary' name='_pending'>Pending</button>
                                         <button type='submit' class='btn btn-block btn-xs btn-success' name='_approved'>Approve</button>"."</td></form></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8' class='text-center' class='box-sm'><h4 >No Denied Leave Found</h4></td></tr>";
                        }
                        $conn->close();
                    }
            
                    if(isset($_POST['cancelled'])){
                        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
                        $query = "select * from employee_leave where status='cancelled'";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>".$row['uname']."</td><td>".$row['id']."</td><td>".$row['type']."</td><td>".$row['start_date']."</td><td>".
                                        $row['end_date']."</td><td>".$row['reason']."</td><td>".$row['status']."</td><td></td></tr>";
                
                            }
                        } else {
                            echo "<tr><td colspan='8' class='text-center' class='box-sm'><h4 >No Cancelled Leave Found</h4></td></tr>";
                        }
                        $conn->close();
                    }
            
                ?>  
                
        </tbody>
    </table>
    
    
</body>
</html>


<?php

    if(isset($_POST['_pending'])){
        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
        $ID= $_POST['ID'];
        $query = "update employee_leave set status='Pending' where id='$ID'";
        if ($conn->query($query) === TRUE) {
            //echo "<script>alert('pending');</script>";
        } else {
            echo "<script>alert('NOT pending');</script>" . $conn->error;
        }  
        $conn->close();
    }
    
    if(isset($_POST['_approved'])){
        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
        $ID= $_POST['ID'];
        $query = "update employee_leave set status='Approved' where id='$ID'";
        if ($conn->query($query) === TRUE) {
            //echo "<script>alert('Approved');</script>";
        } else {
            echo "<script>alert('NOT Approved');</script>" . $conn->error;
        }  
        $conn->close();
    }

    if(isset($_POST['_denied'])){
        $conn=mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
        $ID= $_POST['ID'];
        $query = "update employee_leave set status='Denied' where id='$ID'";
        if ($conn->query($query) === TRUE) {
            //echo "<script>alert('Denied');</script>";
        } else {
            echo "<script>alert('NOT Denied');</script>" . $conn->error;
        }  
        $conn->close();
    }

?>