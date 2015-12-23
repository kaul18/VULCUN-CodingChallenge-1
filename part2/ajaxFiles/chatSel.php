<?php 
	require_once("../includes/connection.php");
	$query1 = "SELECT sender,message FROM chat ORDER BY id DESC";
	$res1 = mysqli_query($con,$query1);
	// $n=mysqli_num_rows($res1);
	// $array=array();
	if($res1)
	{
		while($row=mysqli_fetch_assoc($res1))
		{
			echo '<div class="chats1">'.$row["sender"].' says:</br>'.$row["message"].'</div>';
		}
	}else{
		echo 0;
	}
 ?>