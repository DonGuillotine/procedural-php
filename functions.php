<?php declare(strict_types=1);
    // A function is a block of statements that can be used repeatedly in a program

    // Will not execute when a page loads

    // Will be executed by a call to the function ie the function must be invoked or called


    function writeMessage(){
        echo "Hello World";
    }

    writeMessage();

    echo "<br>";

    // Function Arguments
    function familyName($first_name){
        echo "$first_name Okeke";
    }

    familyName("Donald");
    echo "<br>";
    familyName("Ebuka");
    echo "<br>";
    familyName("GodsLove");

    function currency($name, $country){
        echo "$name is used in $country";
    }

    echo "<br>";
    currency("Pounds", "United Kindgdom");
    echo "<br>";
    currency("Naira", "Nigeria");



    /* PHP is a Loosely Typed Language

        * PHP automatically associates a data type to a variable depending on it's value
        $name = 98.7

        * We can add a string to an integer without an error

        * strict declaration it show a Fatal Error if the data type mismatches
    */


    function addNumbers(int $a, int $b){
        return $a + $b;
    }

    echo "<br>";
    echo addNumbers(5, 5);

?>