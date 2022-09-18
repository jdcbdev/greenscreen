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
                <a href="#" class="active">
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
            <div class="table-container">
                <div class="table-heading">
                    <h3 class="table-title">Faculty Profile</h3>
                    <input type="button" class="button" value="Add New Faculty">
                </div>
                <div class="divider-no-border"></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Academic Rank</th>
                            <th>Department</th>
                            <th>Admission Role</th>
                            <th>Status</th>
                            <th class="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ballaho, Jaydee</td>
                            <td>jaydee.ballaho@wmsu.edu.ph</td>
                            <td>Instructor</td>
                            <td>Computer Science</td>
                            <td>Admission Officer</td>
                            <td>Active Employee</td>
                            <td class="action">
                                <a class="action-edit" href="#">Edit</a>
                                <a class="action-delete" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Belamide, Gadmar</td>
                            <td>gadmar.belamide@wmsu.edu.ph</td>
                            <td>Asst. Professor</td>
                            <td>Computer Science</td>
                            <td>Interviewer</td>
                            <td>Active Employee</td>
                            <td class="action">
                                <a class="action-edit" href="#">Edit</a>
                                <a class="action-delete" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Catadman, Jason</td>
                            <td>jason.catadman@wmsu.edu.ph</td>
                            <td>Instructor</td>
                            <td>Information Technology</td>
                            <td>Interviewer</td>
                            <td>Active Employee</td>
                            <td class="action">
                                <a class="action-edit" href="#">Edit</a>
                                <a class="action-delete" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Gregana, Pauleen</td>
                            <td>pauleen.gregana@wmsu.edu.ph</td>
                            <td>Instructor</td>
                            <td>Information Technology</td>
                            <td>Admission Officer</td>
                            <td>Active Employee</td>
                            <td class="action">
                                <a class="action-edit" href="#">Edit</a>
                                <a class="action-delete" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Rojas, Marjorie</td>
                            <td>marjorie.rojas@wmsu.edu.ph</td>
                            <td>Asst. Professor</td>
                            <td>Computer Science</td>
                            <td>Interviewer</td>
                            <td>Active Employee</td>
                            <td class="action">
                                <a class="action-edit" href="#">Edit</a>
                                <a class="action-delete" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>