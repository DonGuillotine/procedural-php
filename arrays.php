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
    echo "Godslove is " . $age['Godslove'] . " Age";
    echo "<br>";
    echo "Chukwuebuka is " . $age['Chukwuebuka'] . " Age";
    echo "<br>";
    echo "Micheal is " . $age['Micheal'] . " Age";
    echo "<br>";

    foreach($age as $x => $x_value){
        echo "Key =" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // Multidimensional Arrays

    /*  For a two dimensional array you need two indices to select an element.
    For a three dimensional array you need three indices to select an element

    */

    $food = array(
        array("Yam", 200, 100),
        array("Rice", 283, 923),
        array("Potatoe", 364, 837),
        array("Chicken", 264, 281),
    );

    echo $food[0][0].": In stock: ".$food[0][1].", sold: ".$food[0][2].".<br>";
    echo $food[1][0].": In stock: ".$food[1][1].", sold: ".$food[1][2].".<br>";
    echo $food[2][0].": In stock: ".$food[2][1].", sold: ".$food[2][2].".<br>";
    echo $food[3][0].": In stock: ".$food[3][1].", sold: ".$food[3][2].".<br>";
    
?>