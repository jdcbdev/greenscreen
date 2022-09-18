<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Login</title>
</head>
<body>
    <?php

        session_start();
        $accounts = array(
            "user1" => array(
                "username" => 'jaydee',
                "password" => 'jaydee'
            ),
            "user2" => array(
                "username" => 'root',
                "password" => 'root'
            ),
            "user3" => array(
                "username" => 'natsu',
                "password" => 'natsu'
            ),
            "user4" => array(
                "username" => 'erza',
                "password" => 'erza'
            ),
            "user5" => array(
                "username" => 'lucy',
                "password" => 'lucy'
            )
        );
        if(isset($_POST['username']) && isset($_POST['password'])){

            foreach($accounts as $keys => $value){
                if($_POST['username'] == $value['username'] && $_POST['password'] == $value['password']){
                    $_SESSION['logged-in'] = $value['username'];
                    header('location: ../admin/dashboard.php');
                }
            }

            $error = 'Invalid username/password. Try again.';
        }
    
    ?>
    <div class="login-container">
        <form class="login-form" action="login.php" method="post">
            <div class="logo-details">
                <i class='bx bx-meteor'></i>
                <span class="logo-name">forecast</span>
            </div>
            <hr class="divider">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" required tabindex="1">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required tabindex="2">
            <input class="button" type="submit" value="Login" name="login" tabindex="3">
            <?php
            
                if(isset($error)){
                    echo '<div><p class="error">'.$error.'</p></div>';
                }
                
            ?>
        </form>
    </div>
</body>
</html>