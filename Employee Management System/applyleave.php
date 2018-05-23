<?php
session_start();
if(!isset($_SESSION['username'])){
        echo "<script>location.href='employeelogin.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="img/favicon.png" rel="icon">
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
    <script>
        
        var d=new Date();
        if(d.getMonth()+1 <= 9)
			var n=d.getYear()+1900+"-0"+(d.getMonth()+1);
		else
			var n=d.getYear()+1900+"-"+(d.getMonth()+1);
        if(d.getDate()<= 9)
			var n=d.getYear()+1900+"-0"+(d.getMonth()+1)+"-0"+d.getDate();
		else
			var n=d.getYear()+1900+"-"+(d.getMonth()+1)+"-"+d.getDate();
        
        function setmin1(){
				document.getElementById("start").setAttribute("min",n);     
			}
        function setmin2(){	
				var m=document.getElementById("start").value;
				document.getElementById("end").setAttribute("min",m);
			}
        function countDays(){
				var x = document.getElementById("days");
				var dt1 = new Date(document.getElementById("start").value);
				var dt2 = new Date(document.getElementById("end").value);
				var diff = Math.floor((Date.UTC(dt2.getFullYear(),dt2.getMonth(),dt2.getDate())-(Date.UTC(dt1.getFullYear(),dt1.getMonth(),dt1.getDate() )))/(24*60*60*1000));
				diff++;
                if(diff<0 || diff===NaN)  diff=0;
                document.getElementById("days").innerHTML=diff;
		   } 
    </script>
</head>
<body>
	
	<br><br><br><br>
	<header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Apply For Leave</a></h1>
      </div>
		
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="welcomeemployee.php">Employee Home</a></li>
          <li><a href="empviewprof.php">View Profile</a></li>
			<li class="menu-active"><a href="applyleave.php">Apply For Leave</a></li>
			<li><a href="lstatus.php">My Leave Request Status</a></li>
			 
		  <li><a href="logout2.php">Logout</a></li>
        </ul>
      </nav>
    </div>
	</header>	
	
	
    <div style="text-align:center">
    <br><br><br><br><br><br><br><br>
    </div>
    
    <div class="container box content">
    <form action="#" method="post">
        <div class="row">
            <div class="col-md-1"></div>    
            <div class="col-md-2"><label>Leave Type:</label></div>
            <div class="col-md-2 form-group">
                <select class="form-control" name="type">
                <option value="Vacation Leave">Vacation Leave</option>
                <option value="Medical Leave">Medical Leave</option>
                </select>
            </div>               
            <div class="col-md-2 text-right"><label>Applied Days:</label></div>      
        </div>

        <div class="row">
            <div class="col-md-1"></div>  
            <div class="col-md-2"><label>Leave Start Date:</label></div>  
            <div class="col-md-2 form-group"><input type="date" class="form-control" onclick="setmin1()" id="start" name="start" /></div>
            <div class="col-md-1"></div>
            <div class="col-md-1 box"><h3 id="days"></h3></div>  
        </div>         

        <div class="row">
            <div class="col-md-1"></div>  
            <div class="col-md-2"><label>Leave End Date:</label></div>  
            <div class="col-md-2 form-group"><input type="date" class="form-control" id="end" name="end" onclick="setmin2()" onchange="countDays()" /></div>
        </div> 

        <div class="row">
            <div class="col-md-1"></div>  
            <div class="col-md-1"><label>Reason:</label></div>  
            <div class="col-md-3 form-group"><textarea class="form-control" id="reason" name="reason" rows="3"></textarea></div>
            <div class="col-md-1"></div>
            <div class="col-md-1 form-group"><button type="submit" name="apply" class="btn btn-block btn-success">Apply</button></div>
        </div>        
    </form>
    </div>
</body>
</html>

<?php

    if(isset($_POST['apply'])){
        $type = $_POST['type'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $reason = $_POST['reason'];
        $status = "Pending";
        $uname = $_SESSION['username'];
        $conn = mysqli_connect("localhost","root","","project") or die($conn);
        
        $type = mysqli_real_escape_string($conn,$type);
        $start = mysqli_real_escape_string($conn,$start);
        $end = mysqli_real_escape_string($conn,$end);
        $reason = mysqli_real_escape_string($conn,$reason);
        $status = mysqli_real_escape_string($conn,$status);
        $uname = mysqli_real_escape_string($conn,$uname);
        
        $result = mysqli_query($conn,"insert into employee_leave values ('','$uname','$type','$start','$end','$reason','$status')") or die("Query Failed".mysqli_error($conn));
        mysqli_close($conn);
        echo "<script>location.href='empviewprof.php'</script>";
    }

?>