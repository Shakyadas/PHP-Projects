<?php
	if(isset($_POST['checkuname']))
	{
		$conn = mysqli_connect("localhost","root","","project") or die("connection failed".mysqli_connect_error());
		$uname=$_POST['checkuname'];
		$query = "SELECT * from employee WHERE uname='$uname' LIMIT 1";
		$query=mysqli_query($conn,$query);
		$row = mysqli_num_rows($query);
		if(strlen($uname)<3 || strlen($uname)>16)
		{
			echo "length of username should be between 3 to 16";
			exit();
		}
		if(preg_match('#[^A-Za-z0-9]#',$uname))
		{
			echo "not alphanumeric";
			exit();
		}
		if($row==1)
		{
			echo "username taken";
			exit();
		}
		else
		{
			echo "ok";
			exit();
		}
	}
?>