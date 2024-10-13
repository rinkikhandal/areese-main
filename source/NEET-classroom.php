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
  <div class="default-padding .default-padding-per">
    <div class="inner-container">
      <div class="card-holder">

        <!-- cards -->

        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#588157;">
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
          <div class="lower-part" style="background-color:#588157 ;">
            <h5>Syllabus covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>Two Years</p>
            <h5>Eligibility</h5>
            <p>10<sup>th</sup> pass</p>
            <h5>Selection Procedure</h5>
            <p>Direct/AREESE Scholarship Test</p>
            <h5>Course Fee</h5>
            <p>1,00,000</p>
          </div>
        </section>
        <!-- Single Item -->
        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#dda15e">
            <h4>One year Target Course</h4>
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
          <div class="lower-part" style="background-color:#dda15e">
            <h5>Syllabus covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>Two Years</p>
            <h5>Eligibility</h5>
            <p>10<sup>th</sup> pass</p>
            <h5>Selection Procedure</h5>
            <p>Direct/AREESE Scholarship Test</p>
            <h5>Course Fee</h5>
            <p>1,00,000</p>
          </div>
        </section>
        <!-- Single Item -->

        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#e76f51">
            <h4>Dropper</h4>
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
          <div class="lower-part" style="background-color:#e76f51">
            <h5>Syllabus covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>Two Years</p>
            <h5>Eligibility</h5>
            <p>10<sup>th</sup> pass</p>
            <h5>Selection Procedure</h5>
            <p>Direct/AREESE Scholarship Test</p>
            <h5>Course Fee</h5>
            <p>1,00,000</p>
          </div>
        </section>
        <!-- Single Item -->
        <!-- Single Item -->
        <section class="cards">
          <div class="upper-part" style="background-color:#a68a64">
            <h4>Dropper Plus</h4>
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
          <div class="lower-part" style="background-color:#a68a64">
            <h5>Syllabus covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p>Two Years</p>
            <h5>Eligibility</h5>
            <p>10<sup>th</sup> pass</p>
            <h5>Selection Procedure</h5>
            <p>Direct/AREESE Scholarship Test</p>
            <h5>Course Fee</h5>
            <p>1,00,000</p>
          </div>
        </section>
        <!-- Single Item -->
      </div>

    </div>

  </div>
  <!--End Description   =============================================-->






  <!-- Start Footer 
    ============================================= -->
  <?php include 'footer_dark.php' ?>
  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>

</body>

</html>