<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Currency Convertor</title>	
	
	<meta name="description" content="Currency Convertor">
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
	background: #5C5C57;
	background-size: cover;
	background-attachment: fixed;
	font-family: "Gelasio", serif;
	color: #ffffff;
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
	background:rgb(190, 196, 196, 16);
	}
	.subtn{
	color: #ffffff;
	background: #949699;
	font-size: 20px;
	border: 2px solid #ffffff;
	border-radius: 7px;
	padding: 15px 30px;
	margin-top: 20px;
	cursor: pointer;
	}
	.subtn:hover{
		color: #949699;
		background: #ffffff;
	}
	h2{
		font-size: 1.1em;
	}
	.error{
		color: black;
		font-weight: bold;
		text-transform: uppercase;
		text-align: center;
	}
	.output{
		color: yellow;
		font-weight: bold;
	}

 </style>
 <body>
 	<div class="container">
 		<h1>Currency Conventor</h1>
 		<form name="calculator" action="activity_2.4.php" method="post">
 			<h2>Please type in the amount</h2>
 			<input type="number" name="amount" autocomplete="off" placeholder="0.00" value="" step="any"></br>
 			<h2>Please select source currency:</h2></br>
 			<input type="radio" name="source" value="USD">
 				<label for = "USD">USD</label></br>
 			<input type="radio" name="source" value="CAD">
 				<label for = "CAD">CAD</label></br>
 			<input type="radio" name="source" value="EUR">
 				<label for = "EUR">EUR</label></br>
 			<h2>Please select target currency:</h2></br>
 			<input type="radio" name="target" value="USD">
 				<label for = "USD">USD</label></br>
 			<input type="radio" name="target" value="CAD">
 				<label for = "CAD">CAD</label></br>
 			<input type="radio" name="target" value="EUR">
 				<label for = "EUR">EUR</label></br>
 			<input type="submit" name="submit" value="Convert" class="subtn">
 		</form>
 		<?php 
 		if (isset($_POST['submit'])){
		//set the variables
 		$a = isset($_POST['amount']) ? $_POST['amount'] : 0;
 		$s = ($_POST['source']) ?? '';
 		$t = ($_POST['target']) ?? '';
 		$c = 0; //initialize

 		//error checking 
 		if ($s == $t) {
 			echo "<p class='error'>Source and target cannot be the same</p>";
 		}else if($a <= 0){
 			echo "<p class='error'> Please input valid amount</p>";
 		}else if ($s =='' OR $t == ''){
 			echo "<p class = 'error'> Please select both currenices</p>";
		}else if (($s == 'USD') && ($t =='CAD')){
 			//do the calculation 
 			$r = $a*1.38765695;
 			$r = round($r, 2); //round to two decimal places 
 			echo "<p class = 'output'> $".$a." USD = $".$r." CAD</p>";
 		}else if (($s == 'CAD') && ($t =='USD')){
 			//do the calculation 
 			$r = $a*0.72065675; 
 			$r = round($r, 2); //round to two decimal places 
 			echo "<p class = 'output'> $".$a." CAD = $".$r." USD</p>";
 		}else if (($s == 'EUR') && ($t =='USD')){
 			//do the calculation 
 			$r = $a*1.15902553;
 			$r = round($r, 2); //round to two decimal places 
 			echo "<p class = 'output'> €".$a." EUR = $".$r." USD</p>";
 		}else if (($s == 'USD') && ($t =='EUR')){
 			//do the calculation 
 			$r = $a*0.86279375;
 			$r = round($r, 2); //round to two decimal places 
 			echo "<p class = 'output'> $".$a." USD = €".$r." EUR</p>";
 		}else if (($a > 0) && ($s == 'CAD') && ($t =='EUR')){
 			//do the calculation 
 			$r = $a*0.62177477;
 			$r = round($r, 2); //round to two decimal places 
 			echo "<p class = 'output'> $".$a." CAD = €".$r." EUR</p>";
 		}else if (($s == 'EUR') && ($t =='CAD')){
 			//do the calculation 
 			$r = $a*1.60829092;
 			$r = round($r, 2); //round to two decimal places 
 			echo "<p class = 'output'> €".$a." EUR = $".$r." CAD</p>";
 		}
 		}
 		 ?>
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
