<?php require_once "./assets/db/config_session.inc.php"; ?>
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
  <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background:white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Latest News</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Blogs</a></li>
            <li><a href="#">Page</a></li>
            <li class="active">Latest News</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->


  <!-- Start Blog 
    ============================================= -->
  <div id="blog" class="blog-area circle default-padding bottom-less">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Latest News</h2>
            <p>
              Able an hope of body. Any nay shyness article matters own
              removal nothing his forming. Gay own additions education
              satisfied the perpetual. If he cause manor happy. Without
              farther she exposed saw man led. Along on happy could cease
              green oh.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="blog-items">
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb" /></a>
                <div class="date">
                  <h4><span>24</span> Nov, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Objection happiness something</a>
                </h4>
                <p>
                  Sitting mistake towards his few country ask. You delighted
                  two rapturous six depending objection happiness something
                  the partiality unaffected
                </p>
                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user"></i> Author</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Item -->
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb" /></a>
                <div class="date">
                  <h4><span>12</span> Sep, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Meant to learn of vexed</a>
                </h4>
                <p>
                  Sitting mistake towards his few country ask. You delighted
                  two rapturous six depending objection happiness something
                  the partiality unaffected
                </p>
                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user"></i> Author</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Item -->
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb" /></a>
                <div class="date">
                  <h4><span>29</span> Dec, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Delightful up dissimilar</a>
                </h4>
                <p>
                  Sitting mistake towards his few country ask. You delighted
                  two rapturous six depending objection happiness something
                  the partiality unaffected
                </p>
                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user"></i> Author</a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Item -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->







  <!-- Start Footer 
    ============================================= -->
  <?php include 'footer_dark.php' ?>
  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>
  <script src="./assets/js/cards-scroll.js"></script>

</body>

</html>