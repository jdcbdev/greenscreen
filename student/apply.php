<?php
  
    //start session
    session_start();

    //check if user is login already
    if(isset($_SESSION['logged_id']) && $_SESSION['user_type'] == 'admin'){
        header('location: ../admin/dashboard.php');
    }else if(isset($_SESSION['logged_id']) && $_SESSION['user_type'] == 'faculty'){
        header('location: ../faculty/dashboard.php');
    }else if (!isset($_SESSION['logged_id'])){
      header('location: ../account/signin.php');
    }
  
    $page_title = 'GreenScreen - Apply';
    require_once '../includes/header.php';
?>
<body id="sign-up">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark background-color-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home/">
                <img class="logo-icon" src="../img/greenscreen_logo_green.png" alt="">
            </a>
        </div>
        </nav>
    </header>
    <main class="py-md-4">
        <div class="container-fluid d-flex align-items-md-center justify-content-md-center">
            <div class="container-fluid sign-up p-sm-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold text-center green">Select your program</h2>
                    </div>
                </div>
                <div class="row card-container">
                    <div class="col card mt-3 py-3 card-1 <?php if(isset($_GET['program']) && $_GET['program'] == 'bscs'){ echo "card-hover"; }?>">
                        <i class="fa-solid fa-laptop-code green"></i>
                        <h3 class="text-start fw-bold mt-3">BS Computer Science</h3>
                        <p class="text-start">Read more about the BSCS program <a class="link-here" href="">here</a>.</p>
                    </div>
                    <div class="separator"></div>
                    <div class="col card mt-3 py-3 card-2 <?php if(isset($_GET['program']) && $_GET['program'] == 'bsit'){ echo "card-hover"; }?>">
                        <i class="fa-solid fa-network-wired green"></i>
                        <h3 class="text-start fw-bold mt-3">BS Information Technology</h3>
                        <p class="text-start">Read more about the BSIT program <a class="link-here" href="">here</a>.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="text-center continue">
                        <a id="choose" class="btn btn-lg btn-success background-color-green btn-continue btn-font">Send Application</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            let link = '';
            $('.card-1').on('click', function(){
                $('.card-1').addClass('card-hover');
                $('.card-2').removeClass('card-hover');
                link = 'apply.php?program=bscs';
            });
            $('.card-2').on('click', function(){
                $('.card-2').addClass('card-hover');
                $('.card-1').removeClass('card-hover');
                link = 'apply.php?program=bsit';
            });
            $('a#choose').on('click', function(e){
                if(link == ''){
                    setTimeout(function ()
                        { $('div.card').toggleClass('active'); 
                    }, 1500);
                    $('div.card').toggleClass('active')
                }else{
                    window.location.href = link;
                }
            });
        });
    </script>
</body>
</html>