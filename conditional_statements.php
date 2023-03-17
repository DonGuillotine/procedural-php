<?php
    //Conditional Statements eg: if statement, if....else statement if elseif...else statement, switch statement

    /*
    Syntax for if statement
    if(condition){
        code to be executed if condition is true
    }
    */

    $time = date("H");

    if ($time < "20"){
        echo "Have a great day!";
    }


    $time_two = date("H");

    if($time_two > "20"){
        echo "Have a good day!";
    }
    else{
        echo "Have a good night!";
    }

    $time_three = date("H");

    if($time_three < "10"){
        echo "Good Morning";
    }
    elseif($time_three < "20"){
        echo "Have a great day!";
    }
    else{
        echo "Good Night!";
    }

    // Switch Statement
    $favouriteClub = "Barcelona";


    switch($favouriteClub){
        case "Madrid":
            echo "Your Favourite Club is Madrid";
            break;
        case "Arsenal":
            echo "Your Favourite Club is Arsenal";
            break;
        case "Barcelona":
            echo "Your Favourite Club is Barcelona";
            break;
        case "Bayern":
            echo "Your Favourite Club is Bayern";
            break;
        default:
            echo "You are not a Football Fan!";
    }

?>