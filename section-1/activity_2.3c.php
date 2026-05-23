<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Text-based Adventure Game</title>	
	
	<meta name="description" content="Choose your own Adventure">
	<meta name="author" content="Nishtha Dubey">
	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">

	<style>
		
		body{
			padding: 0;
			background: url(https://opengameart.org/sites/default/files/simple_pixel_game_background_with_trees.png);
			background-size: cover;
			background-attachment: fixed;
			font-family: 'Combo', system-ui;
			text-align: center;
			text-transform: uppercase;
			color: red;
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
			background:rgb(237, 186, 183, 0.8);
		}
		h1{
			font-weight: bold;
			font-family: 'Combo', system-ui;
			font-size: 1.7em;
			
		} 
		a.button{
			display: inline-block;
    		margin-top: 40px; /* makes the button move down */
		}
		a.button:link, a.button:visited, a.button:active{
			color: #ffffff;
			background-color: #f03333;
			font-size: 19px;
			border: 1px solid #f70814;
			border-radius: 10px;
			padding: 10px 20px;
			cursor: pointer;
			transition: all 0.4s ease; 
			text-decoration: none;
		}
		a.button:hover {
			color: #f52e2e;
			background-color: #ffffff;
		}
		.apple{
			width: 100px;
		}
		

	</style>
	<body>
		<div class="container">
			<h1>Find your Prize</h1>
			<p>Choose Wisely!</p>

			<?php 

				$page = isset($_GET['page'])? $_GET['page'] : ""; //if page doesn't = anything stay here.

				if ($page == "") { //starting page 
				 	echo "<p>You are outside and picking between 2 apples.</br> You must make a choice.</br> <a href = 'https://icsprogramming.ca/2025-2026/dubey4303c/section-4/activity_2.3c.php?page=c4ca4238a0b923820dcc509a6f75849b'>
				 	<img src = '../images/apple1.png'class = 'apple'></a> 
				 	 <a href = 'https://icsprogramming.ca/2025-2026/dubey4303c/section-4/activity_2.3c.php?page=c81e728d9d4c2f636f067f89cc14862c'><img src = '../images/apple2.png' class = 'apple'></a></p>"; 
				 	 // made clickable image.
				 }else if ($page == "c4ca4238a0b923820dcc509a6f75849b"){
				 	echo "<p> You have choose first apple. You are getting close to prize.</br> Solve <b> 5 x 4 - 4<sup>2</sup></b></br>
				 		<a href = 'https://icsprogramming.ca/2025-2026/dubey4303c/section-4/activity_2.3c.php?page=eccbc87e4b5ce2fe28308fd9f2a7baf3'class ='button'>6</a> | <a href = 'https://icsprogramming.ca/2025-2026/dubey4303c/section-4/activity_2.3c.php?page=a87ff679a2f3e71d9181a67b7542122c'class ='button'>4</a></p>";

				 }else if ($page == "c81e728d9d4c2f636f067f89cc14862c"){ //2nd apple page
				 	echo "<p>Sorry Wrong Apple.</br><a href = 'https://icsprogramming.ca/2025-2026/dubey4303c/section-4/activity_2.3c.php?'class ='button'>Try again</a></p>";
				 }else if ($page == "eccbc87e4b5ce2fe28308fd9f2a7baf3"){ //winner page 
				 	echo "<p>You Won!</br><a href = 'https://icsprogramming.ca/2025-2026/dubey4303c/section-4/activity_2.3c.php?'class ='button'>Play Again</a></p>";
				 }else if ($page == "a87ff679a2f3e71d9181a67b7542122c"){ //lost page 
				 	echo "<p>Sorry Wrong Answer.</br><a href = 'https://icsprogramming.ca/2025-2026/dubey4303c/section-4/activity_2.3c.php?'class ='button'>Try again</a></p>";
				 }else { 
				echo "<p>You have made an invalid selection!</p>";                
			}


			?>

			</div>

	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
