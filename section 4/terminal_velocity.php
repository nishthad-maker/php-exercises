<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Terminal Velocity</title>	
	
	<meta name="description" content="User input and create funciton to calculate Terminal Velocity of a object">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url(https://models.spriters-resource.com/media/preview_icons/281/283975.png?updated=1755496430);
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color:#2637ED;
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
	width: 90%;
	font-size: 1.4em;
	background:rgb(190, 196, 196, 0.8);
	}
	.para1{
	background:#2637ED;
	width: 80%;
	padding: 30px;
	border: 1px solid white;
	color: white;
	margin:auto;
	}
	ul {
  	text-align: center;
  	list-style-position: inside; /* Moves bullet inside the text block */
	}
	.subtn{
		color: #ffffff;
		background-color: #2d63c8;
		font-size: 19px;
		border: 4px solid #ffffff;
		border-radius: 8px;
		padding: 15px 50px;
		cursor: pointer
	}
	.subtn:hover{
	color: #2d63c8;
	background-color: #ffffff;
	}

 </style>
 <body>
 	<div class="container">
 		<h1>Calculate Terminal Velocity!</h1>
 		<p>Goal: Uses user input and function calculate terminal velocity</p>
 		<div class="para1">
 			<h1>What is Terminal Velocity?</h1>
 			<img style = "width: 50%"src="https://www.sciencefacts.net/wp-content/uploads/2022/06/Terminal-velocity.jpg">
 			<p>The terminal velocity of an object is the maximum speed at which an object will fall through a fluid at.  Objects initially accelerate when falling in a fluid, as the object accelerates the upward resistive force of the fluid eventually equals the downward force of gravity causing the object to stop accelerating and to reach its terminal (maximum) speed.</p>
 		</div>
 		<h1 style="margin-top: 2%">Equation:</h1>
 		<img style = "width: 50%; margin: 2%;"src="https://latex.codecogs.com/svg.image?{\color{Blue}V=\sqrt{\frac{19.6*mass}{Cd*1.229*area}}}" title="Equation" />
 		<ul style="margin: auto;">
 			<li><b>mass of object (kg) [mass]</b> input box</li>
 			<li><b>Drag Coefficient [Cd]</b>
 				<ul>
				<li>Flat Plate = 1.28</li>
				<li>Prism = 1.14</li>
				<li>Bullet Shape = 0.3</li>
				<li>Sphere = 0.1</li>
				<li>Airfoil = 0.05</li></ul></li>
				<li><b>Frontal Area (m2) [area] </b>input box </li>
			</ul>
			<div class="para1" style="margin-top: 5%;">
				<form name="calculate" method="post" action="activity_2.6c.php">
					<h1>What is the mass of the object? <input type="number" name="mass" value="<?php echo $_POST['mass'];?>" placeholder="2 kg" style="padding: 10px;"></h1>
					<h1>What is the Drag Coefficient of the object?
						<select name="drag" style="padding: 10px;">
							<option value="">--Pick your Coefficient--</option>
							<option value="1.28">Flat Plate (1.28)</option>
							<option value="1.14">Prism (1.14)</option>
							<option value="0.3">Bullet Shape (0.3)</option>
							<option value="0.1">Sphere (0.1)</option>
							<option value="0.05">Airfoil (0.05)</option>
						</select></h1>
					<h1>What is the Frontal Area? <input type="number" name="area" value="<?php echo $_POST['area'];?>" placeholder = "4 m^2" style= "padding: 10px;"></h1></br>
					<input type="submit" name="subtn" value="calculate" class="subtn">
					
				</form>
				<?php 
				if (isset($_POST['subtn'])) {
					//error checking
					$error = false;
					$errormessage = "";
					//set the varibles
					$m = (float)$_POST['mass'];
					$cd = (float)$_POST['drag'];
					$a = (float)$_POST['area'];
					//create the function 
					function terminalvelocity($m, $cd, $a){
						$result = sqrt((19.6 * $m)/($cd * 1.229 * $a));
						$result = round($result,2);
						return $result;
					}
					if ($m == '' OR $cd == '' OR $a == '') {
						$error = true;
						$errormessage .= "Please fill in all the fields";
					}elseif ($m <= 0 OR $a <= 0) {
						$error = true;
						$errormessage .= "Please input number greater than zero";

					}if ($error == false) {
						$answer = terminalvelocity($m, $cd, $a);
						echo '<p><img style="width: 50%; margin: 5%;" src="https://latex.codecogs.com/svg.image?{\color{white}V=\sqrt{\frac{19.6*'.$m.'}{'.$cd.'*1.229*'.$a.'}}}"/></p></br>
						<p><img style="width: 20%; margin-bottom: 5%;"src="https://latex.codecogs.com/svg.image?{\color{white}V='.$answer.'}"/>';
						echo "<p>The terminal velocity of the object is <b>".$answer." m/s</b> with coefficient of ".$cd.".</p>";
					}else{
						echo "<p> Error!</p>" .$errormessage;
					}
				}
				 ?>
			</div>
 		</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
