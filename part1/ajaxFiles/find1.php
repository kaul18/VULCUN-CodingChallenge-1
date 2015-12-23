<?php 
	require_once("../includes/connection.php");
	$query = "SELECT full_name FROM users WHERE full_name like '%john%'";
	$res = mysqli_query($con,$query);
	$n = mysqli_num_rows($res);
	if($res)
	{
		while($row=mysqli_fetch_assoc($res))
		{
			echo '<div class="col-lg-4">'.$row["full_name"].'<br/></div>';
		}
	}else{
		echo 0;
	}
 ?>