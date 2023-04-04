<?php 
    // Arrays can store multiple values in one single variable

    /* 
    
    $item1="Rice"
    $item2="Beans"
    $item3="Water"
    $item4="Cola"

    Types of Arrays:
        Indexed Arrays - Arrays with a numeric index
        Asssociative Arrys - Arrays with named keys
        Multidimensional Arrays - Contains one or more arrays
    */

    $cars = array("Lexus", "Toyota", "Mercedes");
    echo count($cars);

    // Indexed Arrays

    $students = array("Godslove", "Chukwuebuka", "Micheal");
    echo "<br>These are my students: " . $students[0] . ", " . $students[1] . ", and " . $students[2] . "<br>";

    $students_length = count($students);

    for($i = 0; $i < $students_length; $i++){
        echo $students[$i];
        echo "<br>";
    }

    // Associative Arrays

    $age = array("Godslove"=>"23", "Chukwuebuka"=>"20", "Micheal"=>"25");
    echo "<br>";
    echo "Godslove is " . $age['Godslove'] . "Age";
    echo "<br>";
    echo "Chukwuebuka is " . $age['Chukwuebuka'] . "Age";
    echo "<br>";
    echo "Micheal is " . $age['Micheal'] . "Age";
    echo "<br>";
?>