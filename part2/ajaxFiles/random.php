<?php
	$query = "CREATE EVENT myEvent ON SCHEDULE EVERY 5 SECOND DO BEGIN INSERT INTO chat(sender,message) VALUES(ELT(0.5 + RAND() * 8,'Aarti gandhi','Kartik syal','Varun Sharma','Ankur kaul','Anmol sharma','Nishant gandhi','Arun kaul','Nimmi kaul'),ELT(0.5 + RAND() * 13 ,'Heyy','hello','hi','howdy','i am fine','how are u?','long time no c','i was busy','i miss u','holaa','namaskar','ok','ill ttyl' )); END";
	// echo $query;exit;
	$res = mysqli_query($con,$query);
	// echo $users[$random_users];
?>