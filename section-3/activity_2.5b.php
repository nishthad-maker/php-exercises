<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>For Loops</title>	
	
	<meta name="description" content="for loops">
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
		background: url(https://s3.amazonaws.com/twbmarketingprod/files/local/721/2f1dd20856/addams-family-haunted-mansion-scenic-backdrop-hero-ebaf0b.jpg);
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
		font-size: 0.9em;
		background:rgb(190, 196, 196, 0.8);
	}
	.subtn{
		color: #ffffff;
		background-color: black;
		font-size: 19px;
		border-radius: 13px;
		padding: 15px 30px;
		cursor: pointer
	}
	.subtn:hover{
		color:black;
		background-color: #ffffff;
	}
	ul {
  		list-style-position: inside; /*moves the bullet point closer to string*/
	}
	.error{
		color: #BF5845;
		font-weight: bold;
		font-size: 0.9em;
	}

 </style>
 <body>
 		<div class="container">
 		<h1>Create a number loop</h1>
 		<p style="color: #BF5845;">Instruction:<ul style="color: #BF5845;font-weight: bold;font-size: 0.9em;">Starting and Ending value can't be same.The the ghost number is between the first and second number.The increment value is less than the difference between the start and end number.Ending value must be greater than starting value :)</p>
 		<form name="numbers" action="activity_2.5b.php" method="post">
 			<h2>Pick a starting number:
 			<input type="number" name="start" value=""></h2>
 			<h2>Pick an ending number:
 			<input type="number" name="end" value=""></h2>
 			<h2>Pick a increment value:
 			<input type="number" name="increment" value=""></h2>
 			<h2>Pick when a number when ghost should appear: 
 			<input type="number" name="ghost" value=""></h2>
 			<input type="submit" name="subtn" value="submit" class="subtn">
 		</form>
 		<?php 
 		if (isset($_POST['subtn'])) {
 			//error checking 
 			$error = false;
 			$errormessage = ""; //intialize 
 			//set the variables 
 			$s = (int)$_POST['start'];
 			$e = (int)$_POST['end'];
 			$c = (int)$_POST['increment'];
 			$g = (int)$_POST['ghost'];
 			//errors 
 			if ($_POST['ghost'] === '' || $_POST['start'] === '' || $_POST['end'] === '' || $_POST['increment'] === '') {
 			$errormessage .= "No empty fields!";
 			$error = true;

 			}elseif ($g <$s OR $g > $e) {
 			$errormessage .= "The Ghost number must be between starting and ending number";
 			$error = true;

 			}elseif ($s>$e) {
 			$errormessage .="Starting value should be less than ending value";
 			$error = true;

 			}elseif($c <= 0){
 				$errormessage .= "Increment must be greater than 0. ";
 				$error = true;

 			}elseif ($c > ($e-$s)) {
 			$errormessage .= "The incremntal value must be less than difference of starting and ending value";
 			$error = true;

 			}if ($error == false){
 			//set the condintions needed to start 
 				if ($s < $e AND ($g >=$s AND $g <= $e) AND ($c <= $e -$s) AND
 					(($g - $s) % $c == 0)) {  //subtract then divide by incremental to find and remainder must be zero 
 					for ($i = $s; $i <= $e ; $i = $i + $c) { 
 					echo "<pstyle = 'font-size = 1.3em';><b> ".$i."</b></p>";
 						if ($i == $g) {
 						echo "<span><img src='../images/ghost.jpg'style ='width:50%'></span>"; //image of ghost 
 						}
 					echo "</br>";
 				}
 			}
 		}else{
 		//error checking for other invalid input show this
 			echo "<p class = 'error'>ERROR!</p>" .$errormessage;
 		}
 	}


 	
 		?>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>