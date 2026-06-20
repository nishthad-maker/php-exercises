<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Binary Array</title>	
	
	<meta name="description" content="Input Form and Binary Array, convert bits to decimal">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="binary.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url(https://img.freepik.com/free-vector/abstract-horizontal-grid-lines-graph-style-graphic-design_1017-39918.jpg?semt=ais_hybrid&w=740&q=80);
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
	padding: 20px;
	text-align: center;
	box-sizing: border-box;
	font-size: 1.2em;
	}
	.subtn{
		color: #ffffff;
		background-color: #0819A5;
		font-size: 19px;
		border: 4px solid #ffffff;
		border-radius: 8px;
		padding: 20px 40px;
		cursor: pointer

	}
	.subtn:hover{
		background-color: white;
		color: #0819A5;

	}

 </style>
 <body>
 	<div class="container">
 		<div class="grid">
 		<div class="col-span-3">
 			<h1>Binary Array</h1>
 			<p><b>About:</b> This website is a step-by-step calculator designed to show you exactly how computers convert <b>binary numbers</b> (base-2) into regular <b>decimal numbers</b> (base-10). When you type in a string of 1s and 0s, the website uses a programming structure called an <b>array</b> to split your number up into individual digits. It then loops backward through that array, multiplying each digit by its correct power of 2, and adds them all together to find the final answer</p>
 			
 		</div>
 		<div class="col-span-2">
 			<h1>What is binary?</h1>
 			<iframe width="560" height="315" src="https://www.youtube.com/embed/zDNaUi2cjv4?si=VbsWSLxBS4pwvcHS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
 			<p>Instruction:</br>Enter a binary number (a series of 0s and 1s, such as 1101 into the input box and click <b>Convert</b>.The calculator will process the string from right to left, multiplying each bit by its corresponding power of 2 (2^0, 2^1, 2^2, etc.) to calculate and display the final decimal total. Make sure it's only 0's and 1's. <i style= "color: white;"class="fa-solid fa-arrow-right-long"></i></p>
 		</div>
 		<div class="col-span-1">
 			<form name="convert" action="activity_2.7c.php" method="post">
 			<h1>Enter Binary: </h1>
 			<input type="number" name="bits" value="<?php echo $_POST['bits']; ?>" placeholder="01101"></br></br>
 			<input type="submit" name="subtn" value="convert" class="subtn">

 		</form>
 	</br>
 		<?php 
 		if ($_POST['subtn']) {
 			//error checking
 			$error = false;
 			$errormessage = "";
 			//set variables
 			$b = $_POST['bits'];
 			//used empty instead as user will input 0 so it doesn't take that has empty field  
 			if (empty($b)) {
 				$error = true;
 				$errormessage = 'Please input a number';
 				//gemini helped here to check if input doesn't have 0's or 1's that is an error then 
 			}elseif (!preg_match('/^[01]+$/', $b)) {
 				$error = true;
 				$errormessage = "Please input only 0's and 1's";

 			}
 			if ($error == false) {
 				//create array 
 				$binaryarray = str_split($b);
 				$exponent= 0 ;//intilaize
 				//reverse for loop 
 				echo "Reverse Loop:</br>";
 				for ($i= sizeof($binaryarray)-1; $i >= 0; $i--) { 
 					$bit = (int)$binaryarray[$i]; //grab the bit from the array
 					$result += $bit * pow(2, $exponent); //perform the calculation 
 					echo "".$bit." * 2<sup>".$exponent."</sup></br>";
 					// Check if this is the last item in the loop
        			if ($i > 0) {
            			echo "+</br>"; // Print plus for all previous steps
        				} else {
           				 echo "=</br>"; // Print equals after the very last step
        				}$exponent ++; //move on to next power		
 					}
 				echo "Decimal value: <b>".$result."</b>";
 			}else{
 				echo "<p>ERROR!</p>" .$errormessage;
 			}

 		}
 		 ?>
 		</div>

 			
 		</div>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
