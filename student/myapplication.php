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
    $page_title = 'GreenScreen | My Application';
    $myapplication = 'active';

    require_once '../includes/header.php';
?>
<body id="home-page">
  <!-- Header -->
  <?php
    require_once '../includes/topnav.php';
  ?>
  <!-- Main -->
  <div class="container-fluid main-container">
        <div class="row">
            <main class="col-md-10 mx-md-auto mb-md-5 p-4 pt-2 pt-md-4">
                <div class="row g-3">
                    <div class="col-12 text-center mb-md-4 mt-4">
                        <h5>You applied to</h5>
                        <h4 class="fw-bold text-center green">BS Computer Science</h4>
                    </div>
                    <div class="col-12 text-center d-flex progress-bar-profile progress-bar-application justify-content-space-around">
                        <div class="col-md profile-progress-container wrapper-green" id="step-1">
                            <div class="profile-progress bg-pending bg-green">
                                <i class="fa-solid fa-file-pen color-white"></i>
                            </div>
                            <p class="text-center my-2 small">Application</p>
                        </div>
                        <div class="col profile-progress-container wrapper-green" id="step-2">
                            <div class="profile-progress bg-green">
                                <i class="fa-solid fa-file-circle-check color-white"></i>
                            </div>
                            <p class="text-center my-2 small">Verification</p>
                        </div>
                        <div class="col profile-progress-container wrapper-green" id="step-3">
                            <div class="profile-progress bg-green">
                                <i class="fa-solid fa-phone-volume color-white"></i>
                            </div>
                            <p class="text-center my-2 small">For Interview</p>
                        </div>
                        <div class="col profile-progress-container wrapper-green" id="step-4">
                            <div class="profile-progress bg-green">
                                <i class="fa-solid fa-ranking-star color-white"></i>
                            </div>
                            <p class="text-center my-2 small">Ranking</p>
                        </div>
                        <div class="col profile-progress-container wrapper-green" id="step-5">
                            <div class="profile-progress bg-green">
                                <i class="fa-solid fa-circle-check color-white"></i>
                            </div>
                            <p class="text-center my-2 small">Complete</p>
                        </div>
                    </div>
                    <h4 class="mt-3 mt-md-5 fw-bold text-center">Your admission to BS Computer Science is <span class="color-green fs-4">approved.</span></h4>
                    <h3 class="fw-bold text-center green">Congratulations!</h4>
                    <div class="col-12 col-md-10 col-lg-6 mx-auto mt-3 mt-md-5 document-listing">
                        <h5 class="text-center fw-bold mb-3">Documentary Requirements</h5>
                        <ol>
                            <li>CET Report of Rating (1 Original 1 Photocopy)</li>
                            <li>SHS Report Card/Form 138 (1 Original 1 Photocopy)</li>
                            <li>Live Birth Certificate (2 Photocopy)</li>
                            <li>Medical Certificate (2 Photocopy)</li>
                            <li>2x2 Photo (4pcs)</li>
                        </ol>
                    </div>
                </div>
            </main>
        </div>
    </div>
  <script>
    $(document).ready(function(){
      
    });
  </script>
</body>
</html>