<?php

    require_once '../function/functions.php';

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
    //if the above code is false then code and html below will be executed

    //if add faculty is submitted
    if(isset($_POST['save'])){
        //sanitize user inputs
        $firstname = htmlentities($_POST['fn']);
        $lastname = htmlentities($_POST['ln']);
        $email = htmlentities($_POST['email']);
        $status = 'Inactive';
        if(isset($_POST['status'])){
            $status = $_POST['status'];
        }
        if(validate_all($_POST)){
            $faculty = array(
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email,
                "academic_rank" => $_POST['rank'],
                "department" => $_POST['department'],
                "admission_role" => $_POST['role'],
                "status" => $status
            );
            array_push($_SESSION['faculty'], $faculty);
    
            //redirect user to faculty page after saving
            header('location: faculty.php');
        }
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
    <title>Faculty | Add Faculty</title>
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
                <div class="add-form-container">
                    <form class="add-faculty" action="addfaculty.php" method="post">
                        <label for="fn">First Name</label>
                        <input type="text" id="fn" name="fn" required placeholder="Enter first name" value="<?php if(isset($_POST['fn'])) { echo $_POST['fn']; } ?>">
                        <?php
                            if(isset($_POST['save']) && !validate_first_name($_POST)){
                        ?>
                                    <p class="error">First name is invalid. Trailing spaces will be ignored.</p>
                        <?php
                            }
                        ?>
                        <label for="ln">Last Name</label>
                        <input type="text" id="ln" name="ln" required placeholder="Enter last name" value="<?php if(isset($_POST['ln'])) { echo $_POST['ln']; } ?>">
                        <?php
                            if(isset($_POST['save']) && !validate_last_name($_POST)){
                        ?>
                                    <p class="error">Last name is invalid. Trailing spaces will be ignored.</p>
                        <?php
                            }
                        ?>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Enter email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                        <?php
                            if(isset($_POST['save']) && !validate_email($_POST)){
                        ?>
                                    <p class="error">Email is invalid. Use only @wmsu.edu.ph</p>
                        <?php
                            }
                        ?>
                        <label for="rank">Academic Rank</label>
                        <select name="rank" id="rank">
                            <option value="None" <?php if(isset($_POST['rank'])) { if ($_POST['rank'] == 'None') echo ' selected="selected"'; } ?>>--Select--</option>
                            <option value="Instructor" <?php if(isset($_POST['rank'])) { if ($_POST['rank'] == 'Instructor') echo ' selected="selected"'; } ?>>Instructor</option>
                            <option value="Asst. Professor" <?php if(isset($_POST['rank'])) { if ($_POST['rank'] == 'Asst. Professor') echo ' selected="selected"'; } ?>>Asst. Professor</option>
                            <option value="Asso. Professor" <?php if(isset($_POST['rank'])) { if ($_POST['rank'] == 'Asso. Professor') echo ' selected="selected"'; } ?>>Asso. Professor</option>
                            <option value="Professor" <?php if(isset($_POST['rank'])) { if ($_POST['rank'] == 'Professor') echo ' selected="selected"'; } ?>>Professor</option>
                        </select>
                        <?php
                            if(isset($_POST['save']) && !validate_rank($_POST)){
                        ?>
                                    <p class="error">Please select a rank from the dropdown.</p>
                        <?php
                            }
                        ?>
                        <label for="department">Department</label>
                        <select name="department" id="department">
                            <option value="None" <?php if(isset($_POST['department'])) { if ($_POST['department'] == 'None') echo ' selected="selected"'; } ?>>--Select--</option>
                            <option value="Computer Science" <?php if(isset($_POST['department'])) { if ($_POST['department'] == 'Computer Science') echo ' selected="selected"'; } ?>>Computer Science</option>
                            <option value="Information Technology" <?php if(isset($_POST['department'])) { if ($_POST['department'] == 'Information Technology') echo ' selected="selected"'; } ?>>Information Technology</option>
                        </select>
                        <?php
                            if(isset($_POST['save']) && !validate_department($_POST)){
                        ?>
                                    <p class="error">Please select a department from the dropdown.</p>
                        <?php
                            }
                        ?>
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
                        <input type="submit" class="button" value="Save Faculty" name="save" id="save">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>