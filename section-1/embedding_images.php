<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Activity 1-2 - Nishtha Dubey</title>	
	
	<meta name="description" content="Embedding Images">
	<meta name="author" content="Nishtha Dubey">	
	
	<!-- styles - internal (not linked) -->
	<style>
		body {
			padding: 20px 20px 20px 20px;
			color: #333333;  /* font color */
			font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
		}
		h1 {
			color: #440088;
		}
		 table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1.0em;
            min-width: 400px;
            background: white;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid black;
        }
	</style>
</head>
<body>
	<!-- main content -->

	<h1>Manipulating Images</h1>
	<h2>Creating Algorithms: Flowcharts</h2>
	<p>A flowchart is a diagram that represents a set of instructions. Flowcharts use symbols to represent different types of instructions. These symbols are used to then show a step-by-step solution to the problem.</p>
	<img src="https://icsprogramming.ca/test/images/flowchart_symbols.jpg" alt="flowchart-symbols" title="Flowchart Symbols" style="width: 400px;" />

	<!--  table and images -->
	<table cellpadding=’0’ cellspacing=’0’ border=’1’>
		<tr>
			<td> 
				<img src="https://icsprogramming.ca/images/flowchart_example.png"
         		alt="flowchart-example"
         		title="Flowchart Example">
    <p>This is the original image</p></td>
			<td> <img src="https://icsprogramming.ca/images/flowchart_example.png"
         	alt="flowchart-example"
        	 title="Flowchart Example"
         	width="100"
         	height="100">
    <p>This image is 100px by 100px</p></td>
		</tr>
		<tr>
			<td><img src="https://icsprogramming.ca/images/flowchart_example.png"
         		alt="flowchart-example"
        	 	title="Flowchart Example"
         		width="100">
				<p>This image is scaled to have a fixed width of 100px</p>
			</td>
			<td><img src="https://icsprogramming.ca/images/flowchart_example.png"
         		alt="flowchart-example"
        	 	title="Flowchart Example"
         		height="100">
         		<p>This image is scaled to have a fixed height of 100px</p>
         	</td>
		</tr>
			<td>
				<img src="../images/01_sunrise.jpg" 
				alt="sunrise" 
				title="Sunrise" 
				style="width: 400px; height: 400px;" >
				<p>This is a photo of sunrise that I uploaded to my server.</p>

				</td>
			<td>
				<a href="http://www.google.com">
				<img src="../images/smile.jpg" 
				alt="smile" 
				title="smile" 
				style="width: 400px; height: 400px; border: none;" >
				</a>
				<p>This image is clickable and links to Google.</p>
			</td>
	</table>

	<!-- end main content -->
	
	<!-- turn work in widget -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>

