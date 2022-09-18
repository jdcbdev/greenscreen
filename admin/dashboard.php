<?php

    session_start();

    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }

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
                <a href="#" class="active">
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
            <li>
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
                <span class="admin-name">Jaydee Ballaho</span>
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