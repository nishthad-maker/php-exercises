<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Train Filling Problem</title>	
	
	<meta name="description" content="Built a simulation to optimize train count and travel times based on passenger demand">
	<meta name="author" content= "Nishtha Dubey">	

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="train-filling-problem.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url(https://www.on-sitemag.com/wp-content/uploads/2020/11/union_station_toronto.jpeg);
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color: yellow;
	}
 </style>
 <body>
 	<div class="container">
 		<div class="grid">
 			<div class="col-span-3">
 				<h1><i class="fa-solid fa-train" style="color:#5E5F64;"></i> Train Filling Problem</h1>
 				<p>Welcome to our train simulator website! You can type in any number of passengers to see how quickly a station platform can be cleared. The website randomly sends out different sized trains to pick everyone up while keeping track of boarding times and delays. It breaks everything down step-by-step so you can see exactly how long the whole trip takes!</p>
 			</div>
 			<div class="col-span-1">
 				<h1>How does this work?</h1>
 				<p>There are three types of trains with maximum capacities of <b>10, 20, or 30 </b>people that arrive at a station at random. To start the simulation, enter the total number of passengers waiting on the platform. The first train will fill to capacity, and if any passengers remain, another random train will be called, which takes <b>2 minutes</b> to arrive. Every individual passenger takes <b>2 seconds</b> to board. Once the platform is clear, the system will output the total number of trains required and the total elapsed time.</p>
 			</div>
 			<div class="col-span-2">
 				<form name="output" action="train-filling-problem.php" method="post">
 					<h1># of passengers:</h1></br>
 					<input type="number" name="passenger" value="<?php echo isset($_POST['passenger']) ? htmlspecialchars($_POST['passenger']) : ''; ?>" style="padding: 15px 25px; color: yellow; background: #5E5F64; font-size: 0.8em; text-align: center;"></br>
 					<input type="submit" name="subtn" value="Run" class="subtn">
 				</form>
 				
 				<?php
 				if (isset($_POST['subtn'])) {
 				 	//error checking
 				 	$error = false;
 				 	$errormessage = "";

 				 	//set the variables
 				 	$pas = (float)$_POST['passenger'];
 				 	//array
 				 	$train = array(30,20,10);
 				 	$train_count = 0; //initialize 
 				 	$total_time = 0; //initialize 
 				 	
 				 	//function
 				 	function mins_conversion($x){
 				 		//calulate the minutes 
 				 		$minutes = floor($x/60); //need only mins
 				 		//calulate the seconds 
 				 		$seconds = $x % 60; //gives out remainder 
 				 		return $minutes . " min " . $seconds . " sec";
				 	}
				 	
 				 	//error conditions
 				 	if (empty($_POST['passenger']) && $_POST['passenger'] !== '0') {
 				 		$error = true;
 				 		$errormessage .= 'Please input a number';
 				 	}elseif ($pas <= 0) {
 				 		$error = true;
 				 		$errormessage .= 'Please input number greater than 0';
 				 	}
 				 	
 				 	if ($error == false) { 
 				 		$orginal_passenger = $pas; //keeping count of the starting passenger 
 				 		
 				 		//Initialize graph starting point at Train 0 with total passengers
 				 		$plotpoints = "[0, " . $orginal_passenger . "],"; 
 				 		
 				 		echo "You are trying to load <i> ".$orginal_passenger."</i> passengers. </br></br>";
 				 		while ($pas > 0) {
 				 			//pick random index, note: other way you could do is just do rand(0,2) and use that to pull out the value from the array
 				 			$randomindex = array_rand($train);
 				 			//pull the value from that index 0 = 30, 1 = 20, 2 = 10
 				 			$randomtrain = $train[$randomindex];
 				 			
 				 			if ($pas >= $randomtrain) {
 				 				$boarded = $randomtrain; //fill in the passenger 
 				 				//gives a postivie value
 				 				$pas = $pas - $randomtrain;
 				 			}else{
 				 				$boarded = $pas; //remaning passangers get on now 
 				 				$pas = 0; //so no passangers are left on platform 
 				 			}
 				 			$train_count ++;
 				 			//boarding time calculation 
 				 			$total_time += ($boarded*2); //passengers boarding time 
 				 			//if its not the first train then add the waiting time 
 				 			if ($train_count > 1) {
 				 				$total_time += 120; //add 2 mins 
 				 			}
 				 			//conversion 
 				 			$result_time = mins_conversion($total_time); //call the function as a variable 

 							// Output row data
 							echo "<b style ='color:#5E5F64;'>Train #</b>" . $train_count . " | ";
 							echo "<b style ='color:#5E5F64;'>Capacity: </b>" . $randomtrain . " | ";
 							echo "<b style ='color:#5E5F64;'> Boarded: </b>" . $boarded . " | ";
 							echo "<b style ='color:#5E5F64;'> Time Elapsed: </b>" . $result_time . "</br>";
 							
 							// Build the data string
 							$plotpoints .= "[" . $train_count . ", " . $pas . "],";	
 				 		}
 				 		echo " It took <b>".$train_count."</b> trains and total time of <b>".$result_time."</b>";
 				 		?> 
 				 		
 				 		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 						<script type="text/javascript">
 		 					google.charts.load('current', {'packages':['corechart']});
 		 					google.charts.setOnLoadCallback(drawChart);

 		 					function drawChart() {
 		 					var data = google.visualization.arrayToDataTable([
 		 						['Train Count', 'Passengers Remaining'],
 		 						<?php echo rtrim($plotpoints, ','); ?>
 		 					]);
 		 					
 		 					var options = { 
 		 						title: 'Passengers Remaining Per Train',
 		 						curveType: 'function',
 		 						legend: { position: 'bottom' },
 		 						// Labels for X and Y axes
 		 						hAxis: {
 		 							title: 'Train count',
 		 							format: '0' 
 		 						},
 		 						vAxis: {
 		 							title: 'Remaning passengers',
 		 							minValue: 0 
 		 						},
 		 						backgroundColor: 'yellow'
 		 					};

 		 					var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
 		 					chart.draw(data, options);
 		 					}
 						</script>

 						<div id="curve_chart" style="width: 100%; height: 500px; margin-top: 20px;"></div>

					<?php 
					} else {
				 		//if there is an error
				 		echo "<p style='color:red;'> <i class='fa-solid fa-triangle-exclamation'></i> Error! " . $errormessage . "</p>";
					}
				} 
				?>	
 			</div>
 		</div>
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>