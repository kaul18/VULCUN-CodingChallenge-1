<?php 
	// ini_set('max_execution_time', 2400);
	require_once('includes/connection.php');
	// $full_name=array("John White","John Snow","Jhonny Bravo","Ankur kaul","Daman Luthra","Snow White");
	// $city=array("San Francisco","San Jose","San Diego","Los Angeles","Santa Monica","Oakland");
	// $random_names = array_rand($full_name);
	// $random_cities = array_rand($city);
	for($i=1;$i<=10000000;$i++)
	{
		$query = "INSERT INTO users(full_name,email,city) values(ELT(0.5 +RAND() * 6,'John White','John Snow','Jhonny Bravo','Ankur kaul','Daman Luthra','Snow White'),ELT(0.5 +RAND() * 6,'john@gmail.com','ankur@gmail.com','aarti@gmail.com','daman@gmail.com','kartik@gmail.com','anmol@gmail.com'),ELT(0.5 +RAND() * 6,'San Francisco','San Jose','San Diego','Los Angeles','Santa Monica','Oakland'))";
		$res = mysqli_query($con,$query);
	}
 ?>