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
          <h1>Classroom > 9<sup>th</sup> Foundation </h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Admission</a></li>
            <li><a href="#">Classroom</a></li>
            <li class="active">9<sup>th</sup> Foundation </li>
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
    <h2>9<sup>th</sup> Foundation Course</h2>
    <div style="" class="inner-container ">
      <!-- Single Item -->
      <section class="cards card-foundation" style="  ">
        <div class="upper-part">

          <h4>ONE YEAR FOUNDATION COURSE</h4>

          <h5 style="margin-bottom:10px">9th CLASS OFFLINE BATCH</h5>
          <p style="margin-top:px;">(8<sup>th</sup> to 9<sup>th</sup> Moving Students)</p>


          <h5>About the course</h5>
          <p>
            Our one-year Course for class 9<sup>th</sup> comprehensively lays a strong foundation for higher-level scholastic and competitive exams like NEET, JEE, NTSE, NJSE/JSO, Pre-RMO, RMO, as well as School Exams. This program sharpens analytical skills and mental ability, evolving the thinking process to make students capable of solving complex questions.</p>

          <h5>Subject Covers</h5>
          <p> Maths, Science (Phy, Chem, Bio), SST, English</p>
          <h5>Syllabus Covers</h5>
          <p>Entire Syllabus of class 9<sup>th</sup></p>
          <h5>Course Duration</h5>
          <p> One Year</p>
          <h5>Eligibility</h5>
          <p>8<sup>th</sup> pass</p>
          <h5>Selection Procedure</h5>
          <p>Direct/Scholarship</p>
          <h5>Course Fee</h5>
          <p>₹ 20,000</p>
        </div>
      </section>
      <!-- Single Item -->
      <!-- Single Item -->
      <!-- <section class="cards" style="  ">
        <div class="upper-part">
          <h4>One YEAR TARGET COURSE</h4>
          <h5>DROPPER BATCH</h5>

          <p style="margin-top:-10px;">(12<sup>th</sup> Pass Students)</p>

          <p>इस प्रोग्राम के माध्यम से AREESE Gurukulam आपको एक साल के लिए निःशुल्क रहना, खाना और कोचिंग की सुविधा प्रदान की जायेगी।</p>

          <h5>About the course</h5>
          <p>Our one-year course for class 12<sup>th</sup> passed thoroughly covers the syllabus for NEET/JEE (Main & Advanced). We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET/JEE and to lend you a helping hand and guide you to clear NEET/JEE with a very good rank.</p>

          <h5>Syllabus Covers</h5>
          <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
          <h5>Course Duration</h5>
          <p> One Year</p>
          <h5>Eligibility</h5>
          <p>12<sup>th</sup> pass</p>
          <h5>Family Income</h5>
          <p>Less than 3 Lacs per annum (Background Verification by Vigilance team)</p>
          <h5>Selection Procedure</h5>

          <p>
          <ol style="list-style: decimal;list-style-position: inside;">
            <li><strong style="color:#002147">
                Written test:
              </strong></li>
            <p>MCQ with Negative Marking (+4) and (-1) </p>
            <p>
              <span style="color: #f58026;">Subject:</span> Aptitude, Phy, Chem, Maths & Bio, according to respective NEET & JEE Courses.
            </p>
            <li><strong style="color:#002147">
                Personal Interview:
              </strong></li>
            <p>Shortlisted students from the written test will have to appear in an Interview.</p>
          </ol>
          </p>
        </div>
      </section> -->
      <!-- Single Item -->
    </div>

  </div>

  <!-- End Banner -->



  <!-- Start Footer 
    ============================================= -->
  <?php include 'footer_light.php' ?>
  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>
  <script src="assets/js/teachers.js" type="module"></script>
  <script src="assets/js/enquiry.js"></script>


</body>

</html>