<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top background-color-green">
      <div class="container-fluid">
        <a class="navbar-brand" href="../home/">
          <img class="logo-icon" src="../img/greenscreen_logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../student/home.php" id="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../student/home.php#academics" id="academics">Academics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../student/home.php#admissions" id="admissions">Admissions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../student/home.php#faculty" id="faculty">Faculty</a>
            </li>
            <?php
            if (!isset($_SESSION['logged_id'])){
            ?>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="../account/signin.php" id="signin">Sign in</a>
            </li>
            <?php
            }
            ?>
          </ul>
          <?php
            if (!isset($_SESSION['logged_id'])){
            ?>
            <a href="../account/signin.php" class="d-none d-md-block"><button class="btn btn-outline-success btn-login">Sign in</button></a>
            <?php
            }
            ?>
        </div>
        <?php
        if (isset($_SESSION['logged_id'])){
        ?>
        <div class="dropdown text-end me-3 d-none d-md-block">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://avatars.githubusercontent.com/u/60727139?s=40&v=4" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small dropdown-user">
                <li><a class="dropdown-item" href="../student/myapplication.php">My Application</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../account/logout.php">Sign out</a></li>
            </ul>
        </div>
        <?php
        }
        ?>
      </div>
    </nav>
</header>