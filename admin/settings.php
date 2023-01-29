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
                        <h5 class="card-title m-0">Settings</h5>
                    </div>
                    <div class="col-lg-5 col-xl-4 profile-menu">
                        <div class="card profile school-year mt-3 mt-md-0 card-hover">
                            <div class="card-body">
                                <h6 class="card-title m-0 fw-bold">School Year</h6>
                            </div>
                        </div>
                        <div class="card profile admission-period mt-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold m-0">Admission Period</h6>
                            </div>
                        </div>
                        <div class="card profile automation mt-3">
                            <div class="card-body">
                                <h6 class="card-title fw-bold m-0">Automation</h6>
                            </div>
                        </div>
                    </div>
                    <div id='school-year' class="col-lg-7 col-xl-8 profile-screen d-done d-lg-block ps-lg-1">
                        <div class="mt-3 mt-md-0">
                            <div class="card-profile p-4">
                                <div class="row">
                                    <h5 class="col-12 fw-bold mb-3">School Year Settings</h5>
                                    <form class="needs-validation" action="" method="post">
                                        <div class="row g-2">
                                            <div class="col-12 col-xl-4">
                                                <label for="activeschoolyear" class="form-label">Active School Year<span class="text-muted"></span></label>
                                                <input type="text" disabled="true" class="form-control" value="2023-2024" id="activeschoolyear" placeholder="" name="activeschoolyear">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <label for="schoolyear" class="form-label">Set New School Year<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="schoolyear" placeholder="" name="schoolyear" required="">
                                            </div>
                                            <div class="col-12 col-xl-4 pt-2 pt-xl-3 mb-3 mb-xl-0 mt-xl-auto">
                                                <input class="btn btn-lg btn-success background-color-green btn-font w-100" type="submit" value="Save Changes" name="login">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-profile mt-3 p-4">
                                <div class="w-100">
                                    <h5 class="col-12 fw-bold mb-3">Past School Year</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover col-12">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">School Year</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>2020-2021</td>
                                                    <td align="right">
                                                        <a href="" class="me-2 yellow"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="" class="red"><i class="fa-solid fa-trash-can"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='admission-period' class="col-lg-7 col-xl-8 profile-screen d-done d-lg-none ps-lg-1">
                        <div class="mt-3 mt-md-0">
                            <div class="card-profile p-4">
                                <div class="row">
                                    <h5 class="col-12 fw-bold mb-3">Period of Application</h5>
                                    <form class="needs-validation" action="" method="post">
                                        <div class="row g-2">
                                            <div class="col-12 col-xl-4">
                                                <label for="activeschoolyear" class="form-label">Active School Year<span class="text-muted"></span></label>
                                                <input type="text" disabled="true" class="form-control" value="2023-2024" id="activeschoolyear" placeholder="" name="activeschoolyear">
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <label for="schoolyear" class="form-label">Set New School Year<span class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="schoolyear" placeholder="" name="schoolyear" required="">
                                            </div>
                                            <div class="col-12 col-xl-4 pt-2 pt-xl-3 mb-3 mb-xl-0 mt-xl-auto">
                                                <input class="btn btn-lg btn-success background-color-green btn-font w-100" type="submit" value="Save Changes" name="login">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-profile mt-3 p-4">
                                <div class="w-100">
                                    <h5 class="col-12 fw-bold mb-3">Past School Year</h5>
                                    <div class="col-12">
                                        <table class="table table-hover col-12">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">School Year</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>2020-2021</td>
                                                    <td align="right">
                                                        <a href="" class="me-2 yellow"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="" class="red"><i class="fa-solid fa-trash-can"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
    <script>
        $(document).ready(function(){
            $('.card.profile').on('click', function(){
                $('.card.profile').removeClass('card-hover');
                $(this).addClass('card-hover');
            });
            $('.card.profile.school-year').on('click', function(){
                $('.profile-screen').hide();
                $('.profile-screen').removeClass('d-lg-block');
                $('.profile-screen').removeClass('d-lg-none');
                $('#school-year').addClass('d-lg-block');
            });
            $('.card.profile.admission-period').on('click', function(){
                $('.profile-screen').hide();
                $('.profile-screen').removeClass('d-lg-block');
                $('.profile-screen').removeClass('d-lg-none');
                $('#admission-period').addClass('d-lg-block');
            });
            $('.card.profile.automation').on('click', function(){
                $('.profile-screen').hide();
                $('.profile-screen').removeClass('d-lg-block');
                $('.profile-screen').removeClass('d-lg-none');
                $('#automation').addClass('d-lg-block');
            });
        });
    </script>
</html>