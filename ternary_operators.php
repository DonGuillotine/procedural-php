<?php
    // if $user = TRUE, set $statis = "anonymous"
    $status = empty($user) ? "anonymous" : "logged in";
    echo $status;
    echo "<br>";

    // if $user = FALSE, set $status = "logged in"
    $user = "GodsLove";
    $status = empty($user) ? "anonymous" : "logged in";
    echo $status;
?>