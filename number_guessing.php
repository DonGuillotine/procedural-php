<?php
    function generateRandomNumber() {
        // Return Random Numbers from 1 - 100
        return rand(1, 100);
    }

    function validateUserInput($input) {
        // Validating user input so only numbers ranging from 1 - 100 are entered
        return is_numeric($input) && $input >= 1 && $input <= 100;
    }
?>