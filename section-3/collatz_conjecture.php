<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Collatz Conjecture</title>	
	
	<meta name="description" content="User input, calculation & while loop">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="collatz.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url(https://static.vecteezy.com/system/resources/previews/021/692/542/non_2x/math-formulas-mathematical-formulas-on-green-school-chalkboard-handwritten-scientific-math-equations-theories-or-calculations-background-vector.jpg);
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
	padding: 30px;
	text-align: center;
	box-sizing: border-box;
	width: 100%;
	font-size: 1.2em;
	}
	.subtn {
		color: #ffffff;
		background-color: #0A7D14;
		font-size: 19px;
		border: 1px solid #2d63c8;
		border-radius: 21px;
		padding: 15px 30px;
		cursor: pointer
		}
	.subtn:hover {
		color: #0A7D14;
		background-color: #ffffff;
		}

 </style>
 <body>
 	<div class="container">
 		<div class="grid">
 			<div class="col-span-3">
 		<h1>Collatz 3n+1 Conjecture</h1>
 		</div>
 		<div class="col-span-1" style="margin-top: 20px">
 			<h1>Collatz 3n+1 Video </h1>
 			<p style=" color: #0A7D14; font-weight: bold;"><i class="fa-solid fa-bell" style="color: red;"></i> Watch this video to learn about Collatz Conjecture <i class="fa-solid fa-bell"style="color: red;"></i></p>
 			<iframe width="600" height="400" src="https://www.youtube.com/embed/5mFpVDpKX70?si=erfqbVuc75ewyY4V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></br>
 			<p style="font-size: 0.9em;color: #0A7D14;">The Collatz Conjecture, also known as the 3n + 1 problem, is one of the most famous unsolved mysteries in mathematics. The rules are deceptively simple: start with any positive integer, divide it by 2 if it is even, or multiply it by 3 and add 1 if it is odd. The conjecture asserts that repeating this process will always eventually reel the sequence down to the number 1, where it gets trapped in an endless 4 → 2 → 1 loop. While every number tested so far—up into the quintillions—confirms this pattern, a universal mathematical proof remains completely elusive. It perfectly illustrates how a problem that is incredibly easy to understand can be monumentally difficult to solve, proving that simple rules can create infinite complexity.</p>
 		</div>
 		<div class="col-span-2" style="margin-top: 20px;">
 			<h1>Equation:</h1>
 			<img style="width: 80%;" src="https://latex.codecogs.com/svg.image?{\color{DarkGreen}\mathbf{f(n)}=\begin{Bmatrix}\frac{n}{2}&if&\textbf{n}&is&even\\3n&plus;1&if&\textbf{n}&is&odd\\\end{Bmatrix}{\color{DarkGreen}" title="Equation"/></br></br>
 			<a href="https://www.quantamagazine.org/why-mathematicians-still-cant-solve-the-collatz-conjecture-20200922/" style="font-size: 1.3em;">For More Info! Click here!</a>
 			<p style="margin-top: 80px; font-size:1.5em; color: red; ">Now enter a number that is greater than 0 to see the collatz conjecture of your number.</p>
 			<form name="calculation" method="post" action="activity_2.5f.php">
 				<input type="number" name="collatz" value="" placeholder="Enter Number here" style="padding:10px 100px; color: #0A7D14;"></br></br>
 				<input type="submit" name="subtn" value="Run Calculation" class="subtn">
 			</form>
 			<?php 
 			if (isset($_POST['subtn'])) {
 				//error checking 
 				$error = false;
 				$errormessage = ''; 
 				//set the variable
 				$n = (int)$_POST['collatz'];
 				if($n == ''){
 					$error = true;
 					$errormessage .= 'Please input a number';
 				}elseif ($n <= 0) {
 					$error = true;
 					$errormessage .= 'Please input number greater than 0';
 				}if ($error == false) {
 					echo "<p> Starting number <b>".$n."</b></p>"; //show the starting number 
 					while ( $n > 1) {
 						if ($n % 2 == 0) {
 						$n = $n/2; //number is even
 						$color = 'blue'; // color for even number 
 					}
 					else{
 						$n = (3*$n) + 1; //number is odd 
 						$color = 'green'; //color for odd number
 					}
 					echo "<p style = 'color: ".$color.";'>".$n." </br> ↓ </br></p>";
 					}
 					//print final number 1
 					echo "<p style = 'color:black; font-weight:bold;' >".$n."</p>";
 				}else{
 					echo "<p style = 'color: red;'>Error!</p>" .$errormessage; //add error
 				}


 			}

 			 ?>
 		</div> s


 		
 	</div>
 </div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
