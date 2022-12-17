<?php
  $page_title = 'Forecast - Sign In';
  require_once '../includes/header.php';
?>
<body id="sign-up">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark background-color-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home/">
                <i class='bx bx-meteor'></i>
                <span class="logo-name">forecast</span>
            </a>
        </div>
        </nav>
    </header>
    <main class="py-md-4">
        <div class="container-fluid d-flex align-items-md-center justify-content-md-center">
            <div class="container-fluid sign-up p-sm-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold text-center green">Sign in to apply</h2>
                    </div>
                </div>
                <div class="row mt-4">
                    <p class="text-center continue-google">
                        <a class="btn btn-lg btn-success background-color-green btn-continue btn-font" href="#">
                            <i class="fa-brands fa-google"></i>
                            Continue with Google
                        </a>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="text-center">
                            <hr class="mt-4 mb-1">
                            <span class="p-2 or">or</span>
                        </div>
                        <form class="needs-validation">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address<span class="text-muted"></span></label>
                                    <input type="email" class="form-control" id="email" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="addpasswordress" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter valid password.
                                    </div>
                                </div>
                                <div class="col-12 pt-2 mb-3">
                                    <button class="btn btn-lg btn-success background-color-green btn-continue btn-font" type="submit">Continue with Email</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="text-center">
                        Don't have an account? <a class="green" href="signup.php">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>