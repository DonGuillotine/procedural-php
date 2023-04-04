<?php
    function generateRandomNumber() {
        // Return Random Numbers from 1 - 100
        return rand(1, 100);
    }

    function validateUserInput($input) {
        // Validating user input so only numbers ranging from 1 - 100 are entered
        return is_numeric($input) && $input >= 1 && $input <= 100;
    }

    function provideFeedback($guess, $number) {
        // Game Logic with conditional statements
        if ($guess < $number) {
            return "Too low!";
        } elseif ($guess > $number) {
            return "Too high!";
        } else {
            return "Congratulations! You guessed the number.";
        }
    }

    $number = generateRandomNumber();

    // Get user input and validate it
    $feedback = '';
    if (isset($_POST['submit'])) {
        $guess = $_POST['guess'];
        if (validateUserInput($guess)) {
            // Provide feedback
            $feedback = provideFeedback($guess, $number);
        } else {
            $feedback = "Please enter a valid number between 1 and 100.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Me 😭</title>
</head>
<body>
    <p><?php ?></p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Guess:</label>
		<input type="number" name="guess">
        <input type="submit" name="submit" value="Submit">
        <?php if (!empty($feedback)) { ?>
            <p><?php echo $feedback ?></p>
        <?php } ?>
    </form>
</body>
</html>