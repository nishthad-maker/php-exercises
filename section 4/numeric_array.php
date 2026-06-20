<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Train Carts</title>	
	
	<meta name="description" content="Numeric Array">
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
	background: url(https://images.pexels.com/photos/555868/pexels-photo-555868.jpeg);
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color:#73F527;
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
	background:rgb(190, 196, 196, 0.8);
	}
	.button {
	margin: 10px;
	color: #c08b59;
	background-color: #ddb492;
	font-size: 19px;
	border: 1px solid #c08b59;
	border-radius: 16px;
	padding: 15px 50px;
	cursor: pointer
		}
	.button:hover {
	color: #ddb492;
	background-color: #c08b59;
		}

 </style>
 <body>
 	<div class="container">
 		<h1>Welcome to Train Car Prize Game!</h1>
 		<img style = "width: 80%"src="../images/traincart.png">
 		<p>Instruction: Pick a cart between 0-7, and click show the prize to check the object in that cart or can use the random button to see your lucky cart.</p>
 		<form name="array" action = "activity_2.7a.php"method = "post">
 			<h1>Please enter car # between 0-7:</h1></br>
 			<input type="number" name="number" value="<?php echo $_POST['number'];?>"style="background: #c08b59;"></br></br>
 			<input type="submit" name="prize" value="Reveal Prize" class="button">
 			<input type="submit" name="random" value="Pick a Random #" class="button"><input type="submit" name="show" value="Show all"class="button">
 		</form>
 		<?php
 		// set variables 
 		$n = (int)$_POST['number'];
 		$train = array("0","1","2","3","4","5","6","7");
 		$object = array("Chocolate", "Coal", "Gold Bars", "iPhone", "Basketball", "Pink Sweatshirt", "Drake Concert Tickets","Pencil");
 		$trainimage = array("<img style = 'width:50%'src = 'https://addictedtodates.com/wp-content/uploads/2019/01/vegan-milk-chocolate-recipe.jpg'>",
 			"<img style = 'width : 50%'src = 'https://swannscoalsupplies.co.uk/cdn/shop/collections/coal-types.jpg?v=1718282817&width=1296'>",
 			"<img style = 'width: 50%'src = 'https://www-cdn.usmoneyreserve.com/www-prod/2018/10/gold-bar-1-kilo_800.jpg'>","<img style = 'width :50%'src ='https://need-a-phone.ca/cdn/shop/files/iPhone_13_Blue.png?v=1759926271'>",
 			"<img style = 'width: 50%'src = 'https://www.sourceforsports.ca/cdn/shop/files/d31bf7cd9647dad7cc4483a052e1e6b0.jpg?crop=center&height=460&v=1723673844&width=460'>","<img style = 'width:50%'src = 'https://i.etsystatic.com/31237277/r/il/d1b698/4032145001/il_570xN.4032145001_t0st.jpg",
 			"https://townsquare.media/site/812/files/2019/07/OVO-Fest-Tickets.jpg?w=1080&h=720&q=75'>","<img style='width:50%' src ='https://static.vecteezy.com/system/resources/thumbnails/048/038/449/small_2x/back-to-school-elements-cartoon-clipart-and-line-art-designs-printable-back-to-school-graphics-vector.jpg'");
 		if(isset($_POST['prize'])){
 			//error checking
 			$error = false;
 			$errormessage .= "";
 			if ($n == '') {
 			$error = true;
 			$errormessage.= "Please Input a number";
 			}elseif ($n < 0 OR $n > 7) {
 				$error = true;
 				$errormessage .= "Please Input number between 0-7";
 			}
 			
 			if ($error == false) {
 				echo "".$n." cart has ".$object[$n]."</br>";
 				echo"".$trainimage[$n]."";
 			}else{
 				echo "ERROR! " .$errormessage;
 			}
 		}
 		if(isset($_POST['random'])){
 			if($error == false){
 				//set random variable 
 				$r = rand(0,7);
 				echo"".$r." cart has ".$object[$r]."</br>";
 				echo "".$trainimage[$r]."";
 			}

 		}if(isset($_POST['show'])){
 			echo "<ul style = 'margin: auto;'>
 			<li>0 = Chocolate</li>
 			<li>1 = Coal</li>
 			<li>2 = Gold bars</li>
 			<li>3 = iPhone</li>
 			<li>4 = Basketball</li>
 			<li>5 = Pink Sweatshirt</li>
 			<li>6 = Drake Concert Tickets</li>
 			<li>7 = Pencil</li>

 			</ul>";

 		}
 			
 		 ?>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
