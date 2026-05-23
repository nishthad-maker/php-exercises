<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Working with Variables: Parsing URLs</title>	
	
	<meta name="description" content="Uses Get method from the URL">
	<meta name="author" content="Nishtha Dubey">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">

	<head>

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
			font-size: 12px;
			border: 1px solid #ffffff;
			padding: 10px 15px;
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
				<h1 style="text-transform: uppercase;">Working with Variables: Parsing URLs</h1>
				<?php 
				//assign the variables 
					$b = $_GET['border'];
					$bg = $_GET['bgcolor']; //background color 
					$cp = $_GET ['cellpadding'];
					$x = $_GET['x'];
					$y = $_GET['y'];
					$z = $_GET['z'];
					$title = $_GET['title']; //title 
					$size = $_GET['size']; //font size

					//all the calculation 

					$r = $x + $y - 2*$z;
					$r2 = 2*$x - 4*$y + (3*$z-80);
					$r3 = ($x + $y - 2*$z)+ (2*$x - 4*$y + (3*$z-80));

					//the message 
				echo "<p>This is the value of <b>x</b> = " . $_GET['x'] . ", the value of <b>y</b> = ".$_GET['y']." and <b>z</b> = " . $_GET['z'] . " and <b>title</b> is ".$_GET['title']."</p>";
				echo "<h2> ".$_GET['title']." </h2>";

				//create table

				echo "<table align='center' cellpadding= '$cp' cellspacing= '0' border='$b' bgcolor='$bg' style = 'font-size:{$size}px'>
					<tr>
						<td><b>Mathematical Operation</b></td>
						<td><b>Result</b></td>
					</tr>
					<tr>
						<td>x + y -2*z</td>
						<td>$r</td>
					</tr>
					<tr>
						<td>2x-4y+(3z-80)</td>
						<td>$r2 </td>
					</tr>
					<tr>
						<td>result of (row2,col2) + result of (row3,col2)</td>
						<td>$r3</td>
					</tr>
						</table>";

						?>
					<form name="calculations" action="activity_2.2B.php" 
					method="get">
						<h2 style="text-decoration: underline;">INPUTS</h2>
						<b>X-Value</b>
						<input type="number" name="x" autocomplete="off" placeholder="" value="" min ="1" step="any"></input><br />
						<b>Y-Value</b>
						<input type="number" name="y" autocomplete="off" placeholder=""min ="1"  value="" step="any"></input><br />
						<b>Z-Value</b>
						<input type="number" min ="1"  name="z" autocomplete="off" placeholder="" value="" step="any"></input><br />
						<b>Title</b>
						<input type="text" name="title" autocomplete="off" placeholder="" value=""></input><br />
						<b>Table Padding</b>
						<input type="number" name="cellpadding" autocomplete="off" placeholder="" min ="1" value="" step="any"></input><br />
						<b>Table Border</b>
						<input type="number" name="border" autocomplete="off" placeholder="" min ="1" value="" step="any"></input><br />
						<b>Background Color</b>
						<input type="color" name="bgcolor" value="#000000"><br />
						<b>Font Size</b>
						<input type="number" name="size" autocomplete="off" placeholder="" min ="1" value="" step="any"></input><br />
						<input type="submit" value="Build Table" name="submit" class="subBtn"></input>


					</form>
				</div>
		<!-- end main content -->
	
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>


