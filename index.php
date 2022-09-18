<?php
    
    session_start();

    if (isset($_SESSION['logged-in']) == 'admin'){
        header('location: admin/dashboard.php');
    }
    else if (isset($_SESSION['logged-in']) == 'staff'){
        header('location: staff/home.php');
    }
    else{
        header('location: login/login.php');
    }

?>