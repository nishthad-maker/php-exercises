<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Calculations with PHP</title>	
	
	<meta name="description" content="Activity 2.2">
	<meta name="author" content="Nishtha Dubey">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="grid_styles.css">

	<style>
	body {
		margin: 0;
		width: 100%;
		height: 100%;
		color: #f22c2c;
		font-family: "Aldrich", sans-serif;
		text-align: center;
		background: #f0667b;
	}
	h1 {
		color: red; /* red text color */
		margin-top: 35px;
	}
	h3 {
		color:red;
		text-transform: uppercase;
	}
	#container {
		position: relative;
		display: inline-block;
		width: 80%;
		height: 100%;
		box-sizing: border-box;
		padding: 10px;
		margin-top: 20px;
		border-radius: 0.5em;
		background: url(https://static.vecteezy.com/system/resources/previews/009/796/197/non_2x/notebook-paper-background-lined-paper-sheet-of-lined-page-notebook-paper-texture-vector.jpg);
	}
	.box {
		position: relative;
		display: inline-block;
		box-sizing: border-box;
		border: 3px solid #f22c2c;
		width: 100%;
		height: 100%;
		padding: 10px;
		background: #fff;
		margin: 80px;
		margin-top: -20px; 
	}
	.subBtn {
        display: inline-block;
        color: #ffffff; /* white text inside */
		background-color: #f0667b; /* light red background */
		font-size: 17px;
		border: 4px solid #f22c2c; /* dark red border color */
		border-radius: 25px; /* Rounded corners */
		padding: 15px 25px; 
		letter-spacing: 3px; 
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.5s ease;
    }
    .subBtn:hover {
        color: #f22c2c;
		background-color: #ffffff /* White background hover */
    }
    input, textarea, select {
    	position: relative
    	outline: none;
    	padding: 5px;
    	border: 2px solid #f22c2c;
    	border-radius: 6px;
    	font-size: 1.2em;
    	margin: 1px;
    }	
	</style>
