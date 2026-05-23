<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Days of the Week</title>	
	
	<meta name="description" content="Learning about conditional statements">
	<meta name="author" content="Nishtha Dubey">

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">

	<style>
		body {
    	background: url("../images/background.jpg") no-repeat center 35%; /* moves the background up from the center */
    	background-size: cover;
    	font-family: "Aldrich", sans-serif;
    	margin: 0;
    	height: 100%;
		}
		.subtn{
			color: #8C3726;
			background-color: #bbbec3;
			font-size: 16px;
			border: 2px solid #8C3726;
			padding: 10px 15px;
			cursor: pointer;
			margin-top: 5px;
		}
		.subtn:hover{
			margin-top: 5px;
			background-color:#8C3726; 
			color:#bbbec3;
		}
		.container{
			width: 100%; /* full page width */
    		margin: 0 auto; /* center container if smaller than page */
    		padding: 5px;
		}
		form {
    		width: 300px;         /* set a fixed width */
    		margin: 0 auto;       /* horizontally center the form */
    		text-align: center;   /* center the text in teh form */
			}
		.error {
		color: #ff0000;
		text-align: center;
		}

		h1 {
    		margin-top: 15%;
    		color: #8C3726;
    		font-size: 1.3em;
    		text-align: center;
    		text-transform: uppercase;
		}
		.result { /* this is for output of the form */
    		text-align: center;  
    		color:#8C3726 ; 
    		font-weight: bold;
				}
		.video{
 
    		margin-left: 470px; /* made the video go in center */
		}


</style>




<body>
	<div class="container">
	
	<h1><b>Days of the Week Songs</b></h1></br>
	<p style="text-align: center; color: #8C3726; margin-top: 3px;">Please select a day from the dropdown option to get your song.</p>

	<form name ="Week" action="activity_2.3.php" method="post">
		<select name ="Day">
			<option value="">-- Select a Day --</option>
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
			<option value="Thursday">Thursday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
		</select></br>

		<input type="submit" value="submit" name="subtn" class="subtn"></input>
	</form>
	<?php
	if (isset($_POST['subtn'])){

		$d = ($_POST['Day']); //set the variable 

	//error checking 
	if ($d == ""){
		echo "<p class='error'>You must select a day.</p>";
	}else if ($d == "Sunday"){
		echo"<p class='result'>Here’s your song for $d!</p>"; 
		echo '<div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/lyIhRNPCNiw?si=WaTQAv-m3EAervFj&amp;start=23" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';
	}else if ($d == "Monday"){
		echo"<p class='result'>Here’s your song for $d!</p></br>"; 
		echo '<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/SXRi24s19JI?si=Ny6n4sv_00NlLt7j&amp;start=25" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';
	}else if ($d == "Tuesday"){
		echo"<p class='result'>Here’s your song for $d!</p>"; 
		echo '<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/VFIkdfhSHM8?si=rmDuetUQT_INAq7M&amp;start=25" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';
	}else if ($d == "Wednesday"){
		echo"<p class='result'>Here’s your song for $d!</p>";
		echo '<div class="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/wJKY_Oun2wQ?si=5Gi92zTNb4CC3tBj&amp;start=25" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>'; 
	}else if ($d == "Thursday"){
		echo"<p class='result'>Here’s your song for $d!</p>"; 
		echo '<div class="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/IGENkpaPkgw?si=HeSfy63PRCM0WSfH&amp;start=25" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';

	}else if ($d == "Friday"){
		echo"<p class='result'>Here’s your song for $d!</p>"; 
		echo '<div class="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/kfVsfOSbJY0?si=gFmt7nhRxE42tuCT&amp;start=37" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';
	}else if ($d == "Saturday"){
		echo"<p class='result'>Here’s your song for $d!</p>"; 
		echo '<div class="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/qJ19VKeDQbY?si=UjxiCofgJvu8Cj1i&amp;start=19" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>';
	}

	}

	 ?>
	

</div>
</body>



</head>






<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>

