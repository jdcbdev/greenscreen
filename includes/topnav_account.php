<header>
    <nav class="navbar navbar-expand-md navbar-dark background-color-green">
    <div class="container-fluid">
        <a class="navbar-brand" href="../home/">
            <img class="logo-icon" src="../img/greenscreen_logo_green.png" alt="">
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
        }else if(isset($_GET['reset']) &&  $_GET['reset'] == 'yes'){
        ?>
            <span class="mx-3 shortcut">Don't have an account? <a href="./signup.php" class="green text-decoration-none">Sign up</a></span>
        <?php
        }
        ?>
    </div>
    </nav>
</header>