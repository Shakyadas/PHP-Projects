<?php
session_start();
if(isset($_SESSION['username'])){
    session_unset();
    session_destroy();
}
	echo"<script>location.href='employeelogin.php'</script>";	

?>