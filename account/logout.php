<?php

    //resume session
    session_start();

    $type = $_SESSION['user_type'];
    //destroy session
    session_destroy();

    //then send user to login page
    if($type != 'student')
        header('location: ../control-panel/login.php');
    else
        header('location: ../index.php');
?>