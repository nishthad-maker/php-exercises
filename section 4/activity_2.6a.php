<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Chirp-chirp</title>	
	
	<meta name="description" content="functions">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="chirp.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url(https://wallpaperonline.ca/wp-content/uploads/2022/01/kids-wallpaper-131877769-1.jpg);
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
	padding: 50px;
	text-align: center;
	box-sizing: border-box;
	font-size: 1.2em;
	}
	.subtn {
	color: #fb189d;
	background-color: #eef056;
	font-size: 19px;
	border: 1px solid #f10ec7;
	border-radius: 26px;
	padding: 15px 50px;
	cursor: pointer
	}
	.subtn:hover {
	color: #eef056;
	background-color: #fb189d;
	}

 </style>
 <body>
 	<div class="container">
 		<div class = 'grid'>
 			<div class="col-span-3">
 				<h1>Chirp Chirp (Weather Forecasting)</h1>
 				<p style="margin-top: 2px;">It is believed that the common field cricket chirps are in direct proportion to the current temperature.This can be used to do basic weather forecasting.  The tempearture in degrees Celcius can be determined by taking the chirps per minute dividing by 7.2 and then adding 4.</p>
 			</div>
 			<div class="col-span-1">
 				<h1>Instruction:</h1>
 				<p>Find a Cricket. Listen closely to a cricket outside and count how many times it chirps in exactly in 60 secs. Enter the count into the input box labeled"Enter Chirps Per Minute." Make sure to enter number greater than 0. Then click calculate to see the temperature and weather Severity</p>
 				<img  style= 'width: 50%;'src="https://latex.codecogs.com/svg.image?\mathbf{{\color{Yellow}{C^{\circ}}=\frac{Chirps}{7.2}&plus;4}}" title="equation" />
 			</div>
 			<div class="col-span-2">
 				<form name="calculate" method="post" action="activity_2.6a.php">
 					<h1>Enter Chirps Per Minute:</h1>
 					<input type="number" name="chirps" value="" style="padding: 10px 50px;"></br>
 					<input type="submit" name="subtn" class="subtn" value="calculate" style="margin-top: 25px;">
 					
 				</form>
 				<?php 
 				if (isset($_POST['subtn'])) {
 					//error checking
 					$error = false;
 					$errormessage = '';
 					$n = (int)$_POST['chirps'];
 					//create function 
 					function temp($n){
 					$temp = ($n / 7.2) + 4;
 					$temp = round($temp, 2); //round 
 					return $temp; //return it 
 					}
 					//errors 
 					if ($n == '') {
 						$error = true;
 						$errormessage .= 'Please input a number';
 					}elseif ($n <= 0) {
 						$error = true;
 						$errormessage .= 'Please input number greater than 0.';
 					}if ($error == false) {
 					$result = temp($n); //call the function and set to a variable
 					echo "<p> Temperature is ".$result." degrees"; 
 					if ($result > 43) {
 						echo "<p> Dead Cricket. :(</p> </br> <img style = 'width = 50%' src = https://thumbs.dreamstime.com/b/sad-crying-green-grasshopper-cartoon-character-big-eyes-distressed-large-tear-filled-open-mouth-expresses-intense-406777955.jpg>";	

 					}elseif ($result > 27 AND $result <=43 ) {
 						echo "<p>Whew, it is hot!</p></br> <img style = 'width = 50%' src = https://media.istockphoto.com/id/1323823418/photo/low-angle-view-thermometer-on-blue-sky-with-sun-shining.jpg?s=612x612&w=0&k=20&c=LwLCGF902C-DNwKgCMCR12zFnB4g1INWzlk1JPOidRk=>";
 					}elseif($result > 7 AND $result <= 27){
 						echo "<p>Ahhhh, comfortable.</p></br> <img style = 'width = 50%' src = https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTNK1HXJhy0r8u6qL3vw9dJQBRrm7WHHQOLg&s>";
 					}elseif($result <= 7){
 						echo "<p>Brrrr!</p></br> <img style = 'width = 50%' src = https://www.vmcdn.ca/f/files/baytoday/images/weather/brrr!-cold-turl-2016.jpg;w=640>";

 					}

 					}else{
 						//error
 						echo "<p>Error!</p>" .$errormessage;
 					}
 				}
 				 ?>
 			</div>
 		</div>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>