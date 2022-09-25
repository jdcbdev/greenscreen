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
    <title>Faculty</title>
</head>
<body>
    <div class="side-bar">
        <div class="logo-details">
            <i class='bx bx-meteor'></i>
            <span class="logo-name">forecast</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../admin/dashboard.php">
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
                <a href="../faculty/faculty.php" class="active">
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
                <span class="admin-name"><?php echo $_SESSION['fullname']; ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="table-container">
                <div class="table-heading form-size">
                    <h3 class="table-title">Add New Faculty</h3>
                    <a class="back" href="faculty.php"><i class='bx bx-caret-left'></i>Back</a>
                </div>
                <div class="divider-no-border"></div>
                <div>
                    <form class="add-faculty" action="faculty.php" method="post">
                        <label for="fn">First Name</label>
                        <input type="text" id="fn" name="fn" required placeholder="Enter first name">
                        <label for="ln">Last Name</label>
                        <input type="text" id="ln" name="ln" required placeholder="Enter last name">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Enter email">
                        <label for="rank">Academic Rank</label>
                        <select name="rank" id="rank">
                            <option value="None">--Select--</option>
                            <option value="Instructor">Instructor</option>
                            <option value="Asst. Professor">Asst. Professor</option>
                            <option value="Asso. Professor">Asso. Professor</option>
                            <option value="Professor">Professor</option>
                        </select>
                        <label for="department">Department</label>
                        <select name="department" id="department">
                            <option value="None">--Select--</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                        </select>
                        <div>
                            <label for="role">Admission Role</label><br>
                            <label class="container" for="admin">Admission Officer
                                <input type="radio" name="role" id="admin" value="Admission Officer">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container" for="interviewer">Interviewer
                                <input type="radio" name="role" id="interviewer" value="Interviewer" checked>
                                <span class="checkmark"></span>
                            </label>
                            
                        </div>
                        <label for="status">Is Status of Employee Active?</label><br>
                        <label class="container" for="status">Yes
                            <input type="checkbox" name="status" id="status" value="Active Employee" checked>
                            <span class="checkbox"></span>
                        </label>
                        <div>
                            <input type="submit" class="button" value="Save Faculty" name="save" id="save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>