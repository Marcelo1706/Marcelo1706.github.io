<?php $project = $_GET['project']; 

$projects = array(
  "1" => array(
    "title" => "Atarraya GO",
    "description" => "Atarraya GO is a mobile application that allows users to connect with the Liceo Atarraya LMS and access their courses, grades, and other information.",
    "category" => "Android App",
    "client" => "Liceo Atarraya",
    "date" => "January 2021",
    "url" => "https://play.google.com/store/apps/details?id=com.liceoatarraya.app"
  ),
  "2" => array(
    "title" => "Liceo Atarraya LMS",
    "description" => "Liceo Atarraya LMS is a web application that allows students to access their courses, grades, and other information. It was created during the COVID-19 pandemic to allow students to continue their education from home.",
    "category" => "Web App",
    "client" => "Liceo Atarraya",
    "date" => "March 2020",
    "url" => "https://www.liceoatarraya.com/"
  ),
  "3" => array(
    "title" => "Mediterranea Store",
    "description" => "On Mediterranea Store you will find the best iberic ham for your tapas, the right sauce for a refine dish to share with friends or the proper olive oil to enhance your plates; all it accompanied by a glass of fine wine or a beer from top brewmasters.",
    "category" => "E-Commerce",
    "client" => "Mediterranea Store",
    "date" => "June 2019",
    "url" => "https://mediterraneastore.com/"
  ),
  "4" => array(
    "title" => "CONICA Payment Gateway",
    "description" => "CONICA Payment Gateway is a web application that allows users to pay their bills online. It was created to allow CONICA customers to pay their bills from anywhere.",
    "category" => "Web App",
    "client" => "CONICA",
    "date" => "April 2023",
    "url" => "https://pagos.conicasv.com/"
  ),
  "5" => array(
    "title" => "CrowdFunding Entre Todos LATAM",
    "description" => "CrowdFunding Entre Todos LATAM is a web application that allows users to create and donate to crowdfunding campaigns.",
    "category" => "Web App",
    "client" => "Proyecto Esperanza",
    "date" => "March 2023",
    "url" => "https://www.entretodos-latam.com/"
  ),
  "6" => array(
    "title" => "Headcount Forecasting",
    "description" => "Using AI and Machine Learning Models, this web application allows users to forecast the headcount of a company based on the company's historical data.",
    "category" => "QlikSense App",
    "client" => "Applaudo Studios",
    "date" => "January 2023",
    "url" => "private"
  ),
  "7" => array(
    "title" => "Midas CRM",
    "description" => "Midas is an AI-Powered Dashboard that allows companies to find potential customers based on their needs and in the info found in Crunchbase, it also allows via a sentiment analysis to check if a deal is going to be successful or not.",
    "category" => "Web App and API",
    "client" => "Applaudo Studios",
    "date" => "September 2022",
    "url" => "private"
  ),
  "8" => array(
    "title" => "Artemis CRM",
    "description" => "Using LLM and AI, this application allows companies to find potential hires based on their needs and in the info found in LinkedIn.",
    "category" => "Web App and API",
    "client" => "Applaudo Studios",
    "date" => "December 2022",
    "url" => "private"
  ),
  "9" => array(
    "title" => "Importaciones Blanco Web Store",
    "description" => "An intuitive Web Store for selling products online.",
    "category" => "E-Commerce",
    "client" => "Importaciones Blanco",
    "date" => "December 2022",
    "url" => "https://importacionesblanco.net/"
  )
)


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - iPortfolio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Marcelo Cerritos</a></h1>
        <div class="social-links mt-3 text-center">
        <a href="https://twitter.com/MarceloCerritos" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/jose.m.hernandez.3383" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/jose.marcelo.1706/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="https://www.linkedin.com/in/josemarcelo1706/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.html#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.html#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="index.html#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="index.html#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="index.html#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="assets/resume.pdf" class="nav-link scrollto"><i class="bi bi-file-earmark-fill"></i> <span>Download Resume</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?php echo $projects[$project]["title"] ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-<?php echo $project ?>.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: <?php echo $projects[$project]["category"] ?></li>
                <li><strong>Client</strong>: <?php echo $projects[$project]["client"] ?></li>
                <li><strong>Project date</strong>: <?php echo $projects[$project]["date"] ?></li>
                <li><strong>Project URL</strong>: <a href="<?php echo $projects[$project]["url"] == "private" ?  "#" : $projects[$project]["url"] ?>"><?php echo $projects[$project]["url"] ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php echo $projects[$project]["title"] ?></h2>
              <p>
              <?php echo $projects[$project]["description"] ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>