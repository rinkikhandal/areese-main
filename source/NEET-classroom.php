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

  <!--Start Description   =============================================-->
  <div class="default-padding default-padding-per courses-offer">
    <div class="inner-container">
      <h2 style="margin-bottom:20px">
        Courses We Offer
      </h2>
      <p style="text-align: center; max-width: 90%; margin:0 auto 50px;">
        AREESE offers a diverse range of tailored courses designed to meet each student's unique needs. This personalized approach ensures focused, goal-oriented learning, helping students sharpen their skills and significantly boost their performance. By providing specialized attention, AREESE empowers students to excel in their academic journey and achieve their full potential
      </p>
      <div class="card-holder">


        <!-- cards -->

        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#606c38;">
            <h4>Two year Target Course</h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the course</h5>
            <p>Our Two-Year Programme covers the entire syllabus of class 11th and 12th according to latest syllabus of JEE (Main & Advanced), BITSAT, VITEEE, CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for JEE.</p>
          </div>
          <div class="middle-part">
            <div class="middle-inner">
              <div class="middle-inner-2">

                <svg width="50px" height="50px" viewBox="0 0 48 48" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <style type="text/css">
                    .st0 {
                      fill: #010101;
                    }
                  </style>
                  <path class="st0" d="M14.302,41.5h19.385c1.551,0,2.813-1.262,2.813-2.813V34.37c0-4.822-3.654-8.77-8.38-9.197v-3.964  c2.291-1.412,3.71-3.917,3.71-6.628V11.5h0.67c0.276,0,0.5-0.224,0.5-0.5V7.585h2.5v2.625c0,0.276,0.224,0.5,0.5,0.5  s0.5-0.224,0.5-0.5V7.085c0-0.276-0.224-0.5-0.5-0.5h-3.5h-17H12c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h3V11  c0,0.276,0.224,0.5,0.5,0.5h0.67v3.08c0,2.711,1.418,5.217,3.7,6.629v3.965c-4.735,0.436-8.38,4.381-8.38,9.197v4.317  C11.49,40.238,12.751,41.5,14.302,41.5z M25.732,25.12h-3.464H20.87v-3.377c0.98,0.432,2.045,0.667,3.13,0.667  c1.081,0,2.143-0.235,3.12-0.667v3.377H25.732z M25.098,26.12L24,30.692l-1.098-4.572H25.098z M16,7.585h16V10.5h-0.67H16.67H16  V7.585z M17.17,14.58V11.5h13.66v3.08c0,2.454-1.324,4.724-3.46,5.927c-2.045,1.185-4.712,1.181-6.753-0.002  C18.491,19.302,17.17,17.032,17.17,14.58z M12.49,34.37c0-4.44,3.47-8.06,7.921-8.242c0.107-0.009,0.221-0.009,0.329-0.008h1.134  l1.64,6.83c0.054,0.225,0.255,0.383,0.486,0.383s0.432-0.159,0.486-0.383l1.64-6.83h1.124c0.111,0.002,0.223,0,0.35,0.009  c4.43,0.181,7.9,3.8,7.9,8.241v4.317c0,1-0.813,1.813-1.813,1.813H14.302c-1,0-1.813-0.813-1.813-1.813V34.37z" />
                  <path class="st0" d="M16.083,33.81h4.287c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5h-4.287c-0.276,0-0.5,0.224-0.5,0.5  S15.807,33.81,16.083,33.81z" />
                </svg>
              </div>

            </div>

          </div>
          <div class="lower-part" style="background-color:#606c38 ;">
            <h5>Syllabus Covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>Two Years</p>
            <h5>Eligibility</h5>
            <p>10<sup>th</sup> pass</p>
            <h5>Selection Procedure</h5>
            <p>Direct/AREESE Scholarship Test</p>
            <h5>Course Fee</h5>
            <p>₹ 1,00,000</p>
          </div>
        </section>
        <!-- Single Item -->
        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#ef233c">
            <h4>One year Target Course</h4>
            <p>(10th to 11th Moving Students)</p>
            <h5>About the course</h5>
            <p>Our One-Year Programme covers the entire syllabus of class 12th according to latest syllabus of JEE/NEET, CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET/JEE.</p>
          </div>
          <div class="middle-part">
            <div class="middle-inner">
              <div class="middle-inner-2">

                <svg width="50px" height="50px" viewBox="0 0 48 48" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <style type="text/css">
                    .st0 {
                      fill: #010101;
                    }
                  </style>
                  <path class="st0" d="M14.302,41.5h19.385c1.551,0,2.813-1.262,2.813-2.813V34.37c0-4.822-3.654-8.77-8.38-9.197v-3.964  c2.291-1.412,3.71-3.917,3.71-6.628V11.5h0.67c0.276,0,0.5-0.224,0.5-0.5V7.585h2.5v2.625c0,0.276,0.224,0.5,0.5,0.5  s0.5-0.224,0.5-0.5V7.085c0-0.276-0.224-0.5-0.5-0.5h-3.5h-17H12c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h3V11  c0,0.276,0.224,0.5,0.5,0.5h0.67v3.08c0,2.711,1.418,5.217,3.7,6.629v3.965c-4.735,0.436-8.38,4.381-8.38,9.197v4.317  C11.49,40.238,12.751,41.5,14.302,41.5z M25.732,25.12h-3.464H20.87v-3.377c0.98,0.432,2.045,0.667,3.13,0.667  c1.081,0,2.143-0.235,3.12-0.667v3.377H25.732z M25.098,26.12L24,30.692l-1.098-4.572H25.098z M16,7.585h16V10.5h-0.67H16.67H16  V7.585z M17.17,14.58V11.5h13.66v3.08c0,2.454-1.324,4.724-3.46,5.927c-2.045,1.185-4.712,1.181-6.753-0.002  C18.491,19.302,17.17,17.032,17.17,14.58z M12.49,34.37c0-4.44,3.47-8.06,7.921-8.242c0.107-0.009,0.221-0.009,0.329-0.008h1.134  l1.64,6.83c0.054,0.225,0.255,0.383,0.486,0.383s0.432-0.159,0.486-0.383l1.64-6.83h1.124c0.111,0.002,0.223,0,0.35,0.009  c4.43,0.181,7.9,3.8,7.9,8.241v4.317c0,1-0.813,1.813-1.813,1.813H14.302c-1,0-1.813-0.813-1.813-1.813V34.37z" />
                  <path class="st0" d="M16.083,33.81h4.287c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5h-4.287c-0.276,0-0.5,0.224-0.5,0.5  S15.807,33.81,16.083,33.81z" />
                </svg>
              </div>

            </div>

          </div>
          <div class="lower-part" style="background-color:#ef233c">
            <h5>Syllabus Covers</h5>
            <p>Entire Syllabus of class 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>One Year</p>
            <h5>Eligibility</h5>
            <p>11<sup>th</sup> pass</p>
            <h5>Selection Procedure</h5>
            <p>Direct/AREESE Scholarship Test</p>
            <h5>Course Fee</h5>
            <p>₹ 50,000</p>
          </div>
        </section>
        <!-- Single Item -->

        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#b5838d">
            <h4>Dropper Batch</h4>
            <p>ONE YEAR TARGET COURSE</p>
            <p style="margin-top:-15px;">(12th Pass Students)</p>
            <h5>About the course</h5>
            <p>Our one-year course for class 12th pass thoroughly covers the syllabus for NEET/JEE (Main & Advanced). We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET/JEE and to lend you a helping hand and guide you to clear NEET/JEE with very good rank.</p>
          </div>
          <div class="middle-part">
            <div class="middle-inner">
              <div class="middle-inner-2">

                <svg width="50px" height="50px" viewBox="0 0 48 48" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <style type="text/css">
                    .st0 {
                      fill: #010101;
                    }
                  </style>
                  <path class="st0" d="M14.302,41.5h19.385c1.551,0,2.813-1.262,2.813-2.813V34.37c0-4.822-3.654-8.77-8.38-9.197v-3.964  c2.291-1.412,3.71-3.917,3.71-6.628V11.5h0.67c0.276,0,0.5-0.224,0.5-0.5V7.585h2.5v2.625c0,0.276,0.224,0.5,0.5,0.5  s0.5-0.224,0.5-0.5V7.085c0-0.276-0.224-0.5-0.5-0.5h-3.5h-17H12c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h3V11  c0,0.276,0.224,0.5,0.5,0.5h0.67v3.08c0,2.711,1.418,5.217,3.7,6.629v3.965c-4.735,0.436-8.38,4.381-8.38,9.197v4.317  C11.49,40.238,12.751,41.5,14.302,41.5z M25.732,25.12h-3.464H20.87v-3.377c0.98,0.432,2.045,0.667,3.13,0.667  c1.081,0,2.143-0.235,3.12-0.667v3.377H25.732z M25.098,26.12L24,30.692l-1.098-4.572H25.098z M16,7.585h16V10.5h-0.67H16.67H16  V7.585z M17.17,14.58V11.5h13.66v3.08c0,2.454-1.324,4.724-3.46,5.927c-2.045,1.185-4.712,1.181-6.753-0.002  C18.491,19.302,17.17,17.032,17.17,14.58z M12.49,34.37c0-4.44,3.47-8.06,7.921-8.242c0.107-0.009,0.221-0.009,0.329-0.008h1.134  l1.64,6.83c0.054,0.225,0.255,0.383,0.486,0.383s0.432-0.159,0.486-0.383l1.64-6.83h1.124c0.111,0.002,0.223,0,0.35,0.009  c4.43,0.181,7.9,3.8,7.9,8.241v4.317c0,1-0.813,1.813-1.813,1.813H14.302c-1,0-1.813-0.813-1.813-1.813V34.37z" />
                  <path class="st0" d="M16.083,33.81h4.287c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5h-4.287c-0.276,0-0.5,0.224-0.5,0.5  S15.807,33.81,16.083,33.81z" />
                </svg>
              </div>

            </div>

          </div>
          <div class="lower-part" style="background-color:#b5838d">
            <h5>Syllabus Covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>One Year</p>
            <h5>Eligibility</h5>
            <p>12<sup>th</sup> pass</p>
            <h5>Selection Procedure</h5>
            <p>Direct/AREESE Scholarship Test</p>
            <h5>Course Fee</h5>
            <p>₹ 65,000</p>
          </div>
        </section>
        <!-- Single Item -->
        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#4b2e39">
            <h4>Dropper Plus</h4>
            <p>ONE YEAR TARGET COURSE</p>
            <p style="margin-top:-15px;">(12th Pass Students)</p>
            <h5>About the course</h5>
            <p>Our One year course is designed for Ex-AREESE students or those who have qualified for NEET/JEE (Main)/JEE (Advanced), our one-year course is designed to elevate your Rank to next level and helping you achieve what you aspire.</p>
          </div>
          <div class="middle-part">
            <div class="middle-inner">
              <div class="middle-inner-2">

                <svg width="50px" height="50px" viewBox="0 0 48 48" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <style type="text/css">
                    .st0 {
                      fill: #010101;
                    }
                  </style>
                  <path class="st0" d="M14.302,41.5h19.385c1.551,0,2.813-1.262,2.813-2.813V34.37c0-4.822-3.654-8.77-8.38-9.197v-3.964  c2.291-1.412,3.71-3.917,3.71-6.628V11.5h0.67c0.276,0,0.5-0.224,0.5-0.5V7.585h2.5v2.625c0,0.276,0.224,0.5,0.5,0.5  s0.5-0.224,0.5-0.5V7.085c0-0.276-0.224-0.5-0.5-0.5h-3.5h-17H12c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h3V11  c0,0.276,0.224,0.5,0.5,0.5h0.67v3.08c0,2.711,1.418,5.217,3.7,6.629v3.965c-4.735,0.436-8.38,4.381-8.38,9.197v4.317  C11.49,40.238,12.751,41.5,14.302,41.5z M25.732,25.12h-3.464H20.87v-3.377c0.98,0.432,2.045,0.667,3.13,0.667  c1.081,0,2.143-0.235,3.12-0.667v3.377H25.732z M25.098,26.12L24,30.692l-1.098-4.572H25.098z M16,7.585h16V10.5h-0.67H16.67H16  V7.585z M17.17,14.58V11.5h13.66v3.08c0,2.454-1.324,4.724-3.46,5.927c-2.045,1.185-4.712,1.181-6.753-0.002  C18.491,19.302,17.17,17.032,17.17,14.58z M12.49,34.37c0-4.44,3.47-8.06,7.921-8.242c0.107-0.009,0.221-0.009,0.329-0.008h1.134  l1.64,6.83c0.054,0.225,0.255,0.383,0.486,0.383s0.432-0.159,0.486-0.383l1.64-6.83h1.124c0.111,0.002,0.223,0,0.35,0.009  c4.43,0.181,7.9,3.8,7.9,8.241v4.317c0,1-0.813,1.813-1.813,1.813H14.302c-1,0-1.813-0.813-1.813-1.813V34.37z" />
                  <path class="st0" d="M16.083,33.81h4.287c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5h-4.287c-0.276,0-0.5,0.224-0.5,0.5  S15.807,33.81,16.083,33.81z" />
                </svg>
              </div>

            </div>

          </div>
          <div class="lower-part" style="background-color:#4b2e39">
            <h5>Syllabus Covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>One Year</p>
            <h5>Eligibility</h5>
            <p>Ex-AREESE students or those who have qualified for NEET/JEE (Main)/JEE (Advanced),</p>
            <h5>Selection Procedure</h5>
            <p>Direct</p>
            <h5>Course Fee</h5>
            <p>₹ 65,000</p>
          </div>
        </section>
        <!-- Single Item -->
      </div>

    </div>

  </div>
  <!--End Description   =============================================-->

  <!--Start of Course Features   =============================================-->
  <div class="default-padding default-padding-per course-features">
    <div class="inner-container">
      <h2>
        Course Features
      </h2>
      <div class="card-holder ">
        <!-- single Item -->
        <article class="feature-card">
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
        <article class="feature-card">
          <div class="img-back">
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
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/3.jpg" alt="image-icon">
          <h5>Ultimate Personal Care</h5>
          <div class="description">
            <p>Individualized attention is given to each student, ensuring that you're never just another face in the crowd.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/4.jpg" alt="image-icon">
          <h5>Result-oriented Teaching Methodology</h5>
          <div class="description">
            <p>Engaging and interactive classes using a scientific, result-driven teaching methodology.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/5.jpg" alt="image-icon">
          <h5>Relevant Learning Study Material</h5>
          <div class="description">
            <p>Comprehensive, well-researched, and relevant Learning material.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/6.jpg" alt="image-icon">
          <h5>Regular Test Series & Performance Analysis</h5>
          <div class="description">
            <p>Daily progress tracking, regular assessments, performance analysis, and constructive feedback for continuous improvement.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/7.jpg" alt="image-icon">
          <h5>best Infrastructure</h5>
          <div class="description">
            <p>Excellent infrastructure with all necessary facilities</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/8.jpg" alt="image-icon">
          <h5>Excellent Academic Control</h5>
          <div class="description">
            <p>Academic oversight ensures the timely completion of courses with the highest quality of teaching.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/9.jpg" alt="image-icon">
          <h5>Best Results & Reputation</h5>
          <div class="description">
            <p>A proven track record of success spanning over 25 years.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/10.jpg" alt="image-icon">
          <h5>Content Research & Development Team</h5>
          <div class="description">
            <p>The support of an Educational Research and Content Development Center monitors examination patterns to ensure you are well-prepared according to the latest trends in assessments.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/11.jpg" alt="image-icon">
          <h5>Hi-tech Communication</h5>
          <div class="description">
            <p>Facilities such as digital attendance, test score notifications via SMS and email, and an online student-parent portal.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/12.jpg" alt="image-icon">
          <h5>Great student life</h5>
          <div class="description">
            <p>A competitive, motivating, and supportive environment designed to foster success.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
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
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/14.jpg" alt="image-icon">
          <h5>Residential Coaching and School Campus</h5>
          <div class="description">
            <p>A 20-acre residential campus in Kota and a 10-acre campus in Mohalli and Rajsamand, featuring all necessary facilities, including coaching, a school, mess, guest house, playgrounds, and more, all within the campus boundaries.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/15.jpg" alt="image-icon">
          <h5>Intellectual & Concern Management</h5>
          <div class="description">
            <p>Dedicated management with an exceptional emphasis on providing quality education.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/16.jpg" alt="image-icon">
          <h5>13-Hour Self Study Program</h5>
          <div class="description">
            <p>A unique and intensive program, designed to maximize the productivity</p>
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

</body>

</html>