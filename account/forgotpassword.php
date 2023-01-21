<?php
  $page_title = 'GreenScreen - Forgot Password';
  require_once '../includes/header.php';
?>
<body id="sign-up">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark background-color-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home/">
                <img class="logo-icon green" src="../img/greenscreen_logo.png" alt="">
                <!-- <span class="logo-name">GreenScreen</span> -->
            </a>
            <span class="mx-3 shortcut">Don't have an account? <a href="./signup.php" class="green text-decoration-none">Sign up</a></span>
        </div>
        </nav>
    </header>
    <main class="py-md-4">
        <div class="container-fluid d-flex align-items-md-center justify-content-md-center">
            <div class="container-fluid sign-in p-sm-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa-solid fa-envelope-open-text green"></i>
                    </div>
                    <div class="col-12 mt-3">
                        <h2 class="fw-bold text-center green">Update your password</h2>
                    </div>
                    <div class="col-12 text-center">
                        <p class="text-center"">
                            Enter your email address and click <span class="fw-bold">Send Email</span>.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <form class="needs-validation">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address<span class="text-muted"></span></label>
                                    <input type="email" class="form-control" id="email" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="col-12 g-recaptcha text-center" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ">
                                    </div>
                                </div>
                                <div class="col-12 pt-2 mb-3">
                                    <button class="btn btn-lg btn-success background-color-green btn-continue btn-font" type="submit">Send Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="text-center">
                        Go back to <a class="green" href="signin.php">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>