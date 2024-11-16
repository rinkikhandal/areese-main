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
          <h1>Test Series > JEE > 11<sup>th</sup> Class</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Courses</a></li>
            <li><a href="#">Test Series</a></li>
            <li class="active">JEE</li>
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
        <div style="text-orientation: upright;  writing-mode: vertical-rl;font-size: 4rem;">
          JEE </div>
        <span style="text-orientation: upright;  writing-mode: horizontal-tb">(Main)</span>
      </div>
      <div>
        <h4>
          JEE (MAIN)
        </h4>
        <button>ONLINE / OFFLINE / POSTAL</button>
        <p>The All India Test Series (AITS) is a comprehensive mock exam series designed for 11<sup>th</sup> class students preparing for JEE (Main).</p>
        <span>
          <a href="#11class">more details</a>
        </span>
        <span><a class="popup-with-form" href="#apply-course-form">Enroll Now</a></span>
      </div>
    </section>
    <section>
      <div class="colored-div">
        <div style="text-orientation: upright;  writing-mode: vertical-rl;font-size: 4rem;">
          JEE </div>
        <span style="text-orientation: upright;  writing-mode: horizontal-tb">(Adv.)</span>
      </div>
      <div>
        <h4>
          JEE (ADVANCE)
        </h4>
        <button>ONLINE / OFFLINE / POSTAL</button>
        <p> The All India Test Series (AITS) is a comprehensive mock exam series designed for 11<sup>th</sup> class students preparing for JEE (Advanced).</p>
        <span>
          <a href="#12class">more details</a>
        </span>
        <span><a class="popup-with-form" href="#apply-course-form">Enroll Now</a></span>
      </div>
    </section>
    <section>
      <div class="colored-div">
        <div style="text-orientation: upright;  writing-mode: vertical-rl;font-size: 4rem;">
          JEE </div>
        <span style="text-orientation: upright;  writing-mode: horizontal-tb">(M + A)</span>
      </div>
      <div>
        <h4>
          JEE (MAIN + ADVANCE)
        </h4>
        <button>ONLINE / OFFLINE / POSTAL</button>
        <p>The All India Test Series (AITS) is a comprehensive mock exam series designed for 11<sup>th</sup> class students preparing for JEE (Main + Advanced). </p>
        <span>
          <a href="#dropper">more details</a>
        </span>
        <span><a class="popup-with-form" href="#apply-course-form">Enroll Now</a></span>
      </div>
    </section>
    <section>
      <div class="colored-div" style="text-orientation: upright;  writing-mode: vertical-rl; line-height:0 !important;font-size: 3.5rem;">
        BITSAT
      </div>
      <div>
        <h4>
          BITSAT
        </h4>
        <button>ONLINE / OFFLINE / POSTAL</button>
        <p>The All India Test Series (AITS) is a comprehensive mock exam series designed for 11<sup>th</sup> class students preparing for BITSAT.</p>

        <!--  By providing proper amenities to the students we ensure that the student can properly focus on his/her education. -->
        <span>
          <a href="#dropperPlus">more details</a>
        </span>
        <span><a class="popup-with-form" href="#apply-course-form">Enroll Now</a></span>
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
            <h4>Two year Test Series(Main) </h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the Series</h5>
            <p>This Test Series is for students who wants to prepare for JEE(main).</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">TEST SERIES FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>

              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup> class.</p>
            </div>
            <div>

              <h5>Test Validity</h5>
              <p>Two Year</p>
            </div>
            <div>

              <h5>Mode of Test</h5>
              <p>Online</p>
            </div>
            <div>

              <h5>Test Format</h5>
              <p>Chapterwise/ Partwise/ Minor/ Full</p>
            </div>
            <div>

              <h5>Targeted Exams & Year</h5>
              <p>JEE(Main) & CUET</p>
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
            <h4>Two year Test Series(Advance) </h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the Test Series</h5>
            <p>This Test Series is for students who wants to prepare for JEE(advance).</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">TEST SERIES FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup> .</p>
            </div>
            <div>

              <h5>Test Validity</h5>
              <p>Two Year</p>
            </div>
            <div>

              <h5>Mode of Test</h5>
              <p>Online</p>
            </div>
            <div>

              <h5>Test Format</h5>
              <p>Chapterwise/ Partwise/ Minor/ Full</p>
            </div>
            <div>

              <h5>Targeted Exams & Year</h5>
              <p>JEE(Advance) & CUET</p>
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
      <section class="cards left" id="dropper">
        <div class="inner-container">
          <div class="upper-part">
            <h4>Two year Test Series(Main + Advance)</h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the Test Series</h5>
            <p>This Test Series is for students who wants to prepare for JEE(Main + Advance).</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">TEST SERIES FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup> class.</p>
            </div>
            <div>

              <h5>Test Validity</h5>
              <p>Two Year</p>
            </div>
            <div>

              <h5>Mode of Test</h5>
              <p>Online</p>
            </div>
            <div>

              <h5>Test Format</h5>
              <p>Chapterwise/ Partwise/ Minor/ Full</p>
            </div>
            <div>

              <h5>Targeted Exams & Year</h5>
              <p>JEE(Main + Advance) & CUET</p>
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
      <section class="cards " id="dropperPlus">
        <div class="inner-container">

          <div class="upper-part">
            <h4>Two year Test Series(BITSAT)</h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the Test Series</h5>
            <p>This Test Series is for students who wants to prepare for BITSAT.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">TEST SERIES FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup> class.</p>
            </div>
            <div>

              <h5>Test Validity</h5>
              <p>Two Year</p>
            </div>
            <div>

              <h5>Mode of Test</h5>
              <p>Online</p>
            </div>
            <div>

              <h5>Test Format</h5>
              <p>Chapterwise/ Partwise/ Minor/ Full</p>
            </div>
            <div>

              <h5>Targeted Exams & Year</h5>
              <p>BITSAT & CUET</p>
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
  <?php include "./Test-series-features.php" ?>
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