</head>
<body>

	<div id="container">

	<h1>Calculations with PHP!</h1>
	<p>In this page you could calculate the average speed, area of trapazoid, speed of sound, pH levels, pythagorean theorem, and radius of circle. </p>
	
	<h3>Put in appropriate integers between 1 - 1000 to calculate</h3>
	
	<div class="grid">
		<div class="col-span-5">
			<div class="box">
				<form name="calculations" action="activity_2.2.php" method="post">
					<h2>Calculate Average Speed!</h2><br />
					<b>What is the distance?</b>
						<input type="number" name="distance" placeholder="0 meters" autocomplete="off" value=""></br></br>
					<b>What is the time?</b>
						<input type="number" name="time" placeholder="0 seconds" autocomplete="off" value=""></br></br>
						<!-- used min so the number doesn't go negative since you can't have negative time -->
						<input type="submit" value="CALCULATE" name="submit1" class="subBtn">
				</form>

				<!-- php goes here -->
				<?php 
				if ($_POST['submit1']) {

					//store the inputs
					$d = isset($_POST['distance']) ? $_POST['distance'] : 0;
					$t = isset($_POST['time']) ? $_POST['time'] : 0;
					$V = 0; // initialize;

					//error checking
					if (($d < 1 OR $d > 1000) OR ( $t <= 0 OR $t > 1000)) { 
						//just incase user just clicked submit and not putting value in time so need that condition for time. 
						echo "<p> Your values must be between 1 - 1000 
						</p>";
					}
					else{
						// do the calculation - safe
						$V = $d/$t;

						echo "<p> If the distance is ".$d." meters and the time is ".$t." seconds then speed = <b>".$V." m/s</p></b>";
					}
					
				}
				 ?>
					
					</div>
		</div>
		<div class="col-span-5">
			<div class="box">
				<h2>Calculate Area of a Trapezoid</h2><br />
				<form name="calculations" action="activity_2.2.php" method="post">
					<b>What is the Base 1?</b><br />
						<input type="number" name="base_1" autocomplete="off" placeholder="1 meters" value=""></input><br />
					<b>What is the Base 2?</b><br />
						<input type="number" name="base_2" autocomplete="off" placeholder="1 meters" value="" ></input><br />
					<b>What is the Height?</b><br/>
						<input type="number" name="height" autocomplete="off" placeholder="1 meters" value=""></input><br/><br />
						<input type="submit" value="CALCULATE" name="submit2" class="subBtn"></input>
						<img src="https://static.vecteezy.com/system/resources/previews/046/151/193/non_2x/red-trapezoid-vertical-wall-minimalist-geometric-base-foundation-3d-decor-element-realistic-vector.jpg" 
						alt="Trapezoid"  
						style="width:400px; height:200px; display:block;
						 margin:auto;">
				</form>
				
				<?php 
					if ($_POST['submit2']) {

						//set the varibles 
						$a = isset($_POST['base_1']) ? $_POST['base_1'] : 0;
						$b = isset($_POST['base_2']) ? $_POST['base_2'] : 0;
						$h  = isset($_POST['height']) ? $_POST ['height']: 0;
						$A = 0; //initialize 

						


					//error checking 
					if (($a <= 0 OR $a > 1000) OR ($b <= 0 OR $b > 1000)OR($h <= 0 OR $h > 1000)) {
						echo "<p> Your values must be between 1 - 1000 
						</p>";
					}
					else{

						//calculation 
						$A = (($a+$b)*$h)/2;

						echo "<p> If the base is ".$a." & ".$b." meters and the height is ".$h." meters then area = <b>".$A." meters<sup>2</sup></p></b>";

					}
					}


				 ?>
							</div>
		</div>
		<div class="col-span-5">
			<div class="box">			
				<h2>Calculate Speed of Sound!</h2><br />	
				<b>What is the Temperature in degrees Celsius?</b><br />
				<form name="calculations" action="activity_2.2.php" method="post">
					<select name="temp">
						<option value="-10">-10</option>
						<option value="0">0</option>
						<option value="10">10</option>
						<option value="20">20</option>
						<option value="30">30</option>
					</select><br /><br />
					<input type="submit" value="CALCULATE" name="submit3" class="subBtn"></input>
				</form>
				
					<?php 
					if ($_POST['submit3']) {
    					// set variable 
    					$t = isset($_POST['temp']) ? $_POST['temp'] : 0;
    					$S = 0;

   						 // calculation 
    					$S = ($t * 0.6) + 332;

    					// output
    					echo "<p>At ".$t." celsius the speed of sound = <b>".$S." m/s</b></p>";
						}
						?>
					</div>
		</div>
		<div class="col-span-5">
			<div class="box">			
				<h2>Enter minutes to determine the pH level after eating something with sugar</h2>
				<form name="calculations" action="activity_2.2.php" method="post">
					<input type="number" name="minutes" autocomplete="off" placeholder=" min" value=""></input><br/><br />
					<input type="submit" value="CALCULATE" name="submit4" class="subBtn"></input>
				</form>

				<?php 
				if ($_POST['submit4']) {
					//set variable 
					$m = isset($_POST['minutes']) ? $_POST['minutes'] : 0;
					$L = 0; 
				if ($m > 1000 OR $m <= 0) {
					echo "<p> Your value must be between 1-1000</p>";
				}
				else{
				//calculation 
					$L = ((-20 * $m) / (($m ** 2) + 4)) + 7;;
					$L = round ($L, 1); //round to one place

					//output 
					echo "At ".$m." minutes the pH level is ".$L."";
				}
				}
				?>
				</div>
		</div>
		<div class="col-span-5">
			<div class="box">			
				<h2>Enter area of the circle to find the radius</h2>
				<form name="calculations" action="activity_2.2.php" method="post">
					<input type="number" name="area" autocomplete="off" placeholder="0 meters" value=""></input><br /><br /> <!-- added min and max so don't have to do error checking part-->
					<input type="submit" value="CALCULATE" name="submit5" class="subBtn"></input>
				</form>
				<?php  
				if ($_POST['submit5'])
				{
					//set variable 
					$C = isset($_POST['area']) ? $_POST['area'] : 0;
					$r = 0;

				if ($C > 1000 OR $C <= 0){
					echo "<p> Your value must be between 1-1000</p>";

				}else{
					//calculation 
					$r = sqrt(($C/pi()));

					$r = round($r, 2); //round to 2 decimal places since using pi
					//output
					echo "<p>If area is ".$C." meters<sup>2</sup> then radius should be <b>".$r." meters</b></p>";
				}		

				}


				?>
			</div>
		</div>
		<div class="col-span-5">
			<div class="box">
				<h2>Find hypotenuse of right triangle</h2><br />
				<form name="calculations" action="activity_2.2.php" method="post">
					<b>What is the Leg 1?</b><br />
						<input type="number" name="leg_1" autocomplete="off" placeholder="1 meters" value=""></input><br />
					<b>What is the Leg 2?</b><br/>
						<input type="number" name="leg_2" autocomplete="off" placeholder="1 meters" value=""></input><br/><br />
						<input type="submit" value="CALCULATE" name="submit6" class="subBtn"></input>
					</form>
					<?php 
					if (isset($_POST['submit6'])) {
						//set variables 
						$leg1 = isset($_POST['leg_1']) ? $_POST['leg_1'] : 0;
						$leg2 = isset($_POST['leg_2']) ? $_POST['leg_2'] : 0;
						$hyp = 0;
					if (($leg1 <= 0 OR $leg1 > 1000) OR ($leg2 <= 0 OR $leg2 > 1000)){

						echo "<p> Your value must be between 1-1000</p>";
					}
					else{
						//do the calculation
						$hyp = sqrt(($leg1**2 + $leg2**2));
						$hyp = round($hyp,2); //round to 2 decimal places 
						//output 
						echo "<p>if leg 1 is ".$leg1." & leg 2 is ".$leg2." meters then hypotenuse should = <b>".$hyp." meters</b></p>";
					}
				}
					 ?>

					</div>
				</div>

	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>