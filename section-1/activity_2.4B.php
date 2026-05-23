<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Crazy Cats</title>	
	
	<meta name="description" content="Crazy Cats">
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
	background: url(https://img.freepik.com/free-vector/cat-lover-pattern-background-design_53876-100662.jpg)no-repeat center 10%; /* moves the background up from the center */;
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color: #826321;
	font-weight: bold;
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
	background:rgb(190, 196, 196, 160);
	}
	.subtn{
	margin-top: 20px;
	background-color: #826321;
	font-size: 19px;
	border: 3px solid #ffffff;
	border-radius: 3px;
	padding: 15px 30px;
	cursor: pointer;
	}
	.subtn:hover{
		color: #826321;
		background-color:#ffffff;
	}
	.error{
		color: red;
		font-weight: bold;
	}
	.img{
		margin-top: 30px;
		width: 50%
	}

 </style>
 <body>
 	<div class ="container">
 		<h1>Crazy Cats</h1>
 		<form name="cats" action="activity_2.4B.php" method="post">
 			<h2>What color is your cat?
 			<select name="color">
 				<option value="">--Pick a color--</option>
 				<option value="black">black</option>
 				<option value="orange">orange</option>
 				<option value="white">white</option>
 				<option value="grey">grey</option>
 				<option value="lavendar">lavendar</option>
 			</select></h2>
 			<h2>How much does your cat weight 
 			<input type="number" name="weight" value="" placeholder="kg"autocomplete="off"> kg</h2>
 			<h2>What is your cat's name?</br>
 			<input type="text" name="name" value="" placeholder="" autocomplete="off"></h2></br>
 			<input type="submit" name="submit" value="submit" class="subtn">
 			</form>
 			<?php
 			if (isset($_POST['submit'])) {
 			 	//set the variables 
 			 	$c = ($_POST['color'])?? '';
 			 	$w = ($_POST['weight'])?? '';
 			 	$n = ($_POST['name'])?? '';
 			 	//error checking
 			 if ( $w == '' || $w <= 0 || $c == '') {
 			 	echo "<p class = 'error'>Input invalid.</p>";
 			 	//or otherwise 
 			 }else{ echo "<p>This is ".$n."</p>";
 			 //image switch 
 			 switch ($c) {
 			 	case 'black':
 			 		echo "<img src=https://image.petmd.com/files/inline-images/bombay-cat-breed.jpg?VersionId=Qz_cZGLn1bPgxzUXCY5No4UwZLwtClwU class = 'img'>";
 			 		break;
 			 	case 'white':
 			 		echo "<img src=https://www.thesprucepets.com/thmb/GOtxsUeyleZs9NHexGNGoPt6OGs=/1080x0/filters:no_upscale():strip_icc()/33351631_260594934684461_1144904437047754752_n-5b17d77604d1cf0037f3ea5a.jpg class = 'img'>";
 			 		break;
 			 	case 'lavendar':
 			 		echo "<img src = https://cdn-prd.content.metamorphosis.com/wp-content/uploads/sites/2/2022/12/Lavender-Toxicity-In-Cats-Image.jpg class = 'img'>";
 			 		break;
 			 	case 'grey':
 			 		echo "<img src=https://hips.hearstapps.com/hmg-prod/images/cat-royalty-free-image-1729710482.jpg?crop=0.637xw:1.00xh;0.355xw,0 class = 'img'>";
 			 		break;
 			 	case 'orange':
 			 		echo "<img src =https://www.dailypaws.com/thmb/D4RelXrMDy3y5TaBPBhxQ2Wl-Wg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/orange-abyssinian-1223658583-447903ecfcb742f9a6e969a16f7ead6b.jpg class = 'img'>";
 			 		break;
 			 //weight switch 
 			 }switch (true) {
 			 	// Check the unique 20 kg black cat first. 
            	case ($w == 20 && $c == 'black'):
                echo "<p>At 20kg, this isn't a house cat—it's a void-colored shadow prowler. You're going to need a bigger couch (and more tuna).</p>";
                break;
 			 	case ($w > 0 && $w <= 2.5):
 			 		echo "<p>Skin and bones!!!</p>";
 			 		break;
 			 	case ($w > 2.5 && $w <= 5):
 			 		echo "<p>Small but healthy...</p>";
 			 		break;
 			 	case ($w > 5 && $w <= 10):
 			 		echo "<p>Getting a little heavy I think!</p>";
 			 		break;
 			 	case ($w > 10 && $w <= 15):
 			 		echo "<p>You may wanna hide the food...</p>";
 			 		break;
 			 	case ($w > 15 && $w <= 20):
 			 		echo "<p>Are you sure this is the cat???</p>";
 			 		break;
 			 	case ($w > 20):
 			 		echo "<p>You’re going to need another job to feed this thing!</p>";
 			 		break;
 			}
 			}
 		}
 			 ?>
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>