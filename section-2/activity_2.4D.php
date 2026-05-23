<?php  
if (!isset($_SESSION)) { 
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <title>Dice Game</title>	
    <link rel="stylesheet" href="styles.css">

    <style> 
        /* Basic styling to center the game and add some color */
        body { text-align: center; font-family: Arial; }
        .container { 
            margin-top: 50px; 
            padding: 40px; 
            background: #9fe9ea; 
            display: inline-block; 
            border-radius: 10px;
        }
        .subtn { margin: 10px; padding: 10px 30px; cursor: pointer; }
        .error { color: red; }
        .win { color: green; }
    </style>
</head>

<body>
<div class="container">
    <h1>Dice Game</h1>

<?php
//intialize 
if (!isset($_SESSION['wins'])) $_SESSION['wins'] = 0;
if (!isset($_SESSION['losses'])) $_SESSION['losses'] = 0;
if (!isset($_SESSION['credits'])) $_SESSION['credits'] = 10;

// If the user clicks the reset link, we wipe the scores back to the beginning.
if (isset($_GET['reset']) && $_GET['reset'] == "yes") {
    $_SESSION['wins'] = 0;
    $_SESSION['losses'] = 0;
    $_SESSION['credits'] = 10;
    echo "<p>Game has been reset.</p>";
}

//the current balance to the player
echo "<p><strong>Credits: " . $_SESSION['credits'] . "</strong></p>";

if (isset($_POST['submit'])) {

    // Get the user's guess and bet amount from the form
    $guess = $_POST['number'] ?? '';
    $bet = (int)($_POST['bet'] ?? 0);

    // error checking 
    if ($guess == '') {
        echo "<p class='error'>Please select a number!</p>";
    } 
    elseif ($bet <= 0 || $bet > $_SESSION['credits']) {
        echo "<p class='error'>Invalid bet amount!</p>";
    } 
    else {
        // Generate a random number between 1 and 6 to simulate a die roll
        $roll = rand(1, 6);

        echo "<p>Dice rolled: $roll</p>";
        //die image 
        echo "<img src='../images/die$roll.gif' alt='die'>";

        // Check if the guess matches the random roll
        if ($roll == $guess) {
            // WIN: Add to win count and increase credits by the bet amount
            $_SESSION['wins']++;
            $_SESSION['credits'] += $bet; 
            echo "<p class='win'>You WIN! +$bet credits</p>";
        } else {
            // LOSE: Add to loss count and subtract the bet amount
            $_SESSION['losses']++;
            $_SESSION['credits'] -= $bet;
            echo "<p class='error'>You LOSE! -$bet credits</p>";
        }

        // Show updates
        echo "<p>Wins: {$_SESSION['wins']} | Losses: {$_SESSION['losses']}</p>";
    }
}
// If the player runs out of money, show the game over message and a restart button.
if ($_SESSION['credits'] <= 0) {
    echo "<p class='error'><strong>Game Over! No credits left.</strong></p>";
    echo "<a href='?reset=yes' class='subtn'>Restart Game</a>";
} 
?>

<form name="dice" action="activity_2.4D.php" method="post">
    <h3>Guess Which Number Dice Will Land On??</h3>

    <h4>
        Enter your bet:
        <input type="number" name="bet" min="1" max="<?php echo $_SESSION['credits']; ?>" required>
    </h4> 

    <input type="radio" name="number" value="1" required> 1
    <input type="radio" name="number" value="2"> 2
    <input type="radio" name="number" value="3"> 3
    <input type="radio" name="number" value="4"> 4
    <input type="radio" name="number" value="5"> 5
    <input type="radio" name="number" value="6"> 6
    <br><br>

    <input type="submit" name="submit" value="Roll" class="subtn">
</form>

    <a href="activity_2.4D.php?reset=yes" class="subtn" style="text-decoration: none;">Reset Game</a>
</div>

<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php" 
?>
</body>
</html>
