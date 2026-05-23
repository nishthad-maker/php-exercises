<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Sign UP</title>	
	
	<meta name="description" content="More about CSS">
	<meta name="author" content="Author information goes here...">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	
	<!-- styles - internal (not linked) -->
	<style>
	* {
		/* apply to all elements */
  		box-sizing: border-box;
	}
	body {
		position: relative;
		display: inline-block;
		height: 100%;
		width: 100%;
		padding: 0;
		margin: 0;
		color: #ffffff;  /* font color */
		font-family: "Roboto";
		background: url("https://img.freepik.com/free-photo/abstract-paper-cut-blue-wave-background_474888-7320.jpg?semt=ais_rp_progressive&w=740&q=80");
		background-size: cover;
		background-attachment: fixed;
		text-align: center;
	}
	#container {
		position: relative;
		display: inline-block;
		width: 80%;
		padding: 10px;
		margin-top: 20px;
		margin-bottom: 20px;
		border-radius: 0.5em;
		background: rgba(164, 223, 245,0.7);
	}
	form {
		position: relative;
		padding: 20px;
	   	width: 80%;
	   	margin-left: auto;
	   	margin-right: auto;
		text-align: left;
	}
	input, select, textarea {
		font-size: 1.4em;
		border: 1px solid #999999;
		padding: 5px;
		border-radius: 0.5em;
		outline: none;
		margin: 5px;
	}
	.output {
		position: relative;
		display: inline-block;
		margin-top: 20px;
		background: rgba(164, 223, 245);
		text-align: left;
		color: black;
		padding: 20px;
		border: 1px dashed #2768F5;
	}
	</style>
</head>
<body>
	<!-- PHP extension code goes below this -->
	<?php
	// only show the information if the button named "subButton" has been pressed
	if (isset($_POST['subButton'])) {
		// set the variable with the submitted value
		$firstName = $_POST['fname'];
		$lastname = $_POST['lname'];
		$grade = $_POST['grade'];
		$year = $_POST['year'];
		$info = $_POST['info'];
		$hideme = $_POST['hideme'];

		// display the user inputs to the screen
		echo "<div class='output'>";
		echo "<p>Your first name is <b>" . $firstName . "</b>.</p>";
		echo "<p>Your last name is <b>"  . $lastname . "</b>.</p>";
		echo "<p>Your grade is <b>"  . $grade . "</b>.</p>";
		echo "<p>Your graduation Year is <b>"  . $year . "</b>.</p>";
		//sport section
		if (!empty($_POST['sports'])) {
			if (sizeof($_POST['sports']) > 3) {
				echo "Please pick only up to three sports!!";
			} // if they picked more than 3 sports this message will be posted
			else {
			    foreach ($_POST['sports'] as $sport) {
			        echo "<p>You picked <b>$sport</b>.</p>";
			    }
			}
	    } else {
	        echo "<p>You did not pick any sports.</p>";
	    }
	    //other section posts
		echo "<p>Your comment/concerns are: <b>"  . $info . "</b>.</p>";
		echo "<p>You will be <b>" . $hideme . "</b>.</p>";
		echo "</div>";
	}
	?>

	<!-- main content -->
	<div id="container">
		<h2>Sign Up For Intramurals</h2>
		<p>Choose up to 3 Intramurals to participate during your school year.</p>

		<!-- there are two form methods: "get" and "post" ; "get" shows the values for the type variables and values, "post" hides the type variables and values //-->
		<form name="form1" action="activity_1.9.php" method="post">
			<!-- text input //-->
			First Name: <input type="text" name="fname" value="" placeholder="FIRST NAME" required=""></input>
			<hr size="1" />
			
			<!-- password input //-->
			Last Name: <input type="text" name="lname" value=""placeholder="LAST NAME" required=""></input>
			<hr size="1" />

			<!-- simple drop-down list //-->

			<h3>Grade</h3>
			<select name="grade">
				<option value="">- Your Grade -</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			<hr size="1" />
			
			<!-- radio input //-->
			<h3>Graduation Year</h3>
			<input type="radio" name="year" value="2026" checked>2026</input>
			<input type="radio" name="year" value="2027">2027</input>
			<input type="radio" name="year" value="2028">2028</input>
			<input type="radio" name="year" value="2029">2029</input>

			<hr size="1" />
			
			<!-- checkbox input //-->
			<h3>Pick Up to 3 Sports</h3>
			<!-- I am using arrays so that I have a single variable becuase it helps to store mutiple variables of the same type.-->
			<input type="checkbox" name="sports[]" value="volleyball">Volleyball</input> <!-- used array //-->
			<input type="checkbox" name="sports[]" value="basketball">Basketball</input>
			<input type="checkbox" name="sports[]" value="badminton">Badminton</input>
			<input type="checkbox" name="sports[]" value="soccer">Soccer</input>
			<input type="checkbox" name="sports[]" value="pickelball">Pickelball</input>
			<input type="checkbox" name="sports[]" value="dance">Dance</input>
			<hr size="1" />
		
		
			
			<!-- textarea input //-->
			<h3>Comments/Concerns</h3>
			<textarea name="info" rows="3" cols="30"></textarea>
			<hr size="1" />
			
			<!-- hidden input -->
			<input type="hidden" name="hideme" value="notified soon"></input>
			
			<!-- submit button //-->
			<input type="submit" name="subButton" value="SUBMIT"></input>
		</form>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>

