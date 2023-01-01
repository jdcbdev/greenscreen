<?php
    
    //this is where the page starts

    //start session
    session_start();

    //check if user is login already otherwise send to login page
    if($_SESSION['logged-in'] == 'admin'){
        header('location: ../admin/dashboard.php');
    }else if($_SESSION['logged-in'] == 'faculty'){
        header('location: ../faculty/dashboard.php');
    }else if($_SESSION['logged-in'] == 'student'){
        header('location: ../student/application.php');
    }
    else{
        header('location: home');
    }

?>