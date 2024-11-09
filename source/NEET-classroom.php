<?php require_once "./assets/db/config_session.inc.php"; ?>
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
          <h1>Classroom > NEET</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Admission</a></li>
            <li><a href="#">Classroom</a></li>
            <li class="active">NEET</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->


  <!-- Start of scroll cards=============== -->
  <div class="default-padding default-padding-per cards-with-scroll" style="margin-top: 70px;">
    <section>
      <div>
        <svg fill="#F97510" width="60px" height="60px" viewBox="0 0 52 52" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
          <path d="M26,52A26,26,0,0,1,22.88.19,25.78,25.78,0,0,1,34.73,1.5a2,2,0,1,1-1.35,3.77,22,22,0,0,0-21,38,22,22,0,0,0,35.41-20,2,2,0,1,1,4-.48A26,26,0,0,1,26,52Z" />
          <path d="M26,43.86a2,2,0,0,1-2-2V22.66a2,2,0,1,1,4,0v19.2A2,2,0,0,1,26,43.86Z" />
          <circle cx="26" cy="15.71" r="2.57" />
        </svg>
        <h4>
          Two Year Course for 11<sup>th</sup> Class Students
        </h4>
      </div>
      <p>This course is for students wanting to prepare for competitive exams while studying in 11<sup>th</sup> class.</p>
      <span>
        <a href="#11class">more details</a>
        <i class="fa-solid fa-chevron-right"></i>
      </span>
    </section>
    <section>
      <div>
        <svg fill="#F97510" width="60px" height="60px" viewBox="0 0 52 52" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
          <path d="M26,52A26,26,0,0,1,22.88.19,25.78,25.78,0,0,1,34.73,1.5a2,2,0,1,1-1.35,3.77,22,22,0,0,0-21,38,22,22,0,0,0,35.41-20,2,2,0,1,1,4-.48A26,26,0,0,1,26,52Z" />
          <path d="M26,43.86a2,2,0,0,1-2-2V22.66a2,2,0,1,1,4,0v19.2A2,2,0,0,1,26,43.86Z" />
          <circle cx="26" cy="15.71" r="2.57" />
        </svg>
        <h4>
          One Year Course for 12<sup>th</sup> Class Students
        </h4>
      </div>
      <p>This course is for students studying in 12<sup>th</sup> class and wants to prepare for competitive exams. It covers entire 11 and 12 class syllabus.</p>
      <span>
        <a href="#12class">more details</a>
        <i class="fa-solid fa-chevron-right"></i>
      </span>
    </section>
    <section>
      <div>
        <svg fill="#F97510" width="60px" height="60px" viewBox="0 0 52 52" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
          <path d="M26,52A26,26,0,0,1,22.88.19,25.78,25.78,0,0,1,34.73,1.5a2,2,0,1,1-1.35,3.77,22,22,0,0,0-21,38,22,22,0,0,0,35.41-20,2,2,0,1,1,4-.48A26,26,0,0,1,26,52Z" />
          <path d="M26,43.86a2,2,0,0,1-2-2V22.66a2,2,0,1,1,4,0v19.2A2,2,0,0,1,26,43.86Z" />
          <circle cx="26" cy="15.71" r="2.57" />
        </svg>

        <h4>
          One Year course for 12<sup>th</sup> pass students
        </h4>
      </div>
      <p>A course designed for those who wants to take a gap of a year to prepare for competitive exams.</p>
      <span>
        <a href="#dropper">more details</a>
        <i class="fa-solid fa-chevron-right"></i>
      </span>
    </section>
    <section>
      <div>
        <svg fill="#F97510" width="60px" height="60px" viewBox="0 0 52 52" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
          <path d="M26,52A26,26,0,0,1,22.88.19,25.78,25.78,0,0,1,34.73,1.5a2,2,0,1,1-1.35,3.77,22,22,0,0,0-21,38,22,22,0,0,0,35.41-20,2,2,0,1,1,4-.48A26,26,0,0,1,26,52Z" />
          <path d="M26,43.86a2,2,0,0,1-2-2V22.66a2,2,0,1,1,4,0v19.2A2,2,0,0,1,26,43.86Z" />
          <circle cx="26" cy="15.71" r="2.57" />
        </svg>
        <h4>
          Dropper Plus Batch for Second Time Droppers
        </h4>
      </div>
      <p>Dropping another year after already spending one year for exams is a risky decision but we at AREESE are prepared to constantly motivate our students and achieve great results.</p>

      <!--  By providing proper amenities to the students we ensure that the student can properly focus on his/her education. -->
      <span>
        <a href="#dropperPlus">more details</a>
        <i class="fa-solid fa-chevron-right"></i>
      </span>
    </section>
  </div>


  <!-- end of scroll cards=============== -->



  <!--Start Description   =============================================-->
  <div class=" default-padding-per  courses-offer">
    <div class="inner-container">
      <h2 class="headings"> Courses We Offer</h2>
      <p class="main-des">
        AREESE offers a diverse range of tailored courses designed to meet each student's unique needs. This personalized approach ensures focused, goal-oriented learning, helping students sharpen their skills and significantly boost their performance. By providing specialized attention, AREESE empowers students to excel in their academic journey and achieve their full potential
      </p>
    </div>
    <div class="course-holder">

      <!-- Single Item -->
      <section class="cards left" id="11class">
        <div class="inner-container">
          <div class="upper-part">
            <h4>Two year Target Course</h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the course</h5>
            <p>Our Two-Year Programme covers the entire syllabus of class 11th and 12th according to latest syllabus of NEET, CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET.</p>
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

              <h5>Course Fee</h5>
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
            <p>Our One-Year Programme covers the entire syllabus of class 12th according to latest syllabus of NEET, CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET.</p>
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
              <h5>Course Fee</h5>
              <p>₹ 50,000</p>
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
            <p style="margin-top:-15px;">(12th Pass Students)</p>
            <h5>About the course</h5>
            <p>Our one-year course for class 12th pass thoroughly covers the syllabus for NEET We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET and to lend you a helping hand and guide you to clear NEET with very good rank.</p>
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
              <h5>Course Fee</h5>
              <p>₹ 65,000</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Single Item -->
      <!-- Single Item -->
      <section class="cards " id="dropperPlus">
        <div class="inner-container">

          <div class="upper-part">
            <h4>Dropper Plus</h4>
            <p>ONE YEAR TARGET COURSE</p>
            <p style="margin-top:-15px;">(12th Pass Students)</p>
            <h5>About the course</h5>
            <p>Our One year course is designed for Ex-AREESE students or those who have qualified for NEET, our one-year course is designed to elevate your Rank to next level and helping you achieve what you aspire.</p>
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
              <p>Ex-AREESE students or those who have qualified for NEET</p>
            </div>
            <div>
              <h5>Selection Procedure</h5>
              <p>Direct</p>
            </div>
            <div>
              <h5>Course Fee</h5>
              <p>₹ 65,000</p>
            </div>
          </div>
        </div>

      </section>

      <!-- End Single Item -->
    </div>
  </div>


  <!--End Description   =============================================-->

  <!--Start of Course Features   =============================================-->
  <div class="default-padding default-padding-per course-features ">
    <div class="inner-container">
      <h2 class="headings">
        Course Features
      </h2>
      <p class="main-des">At AREESE our students get the benefit of variety of facilities with best faculty to best infrastructure. Our goal is to provide a suitable environment for the students enabling them to study more diligently and with proper discipline. Let's take a look on some of these features </p>
      <div class="card-holder ">
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #FACA4C;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/1.jpg" alt="image-icon">
          <h5>Experienced & Best faculty team</h5>
          <div class="description">
            <p>Our skilled and knowledgeable faculty is committed, diligent, and driven by a passion for your success.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #FE4229;">
          <div class=" img-back">
          </div>
          <img src="./assets/img/classroom-png/2.jpg" alt="image-icon">
          <h5>Best Faculty Team for all students</h5>
          <div class="description">
            <p>Best Faculty Team for all students
              Every student has access to the best faculty, regardless of their previous performance.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #559DFF;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/3.jpg" alt="image-icon">
          <h5>Ultimate Personal Care</h5>
          <div class="description">
            <p>
              Each student receives personalized attention, ensuring you're never just another face in the crowd but a truly valued individual, who matters.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #7A49A2;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/4.jpg" alt="image-icon">
          <h5>Result-oriented Teaching Methodology</h5>
          <div class="description">
            <p>
              Engaging and interactive classes designed with a scientific, result-driven teaching methodology to maximize learning and outcomes.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #567AFF;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/5.jpg" alt="image-icon">
          <h5>Relevant Learning Study Material</h5>
          <div class="description">
            <p>
              Comprehensive, thoroughly researched, and highly relevant learning materials to support effective student learning.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #559DFF;">
          <div class=" img-back">
          </div>
          <img src="./assets/img/classroom-png/6.jpg" alt="image-icon">
          <h5>Regular Test Series & Performance Analysis</h5>
          <div class="description">
            <p>
              Daily progress tracking, regular assessments, performance analysis, and feedback for continuous improvement.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5.2px;border-bottom: 2px solid #EF9F4A;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/7.jpg" alt="image-icon">
          <h5>best Infrastructure</h5>
          <div class="description">
            <p>
              State-of-the-art infrastructure with all the necessary facilities, providing an ideal environment for focused and effective learning experiences.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5.9px;border-bottom: 2px solid #7E4BAA;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/8.jpg" alt="image-icon">
          <h5>Excellent Academic Control</h5>
          <div class="description">
            <p>
              Academic oversight guarantees timely course completion while maintaining the highest standards of teaching quality and educational excellence.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5px;border-bottom: 2px solid #568BFF;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/9.jpg" alt="image-icon">
          <h5>Best Results & Reputation</h5>
          <div class="description">
            <p>
              A proven track record of success spanning over 10 years, highlighting our commitment to excellence in education and student achievement.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 15px;border-bottom: 2px solid #DEA615;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/10.jpg" alt="image-icon">
          <h5>Content Research & Development Team</h5>
          <div class="description">
            <p>
              An Educational Research and Content Development Center monitors exam patterns to ensure you're ready for the latest trends.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 15px;border-bottom: 2px solid #D58D38;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/11.jpg" alt="image-icon">
          <h5>Recorded video lectures & CBT Test</h5>
          <div class="description">
            <p>
              Our institute offers recorded video lectures for flexible learning and Computer-Based Tests (CBT) to enhance readiness.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #653589;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/12.jpg" alt="image-icon">
          <h5>Great student life</h5>
          <div class="description">
            <p>
              A competitive, motivating, and supportive environment is designed to foster student success, personal growth, and a sense of achievement.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #FE4229;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/13.jpg" alt="image-icon">
          <h5>Full Academic Support</h5>
          <div class="description">
            <p>Comprehensive academic support available outside of class through regular problem-solving sessions, knowledge labs, individual counseling, and seminars.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5px;border-bottom: 2px solid #7A49A2;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/14.jpg" alt="image-icon">
          <h5>Residential Facility</h5>
          <div class="description">
            <p>
              Our coaching institute offers a well-equipped residential facility with mess services, providing students with a comfortable and focused learning environment.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom:4px ;border-bottom: 2px solid #EF901E;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/15.jpg" alt="image-icon">
          <h5>Board Excel Program</h5>
          <div class="description">
            <p>
              Our Board Excel Program offers specialized guidance tailored to each student's respective board, ensuring focused and effective preparation.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #8D8D8D;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/16.jpg" alt="image-icon">
          <h5>13-Hour Self Study Program</h5>
          <div class="description">
            <p>
              A unique, intensive program designed to maximize productivity and enhance learning outcomes for participants, ensuring a transformative experience.
            </p>
          </div>
        </article>
        <!-- single Item -->


      </div>

    </div>


  </div>
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