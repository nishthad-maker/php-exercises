<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Accerlation Due to Gravity</title>	
	
	<meta name="description" content="Associative Array">
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
	background: url(https://img.magnific.com/free-vector/hand-painted-watercolor-galaxy-background_52683-63441.jpg?semt=ais_hybrid&w=740&q=80);
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color:#F95FB3;
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
	background:rgb(173, 216, 230, 0.5);
	}
	.subtn{
	color:  #042FA5;
	background-color: #F95FB3;
	font-size: 19px;
	border: 2px solid  #042FA5;
	border-radius: 11px;
	padding: 15px 50px;
	cursor: pointer
	}
	.subtn:hover {
	color:#F95FB3;
	background-color:  #042FA5;
	}
	.ouput{
	background: #042FA5;
	margin: 20px;
	padding: 10px;
	border: 3px solid #042FA5;
	}

 </style>
 <body>
 	<div class="container">
 		<h1>Accerlation Due to Gravity</h1>
 		<p style="color: #042FA5;"><b>About:</b> This program uses an associative array to store the planets and their acceleration due to gravity values. It displays all planets whose gravity values fall between the starting and ending range entered by the user.</p>
 		<p style="color:#042FA5;"><b>Instructions:</b> Enter a starting and ending acceleration value between 0 and 24 m/s<sup>2</sup>. The starting value must be less than the ending value.</p>
 		<form name= "space" action= "activity_2.7b.php" method="post">
 			<h1>Starting Accerlation: <input type="number" name="start" value="<?php echo $_POST['start'];?>"style="color:#F95FB3; background: #042FA5; padding:20px; font-size: 0.4em;"></h1></br>
 			<h1>Ending Accerlation: <input type="number" name="end" value="<?php echo $_POST['end'];?>" style="color:#F95FB3; background: #042FA5; padding:20px; font-size: 0.4em;"></h1>
 			<input type="submit" name="subtn" value = "submit" class="subtn">
 			
 		</form>
 		<?php 
 		if (isset($_POST['subtn'])) {
 			//error checking
 			$error = false;
 			$errormessage = "";
 			//set the variable
 			$s = (float)$_POST['start'];
 			$e = (float)$_POST['end'];
 			if ($s == '' OR $e == '') {
 				$error = true;
 				$errormessage .= "Please input a value";
 			}elseif ($s > $e) {
 				$error = true;
 				$errormessage .= "Starting value must be less than Ending Value";
 			}elseif ($s < 0 OR $e < 0) {
 				$error = true;
 				$errormessage .= "Please input value greater than 0";
 			}elseif ($s > 24 OR $e > 24) {
 				$error = true;
 				$errormessage .= "The value must be between 0-24 m/s<sup>2</sup>";
 			}
 			if($error == false){
 			//create a array
 			$accerlation = array('Mercury' =>'3.76' ,'Venus' =>'9.04','Earth' =>'9.8', 'Mars' =>'3.77', 'Jupiter' =>'23.6','Saturn' =>'10.06','Uranus' =>'8.87', 'Neptune' =>'11.23');
 			$planetimage = array('Mercury' => "<img style = 'width: 30%;'src = 'https://www.nhm.ac.uk/content/dam/nhm-www/discover/mercury-facts/mercury-factfile-false-colour-two-column.jpg.thumb.480.480.png'>", 
 				'Venus' =>"<img style = 'width: 30%;'src = 'https://cdn.mos.cms.futurecdn.net/RifjtkFLBEFgzkZqWEh69P-1200-80.jpg'>", 
 				'Earth' =>"<img style = 'width: 30%;'src =  'https://cdn.mos.cms.futurecdn.net/FaWKMJQnr2PFcYCmEyfiTm.jpg'>", 
 				'Mars' => "<img style = 'width: 20%;'src = 'https://static.scientificamerican.com/sciam/cache/file/C454F5A6-536E-4C9F-AA6AF354BB85A85B_source.jpg?w=1200' >",
 				'Jupiter' => "<img style = 'width: 30%;src = 'https://cdn.britannica.com/66/155966-050-F18467EA/Jupiter.jpg?w=300'>",
 				'Saturn' =>"<img style = 'width: 25%;'src = 'https://assets.science.nasa.gov/dynamicimage/assets/science/psd/photojournal/pia/pia02/pia02225/jpeg/PIA02225.jpg?w=900&h=1000&fit=clip&crop=faces%2Cfocalpoint'>",
 				'Uranus' =>"<img style = 'width: 40%;'src =  'https://science.nasa.gov/wp-content/uploads/2023/06/uranus-pia18182-1920x640-1-jpg.webp'>",
 				'Neptune' => "<img style = 'width: 30%;'src = 'https://science.nasa.gov/wp-content/uploads/2024/03/pia01492-neptune-full-disk-16x9-1.jpg?resize=1536,864'>");
 			//foreach loop
 			foreach ($accerlation as $planet => $gravity) {
 				//image variable 
 					$img = $planetimage[$planet];
 				if ($gravity >= $s AND $gravity <= $e) {
 					echo"<div class ='ouput'>";
 					echo "<p style = 'color: #F95FB3; font-weight: bold; '>"; //print out all the planets 
 					echo $planet . " : " . $gravity . " m/s<sup>2</sup></br>";
 					echo "".$img."";
 					echo "</div>";
        			echo "</p>";
 				}
 			}
 		}else{
 			echo"<p> Error! </p>" .$errormessage;
 		}
 	}
 		
 		 ?>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
