<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include './links.php';
  ?>

</head>

<body>
  <!-- Preloader Start -->
  <div class="se-pre-con"></div>
  <!-- Preloader Ends -->

  <!-- Start Header Top 
    ============================================= -->
  <?php include './header_top.php'; ?>

  <!-- End Header Top -->

  <!-- Header 
    ============================================= -->
  <?php include './nav.php'; ?>

  <!-- End Header -->
  <!-- Start Login Form 
    ============================================= -->
  <?php include './login.php'; ?>
  <!-- End Login Form -->

  <!-- Start Register Form 
    ============================================= -->

  <?php include './register.php'; ?>
  <!-- End Register Form -->

  <!-- Start Breadcrumb 
    ============================================= -->
  <div
    class="breadcrumb-area shadow dark text-center bg-fixed text-light"
    style="background-image: url(assets/img/2440x1578.png)">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Gallery</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#"><i class="fas fa-home"></i> Home</a>
            </li>
            <li><a href="#">Page</a></li>
            <li class="active">Gallery</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->

  <!-- Start Portfolio
    ============================================= -->
  <div id="portfolio" class="portfolio-area default-padding">
    <div class="container">
      <div class="portfolio-items-area text-center">
        <div class="row">
          <div class="col-md-12 portfolio-content">
            <div class="mix-item-menu active-theme">
              <button class="active" data-filter="*">All</button>
              <button data-filter=".campus">Campus</button>
              <button data-filter=".teachers">Teachers</button>
              <button data-filter=".education">Education</button>
              <button data-filter=".ceremony">Ceremony</button>
              <button data-filter=".students">Students</button>
            </div>
            <!-- End Mixitup Nav-->

            <div class="row magnific-mix-gallery masonary text-light">
              <div id="portfolio-grid" class="portfolio-items col-4">
                <div class="pf-item ceremony students">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="pf-item teachers ceremony">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="pf-item campus education">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="pf-item education students">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="pf-item campus">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="pf-item ceremony teachres">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="pf-item teachres">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <div class="pf-item ceremony students">
                  <div class="item-effect">
                    <img src="assets/img/800x800.png" alt="thumb" />
                    <div class="overlay">
                      <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                      <a href="#"><i class="fas fa-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Portfolio -->

  <!-- Start Footer 
    ============================================= -->
  <?php include  "./footer_dark.php" ?>

  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>

</body>

</html>