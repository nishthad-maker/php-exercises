<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Ice cream Volume</title>	
	
	<meta name="description" content="Icecream">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="icecream.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url(https://img.magnific.com/premium-vector/strawberry-ice-cream-with-cone-texture-background_189483-88.jpg?semt=ais_hybrid&w=740&q=80);
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-transform: uppercase;
	color: #F6729A;
	}
	.container{
	position: relative;
	display: inline-block;
	padding: 50px;
	box-sizing: border-box;
	font-size: 1.2em;
	}
	.subtn {
	color: #ffffff;
	background-color: #F6729A;
	font-size: 19px;
	border: 3px solid #fcfcfd;
	border-radius: 33px;
	padding: 15px 50px;
	}
	.subtn:hover {
	color: #F6729A;
	background-color: #ffffff;
	}

 </style>
 <body>
 	<div class="container">
 		<div class = 'grid'>
 		<div class = "col-span-3" style="margin-bottom: 10px;text-align: center;">
 			<h1>Find volume of your ice cream</h1>
 			<p style="color: #E5008C;">This website calculates the total geometric volume of an ice cream cone based on your custom radius, height, and number of scoops. By combining the volume formulas for a cone and a sphere, it instantly processes your measurements and displays the precise result rounded to two decimal places.</p>
 		</div>
 		<div class="col-span-2">
 			<h1 style="text-align: center;">Welcome to the Ice Cream Cone Volume Calculator! To find the total volume of your treat, please follow these simple steps:</h1></br>
 			<p style="color: #E5008C; font-size: 1.2em;" ><b>Enter the Radius:</b> Type the radius of your cone into the first input box. Note that this calculator assumes the ice cream scoop has the exact same radius as the opening of the cone.</br></br><b>Enter the Height:</b> Type the vertical height of the cone into the second input box.</br></br><b>Select Your Scoops</b>: Use the dropdown menu to choose how many scoops of ice cream you want.</br></br><b>Note:</b> The first scoop is calculated as a half-sphere (hemisphere) because its lower half sits completely inside the cone. Any additional scoops you add will be calculated as full spheres stacked on top.</br></br><b>Calculate:</b> Click the "Calculate Volume" button.</p>
 		</div>
 		<div class="col-span-1"style = "text-align:center;">
 			<img style = "width:100%;"src="https://www.thespruceeats.com/thmb/QjCQ4RTjmnhrovGkuJWzZCXYFX8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-90053856-588b7aff5f9b5874ee534b04.jpg">
 			<p>Equation: Volume = Volume of cone + sphere + half sphere</p>
 			<img src="https://latex.codecogs.com/svg.image?{\color{Pink}v=\frac{h*&space;\pi&space;*r^2}{3}&plus;\frac{4*&space;\pi&space;*r^2}{3}&plus;\frac{4*&space;\pi&space;*r^2}{6}}" title="Equation" />
 		</div>
 		<div class="col-span-3" style="text-align: center;">
 			<h1>Volume Calculator</h1>
 			<p style="font-weight: bold;"><i style = "color: red;"class="fa-solid fa-circle-exclamation"></i> Make sure number is greater than zero and No flieds are empty. <i style = "color: red;"class="fa-solid fa-circle-exclamation"></i></p>
 			<form name="calculator" action="activity_2.6b.php" method="post">
 			<h1>Enter Radius: <input type="number" name="radius" value="<?php echo $_POST['radius'];?>"> </h1>
 			<h1>Enter height: <input type="number" name="height" value="<?php echo $_POST['height'];?>" ></h1>
 			<h1>Enter # of Scoop: <select name="scoop" style="padding: 5px 20px;">
 				<option value="1">one scoop</option>
 				<option value="2">two scoop</option>
 				<option value="3">three scoop</option>
 				<option value="4">four scoop</option>
 				<option value="5">five scoop</option>
 			</select></h1></br>
 			<input type="submit" name="subtn" value="Calculate Volume" class="subtn"> 
 		</form>
 			<?php 
 			if (isset($_POST['subtn'])) {
 				//error checking
 				$error = false;
 				$errormessage = '';
 				//set variables
 				$r = (float)$_POST['radius'];
 				$h = (float)$_POST['height'];
 				$s = (int)$_POST['scoop'];
 				//create the function 
 				function icecream($r,$h,$s){
 					//variables of the fourmal 
 					$cone  =  ($h * pi() * pow($r,2))/3;
					$fullsphere =  4*(pi() * pow($r,3))/3;
					$halfsphere =  4*(pi() * pow($r,3))/6;
					if ($s == 1){ //if its one scoop
 					$result = $cone + $halfsphere;
 					$result = round($result,2); 
 					}else{ //more than one scoop 
 					$result = $cone + (($fullsphere * $s) - $halfsphere); 
 					$result = round($result,2);
 					}
 					return $result; //keep the result 
 				}
 			//errors
 			if ($s == '' OR $h == '' OR $r == '') {
 				$error = true;
 				$errormessage .= "No empty fields and can't be zero";
 			}elseif ($h <= 0 OR $r <= 0) {
 				$error = true;
 				$errormessage .= 'Input must be greater than 0';
 				//no erros then 
 			}if ($error == false) {
 				$volume = icecream($r,$h,$s); //call the function as a variable 
 				$link = "<img src='https://latex.codecogs.com/svg.image?%7B%5Ccolor%7BPink%7Dv%3D%5Cfrac%7B" . $h . "*%20%5Cpi%20*" . $r . "%5E2%7D%7B3%7D%2B%5Cfrac%7B4*%20%5Cpi%20*" . $r . "%5E2%7D%7B3%7D%2B%5Cfrac%7B4*%20%5Cpi%20*" . $r . "%5E2%7D%7B6%7D%7D'}'title='Equation' />";
 				echo "<p>".$link."</p>";
 				echo "<p> Total volume of your ice cream is<b> ".$volume."</b> units<sup>3</sup> with ".$s." scoops.";

 			}else{
 				echo "<p> <i style = 'color: red;'class='fa-solid fa-circle-exclamation'></i> Error!</p>" .$errormessage; //error message 
 			}


 			}
 			 ?>




 		</div>
 	</div>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
