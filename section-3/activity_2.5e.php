<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Population Growth</title>	
	
	<meta name="description" content="population growth">
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
	background: url();
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
	margin-top: 50px;
	margin-left: 50%;
	transform: translateX(-50%);
	padding: 50px;
	text-align: center;
	box-sizing: border-box;
	width: 70%;
	font-size: 1.2em;
	background:#279CF5;
	}
	.subtn{
	color: #ffffff;
	background-color: #C2DAED;
	font-size: 19px;
	border: 1px solid #2d63c8;
	padding: 15px 50px;
	cursor: pointer
	}
	.subtn:hover{
	color: #2d63c8;
	background-color: #ffffff
	}
	.error{
		color: #BF5845;
		font-weight: bold;
		font-size: 0.9em;
	}
	ul {
  		list-style-position: inside; /*moves the bullet point closer to string*/
	}
	h1{
	color: #C2DAED;
	}
 </style>
 <body>
 	<div class="container">
 		<h1>Population Growth</h1>
 		<p>This website will help you to calcuate population growth overtime.
 		<a href="https://www.coolmath.com/algebra/17-exponentials-logarithms/06-population-exponential-growth-01"><img src="../images/population.png" style="width: 80%; margin: auto;"alt="population"></a></p>
 		<h1>Background Information:</h1>
 		<p>Population growth represents the change in the number of individuals in a given area over time. This shifts based on birth and death rates, as well as migration patterns. Understanding these trends is vital, as population changes directly impact natural resources, environmental sustainability, and urban development. Use this tool to project how a population might evolve based on current growth data.</p>
 		<h1>Instruction: </h1>
 		<p>To ensure an accurate calculation, please follow these guidelines:</p>
 		<ul>
 		<li>Initial Population: Enter the current or starting number of people.</li>
 		<li>Growth Rate: Enter the annual growth as a percentage (e.g., enter 1.2 for $1.2\%$).</li>
 		<li>Timeline: Ensure the Starting Year is earlier than the Ending Year.</li>
 		<li>Completeness: Please fill out all fields before hitting show the growth.</li>
 		</ul>
 		<form name="calculation" action="activity_2.5e.php" method="post">
 			<h2>Enter intial population: <input type="number" name="intial" step="any" value=""></h1>
 			<h2>Enter growth rate: <input type="number" name="rate" step="any"> %</h1>
 			<h2>Enter starting year: <input type="number" name="start" value="" placeholder="2012"></h1>
 			<h2>Enter ending year: <input type="number" name="end" value="" placeholder="2030"></h1>
 			<input type="submit" name="subtn" value="Show the Growth" class="subtn">
 		</form>
 		<?php
 		if (isset($_POST['subtn'])) {
 			//error checking
 			$error = false;
 			$errormessage = ""; //intialize 
 		 	$p = (int)$_POST['intial'];
 		 	$r = (int)$_POST['rate'];
 		 	$s = (int)$_POST['start'];
 		 	$e = (int)$_POST['end'];
 		 	if ($r == "" OR $p == "" OR $s == "" OR $e =="") {
 		 		$errormessage .= " Please fill out all fields before hitting show the growth.";
 		 		$error = true;
 		 	}
 		 	elseif ($e <= $s) {
 		 		$errormessage .= "Ending year must be less than starting year";
 		 		$error = true;
 		 	}
 
		if ($error == false) {
    	$g = $r / 100;
    	$plotpoints = ""; // Initialize the string to avoid errors

    	for ($i = $s; $i <= $e; $i++) {
        $t_current = $i - $s; // Calculate time passed since the start
        $result = round($p * exp($g * $t_current)); // Fix: use population $p, not current year $i
        
        echo "<p>In the year <b>".$i."</b> the final population is <b>".number_format($result)."</b></p>";
        
        // Build the data string
        $plotpoints .= "['" . $i . "', " . $result . "],";
    }
    //close the tag first 
    ?> 

    	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    	<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Population'],
                <?php echo rtrim($plotpoints, ','); ?> 
            ]);

        	var options = {
                title: 'Population Growth Projection',
                curveType: 'function',
                legend: { position: 'bottom' },
                // Labels for X and Y axes
                hAxis: {
                    title: 'Timeline (Years)',
                    format: '0' // Removes commas from years
                },
                vAxis: {
                    title: 'Total Number of People',
                    minValue: 0
                },
                backgroundColor: '#f9f9f9'
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
            chart.draw(data, options);
        }
    </script>

    <div id="curve_chart" style="width: 100%; height: 500px; margin-top: 20px;">
    	
    </div>

	<?php // open the tag again 
	} else {
    echo "<p class='error'>Invalid Input!</p>" . $errormessage;
	}
	}
	?>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>