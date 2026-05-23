<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Contact Form</title>	
	
	<meta name="description" content="Contact Form">
	<meta name="author" content= "Nishtha Dubey">	

	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Audiowide&family=Combo&family=Fruktur:ital@0;1&family=Orbitron:wght@400..900&family=Playwrite+NZ+Basic:wght@100..400&family=Shadows+Into+Light&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="../images/icon.png">
</head>
<style> 
	body{
	padding: 0;
	background: url();
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Combo', system-ui;
	text-align: center;
	text-transform: uppercase;
	color: black;
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
	background:rgb(190, 196, 196, 0.8);
	}
	.suBtn{
	color: #ffffff;
	background-color: #b4b8c0;
	font-size: 19px;
	border: 1px solid #989aa0;
	padding: 15px 30px;
	cursor: pointer;
	}
	.suBtn:hover{
	color:#b4b8c0;
	background-color:#ffffff;
	}

 </style>
 <body>
 	<div class="container">
 		<h1>Contact Us!</h1>
 		<form name="contact" action="activity_2.4c.php" method="post">
 			<table>
 			<tr>
 				<td><h2>Full Name: <input type="text" name="full_namex"value ="<?= $_POST['full_namex'] ?>"placeholder="First & Last Name"></h2></td>
 			</tr>
 				<td><h2>Email: <input type="email" name="emailx" value ="<?= $_POST['emailx'] ?>"placeholder="example.com"></h2></td>
 			<tr>
 				<td><h2>Subject: <input type="text" name="subjectx" value ="<?= $_POST['subjectx'] ?>"placeholder="Subject"></h2></td>
 			</tr>
 			<tr>
  				<td><h2 style="text-align: right;">Message:
    			<textarea 
      			name="messagex" 
      			placeholder="Enter your Message" 
      			rows="4" 
      			cols="50"></textarea></h2></td>
			</tr>
 				<td><h2>Password: <input type="password" name="passwordx" value="" placeholder=""></h2></td>
 			</tr>
 			<tr>
 				<td><input type="submit" name="submitbtn" value="submit" placeholder="" class="suBtn"></td>
 			</tr>
 		</table>
 		<?php
		// only send the e-mail if the submit button has been clicked.
		if ($_POST['submitbtn']) {
     		 // get the users passcode
     		$password = $_POST['passwordx'];
      		$to = "1dubeynis@hdsb.ca"; // to: change to your email address
     		$name = $_POST['full_namex'];
      		$email = $_POST['emailx'];
      		$subject = $_POST['subjectx']; // from form
      		$user_message = $_POST['messagex']; // from form

      		$error = false; // set error status to false
      		$errMsg = ""; // initialize errMsg

      		if ($email == "" || $subject == "" || $user_message == "" || $name == "") {
   				 $error = true;
   				 $errMsg .= "<li>Please fill in all required fields</li>";
				}
      		else if ($password != "icssecure") {
            $error = true;
            $errMsg = "<li>Passcode was incorrect</li>";
     		 }
     		 // add the rest of the error checking

      		// use domain no reply to help avoid spam
      		$from = "No Reply <noreply@icsprogramming.ca>";

      		// process the form if there are no errors	
      		if ($error === false) {
            // create message - just use HTML
            // you can include images, tables, headers, etc
            $message = "
            <h2>Contact Form</h2>
            <p>From: $name ($email)</p>
            <p>Message: " . htmlspecialchars($user_message) . "</p>
            ";

            // create headers - leave this alone
            //**********************************
            $separator = md5(time());
            $eol = PHP_EOL;    

            $headers  = "From: ".$from.$eol;
            $headers .= "MIME-Version: 1.0".$eol; 
            $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol; 
            $headers .= "Content-Transfer-Encoding: 7bit".$eol;
            $headers .= "This is a MIME encoded message.".$eol;

            $body = "--".$separator.$eol;
            $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
            $body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
            $body .= $message.$eol;

            mail($to,$subject,$body,$headers);
            //*******************************
            // end of headers, body, and send
            
            echo "<p>Thank you, the e-mail was sent to " . $to . ".</p>";

            // Confirmation email to the user
			$user_to = $email;
			$user_subject = "Your message has been received";

			// confirmation message
			$user_message_body = "
			<h2>Thank you for contacting us!</h2>
			<p>Hi $name,</p>
			<p>Your message has been successfully sent. We will get back to you soon.</p>
			<p><b>Your message:</b></p>
			<p>" . htmlspecialchars($user_message) . "</p>
			";
			// headers for user email
			$user_headers  = "From: ".$from.$eol;
			$user_headers .= "MIME-Version: 1.0".$eol; 
			$user_headers .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
			$user_headers .= "Content-Transfer-Encoding: 8bit".$eol;

			// send confirmation email
			mail($user_to, $user_subject, $user_message_body, $user_headers);

      		} else {
            echo "<p>Sorry, your e-mail was not sent.</p>";
            echo $errMsg;
      		}
		}
		?>

 		</form>

 	</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"?>
</body>
</html>
