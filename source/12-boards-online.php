<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include './links.php';
  ?>
  <link rel="stylesheet" href="./assets/css/classroom.css">
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
          <h1>Online Classes > 12<sup>th</sup> Board Exam </h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Admission</a></li>
            <li><a href="#">Online Classes</a></li>
            <li class="active">12<sup>th</sup> Board Exam</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->

  <!-- Start Banner 
    ============================================= -->

  <!-- courses offered======== -->
  <div class=" default-padding-per courses-offer ">
    <div class="inner-container " style="padding-bottom: 0px !important;">
      <!-- <h2 class="headings">12<sup>th</sup> Online Course for School Exams</h2> -->
      <!-- Single Item -->
    </div>
    <div class="course-holder">

      <section class="cards " style="padding-top: 30px;">
        <div class="inner-container">

          <div class="upper-part">

            <h4>ONE YEAR FOUNDATION COURSE</h4>

            <h5>12th CLASS ONLINE BATCH</h5>
            <p style="margin-top:px;">(11<sup>th</sup> to 12<sup>th</sup> Moving Students)</p>


            <h5>About the course</h5>
            <p>
              Class 12<sup>th</sup> CBSE Board Exams are considered very
              important in career. Board exams require preparation for both objective and subjective sections. Mastering subjective exams needs specific writing skills, so extra preparation is necessary.</p>
            <!-- Enquiry form popup -->
            <button><a href="#">ENROLL NOW</a></button>
            <button><a href="#course-features">COURSE FEATURES</a></button>

          </div>
          <div class="lower-part">
            <div>
              <h5>Subject Covers</h5>
              <p> Phy, Chem, Bio, Maths</p>
            </div>
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 12<sup>th</sup></p>
            </div>
            <div>
              <h5>Course Duration</h5>
              <p> One Year</p>
            </div>
            <div>
              <h5>Eligibility</h5>
              <p>11<sup>th</sup> pass</p>
            </div>
            <div>
              <h5>Selection Procedure</h5>
              <p>Direct/Scholarship</p>
            </div>
            <div>
              <h5>Targeted Exams</h5>
              <p>Board Exams, CUET</p>
            </div>
            <div style="grid-column-start: 1;grid-column-end: 3;">
              <h5>Course Fee</h5>
              <p>₹ 3,999</p>
            </div>





          </div>
        </div>
      </section>
      <!-- Single Item -->

    </div>

  </div>

  <!-- End Banner -->

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
  <script src="assets/js/teachers.js" type="module"></script>
  <script src="assets/js/enquiry.js"></script>
  <script src="./assets/js/cards-scroll.js"></script>


</body>

</html>