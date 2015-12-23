<?php 
	require_once("../includes/connection.php");
	if(is_array($_POST))
	{
		foreach($_POST as $key => $value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,htmlentities($value));
		}
		$query = "INSERT INTO chat(sender,message) VALUES('$name','$message')";
		$res = mysqli_query($con,$query);
		if($res)
		{
			$query1 = "SELECT sender,message FROM chat ORDER BY id DESC";
			$res1 = mysqli_query($con,$query1);
			// $n=mysqli_num_rows($res1);
			// $array=array();
			while($row=mysqli_fetch_assoc($res1))
			{
				// $array[]=$row;
				echo '<div class="chats1">'.$row["sender"].' says:</br>'.$row["message"].'</div>';
				// echo $row['sender'];
				// for($i=1;$i<=$n;$i++)
				// {
					// echo $array[$i-1]['sender']."/".$array[$i-1]['message'];
				// }
			}
		}else{
			echo 0;
		}
	}
?>