<?php require_once "./assets/db/config_session.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include './links.php';
  ?>
  <link rel="stylesheet" href="./assets/css/classroom.css">
  <link rel="stylesheet" href="./assets/css/scroll-cards.css">
  <link rel="stylesheet" href="./assets/css/card-features.css">

</head>
<style>
  @media (min-width: 768px) {
    .cards-with-scroll {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: 1fr;
      /* justify-content: center; */
    }
  }
</style>

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
          <h1>Test Series > Boards</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Courses</a></li>
            <li><a href="#">Test Series</a></li>
            <li class="active">Boards</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->


  <!-- Start of scroll cards=============== -->
  <div class="default-padding default-padding-per cards-with-scroll" style="margin-top: 70px;">
    <section>
      <div class="colored-div">
        11
      </div>
      <div>
        <h4>
          Two Year Test Series for 10<sup>th</sup> Class Students
        </h4>
        <button>ONLINE / OFFLINE / POSTAL</button>
        <p>This Test Series is for students studying in 10<sup>th</sup> class Board Exams. </p>
        <span>
          <a href="#11class">more details</a>
        </span>
      </div>
    </section>
    <section>
      <div class="colored-div">
        12
      </div>
      <div>
        <h4>
          One Year Test Series for 12<sup>th</sup> Class Students
        </h4>
        <button>ONLINE / OFFLINE / POSTAL</button>
        <p>This Test Series is for students studying in 12<sup>th</sup> class Board Exams. </p>
        <span>
          <a href="#12class">more details</a>
        </span>
      </div>
    </section>
  </div>


  <!-- end of scroll cards=============== -->



  <!--Start Description   =============================================-->
  <div class=" default-padding-per  courses-offer">
    <div class="inner-container">
      <h2 class="headings">Test Series </h2>
      <p class="main-des">
        At AREESE we try every possible way to make studies efficient for students, hence we prepared these specialized TEST series to help students master the art of solving problems within a given amount of time. This series helps students master subjective questions as it is divided in many sections to ease the understanding of concept. Take a look at our Test Series below:
      </p>
    </div>
    <div class="course-holder">

      <!-- Single Item -->
      <section class="cards left" id="11class">
        <div class="inner-container">
          <div class="upper-part">
            <h4>One year Test Series</h4>
            <p>(9th to 10th Moving Students)</p>
            <h5>About the Series</h5>
            <p>This Test Series is for students who wants to prepare for NEET while studying in 10<sup>th</sup> class.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">TEST SERIES FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>

              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 10<sup>th</sup> </p>
            </div>
            <div>

              <h5>Test Validity</h5>
              <p>One Year</p>
            </div>
            <div>

              <h5>Mode of Test</h5>
              <p>Offline/Pen Paper Test</p>
            </div>
            <div>

              <h5>Test Format</h5>
              <p>Chapterwise/ Partwise/ Minor/ Full</p>
            </div>
            <div>

              <h5>Targeted Exams & Year</h5>
              <p>Board Exams & CUET</p>
            </div>
            <div>

              <h5>Test Fee</h5>
              <p>₹ 1,00,000</p>
            </div>

          </div>
        </div>

      </section>
      <!-- End Single Item -->
      <!-- Single Item -->
      <section class="cards " id="12class">
        <div class="inner-container">
          <div class="upper-part">
            <h4>One year Target Course</h4>
            <p>(11th to 12th Moving Students)</p>
            <h5>About the course</h5>
            <p>This Test Series is for students who wants to prepare for NEET while studying in 12<sup>th</sup> class.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">TEST SERIES FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 12<sup>th</sup>.</p>
            </div>
            <div>

              <h5>Test Validity</h5>
              <p>One Year</p>
            </div>
            <div>

              <h5>Mode of Test</h5>
              <p>Offline/Pen Paper Test</p>
            </div>
            <div>

              <h5>Test Format</h5>
              <p>Chapterwise/ Partwise/ Minor/ Full</p>
            </div>
            <div>

              <h5>Targeted Exams & Year</h5>
              <p>Board Exams & CUET</p>
            </div>
            <div>

              <h5>Test Fee</h5>
              <p>₹ 1,00,000</p>
            </div>
          </div>
        </div>

      </section>
      <!-- End Single Item -->
    </div>
  </div>


  <!--End Description   =============================================-->

  <!--Start Apply Form   =============================================-->
  <?php include "./apply-course-form.php" ?>
  <!--End Apply Form   =============================================-->

  <!--Start of Course Features   =============================================-->
  <?php include "./course-features-normal.php" ?>
  <!--End of Course Features   =============================================-->


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