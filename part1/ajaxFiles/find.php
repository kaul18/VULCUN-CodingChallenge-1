<?php
	require_once('../includes/connection.php');
	if(isset($_POST['getvalue'])){
		$n = mysqli_real_escape_string($con,htmlentities($_POST['getvalue']));
		$query = "SELECT id,full_name FROM users WHERE full_name LIKE '%$n%' OR full_name LIKE '%$n%' ";
		$res = mysqli_query($con,$query);
		$count = mysqli_num_rows($res);
		$result = ' ';
		$drop = ' ';
		if($count == 0)
		{
			$result = "no results found";
			// echo "<script>alert('$result');</script>";
		}else{
			// $drop .= '<select multiple>';
			while($row=mysqli_fetch_assoc($res))
			{
				$name = $row['full_name'];
				$id = $row['id'];
				
				$drop .= '<option value='.$id.'>'.$name.'</option>';
			}
			// $drop.="</select>";
			echo $drop;
			exit;
		}

	}
?>
