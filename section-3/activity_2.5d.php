<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Do While loops</title>	
	
	<meta name="description" content="Do While Loops">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url();
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color: white;
	}
	.container{
	position: relative;
	display: inline-block;
	margin-top: 50px;
	margin-left: 50%;
	transform: translateX(-50%);
	padding: 50px;
	text-align: center;
	box-sizing: border-box;
	width: 70%;
	font-size: 1.2em;
	background: url(https://img.magnific.com/premium-photo/thermometer-showing-average-temperature-is-blue-background-measurement-air-temperature_99433-10536.jpg);
	}
	.subtn{
		color: white;
		background-color: red;
		font-size: 19px;
		border: 3px solid red;
		border-radius: 13px;
		padding: 15px 30px;
		cursor: pointer
	}
	.subtn:hover{
		color:red;
		background-color:white;
	}
	.error{
		color: red;
		font-weight: bold;
		font-size: 0.9em;
	}
	table{
		margin-top: 5px;
		margin-left: auto;
    	margin-right: auto; /* makes the table center */
	}

 </style>
 <body>
 	<div class="container">
 		<h1 style="color: red;">Temperature</h1>
 		<p style="color:red; font-weight: bolder;">Instruction:<p style="color: white;font-weight: bold;font-size: 0.9em;"><span style="background-color: blue;">The starting value must be greater then ending value. The incremental value must be greater than zero and less than starting value. No empty fields. The loop will end after Kelvin = 0 :)</span></p>
 		<form name="numbers" action="activity_2.5d.php" method="post">
 			<h1>Enter starting temperature:<input type="number" name="start" value=""></h1>
 			<h1>Enter the ending tempreature:<input type="number" name="end" value=""></h1>
 			<h1>Enter the incremental value:<input type="number" name="increment" value=""></h1>
 			<input type="submit" name="subtn" value="submit" class="subtn">
 		</form>
 			<?php
 			if (isset($_POST['subtn'])) {
 				//error checking
 				$error = false;
 				$errormessage = "";
 				//set vairables 
 			 	$s = (int)$_POST['start'];
 			 	$e = (int)$_POST['end'];
 			 	$i = (int)$_POST['increment'];
 			 	if ($s == '' OR $e == ''OR $i =='') {
 			 		$errormessage .= "No empty fields";
 			 		$error = true;
 			 	}elseif ($s <= $e) {
 			 		$errormessage .= "Staring value must be greater than ending value";
 			 		$error = true;

 			 	}elseif($i <= 0){
 			 		$errormessage .= "The incremental value must be greater than zero.";
 			 		$error = true;

			 	}elseif($i > ($s - $e)){
			 		$errormessage .= "The increment is too large; it skips the end value immediately.";
			 		$error = true;
			 	}
			 	if($error == false){
 			 		//create table 
 			 		echo "<table border = '2'>
 			 			<tr style = 'color: yellow;'>
 			 				<td><b>Degrees Celsius °C</b></td>
 			 				<td><b>Kelvin (K)</b></td>
 			 				<td><b>Degrees Fahrenheit °F </b></td>
 			 			</tr>";
 			 		do {
 			 			//calculation 
 			 			$f = 1.8*$s + 32;
 			 			$k = $s + 273;
 			 			echo "<tr style = 'color: yellow; font-weight: bold;'>
 			 			<td>".$s."</td>
 			 			<td>".$k."</td>
 			 			<td>".$f."</td>
 			 			</tr>";
 			 			//incremental  
 			 			$s = $s - $i;
 			 		} while ($s >= $e AND $k > 0); //end the loop at kelvin = 0
 			 		echo "</table>"; //close the table 
 			 	}else{
 			 		//error checking 
 			 		echo "<p class='error'><mark>Error! ".$errormessage."</mark></p>";
 			 	}
 		} 
 			 ?>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>