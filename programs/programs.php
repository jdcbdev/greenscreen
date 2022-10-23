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
    $page_title = 'Forecast | Show Programs';
    $programs = 'active';

    require_once '../includes/header.php';
    require_once '../includes/sidebar.php';
    require_once '../includes/topnav.php';
?>

    <div class="home-content">
        <div class="table-container">
            <div class="table-heading">
                <h3 class="table-title">Available Programs</h3>
                <?php
                    if($_SESSION['user_type'] == 'admin'){ 
                ?>
                    <a href="addprogram.php" class="button">Add New Program</a>
                <?php
                    }
                ?>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Program Code</th>
                        <th>Description</th>
                        <th>Years to Complete</th>
                        <th>Level</th>
                        <th>CET Requirements</th>
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
                        //create an array for list of programs, use session so we can access this anywhere
                        if(!isset($_SESSION['programs'])){
                            $_SESSION['programs'] = array(
                                "1" => array(
                                    "program_code" => 'BSCS',
                                    "description" => 'BS Computer Science',
                                    "years_to_complete" => '4',
                                    "level" => 'Bachelor',
                                    "cet_requirement" => 'At least 80%',
                                    "status" => 'Offering'
                                ),
                                "2" => array(
                                    "program_code" => 'ACS',
                                    "description" => 'Associate in Computer Science',
                                    "years_to_complete" => '2',
                                    "level" => 'Associate',
                                    "cet_requirement" => 'At least 40%',
                                    "status" => 'Phase-out'
                                )
                            );
                        }
                        
                        //We will now fetch all the records in the array using loop
                        //use as a counter, not required but suggested for the table
                        $i = 1;
                        //loop for each record found in the array
                        foreach ($_SESSION['programs'] as $key => $value){ //start of loop
                    ?>
                        <tr>
                            <!-- always use echo to output PHP values -->
                            <td><?php echo $i ?></td>
                            <td><?php echo $value['program_code']?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td><?php echo $value['years_to_complete'] ?></td>
                            <td><?php echo $value['level'] ?></td>
                            <td><?php echo $value['cet_requirement'] ?></td>
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