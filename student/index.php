<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'student'){
        header('location: ../account/signin.php');
    }

    require_once '../classes/student.class.php';

    $student_obj = new Student();
    $id = $_SESSION['logged_id'];
    if(!$student_obj->is_profile_complete($id)){
        header('location: myprofile.php');
    }
?>