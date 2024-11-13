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
          <h1> Classroom > 9<sup>th</sup> School Exams </h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Admission</a></li>
            <li><a href="#">Classroom</a></li>
            <li class="active">9<sup>th</sup> School Exams </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->

  <!-- Start Banner 
    ============================================= -->

  <!-- courses offered======== -->
  <div class=" default-padding-per  courses-offer ">
    <div class="inner-container" style="padding-bottom: 0px !important;">

      <!-- <h2 class="headings">9<sup>th</sup> Offline Course for School Exams</h2> -->
    </div>
    <div class="course-holder">

      <!-- Single Item -->
      <section class="cards " style="padding-top: 30px;">
        <div class="inner-container">

          <div class="upper-part">

            <h4>ONE YEAR COURSE FOR SCHOOL EXAMS</h4>

            <h5>9th CLASS OFFLINE BATCH</h5>
            <p style="margin-top:px;">(8<sup>th</sup> to 9<sup>th</sup> Moving Students)</p>


            <h5>About the course</h5>
            <p>
              Class 9<sup>th</sup> syllabus lays a solid foundation for the Class 10th board exams. Preparing for school exams requires both objective and subjective skills. Mastering subjective exams involves specific writing skills, needing extra preparation.</p>

          </div>
          <div class="lower-part">
            <div>

              <h5>Subject Covers</h5>
              <p> Maths, Science (Phy, Chem, Bio), SST, English</p>
            </div>
            <div>

              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 9<sup>th</sup></p>
            </div>
            <div>

              <h5>Course Duration</h5>
              <p> One Year</p>
            </div>
            <div>

              <h5>Eligibility</h5>
              <p>8<sup>th</sup> pass</p>
            </div>
            <div>

              <h5>Course Fee</h5>
              <p>₹ 18,000</p>
            </div>
          </div>
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