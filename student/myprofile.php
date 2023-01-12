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
    $page_title = 'Forecast | My Profile';
    $profile = 'active';

    require_once '../includes/header.php';
?>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top background-color-green">
            <div class="container-fluid">
                <a class="navbar-brand" href="../home/">
                    <i class='bx bx-meteor'></i>
                    <span class="logo-name">forecast</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item d-md-none">
                            <a class="nav-link" href="../account/logout.php" id="signin">Logout</a>
                        </li>
                    </ul>
                    <a class="nav-link d-none d-md-flex logout-link" href="../account/logout.php">Logout<i class='ps-1 bx bx-log-out'></i></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid main-container">
        <div class="row">
            <main class="col-md-10 mx-md-auto mb-md-5 p-4 pt-2 pt-md-4">
                <div class="row g-3">
                    <div class="col-12 text-center mb-md-4 mt-4">
                        <h4 class="fw-bold text-center green">Welcome to forecast!</h4>
                        <h5>Complete the 6 steps to get started</h5>
                        <h4 class="fw-bold mt-3 d-md-none">1 of 6</h4>
                    </div>
                    <div class="col-md-12 text-center d-none d-md-flex progress-bar-profile">
                        <div class="col-md profile-progress-container wrapper">
                            <div class="profile-progress bg-pending bg-white">
                                <i class='bx bxs-user-detail color-green'></i>
                            </div>
                            <p class="text-center my-2 small">Personal Information</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper">
                            <div class="profile-progress">
                                <i class="fa-solid fa-house-chimney-user"></i>
                            </div>
                            <p class="text-center my-2 small">Economic Status</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper">
                            <div class="profile-progress">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                            <p class="text-center my-2 small">College Entrance Test</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper">
                            <div class="profile-progress">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <p class="text-center my-2 small">Senior High School Background</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper">
                            <div class="profile-progress">
                                <i class="fa-solid fa-person-circle-check"></i>
                            </div>
                            <p class="text-center my-2 small">Personality Test</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper">
                            <div class="profile-progress">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <p class="text-center my-2 small">Study Habits</p>
                        </div>
                    </div>
                    <div id='personal-info' class="col-12 col-md-11 profile-screen mt-0 mt-md-3 mx-auto">
                        <div class="mt-3 mt-md-0">
                            <div class="card-profile p-4">
                                <div class="upload-photo-container">
                                    <img src="../img/faculty/male.png" alt="">
                                    <h6 class="ms-3 card-title fw-bold d-none d-sm-block">Profile Picture</h6>
                                </div>
                                <input class="upload-photo custom-file-input" type="file" name="upload-photo" id="upload-photo">
                                <a href=""# class="btn btn-outline-secondary custom-btn">Update Photo</a>
                            </div>
                            <div class="card-profile p-4 mt-3">
                                <div class="row">
                                    <h5 class="col-12 fw-bold mb-3">Personal Information</h5>
                                    <form class="needs-validation" action="" method="post">
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6">
                                                <label for="firstname" class="form-label">First Name<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="firstname" placeholder="" name="firstname" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="middlename" class="form-label">Middle Name<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="middlename" placeholder="Optional" name="middlename">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="lastname" class="form-label">Last Name<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="lastname" placeholder="" name="lastname" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="extname" class="form-label">Extension Name<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="extname" placeholder="Optional" name="extname">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="sex" class="form-label">Sex<span class="text-muted"></span></label>
                                                <select class="form-control" id="sex" placeholder="" name="sex" required="">
                                                    <option value="">--Select--</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="birthday" class="form-label">Birth Date<span class="text-muted"></span></label>
                                                <input type="date" class="form-control" id="birthday" placeholder="" name="birthday" required="">
                                            </div>
                                            <h5 class="col-12 fw-bold my-4 mb-1">Contact Points</h5>
                                            <div class="col-12 col-md-6">
                                                <label for="email" class="form-label">School or Personal Email<span class="text-muted"></span></label>
                                                <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="contact" class="form-label">Phone Number<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="contact" placeholder="11-digit mobile number" name="contact" required="">
                                            </div>
                                            <h5 class="col-12 fw-bold my-4 mb-1">Home Address</h5>
                                            <div class="col-12 col-md-6">
                                                <label for="province" class="form-label">Province<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="province" placeholder="" name="province" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="city" class="form-label">City<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="city" placeholder="" name="city" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="barangay" class="form-label">Barangay<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="barangay" placeholder="" name="barangay" required="">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="drive" class="form-label">Drive/Street<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="drive" placeholder="" name="drive" required="">
                                            </div>
                                            <div class="col-12 m-0">
                                                <hr class="my-4 mx-auto w-">
                                            </div>
                                            <div class="col-6 text-start m-0">
                                                <a class="btn btn-lg btn-success btn-font w-100 back-button m-0 d-none">
                                                    <i class="fa-solid fa-arrow-left-long pe-1"></i>
                                                    Back
                                                </a>
                                            </div>
                                            <div class="col-6 text-end m-0">
                                                <button class="btn btn-lg btn-success background-color-green w-100 next-button btn-font m-0" type="submit" value="Next">
                                                    Next
                                                    <i class="ps-1 fa-solid fa-arrow-right-long"></i>
                                                </button>
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