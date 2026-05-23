<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Putting it all together</title>
<meta name="description" content="Putting it all together">
<meta name="author" content="Nishtha Dubey">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href= "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

<style>
    	body{
    		padding: 30px;
    		font-family:  Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
    		color: black;
    		background:url(https://img.freepik.com/free-vector/soft-green-color-geometric-polygon-design-background_1055-23505.jpg?semt=ais_user_personalization&w=740&q=80);
    		background-size: cover;
            background-attachment: fixed;
    	}
    	#container {
            position: relative;
            margin-top: 20px;
            width:900px;
            padding: 10px;
            background: rgba(148, 242, 190, 0.9);
            text-align: center;
            margin: 70px auto;
        }
        a.my-button:link, a.my-button:visited , a.my-button:active{
        	position: fixed;
			top: 20px;         /* Distance from top */
    		left: 20px;        /* Distance from left */
			border-radius: 43px;
			display: inline-block;
  			font-family: Arial;
  			color:black;
  			font-size: 16px;
  			background:#dae5eb;
  			padding: 11px 34px 13px 31px;
  			border: solid #64a67b 2px;
  			text-decoration: none

        }
        a.my-button:hover {
		background:#119e66;
		color:#a7ebd2;
		box-shadow: 5px 5px 5px #222222;}

		.para1{
			font-family: 'Aldrich', sans-serif;
			color:#119e66;
			font-size:0.99em;
			padding: 5px
		}
		a:link, a:active, a:visited {
		color: #4AE85A;
		transition: all 0.5s ease;
		}
		a:hover	{
		color:black;
		background:#119e66	
			}
			
    </style>	
  </head>
  <body>
  	<div id="container">
  			<a href="../" class="my-button"><b>back</b></a>
  	<table cellpadding=’0’ cellspacing=’0’ border=’1>
  		<tr>
  			<td colspan="2" style="background:#119e66;font-size: 1.8em;color:white;"><h>Computer Science</h></td>
  		</tr>
  		<tr style="background:white;">
  			<td><img src="../images/computer.jpg"
  				alt="Operating System" 
				title="Operating System" 
				style="width: 400px; height: 400px; border: none;"> 
			<p class="para1">The operating system is the main program that runs a computer and controls the hardware, like the keyboard, memory, and files. It lets other programs work and makes the computer easy to use. A programming language is the way developers write instructions so the computer can understand what to do, such as creating software or games. An application is a program made for users to do specific tasks, like writing documents, browsing the internet, or editing photos. Together, the operating system, programming languages, and applications allow a computer to function and be useful.</p></td>
  			<td><h1 style=" color:#119e66">Machine Code/Interpreters & Compilers</h1><iframe width="400" height="225" src="https://www.youtube.com/embed/1OukpDfsuXE?si=g7dTVDMpzWZY_9WX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><p class="para1">Assembly language, low-level languages, and high-level languages differ in how close they are to human language and computer hardware. Assembly language is very close to machine code and uses short commands that match the computer’s processor, so it is fast but hard to write. Low-level languages (like assembly) give programmers more control over hardware but are harder to learn. High-level languages, such as Python or Java, use words and rules closer to English, making them easier to read, write, and fix, but they rely on special programs to translate them into machine code.</p><p style="margin-top:0.3px" class="para1">A compiler and an interpreter both translate programming languages into machine code, but they work differently. A compiler translates the whole program at once and creates a finished file that can run later, which makes programs run faster. An interpreter translates and runs the code one line at a time, which makes it easier to test and debug but usually slower to run.</p></td>
  		</tr>
  		<tr style="background:white;">
  			<td><p class="para1">My five favorite programming languages are Python, Java, C#, C++, and PHP because each one is useful in different ways. Python is simple and quick to use, Java is strong for big applications, C# is great for modern software and games, C++ is powerful and fast, and PHP works well for building dynamic websites.</p>
  				<ul style="text-align: left; margin-left: 20px;color:#4AE85A">
  					<li style="margin-bottom: 5px"><a href="https://www.w3schools.com/python/">Python</a></li>
  					<li style="margin-bottom: 5px"><a href="https://www.w3schools.com/js/">Java</a></li>
  					<li style="margin-bottom: 5px"><a href="https://www.w3schools.com/CS/index.php">C#</a></li>
  					<li style="margin-bottom: 5px"><a href="https://www.w3schools.com/cpp/">C++</a></li>
  					<li><a href="https://www.w3schools.com/php/DEFAULT.asp">PHP</a></li>
  				</ul>
  			</td>
  			<td><p class="para1"><i>Finland</i> is my favorite place because of its stunning nature, peaceful atmosphere, and unique culture. I love the snowy winters, beautiful lakes, and the magical Northern Lights. The clean cities, friendly people, and relaxing lifestyle make it feel like a perfect escape from the busy world.</p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7056393.523470633!2d15.380331236947677!3d64.4189685661565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4681cadf4b32f6dd%3A0x146d63c75a810!2sFinland!5e0!3m2!1sen!2sca!4v1772141005547!5m2!1sen!2sca" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
  		</tr>
  		
  	</table>
  	</div>
  </body>

	<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
