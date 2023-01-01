<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then html below will be displayed

    require_once '../tools/variables.php';
    $page_title = 'Forecast | My Profile';
    $application = 'active';

    require_once '../includes/header.php';
?>
<body>
    <!-- Header -->
    <header class="navbar navbar-expand-md navbar-dark sticky-top background-color-green-visible shadow-sm py-0">
        <div class="container-fluid p-0 pe-3 pe-md-0">
            <a class="navbar-brand col-md-3 col-lg-3 col-xl-2 me-0 px-3 py-3 background-color-green" href="../home/">
                <i class='bx bx-meteor'></i>
                <span class="logo-name">forecast</span>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse"></div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 col-xl-2 d-md-block background-color-green sidebar collapse">
                <div class="position-sticky h-100">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="application.php" class="nav-link <?php echo $application; ?>" title="Applications">
                                <i class='bx bx-send'></i>
                                <span class="links-name">Applications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link <?php echo $profile; ?>" title="Profile">
                                <i class='bx bx-user'></i>
                                <span class="links-name">Profile</span>
                            </a>
                        </li>
                        <hr class="line">
                        <li id="logout-link" class="nav-item">
                            <a class="logout-link nav-link" href="../account/logout.php" title="Logout">
                                <i class='bx bx-log-out'></i>
                                <span class="links-name">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4">
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function(){
        });
    </script>
</body>
</html>