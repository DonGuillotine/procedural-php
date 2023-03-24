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


    $money = 1;

    do{
        echo "I have $money naira <br>";
        $money++;
    } while($money <= 5);
?>