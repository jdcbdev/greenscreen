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
    $page_title = 'Forecast | Show Faculty';
    $faculty = 'active';

    require_once '../includes/header.php';
    require_once '../includes/sidebar.php';
    require_once '../includes/topnav.php';
?>
    <div class="home-content">
        <div class="table-container">
            <div class="table-heading">
                <h3 class="table-title">Faculty Profile</h3>
                <?php
                    if($_SESSION['user_type'] == 'admin'){ 
                ?>
                    <a href="addfaculty.php" class="button">Add New Faculty</a>
                <?php
                    }
                ?>
            </div>
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
                        <?php
                            if($_SESSION['user_type'] == 'admin'){ 
                        ?>
                            <th class="action">Action</th>
                        <?php
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //create an array for list of faculty, use session so we can access this anywhere
                        if(!isset($_SESSION['faculty'])){
                            $_SESSION['faculty'] = array(
                                "faculty1" => array(
                                    "firstname" => 'Jaydee',
                                    "lastname" => 'Ballaho',
                                    "email" => 'jaydee.ballaho@wmsu.edu.ph',
                                    "academic_rank" => 'Instructor',
                                    "department" => 'Computer Science',
                                    "admission_role" => 'Admission Officer',
                                    "status" => 'Active Employee'
                                ),
                                "faculty2" => array(
                                    "firstname" => 'Gadmar',
                                    "lastname" => 'Belamide',
                                    "email" => 'gadmar.belamide@wmsu.edu.ph',
                                    "academic_rank" => 'Asst. Professor',
                                    "department" => 'Computer Science',
                                    "admission_role" => 'Interviewer',
                                    "status" => 'Active Employee'
                                ),
                                "faculty3" => array(
                                    "firstname" => 'Jason',
                                    "lastname" => 'Catadman',
                                    "email" => 'jason.catadman@wmsu.edu.ph',
                                    "academic_rank" => 'Instructor',
                                    "department" => 'Information Technology',
                                    "admission_role" => 'Interviewer',
                                    "status" => 'Active Employee'
                                ),
                                "faculty4" => array(
                                    "firstname" => 'Pauleen',
                                    "lastname" => 'Gregana',
                                    "email" => 'pauleen.gregana@wmsu.edu.ph',
                                    "academic_rank" => 'Instructor',
                                    "department" => 'Information Technology',
                                    "admission_role" => 'Admission Officer',
                                    "status" => 'Active Employee'
                                ),
                                "faculty5" => array(
                                    "firstname" => 'Marjorie',
                                    "lastname" => 'Rojas',
                                    "email" => 'marjorie.rojas@wmsu.edu.ph',
                                    "academic_rank" => 'Asst. Professor',
                                    "department" => 'Computer Science',
                                    "admission_role" => 'Interviewer',
                                    "status" => 'Active Employee'
                                )
                            );
                        }
                        
                        //We will now fetch all the records in the array using loop
                        //use as a counter, not required but suggested for the table
                        $i = 1;
                        //loop for each record found in the array
                        foreach ($_SESSION['faculty'] as $key => $value){ //start of loop
                    ?>
                        <tr>
                            <!-- always use echo to output PHP values -->
                            <td><?php echo $i ?></td>
                            <td><?php echo $value['lastname'] . ', ' . $value['firstname'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['academic_rank'] ?></td>
                            <td><?php echo $value['department'] ?></td>
                            <td><?php echo $value['admission_role'] ?></td>
                            <td><?php echo $value['status'] ?></td>
                            <?php
                                if($_SESSION['user_type'] == 'admin'){ 
                            ?>
                                <td>
                                    <div class="action">
                                        <a class="action-edit" href="#">Edit</a>
                                        <a class="action-delete" href="#">Delete</a>
                                    </div>
                                </td>
                            <?php
                                }
                            ?>
                        </tr>
                    <?php
                        $i++;
                    //end of loop
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    require_once '../includes/bottomnav.php';
    require_once '../includes/footer.php';
?>