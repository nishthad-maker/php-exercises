<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Grid Layout & Responsive Design</title>	
	
	<meta name="description" content=" Page & Grid Layout & Responsive Design">
	<meta name="author" content="Nishtha">	

	<!-- link to font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="grid_layout.css">

	<style>
	body {
		margin: 0;
		width: 100%;
		height: 100%;
		background: #E0AA9F;
		color:black;
		font-family: "Roboto";
	}
	h3 {
		color: #333;
		text-transform: uppercase;
	}
	#container {
		position: relative;
		display: inline-block;
		width: 100%;
		box-sizing: border-box;
		padding: 10px;
	}
	</style>
</head>
<body>
	<!-- main content -->
	<div id="container">
		<div class="grid">
			<!-- full width 10 column -->
			<div class="col-span-10">
				<h1 style="text-align: center;"><i class="fas fa-th"></i> Types of Sports</h1>
			</div>

			<!-- full width 10 column -->
			<div class="col-span-10">
				<h3>Impact of sports in human life</h3>
					<ul class="list">
						<li>Cardiovascular Strength</li>
						<li>Disease Prevention</li>
						<li>Reduced Stress and Anxiety</li>
						<li>Weight Mangement</li>
						
					</ul>
			</div>	

			<!-- 5 + 5= 10 -->
			<div class="col-span-5">
				<h3>Quick Recation Sport</h3>
				<p>Badminton</p>
			</div>	
			<div class="col-span-5">
				<h3>Video</h3>
				<iframe width="600" height="200" src="https://www.youtube.com/embed/G-mmtUxSt5k?si=A-nQt3l0xHxkxifa&amp;start=52" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
			</div>	

			<!-- 8 + 2 = 10 -->
			<div class="col-span-8">
				<h3>Cycling</h3>
				<img src="https://www.realbuzz.com/hubfs/Imported_Blog_Media/image-Mar-28-2024-03-58-11-1870-PM.jpg"style="width: 100%; padding: 5px;">
			</div>	
			<div class="col-span-2">
				<h3>High endurance Sport</h3>
				<p>Long-distance cycling requires endurance to build a strong cardiovascular base, allowing the body to efficiently use oxygen and fats for fuel over many hours. It reduces muscular fatigue, prevents injuries, and builds the mental resilience needed to maintain consistent, enjoyable performance without burning out.</p>
			</div>	

			<!-- 1+ 7 + 2 = 10 -->
			<div class="col-span-1" style="background: #ccc;">
				<h3>Highest level of raw strength</h3>
				<p>Weightlifting requires immense, often unparalleled, strength because it demands the simultaneous application of maximum force, high-speed power, and technical precision to move heavy loads over a large range of motion. Unlike other forms of resistance training that might focus only on raw strength or muscle size, Olympic weightlifting (snatch and clean & jerk) requires the body to generate explosive power—the ability to accelerate a heavy barbell instantly.</p>
			</div>	
			<div class="col-span-7" style="background: #cea200;">
				<img src="https://olympic.ca/wp-content/uploads/2011/08/AL_20231022_5429-e1709836830800.jpg?quality=100"style="width: 100%; padding: 5px; height: 50%">
			</div>
			<div class="col-span-2" style="background: #ccc;">
				<h3>Popluar in</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27126364.86481144!2d82.78188727833722!3d33.90706406198506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31508e64e5c642c1%3A0x951daa7c349f366f!2sChina!5e0!3m2!1sen!2sca!4v1773166575715!5m2!1sen!2sca" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>	

			<!-- 3 + 4 + 3 = 10 -->
			<div class="col-span-3">
				<h3>Most popluar Sport</h3>
			</div>	
			<div class="col-span-4">
				<img src="https://i.cbc.ca/ais/1.7291315,1723309971000/full/max/0/default.jpg?im=Crop%2Crect%3D%280%2C303%2C3500%2C1968%29%3B" alt="Soccer" style="width: 100%; padding: 5px;" />
			</div>		
			<div class="col-span-3">
				<p>Soccer is the world's most popular sport, boasting roughly 3.5 billion fans due to its extreme accessibility, simple rules, and low cost, making it playable anywhere by anyone. With minimal equipment needed—just a ball and space—it crosses cultural, economic, and geographic barriers, fostering intense global passion</p>
			</div>					
		</div>
	</div>
	<!-- /main content -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
