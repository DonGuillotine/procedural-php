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
            echo "Too low!";
        } elseif ($guess > $number) {
            echo "Too high!";
        } else {
            echo "Congratulations! You guessed the number.";
        }
    }

    $number = generateRandomNumber();

    // Get user input and validate it
    if (isset($_POST['submit'])) {
        $guess = $_POST['guess'];
        if (validateUserInput($guess)) {
            // Provide feedback
            provideFeedback($guess, $number);
        } else {
            echo "Please enter a valid number between 1 and 100.";
        }
    }
?>