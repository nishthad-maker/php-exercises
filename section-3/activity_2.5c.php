<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Nested Loops</title>	
	
	<meta name="description" content="nested loops">
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
	background: url(https://i.ytimg.com/vi/JEhjeTaHiDU/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCsVyvs3m9eAwqdb7vBDbhdzv8gmA);
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color: black;
	}
	.container{
	position: relative;
	display: inline-block;
	margin-top: 50px;
	margin-left: 50%;
	transform: translate(-50%, 60px);
	padding: 50px;
	text-align: center;
	box-sizing: border-box;
	width: 50%;
	font-size: 1.2em;
	background:#27F54D;
	}
	.subtn{
		color: #27F54D;
		background-color: white;
		font-size: 19px;
		border: 3px solid #27F54D;
		border-radius: 13px;
		padding: 15px 30px;
		cursor: pointer
	}
	.subtn:hover{
		color:white;
		background-color: #27F54D;
		border: 3px solid white;
	}
	ul {
  		list-style-position: inside; /*moves the bullet point closer to string*/
	}
	.error{
		color: #BF5845;
		font-weight: bold;
	}

 </style>
 <body>
 	<div class="container">
 		<h1>Nested Loops</h1>
 		<p style="color: #BF5845;">Instruction:<ul style="color: #BF5845;font-weight: bold;font-size: 0.9em;">Starting and Ending value has to be greater than one.Starting and Ending value has to be less than ten.Can't leave the inputs empty :)</p>
 		<form name="numbers" action="activity_2.5c.php" method="post">
 		<h1>Enter the stop for 1st loop:<input type="number" name="stop" value=""></h1>
 		<h1>Enter the stop for 2nd loop:<input type="number" name="end" value=""></h1>
 		<input type="submit" name="subtn" value="submit" class="subtn">
 		</form>
 		<?php  
 		if (isset($_POST['subtn'])) {
 			//error checking 
 			$error = false; 
 			$errormessage = ""; //intialize 
 			//set the variables 
 			$s = (int)$_POST['stop'];
 			$e = (int)$_POST['end'];
 			if ($s == '' OR $e == '') {
 				$errormessage .= "No empty fileds!";
 				$error = true;
 			}elseif($s < 1 OR $e < 1){
 				$errormessage .= "Starting value and Ending value must be greater than 1";
 				$error = true;

 			}elseif($s > 10 OR $e > 10){
 				$errormessage .= "Starting value and Ending value must be less than 10";
 				$error = true;

 			}
 			if($error == false){
 			if ($s >= 1 && $s <= 10 && $e >= 1 && $e <= 10) {
 				for ($i = 1; $i <= $s; $i++){ //for loop 1
 					for ($j = 1; $j <=$e ; $j++) {  //for loop 2
 						$sum = $i + $j; //sum of both variables
 						echo "<p>".$i."+".$j."=".$sum."</p>";
 					}
 				}
 			}
 				
 			}else{
 				echo "<p class='error'>Error!</p>".$errormessage;
 			}
 		}

 		?>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>