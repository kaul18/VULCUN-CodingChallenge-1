<?php 
	require_once("includes/connection.php");
	// $query = ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Find John</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../part2/css/style.css">
		<script type="text/javascript" src="../part2/js/jquery.js"></script>
		<script type="text/javascript" src="js/code.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>SEARCH ENGINE(FIND JOHN)</h2><hr>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-lg-offset-4">
				<input class="form-control" id="search_box" name="name" type="text" placeholder="Search a name" onkeyup="checkValue(this.id)">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-lg-offset-4">
				<select class="form-control" style="width:400px;overflow:scroll;display:none;" id="me" multiple>			
			
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
					<center><button class="form-control search" onclick="search()">SEARCH</button><hr></center>
					<div id="show" class="col-lg-12">
				</div>
		</div>
	</div>
</body>
</html>