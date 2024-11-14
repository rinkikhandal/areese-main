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
          <h1>Online Classes > 11<sup>th</sup> Commerce</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Admission</a></li>
            <li><a href="#">Online Classes</a></li>
            <li class="active">11<sup>th</sup> School Exams </li>
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
      <!-- <h2 class="headings">11<sup>th</sup> Online Course for School Exams</h2> -->
      <!-- Single Item -->
    </div>
    <div class="courses-holder">

      <section class="cards " style="padding-top: 30px;">
        <div class="inner-container">

          <div class="upper-part">

            <h4>ONE YEAR COURSE FOR SCHOOL EXAMS</h4>

            <h5 style="margin-bottom:10px">11TH CLASS ONLINE BATCH COMMERCE STREAM</h5>
            <p style="margin-top:px;">(10<sup>th</sup> to 11<sup>th</sup> Moving Students)</p>
            <h5>About the course</h5>
            <p>
              Class 11<sup>th</sup> syllabus lays a solid foundation for the Class 12th board exams. Preparing for school exams requires both objective and subjective skills. Mastering subjective exams involves specific writing skills, needing extra preparation.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">COURSE FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Subject Covers</h5>
              <p>Accounts, Eco, BST, Maths</p>
            </div>
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup></p>
            </div>
            <div>
              <h5>Course Duration</h5>
              <p> One Year</p>
            </div>
            <div>
              <h5>Eligibility</h5>
              <p>10<sup>th</sup> pass</p>
            </div>
            <div>
              <h5>Targeted Exams</h5>
              <p>School Exams, CUET</p>
            </div>
            <div>
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
  <script src="assets/js/teachers.js" type="module"></script>
  <script src="assets/js/enquiry.js"></script>
  <script src="./assets/js/cards-scroll.js"></script>



</body>

</html>