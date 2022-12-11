<?php
  $page_title = 'Forecast - Sign Up';
  require_once '../includes/header.php';
?>
<body id="sign-up" class="vh-100">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top background-color-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home/">
                <i class='bx bx-meteor'></i>
                <span class="logo-name">forecast</span>
            </a>
        </div>
        </nav>
    </header>
    <main class="h-100">
        <div class="container-fluid d-flex align-items-md-center justify-content-md-center h-100">
            <div class="container-fluid sign-up p-sm-5">
                <div class="row">
                    <div class="col">
                        <h2 class="mt-4 fw-bold text-center green">Sign up to apply</h2>
                    </div>
                </div>
                <div class="row card-container">
                    <div class="col card mt-3 py-3 card-1">
                        <i class="fa-solid fa-people-line green"></i>
                        <h3 class="text-start fw-bold mt-3">I am an incoming college student</h3>
                        <p class="justify">Students who recently graduated from high school or never went to college.</p>
                    </div>
                    <div class="separator"></div>
                    <div class="col card mt-3 py-3 card-2">
                        <i class="fa-solid fa-right-left green"></i>
                        <h3 class="text-start fw-bold mt-3">I am a shiftee or transferee</h3>
                        <p class="justify">Students who are career shifters or transferring from another school.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="text-center continue">
                        <a class="btn btn-lg btn-success background-color-green btn-continue" href="#">Continue</a>
                    </p>
                </div>
                <div class="row mt-3">
                    <p class="text-center">
                        Already have an account? <a class="green" href="#">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            $('.card-1').on('click', function(){
                $('.card-1').addClass('card-hover');
                $('.card-2').removeClass('card-hover');
            });
            $('.card-2').on('click', function(){
                $('.card-2').addClass('card-hover');
                $('.card-1').removeClass('card-hover');
            });
        });
    </script>
</body>
</html>