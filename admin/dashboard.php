<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'admin'){
        header('location: ../control-panel/login.php');
    }
    //if the above code is false then html below will be displayed

    require_once '../tools/variables.php';
    $page_title = 'GreenScreen | Admin Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
?>
<body>
    <!-- Header -->
    <header class="navbar navbar-expand-md navbar-dark sticky-top background-color-green-visible shadow-sm py-0">
        <div class="container-fluid p-0 pe-3 pe-md-0">
            <a class="navbar-brand col-md-3 col-lg-3 col-xl-2 me-0 px-3 py-3 background-color-green" href="../home/">
                <img class="logo-icon" src="../img/greenscreen_logo.png" alt="">
                <span class="ms-2 logo-name">GreenScreen</span>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse"></div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <?php
                require_once '../includes/sidebar.php';
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4">

            </main>
        </div>
    </div>
</body>
</html>