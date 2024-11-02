<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include './links.php';
  ?>
  <link rel="stylesheet" href="./assets/css/residential-batches.css">
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
          <h1>Classroom > 11<sup>th</sup> Commerce</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Admission</a></li>
            <li><a href="#">Classroom</a></li>
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
  <div class="about-residential default-padding default-padding-per courses-offer-super30 ">
    <h2>11<sup>th</sup> Offline Course for School Exams</h2>
    <div style="" class="inner-container ">
      <!-- Single Item -->
      <section class="cards card-foundation" style="  ">
        <div class="upper-part">

          <h4>ONE YEAR COURSE FOR SCHOOL EXAMS</h4>

          <h5 style="margin-bottom:10px">11TH CLASS OFFLINE BATCH COMMERCE STREAM</h5>
          <p style="margin-top:px;">(10<sup>th</sup> to 11<sup>th</sup> Moving Students)</p>


          <h5>About the course</h5>
          <p>
            Class 11<sup>th</sup> syllabus lays a solid foundation for the Class 12th board exams. Preparing for school exams requires both objective and subjective skills. Mastering subjective exams involves specific writing skills, needing extra preparation.</p>

          <h5>Subject Covers</h5>
          <p>Accounts, Eco, BST, Maths</p>
          <h5>Syllabus Covers</h5>
          <p>Entire Syllabus of class 11<sup>th</sup></p>
          <h5>Course Duration</h5>
          <p> One Year</p>
          <h5>Eligibility</h5>
          <p>10<sup>th</sup> pass</p>
          <h5>Course Fee</h5>
          <p>₹ 30,000</p>
        </div>
      </section>
      <!-- Single Item -->

    </div>

  </div>

  <!-- End Banner -->



  <!-- Start Footer 
    ============================================= -->
  <?php include 'footer_dark.php' ?>
  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>
  <script src="assets/js/teachers.js" type="module"></script>
  <script src="assets/js/enquiry.js"></script>


</body>

</html>