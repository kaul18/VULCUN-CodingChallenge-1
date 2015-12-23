<?php 
	$con = mysqli_connect("localhost","root","","vulcun") or die("cannot connect to database at the moment..!!").mysqli_error($con);
	$environment = "development"; 
	if($environment == "online"){
		error_reporting(0);
	}
?>