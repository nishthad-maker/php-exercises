<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Working with Variables: Parsing URLs</title>	
	
	<meta name="description" content="Activity 2.2B">
	<meta name="author" content="Nishtha Dubey">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">


	<style>
		body{
		margin: 0;
		width: 100%;
		height: 100%;
		color: black;
		font-family: "Aldrich", sans-serif;
		text-align: center;
		background: #D190CE;
		}

		#main{
			margin: 50px;
			padding: 20px;
			background: rgb(225, 235, 240,30);
			color:#D190CE;
		}
		.subBtn{
			color: #ffffff;
			margin-top: 5px;
			background-color: #D190CE;
			font-size: 1.2em;
			border: 1px solid #ffffff;
			padding: 20px 15px;
			cursor: pointer
		}
		.subBtn:hover {
			color: #D190CE;
			background-color: #ffffff;
		}
		
	</style>
	</head>
		<body>
	<div id="main">
		<h1 style = "text-transform: uppercase;">Find Your Match</h1>
		<p>How to Find Your Match To discover your result, simply pick a number and a color. Your match is determined by how those two choices interact:</p>
		<p>Lizard: Pick a number 5 or less and the color red.
		Spock: Pick any number greater than 5 and pair it with either red or blue.
		Rock: Choose a number between 3 and 6 (at least 3 but less than 7) and the color green.
		Paper: Select a number 9 or higher and the color green.
		Scissors: Pick exactly the number 1 and the color blue.If your chosen combination doesn't meet one of these specific rules, you'll receive a "No conditions match!" message. Choose wisely to see which one you land on! </p>
		<img src="../images/table.png" style="width: 50%">
		<form name ="output" action="activity_2.3b.php" method="post">
			<select name = "number" style = 'padding: 20px 15px; font-size: 1.3em; color:#D190CE ;'>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				
				</select>
			<select name = "color"style = 'padding: 20px 15px; font-size: 1.3em; color:#D190CE ;'>
				<option value="red">red</option>
				<option value="green">green</option>
				<option value="blue">blue</option>
			
				</select>
			<input type="submit" name="suBtn" value="submit" class="subBtn">
			</input>
			

		</form>
		<?php 
		if (isset($_POST['suBtn'])){
		//set the variables
		$n = ($_POST['number']);
		$c = ($_POST['color']);

		//conditons 

		if($n <= 5 AND $c == "red"){
			echo "<p>Lizard </p><img src='../images/lizard.png'style='width: 50%''>";
		}else if (($n > 5) AND ($c == "red" || $c == "blue")){
			echo "<p>Spock</p><img src='../images/spock.png'style='width: 50%'>";
		}else if (($n >= 3 AND $n <= 7) AND ($c == "green")){
			echo "<p>Rock</p><img src='../images/rock.png'style='width: 50%'>";
		}else if (($n == 1) AND ($c == "blue" OR $c== "green")){
			echo "<p>Scissors</p><img src='../images/scissors.png'style='width: 50%'>";
		}else if ($n >= 9 AND $c == "green"){
			echo "<p>Paper</p><img src='../images/paper.png'style='width: 50%'>";
		}else if (($n < 3 AND $n != 1) AND ($c =="blue" OR $c == "green")){
			echo "<p>Rock</p><img src='../images/rock.png'style='width: 50%'>";
		}else if ( $n == 8 AND $c == "green"){
			echo "<p>Scissors</p><img src='../images/scissors.png'style='width: 50%'>";
		}


	}


		 ?>
	</div>

</head>


<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
