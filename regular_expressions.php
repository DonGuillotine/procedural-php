<?php 
    $str = "Hello World";
    // "/" is the delimiter and "i" is a modifier that makes the search case-insensitive
    $pattern = "/world/i";
    echo preg_match($pattern, $str);

    echo "<br>";

    $sentence = "The rain in Spain falls mainly on the plains of Gucci Maine";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $sentence);

    /*
        Regular Expression Functions -> preg_replace()
        i - case-insensitive search
        m - multiline search
        u - enables correct matching of UTF-8 encoded patterns

    */
?>