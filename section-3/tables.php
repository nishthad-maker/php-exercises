<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Tables in HTML</title>
    <meta name="description" content="create school time tables">
    <meta name="author" content="Nishtha Dubey"> 

    <!-- favicon - shows in the browser tab -->
    <link rel="shortcut icon" href="https://icsprogramming.ca/images/favicon.jpg" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- styles - internal (not linked) -->
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #333333;
            text-align: center;
            font-family: "Roboto";
            background: url("https://img.freepik.com/free-vector/schedule-calendar-flat-style_78370-1550.jpg");
            background-size: cover;
            background-attachment: fixed;
        }

        * {
            box-sizing: border-box;
        }

        #container {
            position: relative;
            display: inline-block;
            margin-top: 20px;
            width: 80%;
            padding: 10px;
            background: rgba(240, 211, 231, 0.9);
            text-align: center;
        }

        /* style links */
        a:link, a:visited, a:active {
            color: #294C5F;
            text-decoration: none; /* Remove underlines from links */
            transition: all 0.3s ease;
        }
        a:hover {
            color: #AECDE1;
        }

        table.schedule-table , .schedule-table td, .schedule-table th {
          border: 1px solid #333;
          border-collapse: collapse;
          padding: 20px;
        }
        table {
        margin-bottom: 25px;
            }
    </style>
</head>
<body>
  <div id="container">

    <table align="center" class="schedule-table">
        <tr>
            <th colspan="6">My Schedule 1</th>
        </tr>
        <tr>
            <th></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr style="color: white">
            <td style="color: black">1:00</td>
            <td colspan="2"style="background: #FF00FF">Block A</td>
            <td style="background: #FF4411">Block B</td>
            <td colspan="2"style="background: #FF00FF">Block A</td>
        </tr>
        <tr>
            <td>1:30</td>
            <td colspan="5" style="background: #FFFF00">Block C</td>
        </tr>
        <tr>
            <td>2:00</td>
            <td colspan="3" style="color: white; background: #00FFFF;">Block D</td>
            <td colspan="2" style="background: white">FREE</td>
        </tr>
        <tr>
            <td>2:30</td>
            <td colspan="5"style="background: white">FREE</td>
        </tr>
        <tr style="color: white;">
            <td style="color: black">3:00</td>
            <td style="background: #1144FF">Block E</td>
            <td colspan="4" style="background:#338833">Block F</td>
        </tr>

    </table>
     <table align="center" class="schedule-table">
        <tr>
            <th colspan="6">My Schedule 2</th>
        </tr>
        <tr>
            <th></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr style="color: white">
            <td style="color: black">1:00</td>
            <td rowspan="2"style="background: #FF00FF">Block A</td>
            <td></td>
            <td rowspan="2"style="background: #FF00FF">Block A</td>
            <td rowspan="8"style="background: #FF4411">Block B</td>
            <td rowspan="2"style="background: #FF00FF">Block A</td>
        </tr>
        <tr>
            <td>1:30</td>
            <td rowspan="2" style="background: #FFFF00">Block C</td>
        </tr>
        <tr>
            <td>2:00</td>
            <td rowspan="3" style="color: white; background: #00FFFF;">Block D</td>
            <td rowspan="3" style="color: white; background: #00FFFF;">Block D</td>
            <td rowspan="3" style="color: white; background: #00FFFF;">Block D</td>
        <tr>
            <td>2:30</td>
            <td></td>
        </tr>
        <tr style="color: white;">
            <td style="color: black">3:00</td>
            <td rowspan="3"style="background: #1144FF">Block E</td>
        </tr>
        <tr>
            <td>3:30</td>
            <td rowspan="3" style="background:#338833">Block F</td>
            <td rowspan="3" style="background:#338833">Block F</td>
            <td rowspan="3" style="background:#338833">Block F</td>

        </tr>
        <tr>
            <td>4:00</td>
        </tr>
        <tr>
            <td>4:30</td>
            <td></td>
        </tr>
    </table>

  </div>

  <!-- turn work in widget -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>
</body>
</html>
