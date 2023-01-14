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
                    <?php require_once 'personal_info.php'; ?>
                </div>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('a.upload-photo').on('click', function(){
                $('input#upload-photo').trigger('click');
            });
            $('#region').on('change', function(){
                var formData = {
                    filter: $("#region").val(),
                    action: 'province',
                };
                $.ajax({
                    type: "POST",
                    url: 'address.php',
                    data: formData,
                    success: function(result)
                    {
                        console.log(formData);
                        console.log(result);
                        $('#province').html(result);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            });
            $('#province').on('change', function(){
                var formData = {
                    filter: $("#province").val(),
                    action: 'city',
                };
                $.ajax({
                    type: "POST",
                    url: 'address.php',
                    data: formData,
                    success: function(result)
                    {
                        console.log(formData);
                        console.log(result);
                        $('#city').html(result);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            });
            $('#city').on('change', function(){
                var formData = {
                    filter: $("#city").val(),
                    action: 'barangay',
                };
                $.ajax({
                    type: "POST",
                    url: 'address.php',
                    data: formData,
                    success: function(result)
                    {
                        console.log(formData);
                        console.log(result);
                        $('#barangay').html(result);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            });
        });
    </script>
</body>
</html>