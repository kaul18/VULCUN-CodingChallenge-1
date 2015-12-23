<?php
	require_once("includes/connection.php");
	require_once("ajaxFiles/random.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Application</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/code.js"></script>
</head>
<body lang="en">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2 margin">
			<label>Your Name:<input class="form-control" type="text" id="name" name="name" placeholder=" Enter Name"></label>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 margin">
			<label>Your Message:<textarea class="form-control msg" id="message" name="message" placeholder="Enter your message"></textarea></label>	
		</div>
	</div>
	<div class="row margin">
		<div class="col-lg-1">
			<button class="btn btn-primary" onclick="sendDetails()">Send</button>
		</div>
	</div>
	<div class"row">
		<div class="container" style="margin:0;">
			<div class="col-lg-6 chats" id="aja">
				<div class="row" id="inner">
					<!-- <div id="chats1">
						
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php 	
	// $query = "TRUNCATE table chat"; 
	// $res = mysqli_query($con,$query); 
?>