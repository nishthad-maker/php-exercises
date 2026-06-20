<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Flowcharts & Algorithms</title>	
	
	<meta name="description" content="Created a flowchart & algorithm calculations with loops and functions">
	<meta name="author" content="Nishtha Dubey">	
		<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="s-p-flowchart-algorithm.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body {
		padding: 0;
		background: url(https://img.freepik.com/free-vector/skull-apache-mascot-illustration_343694-1737.jpg?semt=ais_hybrid&w=740&q=80);
		background-size: cover;
		background-attachment: fixed;
		font-family: 'Combo', system-ui;
		text-align: center;
		text-transform: uppercase;
		color: white;
	}
</style>
<body>
	<div class="container">
		<div class="grid">
			<div class="col-span-3">
				<h1>Flowcharts & Algorithms</h1>
				<p>Welcome to Flowcharts & Algorithms! This website is built to help you master logic, problem-solving, and computer science thinking. It connects visual flowcharts with real code to make complex programming fundamentals easy to understand. Inside, you will find clear, step-by-step guides that show exactly how data moves through a system. You can test the logic yourself by entering your own numbers to see how functions, loops, and math conditions run in real-time. Just explore the page, type in a starting value, and click Run Calculation to watch the algorithm work its magic!</p>
			</div>
			
			<div class="col-span-2">
				<p>To get started, simply type a whole number of 1 or greater into the box labeled Input Value of p. Once you have entered your number, click the Run Calculation button to send it to the system. The website will immediately pass your value through an automated algorithm that checks if it is a prime number, tracks whether it is odd or even, and processes it through a repeating loop. Finally, the system will complete all the mathematical conditions and display the final calculated value for p right on your screen.</p><br>
				<img src="../images/flowchart.png" alt="flowchart" title="flowchart" style="width: 80%;">
			</div>
			<div class="col-span-1">
				<h1>How does this work? Behind the Scenes.</h1>
					<iframe src="https://drive.google.com/file/d/1aF_YEcjG3MYcCIPWlOOtkxBwr8aFENpw/preview" width="640" height="480"></iframe>
					<p>Click Download to see the video!</p>
			</div>
			
			<div class="col-span-3">
				<form name="calculations" action="s-p-flowchart-algorithm.php" method="post">
					<h1>Input Value of p: <input type="number" name="p" autocomplete="off" value="<?php echo isset($_POST['p']) ? intval($_POST['p']) : ''; ?>"></input></h1>
					<input type="submit" value="RUN CALCULATION" name="submit1" class="subtn"></input>
				</form>
				
				<?php
				function checkPrime($n) {
					if ($n < 2) return 0; 
					for ($x = 2; $x <= $n / 2; $x++) {
						if ($n % $x == 0) {
							return 0; 
						}
					}
					return 1; 
				}

				function checkeven($x) {
					if ($x % 2 == 0) {
						return 2; // Even
					} else {
						return 3; // Odd
					}
				}

				$result = "";

				if (isset($_POST['submit1'])) {
					//set the variables 
					$p = intval($_POST['p']); 
					$stop = "no"; // Initialize the stop variable as "no"
					$steps = 0; //initialize the steps 
					
					if ($p < 1) {
						//if there is an error
				 		echo "<p style='color:red;'> <i class='fa-solid fa-triangle-exclamation'></i> Error! </br> Please put number greater than or equal to 1 </p>";
					} else {
						$s = 12; 
						$trackoutput = "<b>(p,S)</b> » (" . $p . "," . $s . ")"; // trackng p and s value as a coordinate 

						do {
							$steps ++; //count the steps while doing this loop 
							// Calling the functions and storing their results in variables
							$evenStatus = checkeven($p);
							$primeStatus = checkPrime($p);

							// 1. Is p even? (Evaluates variables)
							if ($evenStatus == 2) {
								$p = $p + 1;
								// Re-evaluate prime status since p just changed
								$primeStatus = checkPrime($p);
							}
							
							// 2. Is p prime? (Evaluate variable)
							if ($primeStatus == 1) {
								
								// 3. Is p < S?
								if ($p < $s) {
									$s = $s - $p;
									$p = $p + 2; 
								} else {
									$s = $s - 1;
									
									// 4. Is S = 0? 
									if ($s != 0) {
										$p = $p + 2;
									} else {
										$stop = "yes"; // Trigger the stop condition when S reaches 0
									}
								} 
								
							} else {
								// If p is not prime
								$p = $p + 2;
							}
							$trackoutput .= " » (" . $p . "," . $s . ")"; //record the values again 


						// Loop runs until $stop is "yes"
						} while ($stop !== "yes");
						echo "".$trackoutput." </br>";
						$result = "The final output value for p is: <b>" . $p . "</b> </br> it took <b>".$steps." </b>steps.";
						echo "" . $result . "";

					}
				}
				?>
			</div>
		</div>
	</div>

	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>