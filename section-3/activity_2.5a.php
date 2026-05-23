<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>While loops</title>	
	
	<meta name="description" content="while loops">
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
		color: black;
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
		background:#96bb99;
	}
	.subtn{
		color: #ffffff;
		background-color: #c6e4be;
		font-size: 19px;
		border: 3px solid #96bb99;
		border-radius: 13px;
		padding: 15px 30px;
		cursor: pointer
	}
	.subtn:hover{
		color:#c6e4be;
		background-color: #ffffff;
	}
	.error{
		color: #BF5845;
		font-weight: bold;
	}

 </style>
 <body>
 	<div class="container">
 		<h1>Create a number loop</h1>
 		<p style="color: #BF5845;">Instruction:<ul style="color: #BF5845;font-weight: bold;font-size: 0.9em;">Make sure: Starting value must be less than or equal to 3. Ending value must be less or equal to 7.Starting and Ending value can't be same
 		Ending value must be greater than starting value :)
 		</p>
 		<form name="numbers" action="activity_2.5a.php" method="post">
 			<h1>Pick a starting number:
 			<input type="number" name="start" value=""></h1>
 			<h1>Pick an ending number:
 			<input type="number" name="end" value=""></h1>
 			<input type="submit" name="subtn" value="submit" class="subtn">
 		</form>
 		<?php
 		if (isset($_POST['subtn'])) {
 			//error checking
 			$error = false; //0
 			$errormessage = ""; //intiailze 
 			//set the variables 
 			$s = (int)$_POST['start'];
 			$e = (int)$_POST['end'];
 			if ($s == '' || $e == '') {
			$errormessage .= 'Please fill in the required fields!';
			$error = true;
			} elseif ($s > $e) {
			$errormessage .="The starting value is greater than ending value!";
			$error = true;
			}elseif ($s == $e) {
		 	$errormessage .='Start and end values cannot be the same!';
		 	$error = true;
			} elseif ($s>3 OR $e<7){
			$errormessage .= 'The starting value must be less than 3 and ending valus must be greater than 7';
			$error = true;
			}
 			//condtion that must be true
 			if ($error == false) {
 			if($s <= 3 AND $e >=7 AND $s < $e){
 				//set the while loop
 				while ($s <= $e) {
 					echo "<b> ".$s."</b>";
 						if($s == 3){
 							echo " <span>yay, this is number three!</span>"; //makes the string same line as number stated 
 						}if ($s == 7) {
 							echo "<span> lucky number seven!</span>";
 							}
 						echo "<br>"; //line breaker (gemini helped to make each number in different line)
 						$s++; //increases number 1  
 				}
 			}
 			
 		}else{
 			echo "<p class = 'error'>ERROR!</p>". $errormessage;
 		}
 	}
 	?>	
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>