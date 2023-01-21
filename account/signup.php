<?php
  $page_title = 'GreenScreen - Sign Up';
  require_once '../includes/header.php';
?>
<body id="sign-up">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark background-color-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home/">
                <img class="logo-icon" src="../img/greenscreen_logo_green.png" alt="">
                <!-- <span class="logo-name">GreenScreen</span> -->
            </a>
            <?php
            if(isset($_GET['student']) &&  $_GET['student'] == 'new'){
            ?>
                <span class="mx-3 shortcut">Are you a shiftee or transferee? <a href="./signup.php?student=old" class="green text-decoration-none">Sign up here</a></span>
            <?php
            }else if(isset($_GET['student']) &&  $_GET['student'] == 'old'){
            ?>
                <span class="mx-3 shortcut">Are you an incoming college student? <a href="./signup.php?student=new" class="green text-decoration-none">Sign up here</a></span>
            <?php
            }
            ?>
        </div>
        </nav>
    </header>
    <main class="py-md-4">
        <?php
            if(isset($_GET['student']) &&  $_GET['student'] == 'new'){
                require_once './signup-new.php';
            }else if(isset($_GET['student']) &&  $_GET['student'] == 'old'){
                require_once './signup-old.php';
            }else{
                require_once './signup-choose.php';
            }
        ?>
    </main>
    <script>
        $(document).ready(function(){
            let link = '';
            $('.card-1').on('click', function(){
                $('.card-1').addClass('card-hover');
                $('.card-2').removeClass('card-hover');
                link = 'signup.php?student=new';
            });
            $('.card-2').on('click', function(){
                $('.card-2').addClass('card-hover');
                $('.card-1').removeClass('card-hover');
                link = 'signup.php?student=old';
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