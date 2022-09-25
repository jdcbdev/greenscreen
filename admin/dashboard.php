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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="side-bar">
        <div class="logo-details">
            <i class='bx bx-meteor'></i>
            <span class="logo-name">forecast</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../admin/dashboard.php" class="active">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-send'></i>
                    <span class="links-name">Applications</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-phone-call'></i>
                    <span class="links-name">Screening</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-book-reader'></i>
                    <span class="links-name">Programs</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links-name">Students</span>
                </a>
            </li>
            <li>
                <a href="../faculty/faculty.php">
                    <i class='bx bx-group' ></i>
                    <span class="links-name">Faculty</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links-name">Settings</span>
                </a>
            </li>
            <hr class="line">
            <li id="logout-link">
                <a href="../login/logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links-name">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="side-bar-button">
                <i class='bx bx-menu'></i>
            </div>
            <div class="profile-details">
                <i class='bx bx-user-circle'></i>
                <!-- each time you need to output in PHP, use echo -->
                <!-- the $_SESSION['fullname'] is set in login page -->
                <!-- session variables can be accessed anywhere in the page -->
                <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Applications</div>
                        <div class="number">358</div>
                        <div class="indicator">
                            
                            <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                        </div>
                    </div>
                    <i class='bx bx-send cart'></i>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Pending Applications</div>
                        <div class="number">209</div>
                        <div class="indicator">
                            
                            <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                        </div>
                    </div>
                    <i class='bx bx-edit-alt cart two'></i>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Pending Interview</div>
                        <div class="number">126</div>
                        <div class="indicator">
                            
                            <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                        </div>
                    </div>
                    <i class='bx bx-phone-call cart three'></i>
                </div>

                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Declined/Withdrawn</div>
                        <div class="number">23</div>
                        <div class="indicator">
                            
                        <span class="text">As of <?php echo ' ' . date("m-d-Y h:i:s A"); ?></span>
                        </div>
                    </div>
                    <i class='bx bx-message-square-x cart four'></i>
                </div>
            </div>

        </div>
    </section>
</body>
</html>