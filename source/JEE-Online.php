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
          <h1>Online Classes > JEE</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Courses</a></li>
            <li><a href="#">Online Classes</a></li>
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
        11
      </div>
      <div>
        <h4>
          Two Year Course for 11<sup>th</sup> Class Students
        </h4>
        <button style="width:140px">ONLINE COURSE</button>

        <p>This course is for students wanting to prepare for JEEwhile studying in 11<sup>th</sup> class.</p>
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
          One Year Course for 12<sup>th</sup> Class Students
        </h4>
        <button style="width:140px">ONLINE COURSE</button>

        <p>This course is for students studying in 12<sup>th</sup> class and wants to prepare for competitive exams. It covers entire 11 and 12 class syllabus.</p>
        <span>
          <a href="#12class">more details</a>
        </span>
      </div>
    </section>
    <section>
      <div class="colored-div">
        12 <span>PASS</span>
      </div>
      <div>
        <h4>Dropper Batch</h4>
        <h5>
          One Year Target course for 12<sup>th</sup> pass students
        </h5>
        <button style="width:140px">ONLINE COURSE</button>

        <p>A course designed for those who wants to take a drop of a year to prepare for competitive exams.</p>
        <span>
          <a href="#dropper">more details</a>
        </span>
      </div>
    </section>
    <section>
      <div class="colored-div">
        12 <span>PASS</span>
      </div>
      <div>
        <h4>DROPPER PLUS</h4>
        <h5>
          Dropper Plus Batch for Second Time Droppers
        </h5>
        <button style="width:140px">ONLINE COURSE</button>

        <p>Dropping another year after already spending one year for exams is a risky decision but we at AREESE are prepared to constantly motivate our students and achieve great results.</p>

        <!--  By providing proper amenities to the students we ensure that the student can properly focus on his/her education. -->
        <span>
          <a href="#dropperPlus">more details</a>
        </span>
      </div>
    </section>
  </div>


  <!-- end of scroll cards=============== -->

  <!--Start Description   =============================================-->
  <div class=" default-padding-per courses-offer">
    <div class="inner-container">
      <h2 class="headings">Courses We Offer</h2>
      <p class="main-des">
        AREESE offers a diverse range of tailored courses designed to meet each student's unique needs. This personalized approach ensures focused, goal-oriented learning, helping students sharpen their skills and significantly boost their performance. By providing specialized attention, AREESE empowers students to excel in their academic journey and achieve their full potential.
      </p>
    </div>

    <div class="course-holder">

      <section class="cards left" id="11class">
        <div class="inner-container">

          <div class="upper-part">
            <h4>Two year Target Course</h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the course</h5>
            <p>Our Two-Year Programme covers the entire syllabus of class 11th and 12th according to latest syllabus of JEE (Main & Advanced), CBSE, and State Boards. It builds a solid foundation for
              these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for JEE.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">COURSE FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            </div>
            <div>
              <h5>Course Duration</h5>
              <p>Two Years</p>
            </div>
            <div>
              <h5>Eligibility</h5>
              <p>10<sup>th</sup> pass</p>
            </div>
            <div>

              <h5>Selection Procedure</h5>
              <p>Direct/AREESE Scholarship Test</p>
            </div>
            <div>

              <h5>Targeted Exams</h5>
              <p>JEE, Board Exams & CUET</p>
            </div>
            <div>

              <h5>Course Fee</h5>
              <p>₹ 4,999</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Single Item -->
      <!-- Single Item -->
      <section class="cards" id="12class">
        <div class="inner-container">

          <div class="upper-part">
            <h4>One year Target Course</h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the course</h5>
            <p>Our One-Year Programme covers the entire syllabus of class 12th according to latest syllabus of JEE, CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for JEE.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">COURSE FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 12<sup>th</sup>.</p>
            </div>
            <div>
              <h5>Course Duration</h5>
              <p>One Year</p>
            </div>
            <div>
              <h5>Eligibility</h5>
              <p>11<sup>th</sup> pass</p>
            </div>
            <div>
              <h5>Selection Procedure</h5>
              <p>Direct/AREESE Scholarship Test</p>
            </div>
            <div>

              <h5>Targeted Exams</h5>
              <p>JEE, Board Exams & CUET</p>
            </div>
            <div>
              <h5>Course Fee</h5>
              <p>₹ 6,999</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Single Item -->
      <!-- Single Item -->
      <section class="cards left" id="dropper">
        <div class="inner-container">

          <div class="upper-part">
            <h4>Dropper Batch</h4>
            <p>ONE YEAR TARGET COURSE</p>
            <p>(12th Pass Students)</p>
            <h5>About the course</h5>
            <p>Our one-year course for class 12th passed
              thoroughly covers the syllabus for JEE (Main & Advanced). We train students to think analytically and adopt a systematic approach to problem-solving, essential for JEE and to lend you a helping hand and guide you to clear JEE with very good rank.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">COURSE FEATURES</a></button>
          </div>
          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            </div>
            <div>

              <h5>Course Duration</h5>
              <p>One Year</p>
            </div>
            <div>

              <h5>Eligibility</h5>
              <p>12<sup>th</sup> pass</p>
            </div>
            <div>
              <h5>Selection Procedure</h5>
              <p>Direct/AREESE Scholarship Test</p>
            </div>
            <div>

              <h5>Targeted Exams</h5>
              <p>JEE, Board Exams & CUET</p>
            </div>
            <div>

              <h5>Course Fee</h5>
              <p>₹ 8,999</p>
            </div>
          </div>
        </div>
      </section>

      <!-- End Single Item -->
      <!-- Single Item -->
      <section class="cards" id="dropperPlus">
        <div class="inner-container">
          <div class="upper-part">
            <h4>Dropper Plus</h4>
            <p>ONE YEAR TARGET COURSE</p>
            <p>(12th Pass Students)</p>
            <h5>About the course</h5>
            <p>Our One year course is designed for Ex-AREESE students or those who have qualified for JEE (Main)/JEE (Advanced), our one-year course is designed to elevate your Rank to next level.</p>
            <!-- Enquiry form popup -->
            <button><a class="popup-with-form" href="#apply-course-form">ENROLL NOW</a></button>
            <button><a href="#course-features">COURSE FEATURES</a></button>
          </div>

          <div class="lower-part">
            <div>
              <h5>Syllabus Covers</h5>
              <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            </div>
            <div>
              <h5>Course Duration</h5>
              <p>One Year</p>
            </div>
            <div>
              <h5>Eligibility</h5>
              <p>Ex-AREESE students or those who have qualified for JEE (Main)/JEE (Advanced),</p>
            </div>
            <div>
              <h5>Selection Procedure</h5>
              <p>Direct</p>
            </div>
            <div>
              <h5>Targeted Exams</h5>
              <p>JEE, Board Exams & CUET</p>
            </div>
            <div>
              <h5>Course Fee</h5>
              <p>₹ 9,999</p>
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