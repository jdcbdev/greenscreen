<?php

  //start session
  session_start();

  //check if user is login already
  if(isset($_SESSION['logged_id']) && $_SESSION['user_type'] == 'admin'){
      header('location: ../admin/dashboard.php');
  }else if(isset($_SESSION['logged_id']) && $_SESSION['user_type'] == 'faculty'){
      header('location: ../faculty/dashboard.php');
  }else if(isset($_SESSION['logged_id']) && $_SESSION['user_type'] == 'student'){
      header('location: ../student/index.php');
  }

  $page_title = 'GreenScreen - A Decision Support System';
  require_once '../includes/header.php';
?>
<body id="home-page">
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top background-color-green">
      <div class="container-fluid">
        <a class="navbar-brand" href="../home/">
          <img class="logo-icon" src="../img/greenscreen_logo.png" alt="">
          <!-- <span class="logo-name">GreenScreen</span> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home" id="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#academics" id="academics">Academics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#admissions" id="admissions">Admissions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faculty" id="faculty">Faculty</a>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="../account/signin.php" id="signin">Sign in</a>
            </li>
          </ul>
          <a href="../account/signin.php" class="d-none d-md-block"><button class="btn btn-outline-success btn-login">Sign in</button></a>
        </div>
      </div>
    </nav>
  </header>
  <!-- Main -->
  <main id="home">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item banner-1 active">
          <div class="container">  
            <div class="carousel-caption">
              <h1>Student-Centered College.</h1>
              <p>The College of Computing Studies allows students to explore their passions for problem-solving and producing creative experiences.</p>
              <p><a class="btn btn-lg btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item banner-2">
          <div class="container">
            <div class="carousel-caption">
              <h1>Innovative and Supportive Faculty and Staff.</h1>
              <p>The College of Computing Studies is united by a common goal: to make the world a better place through education, research, and innovation.</p>
              <p><a class="btn btn-lg btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item banner-3">
          <div class="container">
            <div class="carousel-caption">
              <h1>Convenient Facilities.</h1>
              <p>The College of Computing Studies is equipped with spacious and fully-aircon classrooms, high-tech laboratories, media rooms, and free wifi for all students.</p>
              <p><a class="btn btn-lg btn-success background-color-green btn-apply d-none" href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="academics">
      <h1 class="display-4 fw-normal">Programs</h1>
      <p class="fs-5">Our programs are always up-to-date, following the CHED recommendation, industry standards, 
        and feedback from our successful alumni to ensure we always deliver quality education and produce highly employable 
        graduates.
      </p>
    </div>
    <div class="container marketing">
      <div class="row featurette featurette-1">
        <div class="col-12 col-md-12 col-lg-7 course-cs">
          <h2 class="featurette-heading course-title">BS in Computer Science</span></h2>
          <p class="lead justify">
            The computer science course is intended for students with a solid background in mathematics 
            and an interest in the theory, practice, art, and science of computer programming. This course provides 
            graduates with an educational foundation for careers in computer software or computer system design, 
            including careers as software engineers, application software designers, system programmers, or system engineers.
          </p>
          <p class="btn-apply-center"><a class="btn btn-lg btn-success background-color-green btn-apply btn-font" href="../student/apply.php">Apply Now</a></p>
        </div>
        <div class="col-12 col-md-10 col-lg-5 mx-auto mx-lg-0 course-1"></div>
      </div>
      <hr class="featurette-divider sec-divider">
      <div class="row featurette featurette-2">
        <div class="col-12 col-md-12 col-lg-7 course-it">
          <h2 class="featurette-heading course-title">BS in Information Technology</span></h2>
          <p class="lead justify">
            The BS in Information Systems program focuses on the design, development and implementation of information 
            and communications technology (ICT) resources to ensure information systems applications can be used in various 
            industry sectors (business, education, media and entertainment, healthcare, government, and service).
          </p>
          <p class="btn-apply-center"><a class="btn btn-lg btn-success background-color-green btn-apply btn-font" href="../account/signup.php">Apply Now</a></p>
        </div>
        <div class="col-12 col-md-10 col-lg-5 mx-auto mx-lg-0 course-1 course-2"></div>
      </div>
      <hr class="featurette-divider">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="admissions">
        <h1 class="display-4 fw-normal">Admissions</h1>
        <p class="fs-5">
        Our admission process is now powered by a decision-support system called - <span class="green-bold fs-5">GreenScreen</span>.
        </p>
        <p><a class="btn btn-lg btn-success background-color-green text-center btn-apply btn-font" href="../account/signup.php">Apply Now</a></p>
      </div>
      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-3 p-md-4 p-lg-5 text-white background-color-green rounded-3">
            <h2>What is GreenScreen?</h2>
            <p class="justify">
            The GreenScreen is a decision-support system programmed using machine learning algorithms to predict 
            the success of incoming first-year students in computer programming courses which will be used as 
            a reliable factor for admitting students to their chosen programs in the College of Computing Studies.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-3 p-md-4 p-lg-5 bg-light border rounded-3">
            <h2>How it works?</h2>
            <p class="justify">
            The GreenScreen can predict the student's success based on the student's attributes prior to college. The student has 
            to sign-up and completes their profile. They need to answer some tests and participate in a short survey. Once the 
            Admission Officer verifies their account, they will receive their admission result immediately.
            </p>
          </div>
        </div>
      </div>
      <div class="container px-4 mt-5" id="featured-3">
        <h1 class="pb-2 border-bottom text-center my-4">Features</h1>
        <div class="row g-4 py-2 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient background-color-green">
              <i class='bx bxs-timer'></i>
            </div>
            <h2>Streamline Process</h2>
            <p class="justify">Apply and get admission result in shortest possible time.</p>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient background-color-green">
              <i class='bx bxs-brain'></i>
            </div>
            <h2>Smart Admission</h2>
            <p class="justify">Powered by latest machine learning algorithms with very high accuracy.</p>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient background-color-green">
              <i class='bx bxs-bolt'></i>
            </div>
            <h2>Automation</h2>
            <p class="justify">Not Approved? Worry not! Our system automatically forwards your application to the assigned faculty for screening.</p>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient background-color-green">
              <i class='bx bxs-medal'></i>
            </div>
            <h2>Early Intervention</h2>
            <p class="justify">Early detection of students who will struglle will help them succeed in their program.</p>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient background-color-green">
              <i class='bx bxs-paper-plane'></i>
            </div>
            <h2>Hassle-Free</h2>
            <p class="justify">Students can send their application online anytime and anywhere.</p>
          </div>
          <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient background-color-green">
              <i class='bx bxs-florist'></i>
            </div>
            <h2>Paperless</h2>
            <p class="justify">Lesser paper is consumed, the healthier the environment.</p>
          </div>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="faculty">
        <h1 class="display-4 fw-normal">Faculty and Staff</h1>
      </div>
      <div class="row faculty">
        <div class="col-lg-4">
          <img src="../img/faculty/go.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Dr. Roderick P. Go</h3>
          <h4>Dean</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/odon.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Engr. Odon A. Maravillas, Jr., MSCS</h3>
          <h4>Associate Dean</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/belamide.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Engr. Gadmar M. Belamide, MEnggEd-ICT</h3>
          <h4>Secretary</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/sadiwa.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Ms. Lucy Felix-Sadiwa, MSCS</h3>
          <h4>CS Department Head</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/escorialj.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mr. John Augustus A. Escorial, MIT</h3>
          <h4>IT Department Head</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/escoriala.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mrs. Aida A. Escorial, MIT</h3>
          <h4>Graduate Program Chair</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/aripE.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Engr. Edwip I. Arip, MEnggEd-ICT</h3>
          <h4>External Studies Unit Technical Associate</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/aripJ.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mr. John Paul I. Arip</h3>
          <h4>LMS Quality Assurance</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/female.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mrs. Justin Anne Albay-Arip</h3>
          <h4>Visiting Lecturer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/ballaho.png" alt="" class="bd-placeholder-img rounded-circle photo" width="140" height="140">
          <h3>Mr. Jaydee C. Ballaho</h3>
          <h4>LMS Lead Developer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/catadman.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mr. Jason A. Catadman</h3>
          <h4>LMS Asst. Developer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/flores.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Engr. Mark L. Flores, MEnggEd-ICT</h3>
          <h4>Director, Data Protection and Security</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/gregana.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Ms. Pauleen Jean E. Gregana</h3>
          <h4>Visiting Lecturer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/female.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Ms. Aradzna M. Kamman</h3>
          <h4>Visiting Lecturer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/female.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Ms. Mara Marie Liao</h3>
          <h4>Visiting Lecturer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/lines.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Engr. Marvic A. Lines, MEnggEd-ICT</h3>
          <h4>LMS Training and Management</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/female.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Ms. Ceed Janelle B. Lorenzo</h3>
          <h4>Visiting Lecturer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/lorenzo.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Engr. Ceed Jezreel B. Lorenzo, MIT</h3>
          <h4>Research Coordinator</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/rojas.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Engr. Marjorie A. Rojas</h3>
          <h4>Student Affairs and Guidance Coordinator</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/male.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mr. Theo Jay M'lleno Sanson</h3>
          <h4>Visiting Lecturer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/tahil.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mr. Salimar B. Tahil, MEnggEd-ICT</h3>
          <h4>Asst. Director, MISTO</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/timpangco.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mr. Whesley G. Timpangco</h3>
          <h4>LMS Network Engineer</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/jackaria.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Ms. Alhadzra M. Jackaria</h3>
          <h4>Laboratory Technician</h4>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../img/faculty/male.png" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
          <h3>Mr. John Roy S. Velario</h3>
          <h4>Administrative Assistant</h4>
        </div><!-- /.col-lg-4 -->
      </div>
      <hr class="featurette-divider">
    </div>
  </main>
  <!-- FOOTER -->
  <footer class="container background-color-green">
    <p class="text-center">&copy; <?=date('Y')?> GreenScreen &middot; <a href="#">Privacy Policy</a></p>
  </footer>
  <script>
    $(document).ready(function(){
      $('a#home').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#home').addClass('active');
        $('html,body').animate({
                    scrollTop:$('main#home').offset().top -90}, 'fast');
      });
      $('a#academics').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#academics').addClass('active');
        $('html,body').animate({
                    scrollTop:$('div#academics').offset().top -90}, 'fast');
      });
      $('a#admissions').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#admissions').addClass('active');
        $('html,body').animate({
                    scrollTop:$('div#admissions').offset().top -90}, 'fast');
      });
      $('a#faculty').on('click', function(){
        $('.nav-link').removeClass('active');
        $('a#faculty').addClass('active');
        $('html,body').animate({
                    scrollTop:$('div#faculty').offset().top -90}, 'fast');
      });
    });
  </script>
</body>
</html>