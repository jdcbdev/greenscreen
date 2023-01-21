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
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top background-color-green">
            <div class="container-fluid">
                <a class="navbar-brand" href="../home/">
                    <img class="logo-icon" src="../img/greenscreen_logo.png" alt="">
                    <!-- <span class="logo-name">GreenScreen</span> -->
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
                        <h4 class="fw-bold text-center green">Welcome to GreenScreen!</h4>
                        <h5>Complete the 6 steps to get started</h5>
                        <h4 class="fw-bold mt-3 d-md-none"><span class="progress-counter">1</span> of 6</h4>
                    </div>
                    <div class="col-md-12 text-center d-none d-md-flex progress-bar-profile">
                        <div class="col-md profile-progress-container wrapper" id="step-1">
                            <div class="profile-progress bg-pending bg-white">
                                <i class='bx bxs-user-detail color-green'></i>
                            </div>
                            <p class="text-center my-2 small">Personal Information</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-2">
                            <div class="profile-progress">
                                <i class="fa-solid fa-house-chimney-user"></i>
                            </div>
                            <p class="text-center my-2 small">Economic Status</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-3">
                            <div class="profile-progress">
                                <i class="fa-solid fa-file-circle-check"></i>
                            </div>
                            <p class="text-center my-2 small">College Entrance Test</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-4">
                            <div class="profile-progress">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <p class="text-center my-2 small">Senior High School Background</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-5">
                            <div class="profile-progress">
                                <i class="fa-solid fa-person-circle-check"></i>
                            </div>
                            <p class="text-center my-2 small">Personality Test</p>
                        </div>
                        <div class="col-md profile-progress-container wrapper" id="step-6">
                            <div class="profile-progress">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <p class="text-center my-2 small">Study Habits</p>
                        </div>
                    </div>
                    <?php require_once 'personal_info.php'; ?>
                    <?php require_once 'economic_status.php'; ?>
                    <?php require_once 'cet.php'; ?>
                    <?php require_once 'shs.php'; ?>
                </div>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('a.upload-photo').on('click', function(){
                $('input#upload-photo').trigger('click');
            });
            $('a#upload_cet').on('click', function(){
                $('input#upload_cet_hidden').trigger('click');
            });
            $('a#upload_shs_card').on('click', function(){
                $('input#upload_shs_card_hidden').trigger('click');
            });
            $('#personal.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#economic-status').show();
                $('#step-1').removeClass('wrapper');
                $('#step-1').addClass('wrapper-green');
                $('#step-1 div').removeClass('bg-white');
                $('#step-1 div').addClass('bg-green');
                $('#step-1 div i').removeClass('color-green');
                $('#step-1 div i').addClass('color-white');
                
                $('#step-2').removeClass('wrapper');
                $('#step-2').addClass('wrapper-green');
                $('#step-2 div').addClass('bg-pending');
                $('#step-2 div').addClass('bg-white');
                $('#step-2 div i').addClass('color-green');
                
                $('span.progress-counter').text('2');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#economic-status.back-button').click(function(){
                $('div.profile-screen').hide();
                $('div#personal-info').show();
                $('#step-2').removeClass('wrapper-green');
                $('#step-2').addClass('wrapper');
                $('#step-2 div').removeClass('bg-pending');
                $('#step-2 div').removeClass('bg-white');
                $('#step-2 div i').removeClass('color-green');

                $('#step-1').removeClass('wrapper-green');
                $('#step-1').addClass('wrapper');
                $('#step-1 div').removeClass('bg-green');
                $('#step-1 div').addClass('bg-white');
                $('#step-1 div i').removeClass('color-white');
                $('#step-1 div i').addClass('color-green');

                $('span.progress-counter').text('1');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -400}, 'fast');
            });
            $('#economic-status.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#cet').show();
                $('#step-2').removeClass('wrapper');
                $('#step-2').addClass('wrapper-green');
                $('#step-2 div').removeClass('bg-white');
                $('#step-2 div').addClass('bg-green');
                $('#step-2 div i').removeClass('color-green');
                $('#step-2 div i').addClass('color-white');
                
                $('#step-3').removeClass('wrapper');
                $('#step-3').addClass('wrapper-green');
                $('#step-3 div').addClass('bg-pending');
                $('#step-3 div').addClass('bg-white');
                $('#step-3 div i').addClass('color-green');

                $('span.progress-counter').text('3');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#cet.back-button').click(function(){
                $('div.profile-screen').hide();
                $('div#economic-status').show();
                $('#step-3').removeClass('wrapper-green');
                $('#step-3').addClass('wrapper');
                $('#step-3 div').removeClass('bg-pending');
                $('#step-3 div').removeClass('bg-white');
                $('#step-3 div i').removeClass('color-green');

                $('#step-2').removeClass('wrapper');
                $('#step-2').addClass('wrapper-green');
                $('#step-2 div').removeClass('bg-green');
                $('#step-2 div').addClass('bg-white');
                $('#step-2 div i').removeClass('color-white');
                $('#step-2 div i').addClass('color-green');

                $('span.progress-counter').text('2');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#cet.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#shs').show();
                $('#step-3').removeClass('wrapper');
                $('#step-3').addClass('wrapper-green');
                $('#step-3 div').removeClass('bg-white');
                $('#step-3 div').addClass('bg-green');
                $('#step-3 div i').removeClass('color-green');
                $('#step-3 div i').addClass('color-white');
                
                $('#step-4').removeClass('wrapper');
                $('#step-4').addClass('wrapper-green');
                $('#step-4 div').addClass('bg-pending');
                $('#step-4 div').addClass('bg-white');
                $('#step-4 div i').addClass('color-green');

                $('span.progress-counter').text('4');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#shs.back-button').click(function(){
                $('div.profile-screen').hide();
                $('div#cet').show();
                $('#step-4').removeClass('wrapper-green');
                $('#step-4').addClass('wrapper');
                $('#step-4 div').removeClass('bg-pending');
                $('#step-4 div').removeClass('bg-white');
                $('#step-4 div i').removeClass('color-green');

                $('#step-3').removeClass('wrapper');
                $('#step-3').addClass('wrapper-green');
                $('#step-3 div').removeClass('bg-green');
                $('#step-3 div').addClass('bg-white');
                $('#step-3 div i').removeClass('color-white');
                $('#step-3 div i').addClass('color-green');

                $('span.progress-counter').text('3');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
            });
            $('#shs.next-button').click(function(e){
                e.preventDefault();
                $('div.profile-screen').hide();
                $('div#personality-type').show();
                $('#step-4').removeClass('wrapper');
                $('#step-4').addClass('wrapper-green');
                $('#step-4 div').removeClass('bg-white');
                $('#step-4 div').addClass('bg-green');
                $('#step-4 div i').removeClass('color-green');
                $('#step-4 div i').addClass('color-white');
                
                $('#step-5').removeClass('wrapper');
                $('#step-5').addClass('wrapper-green');
                $('#step-5 div').addClass('bg-pending');
                $('#step-5 div').addClass('bg-white');
                $('#step-5 div i').addClass('color-green');

                $('span.progress-counter').text('5');
                $('html,body').animate({
                    scrollTop:$('div.profile-screen').offset().top -90}, 'fast');
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