<?php
  $page_title = 'GreenScreen - Sign Up';
  require_once '../includes/header.php';
?>
<body id="sign-up">
    <!-- Header -->
    <?php
        require_once '../includes/topnav_account.php';
    ?>
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