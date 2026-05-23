<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Styling Links & Other CSS Tips</title>	
	<meta name="description" content=" Creating styled buttons and linking them">
	<meta name="author" content="Nishtha Dubey">

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
	h1 {
		text-transform: uppercase;
	}
	body {
		position: relative;
		display: inline-block;
		height: 100%;
		width: 100%;
		padding: 0;
		margin: 0;
		color: #333333;  /* font color */
		font-family: Calibri;
		background: url("https://wallpapercave.com/wp/wp1854338.jpg");
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
		border-radius: 0.5em;
		background: rgba(255,255,255,0.8);
	}

	/* style the paragraph */
	p.norm {
		position: relative;
		display: inline-block;
		border-radius: 0.3em;
		padding: 20px;
		font-size: 1.2em;
		background: rgba(0,0,0,0.7);
		color: #ffffff;
	}

	/* default link */
	a:link, a:active, a:visited {
		color: #1842A9;
		transition: all 0.5s ease;
	}
	a:hover	{
		color: #EC6C10;
	}

	/* example button style */	
	a.teacher-button:link, a.teacher-button:visited , a.teacher-button:active {
		position: relative;
		display: inline-block;
		padding: 10px 20px 10px 20px;
		margin: 10px; /* 10px around the outside of the link */
		background: #EC6C10;
		color: #ffffff;	
		font-size: 2.0em; /* 210% of normal size */
		text-decoration: none;  /* underline or none */
		font-family: "Roboto";
		border-radius: 0.2em; /*Top/Right/Botton/Left */
		border: 1px solid #333;
		transition: all 0.5s ease;			
	}
	a.teacher-button:hover {
		background: #ffffff;
		color: #f06d06;
		box-shadow: 5px 5px 5px #222222;
	}
	
	/* your button styles */
	a.my-button1:link, a.my-button1:visited , a.my-button1:active {
		position: relative;
		display: inline-block;
		border-radius: 0px;
  		font-family: Georgia;
  		color: #ffe8ff;
  		font-size: 20px;
  		background: #3498db;
  		padding: 9px 16px 13px 18px;
  		border: solid #ebf0ec 2px;
  		text-decoration: none;
  		margin-bottom: 15px;
	}
	a.my-button1:hover {
		background:#dae5eb;;
		color: black;
		box-shadow: 5px 5px 5px #222222;
	}
	a.my-button2:link, a.my-button2:visited , a.my-button2:active {
		position: relative;
		display: inline-block;
		border-radius: 18px;
  		font-family: Courier New;
  		color: #ba6aba;
  		font-size: 20px;
  		background: #e4b4f0;
  		padding: 11px 16px 13px 18px;
  		border: solid #bd8cd1 2px;
  		text-decoration: none;
  		margin-bottom: 15px;
	
	}
	a.my-button2:hover {
		background:#dae5eb;;
		color: black;
		box-shadow: 5px 5px 5px #222222;
	}
	a.my-button3:link, a.my-button3:visited , a.my-button3:active {
	position: relative;
	display: inline-block;
	border-radius: 43px;
  	font-family: Arial;
  	color: #a7ebd2;
  	font-size: 16px;
  	background: #119e66;
  	padding: 11px 34px 13px 31px;
  	border: solid #64a67b 2px;
  	text-decoration: none;
	}
	a.my-button3:hover {
		background:#dae5eb;;
		color: black;
		box-shadow: 5px 5px 5px #222222;
	}		
	</style>

</head>
<body>
	<!-- main content -->
	<div id="container">
		<h1>Styling Links</h1>
		<p class="norm">In this activity you will create at least one other link style with a defined class.  From this point forward all of your links on your activities must be styled.  You may want to research other css properties to further understand the cool styles you can add.</p>
		<h2>Default Link</h2>
		<a href="#">Default Link</a>

		<h2>Teacher's Link</h2>
		<a href="https://www.rocketleague.com/" class="teacher-button">ROCKET LEAGUE</a>
		
		<h2>My Links</h2>
		<a href="#" class="my-button1">Click Me</a><br>
		<a href="#" class="my-button2">Here!</a><br>
		<a href="#" class="my-button3">Run</a> 
	</div>
	<!-- /main content -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>


