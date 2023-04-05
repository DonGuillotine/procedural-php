<?php 
    $str = "Hello World";
    // "/" is the delimiter and "i" is a modifier that makes the search case-insensitive
    $pattern = "/world/i";
    echo preg_match($pattern, $str);
?>