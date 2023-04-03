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
        if ($guess < $number) {
            echo "Too low!";
        } elseif ($guess > $number) {
            echo "Too high!";
        } else {
            echo "Congratulations! You guessed the number.";
        }
    }
?>