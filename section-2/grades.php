<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Making the Grade</title>	
	
	<meta name="description" content="Learning about conditional statements">
	<meta name="author" content="Nishtha Dubey">

	<style>
	body {
		font-family: "Calibri", sans-serif;
		background: url("https://icsprogramming.ca/images/chalkboard-background.jpg");
		background-size: cover;
		background-attachment: fixed;
		margin: 0;
		color: #ffffff;
		padding: 0;
	}
	.error {
		color: #ff0000;
	}
	#reportContainer {
		position: relative;
		margin-left: auto;
		margin-right: auto;
		width: 80%; 
		padding: 2%; 
		margin-top: 100px;
		background: rgba(0,0,0,0.4);
		border-radius: 0.5em; 
	}
	.niceInput {
		outline: none;
		border: 1px solid #007bff;
		border-radius: 4px;
		font-size: 1.1em; 
		padding: 5;
		margin: 1px;
	}
	.subBtn {
        color: #ffffff; /*black text color*/
		background-color: #ccd1db; /*grey background*/
		font-size: 15px;
		border: 2px solid #1b1c1d;
		padding: 10px 20px;
		cursor: pointer
    }
    .subBtn:hover {
        background-color: #ffffff; /* black background when hover */
        color:#ccd1db;
    }	
    h1 {
    	text-align: center;
    }
	</style>

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="grid_styles.css">
</head>
<body>
	<?php
	// Process the form
	if (isset($_POST['subBtn'])) {
		// store the posted values from the form in variables
		$stu_name = $_POST['theName'];
		$stu_mark = $_POST['theMark'];

		$errorMsg = ""; // initialize error message
		$error = false;
		
		if ($stu_name == "" OR $stu_mark == "") {
			// append error statement if fields are left empty (simple error checking)
			$errorMsg .= "<p class='error'>You must include a name and mark!</p>";
			$error = true;
		}else if($stu_mark < 0 OR $stu_mark > 100) {
   				$errorMsg .= "<p class='error'>Mark must be between 0 and 100!</p>";
    			$error = true;
		} else  {	
			// conditions for displaying grade and comment
			if ($stu_mark <= 100 AND $stu_mark > 90) {
				$letter_grade = "A+";
				$comment = "Excellent, Keep it up.";
				$special_comment = " You get a prize from office.";

			} else if ($stu_mark == 90){
				$letter_grade = "A";
				$comment = "Good job! You are on track.";
				$special_comment = "You get a prize from office.";

			}
			else if ($stu_mark <= 90 AND $stu_mark > 80) {
				$letter_grade = "A-";
				$comment = "Good efforts. Keep trying.";
			} else if ($stu_mark <= 80 AND $stu_mark > 75 ) {
				$letter_grade = "B+";
				$comment = "On track. Still room for Improvment.";
			}else if ($stu_mark == 75){
				$letter_grade = "B";
				$comment = "Keep trying. Need Improvment.";
			}else if ($stu_mark <= 75 AND $stu_mark > 70) {
				$letter_grade = "B-";
				$comment = "Keep trying. Need Improvment.";
			}else if ($stu_mark <= 70 AND $stu_mark > 65) {
				$letter_grade = "C+";
				$comment = "Need Improvemnt. Work Hard.";
			}else if ($stu_mark == 65){
				$letter_grade = "C";
				$comment = "Needs Improvment.";
			}else if ($stu_mark <= 65 AND $stu_mark >60 ){
				$letter_grade = "C-";
				$comment = "Needs Improvment.";
			}else if ($stu_mark <= 60 AND $stu_mark >55 ){
				$letter_grade = "D+";
				$comment = "Needs Improvment. Seek Help.";
			}else if ($stu_mark == 55){
				$letter_grade = "D";
				$comment = "Unsatisfactory.";
			}else if ($stu_mark <= 55 AND $stu_mark >50 ){
				$letter_grade = "D-";
				$comment = "Unsatisfactory. Seek Help.";
			}else if ($stu_mark <= 50 AND $stu_mark >0 ){
				$letter_grade = "Unsucessful";
				$comment = "Seek Help.";
			}else {
				$errorMsg .= "<p class='error'>Invalid mark entered!</p>";
				$error = true;
			}
		}
	}
	?>
	<div id="reportContainer">
		<h1>"Making the Grade!"</h1>
		<p style="text-align: center">This is mock student report. Please enter your name and mark to calculate your letter grade.<br/>
		
		<!-- responsive design -->
		<div class="grid">
			<div class="col-span-6">
				<!-- add user input form here-->
				<h3>Student Information</h3>		
				<form action="grades.php" method="post">
					<b>Student Name:</b>
					<input type="text" name="theName" autocomplete="off" placeholder="name" value="" style="margin-bottom:5px;"></input></br>
					<b>Student Mark:</b>
					<input type="number" name="theMark" autocomplete="	off" placeholder="mark" value=""style="margin-bottom:5px;"></input></br>
					<input type="submit" value="Submit" name="subBtn" class="subBtn"></input>

				</form>
			</div>
			<div class="col-span-6">
				<h3>Output</h3>
				<?php
				if (isset($_POST['subBtn'])) {
					if ($error === true) {
						// show error message if error is true
						echo $errorMsg;
					} else {
						echo "
						<p>
						<b>Student's Name:</b> " . $stu_name . "<br />
						<b>Student's Mark:</b> " . $stu_mark . "<br />
						<b>Letter Grade:</b> " . $letter_grade . "<br />
						<b>Comment:</b> " . $comment . "<br />
						</p>
						";

						if ($special_comment != "") {
							// special comment is not empty show it
							echo "
							<p>
							<b>Special Comment: </b> " . $special_comment . "
							</p>
							";
						}
					}
				}		
				?>				
			</div>
		</div>
	</div>
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
