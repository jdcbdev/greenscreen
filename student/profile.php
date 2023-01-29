<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }
    //if the above code is false then html below will be displayed

    require_once '../tools/variables.php';
    $page_title = 'GreenScreen | My Profile';
    $profile = 'active';

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
                <div class="row">
                    <div class="col-12 mt-3 mt-md-0 d-md-none">
                        <h5 class="card-title m-0">My Profile</h5>
                    </div>
                    <div class="col-lg-5 col-xl-4 profile-menu">
                        <div class="card profile account-settings mt-3 mt-md-0 card-hover">
                            <div class="card-body">
                                <h6 class="card-title m-0 fw-bold">Account Settings</h6>
                            </div>
                            <i class='bx bxs-check-circle active'></i>
                        </div>
                        <div class="card profile personal-info mt-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold m-0">Personal Information</h6>
                            </div>
                            <i class='bx bxs-edit-alt'></i>
                        </div>
                        <div class="card profile cet mt-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold m-0">College Entrance Test</h6>
                            </div>
                            <i class='bx bxs-edit-alt'></i>
                        </div>
                        <div class="card profile shs mt-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold m-0">Senior High School Background</h6>
                            </div>
                            <i class='bx bxs-edit-alt'></i>
                        </div>
                        <div class="card profile student-personality mt-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold m-0">Student Personality</h6>
                            </div>
                            <i class='bx bxs-edit-alt'></i>
                        </div>
                        <div class="card profile study-habits mt-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold m-0">Study Habits</h6>
                            </div>
                            <i class='bx bxs-edit-alt'></i>
                        </div>
                    </div>
                    <div id='account-settings' class="col-lg-7 col-xl-8 profile-screen d-done d-lg-block ps-lg-1">
                        <div class="mt-3 mt-md-0">
                            <div class="card-profile p-4">
                                <div class="row">
                                    <h5 class="col-12 fw-bold mb-3">Account Information</h5>
                                    <form class="needs-validation" action="signin.php" method="post">
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <label for="username" class="form-label">Email Address<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="username" placeholder="" name="username" required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="" required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="c-password" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="c-password" name="c-password" placeholder="" required="">
                                            </div>
                                            <div class="col-12 pt-2 mb-3">
                                                <input class="btn btn-lg btn-success background-color-green btn-font w-100" type="submit" value="Save Changes" name="login">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='personal-info' class="col-lg-7 col-xl-8 profile-screen d-none d-lg-block ps-3 ps-lg-1 d-lg-none">
                        <div class="mt-3 mt-md-0">
                            <div class="card-profile p-4">
                                <div class="upload-photo-container">
                                    <img src="../img/faculty/ballaho.png" alt="">
                                    <h6 class="ms-3 card-title fw-bold">Profile Picture</h6>
                                </div>
                                <input class="upload-photo custom-file-input" type="file" name="upload-photo" id="upload-photo">
                                <a href=""# class="btn btn-outline-secondary custom-btn">Update Photo</a>
                            </div>
                            <div class="card-profile p-4 mt-3">
                                <div class="row">
                                    <h5 class="col-12 fw-bold mb-3">Personal Information</h5>
                                    <form class="needs-validation" action="signin.php" method="post">
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <label for="firstname" class="form-label">First Name<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="firstname" placeholder="" name="firstname" required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="middlename" class="form-label">Middle Name<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="middlename" placeholder="Optional" name="middlename">
                                            </div>
                                            <div class="col-12">
                                                <label for="lastname" class="form-label">Last Name<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="lastname" placeholder="" name="lastname" required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="sex" class="form-label">Sex<span class="text-muted"></span></label>
                                                <select class="form-control" id="sex" placeholder="" name="sex" required="">
                                                    <option value="">--Select--</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="birthday" class="form-label">Birth Date<span class="text-muted"></span></label>
                                                <input type="date" class="form-control" id="birthday" placeholder="" name="birthday" required="">
                                            </div>
                                            <div class="col-12 pt-2 mb-3">
                                                <input class="btn btn-lg btn-success background-color-green btn-font w-100" type="submit" value="Save Changes" name="login">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='cet' class="col-lg-7 col-xl-8 profile-screen d-none d-lg-block ps-3 ps-lg-1 d-lg-none">
                        <div class="mt-3 mt-md-0">
                            <div class="card-profile p-4">
                                <div class="row">
                                    <h5 class="col-12 fw-bold mb-3">College Entrance Test (CET)</h5>
                                    <form class="needs-validation" action="signin.php" method="post">
                                        <div class="row g-2">
                                            <div class="col-12 col-md-6">
                                                <label for="cetappno" class="form-label">CET Application Number<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="cetappno" placeholder="" name="cetappno" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="oapr" class="form-label">Overall Percentile Rank (OAPR)<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="oapr" placeholder="" name="oapr" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="english" class="form-label">English Proficiency Skills<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="english" placeholder="" name="english" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="reading" class="form-label">Reading Comprehension Skills<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="reading" placeholder="" name="reading" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="science" class="form-label">Science Process Skills<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="science" placeholder="" name="science" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="math" class="form-label">Quantitative Skills<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="math" placeholder="" name="math" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="abstract" class="form-label">Abstract Thinking Skills<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="abstract" placeholder="" name="abstract" required="">
                                            </div>
                                            <div class="col-12">
                                                <label for="upload-cet" class="form-label">Photo of CET Slip (Accepted files: jpg, jpeg, png)<span class="text-muted"></span></label>
                                                <div class="card-profile p-4 justify-content-center">
                                                    <input class="upload-cet custom-file-input d-none" type="file" name="upload-cet" id="upload-cet">
                                                    <a href=""# class="btn btn-outline-secondary custom-btn">Upload CET Photo</a>
                                                </div>
                                            </div>
                                            <div class="col-12 pt-2 mb-3">
                                                <input class="btn btn-lg btn-success background-color-green btn-font w-100" type="submit" value="Save Changes" name="login">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.card.profile').on('click', function(){
                $('.card.profile').removeClass('card-hover');
                $(this).addClass('card-hover');
            });
            $('.card.profile.account-settings').on('click', function(){
                $('.profile-screen').hide();
                $('.profile-screen').removeClass('d-lg-block');
                $('.profile-screen').removeClass('d-lg-none');
                $('#account-settings').addClass('d-lg-block');
            });
            $('.card.profile.personal-info').on('click', function(){
                $('.profile-screen').hide();
                $('.profile-screen').removeClass('d-lg-block');
                $('.profile-screen').removeClass('d-lg-none');
                $('#personal-info').addClass('d-lg-block');
            });
            $('.card.profile.cet').on('click', function(){
                $('.profile-screen').hide();
                $('.profile-screen').removeClass('d-lg-block');
                $('.profile-screen').removeClass('d-lg-none');
                $('#cet').addClass('d-lg-block');
            });
        });
    </script>
</body>
</html>