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
    $page_title = 'GreenScreen | Settings';
    $settings = 'active';

    require_once '../includes/header.php';
?>
<body>
    <!-- Header -->
    <?php
        require_once '../includes/topnav_admin.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
                require_once '../includes/sidebar.php';
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4">
                <div class="w-100">
                    <h5 class="col-12 fw-bold mb-3 mt-3 mt-md-0">School Year Settings</h5>
                    <form class="needs-validation" action="" method="post" id="form-settings">
                        <div class="row g-2">
                            <div class="col-12 col-md-4">
                                <label for="activeschoolyear" class="form-label">Active School Year<span class="text-muted"></span></label>
                                <input type="text" disabled="true" class="form-control" value="2023-2024" id="activeschoolyear" placeholder="" name="activeschoolyear">
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="startschoolyear" class="form-label">Start of School Year<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="startschoolyear" placeholder="" name="startschoolyear" required="">
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="endschoolyear" class="form-label">End of School Year<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="endschoolyear" placeholder="" name="endschoolyear" required="">
                            </div>
                            <h5 class="col-12 fw-bold mt-4 mb-1">Admission Period Settings</h5>
                            <div class="col-12 col-md-4">
                                <label for="currentadmissionperiod" class="form-label">Current Admission Period<span class="text-muted"></span></label>
                                <input type="text" disabled="true" class="form-control" value="Jul 01, 2023 - Aug 01, 2023" id="currentadmissionperiod" placeholder="" name="currentadmissionperiod">
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="startdate" class="form-label">Start Date<span class="text-muted"></span></label>
                                <input type="date" class="form-control" id="startdate" placeholder="" name="startdate" required="">
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="enddate" class="form-label">End Date<span class="text-muted"></span></label>
                                <input type="date" class="form-control" id="enddate" placeholder="" name="enddate" required="">
                            </div>
                            <h5 class="col-12 fw-bold mt-4 mb-1">Automation Settings</h5>
                            <div class="form-check form-switch col-12 col-md-12">
                                <input class="form-check-input form-control" type="checkbox" id="automateddecision" name="automateddecision" checked>
                                <label class="form-check-label form-label" for="automateddecision">Use Automated Admission Decision</label>
                            </div>
                            <div class="col-12 pt-2 pt-xl-3 mb-3 mb-xl-0 mt-xl-auto">
                                <input class="btn btn-lg btn-success background-color-green btn-font apply-settings" type="submit" value="Apply New Settings" name="login">
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
    <script>
        $(document).ready(function(){
        });
    </script>
</html>