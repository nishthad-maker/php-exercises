<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Rock-Paper-Scissors</title>	
	
	<meta name="description" content="Fpt 1: Rock-Paper-Scissors Game">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- stylesheet -->
	<link rel="stylesheet" href="rock-paper-scissors.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url(https://img.spoonflower.com/c/12445927/p/f/m/nOrB6_ErmbiKebmwgjJtiJDkyns2nyoHtlYlcjLywb3hvMYsTTA7oZLmng/Rock%20Paper%20Scissors%20-%20dusty%20blue%20-%20fun%20games%20-%20LAD21.jpg);
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
 				<h1>Rock-Paper-Scissors Game</h1>
 				<p style="color: #8C8278;"><i class="fa-solid fa-bell" style="color: yellow;"></i><b> Interactive Rock-Paper-Scissors game: </b> where players can test their luck against a computer opponent. The application takes the player's choice, randomly generates a move for the computer, figures out who won in real time, and keeps track of the player's total wins, losses, and overall games played during the session.</p>
 			</div>
 			<div class="col-span-1">
 				<h1 style="color: #8C8278;"><i class="fa-solid fa-bell" style="color: yellow;"></i> How it works?</h1></br><p>To play the game, the user selects Rock, Paper, or Scissors on the webpage, and PHP checks to make sure a valid choice was made before continuing. Once verified, the program randomly selects a move for the computer and uses a custom game() function to compare both choices, immediately deciding if it is a win, loss, or tie. The app then uses CSS Flexbox to display the player's and the computer's moves side-by-side in a clean layout, while automatically updating the scoreboard statistics at the bottom to show the total wins, losses, and overall games played during the session.</p>
 				<iframe width="315" height="560" src="https://www.youtube.com/embed/6izGW86q0r4" title="rock-paper-scissors" frameborder="3" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
 				<p></p>
 				
 			</div>
 			<div class="col-span-2">
 				<?php 
 				//intialize 
 				if (!isset($_SESSION['wins'])) $_SESSION['wins'] = 0;
 				if (!isset($_SESSION['losses'])) $_SESSION['losses'] = 0;
 				if (!isset($_SESSION['play'])) $_SESSION['play'] = 0;
 				// If the user clicks the reset link, we wipe the scores back to the beginning.
				if (isset($_GET['reset']) && $_GET['reset'] == "yes") 
					{$_SESSION['wins'] = 0;
				 	$_SESSION['losses'] = 0;
    				$_SESSION['play'] = 0;
    				echo "<p style ='color:#8C8278;'><b>Game has been reset <i class='fa-solid fa-exclamation' style ='color:yellow;'></i></b></p>";
    			}if (isset($_POST['subtn'])) {
 					//error checking 
 					$error = false;
 					$errormessage = "";
 					//set the varaibles 
 					$choice = $_POST['choice'] ??'';
 					$r = rand(0,2);
 					//arrays 
 					$name_choice = array('Rock', 'Paper', 'Scissors');
 					$pic_choice = array("<img style = 'width:50%; margin:10px;'src = 'https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTEyL2pvYjk1OS1lbGVtZW50LWItMDEzNi12XzEuanBn.jpg'>","<img style = 'width:50%; margin:10px;'src = 'https://media.geeksforgeeks.org/wp-content/uploads/20210705223645/paper.jpeg'>","<img style = 'width:45%; margin:10px;'src = 'https://www.nicepng.com/png/detail/816-8161961_paper-icon-mickey-mouse-hand-drawing.png'>" );
 						//function
 						function game($choice, $r){
 						// Bring the session into the function's scope
    					global $_SESSION;
 						//count how many times played regardless win or loss
 						$_SESSION['play']++;  
 						//if the computer choice and player choice is same 
 						if ($choice == $r) {
 							return "<i class='fa-solid fa-equals' style ='color:yellow;'></i> You Tied!";
 							//winning section(all three condition)
 						}if (($choice == 1 AND $r == 0) OR ($choice == 2 AND $r == 1) OR($choice == 0 && $r == 2) ) {
 							$_SESSION['wins']++;
 							return "<i class='fa-solid fa-crown' style='color:yellow;'></i> You Won!";
 						}else{
 							//for other conditions player loses
 							$_SESSION['losses']++;
 							return "<i class='fa-solid fa-heart-crack'style='color:red;'></i> You Lost!";
 						} 
 						//if the input is empty show an error						
 					}if ($choice === '') {
 						$error = true;
 						$errormessage = "Please select a choice!";
 					}if ($error == false) {
 						$result = game($choice, $r); //call the function as a variable
 						echo "<div class = 'box'>"; //open the box container
 							//Your choice display  
 							echo "<div style = 'flex:1;'>";
 							echo "<p><b style ='color: #8C8278;'>Your Played:</b> ".$name_choice[$choice]."</p>";
 							echo "<div>" . $pic_choice[$choice] . "</div>";
 							echo "</div>";
 							//VS display
 							echo "<div style = 'flex:0 0 auto;'>"; //doesn't make the images smaller 
 							echo "<p style ='color:red; font-size:1.2em; padding: 40px 20px 0 20px;'>VS</p>";
 							echo"</div>";
 							//Computer Choice display
 							echo "<div style ='flex:1;'>";
 							echo "<p><b style ='color: #8C8278;'>Computer Played:</b> ".$name_choice[$r]."</p>";
 							echo "<div>" . $pic_choice[$r] . "</div>";
 							echo "</div>";
 						echo "</div>"; //close the box container 
 						echo"<p><b>".$result."</b></p>"; // show the result (function)
 					}else{
 						//show an error
 						echo"<p style ='color:red;'><i class='fa-solid fa-circle-exclamation' style='color:red;'></i> Error! </br>".$errormessage."</p> ";
 					}
 					  // Show updates 
       				 echo "<p>Wins: {$_SESSION['wins']} | Losses: {$_SESSION['losses']} | Plays: {$_SESSION['play']}</p>";

  				}
 				 ?>

				<!-- form -->
 				<form name ="game" action ="perftask-rock-paper-scissors.php"method="post">
 					<h1 style="margin-bottom: 10px; color: #8C8278;">Pick Your Move:</h1>
 					<label><input type="radio" name="choice" value="0">Rock</label>
 					<label><input type="radio" name="choice" value="1">Paper</label>
 					<label><input type="radio" name="choice" value="2">Scissors</label></br>
 					<input type="submit" name="subtn" value="Play"class="subtn">
 					
 				</form>
 			</br>
 				
 				<!-- reset game link -->
 				<a href="perftask-rock-paper-scissors.php?reset=yes" class ="subtn">Reset Game</a> 
 				
 			</div>
 			
 		</div>
 		
 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>