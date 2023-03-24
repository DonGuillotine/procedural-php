<?php
    /*
        Loops execute the same block of code over and over as long as the condition is true
        eg. while, do..while loop, for loop, foreach loop
    */

    // While Loop

    // $age = 1;

    // while($age <= 5){
    //     echo "Your age is " . $age;
    //     echo "<br>";
    //     $age++;
    // }


    // $age_two = 0;

    // while($age_two <= 100){
    //     echo "The number is: $age_two <br>";
    //     $age_two = $age_two + 10;
    // }

    /* do...while
        * do...while loop will execute a block of code once
        * It will check the condition
        * repeat the loop while the condition is true


        do{
            code to be executed
        } while(condition is true)
    */


    // $money = 1;

    // The condition is tested after executing the statements within the loop
    // do{
    //     echo "I have $money naira <br>";
    //     $money++;
    // } while($money <= 5);


    // $alcohol = 6;

    // do{
    //     echo "I have drank $alcohol bottles <br>";
    //     $alcohol++;
    // } while($alcohol <= 5);


    /* for Loop
        Loops through a block of code a specified number of times

        for(counter; condition; increment counter){
            code to executed
        }
    */

    // for($age = 0; $age <= 10; $age++){
    //     echo "Your age is $age <br>";
    // }

    // Increase by 10
    // for($age = 0; $age <= 100; $age+=10){
    // echo "Your age is $age <br>";
    // }



    /* foreach Loop
        *Only works on arrays
        *It is used to loop through each key/value pair in an array
    */
    
    $colors = array("red", "green", "blue", "yellow");


    foreach($colors as $person){
        echo "$person <br>";
    }


?>