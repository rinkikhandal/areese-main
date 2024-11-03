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
          <h1>Classroom > JEE</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Admission</a></li>
            <li><a href="#">Classroom</a></li>
            <li class="active">JEE</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->

  <!--Start Description   =============================================-->
  <div class="popular-courses bg-gray circle carousel-shadow default-padding" id="popular-courses">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2> Courses We Offer</h2>
            <p>
              AREESE offers a diverse range of tailored courses designed to meet each student's unique needs. This personalized approach ensures focused, goal-oriented learning, helping students sharpen their skills and significantly boost their performance. By providing specialized attention, AREESE empowers students to excel in their academic journey and achieve their full potential.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">
            <div class="item">
              <section class="cards">
                <div class="upper-part" style="background-color:#386641;">
                  <h4>Two year Target Course</h4>
                  <p>(10th to 11th Moving Students)</p>
                  <h5>About the course</h5>
                  <p>Our Two-Year Programme covers the entire syllabus of class 11th and 12th according to latest syllabus of JEE (Main & Advanced), BITSAT, VITEEE, CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for JEE.</p>
                </div>
                <div class="middle-part">
                  <div class="middle-inner" style=" background: linear-gradient(to left, rgb(214, 242, 222), white 60%);">
                    <div class="middle-inner-2" style="  background: linear-gradient(to right, rgb(214, 242, 222), white 60%);">
                      <svg height="40px" width="40px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#386641">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <style type="text/css">
                            .st0 {
                              fill: #386641;
                            }
                          </style>
                          <g>
                            <path class="st0" d="M65.84,98.563l80.867,37.22v48.028h218.582v-48.028l33.424-15.38v85.07c-5.423,0.776-9.606,5.458-9.606,11.087 c0,4.899,3.166,9.146,7.717,10.621l-8.216,54.239c-0.252,1.646,0.225,3.315,1.318,4.581c1.089,1.258,2.665,1.98,4.319,1.98h29.963 c1.654,0,3.23-0.722,4.328-1.988c1.081-1.266,1.557-2.927,1.308-4.573l-8.216-54.239c4.552-1.475,7.715-5.722,7.715-10.621 c0-5.629-4.183-10.31-9.606-11.087v-94.751l26.426-12.158c2.982-1.382,4.909-4.394,4.909-7.671c0-3.284-1.927-6.297-4.91-7.663 L273.855,3.913C268.213,1.32,262.205,0,255.998,0c-6.207,0-12.213,1.32-17.851,3.913L65.842,83.229 c-2.985,1.374-4.915,4.379-4.915,7.663C60.927,94.169,62.855,97.181,65.84,98.563z"></path>
                            <path class="st0" d="M410.518,413.569l-77.193-31.537c-12.284-5.644-20.221-18.028-20.221-31.553v-11.366 c0-5.225,0.862-10.365,2.331-14.852c0.423-0.567,42.372-57.127,48.202-112.88l0.182-1.755H148.175l0.184,1.755 c5.842,55.753,47.777,112.313,47.972,112.445c1.702,4.93,2.566,10.07,2.566,15.287v11.366c0,13.517-7.941,25.9-20.165,31.522 L101.43,413.6c-18.408,8.455-31.562,25.396-35.21,45.481L62.127,512h387.748l-4.109-53.082 C442.119,438.988,428.965,422.047,410.518,413.569z"></path>
                          </g>
                        </g>
                      </svg>
                    </div>

                  </div>

                </div>
                <div class="lower-part" style="background-color:#386641 ;">
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
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <section class="cards">
                <div class="upper-part" style="background-color:#ef233c">
                  <h4>One year Target Course</h4>
                  <p>(10th to 11th Moving Students)</p>
                  <h5>About the course</h5>
                  <p>Our One-Year Programme covers the entire syllabus of class 12th according to latest syllabus of JEE(Main + Advance), CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for JEE.</p>
                </div>
                <div class="middle-part">
                  <div class="middle-inner" style=" background: linear-gradient(to left, rgb(242, 217, 214), white 60%);">
                    <div class="middle-inner-2" style=" background: linear-gradient(to right, rgb(242, 217, 214), white 60%);">

                      <svg fill="#EF233C" width="40px" height="40px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                        <path d="m 12.499079,12.25525 c 0.0968,0 0.188377,-0.0436 0.249339,-0.11884 0.06096,-0.0752 0.08473,-0.17385 0.06473,-0.26853 l -0.202146,-0.95662 c 0.115125,-0.11137 0.187491,-0.26686 0.187491,-0.43975 0,-0.182 -0.08106,-0.34343 -0.206876,-0.45558 l 0,-3.32202 -0.810333,0.50146 0,2.82056 c -0.125815,0.11215 -0.2069,0.27358 -0.2069,0.45558 0,0.17291 0.07239,0.32841 0.187515,0.43975 l -0.20217,0.95662 c -0.02,0.0947 0.0038,0.19335 0.06473,0.26853 0.06096,0.0752 0.152539,0.11884 0.249339,0.11884 l 0.625281,0 z M 12.773741,4.75539 7.5021019,1.49209 C 7.3477151,1.39699 7.1736728,1.34925 6.9996305,1.34925 c -0.1740423,0 -0.3482077,0.0477 -0.5016586,0.14284 l -5.271713,3.2633 C 1.0854931,4.84249 0.99999905,4.99633 0.99999905,5.1619 c 0,0.1656 0.085494,0.31949 0.22625985,0.40673 l 5.2716883,3.26333 c 0.153451,0.0952 0.3276163,0.14284 0.5016586,0.14284 0.1740423,0 0.3481092,-0.0477 0.5024714,-0.14284 L 12.773741,5.56863 c 0.140766,-0.0872 0.22626,-0.24113 0.22626,-0.40673 0,-0.16557 -0.08549,-0.31946 -0.22626,-0.40651 z M 6.9996059,9.78508 c -0.3283798,0 -0.6488777,-0.0912 -0.928242,-0.26411 l -3.0750017,-1.90368 0,3.27796 c 0,0.97016 1.7931578,1.7555 4.0032436,1.7555 2.2108742,0 4.0038842,-0.78536 4.0038842,-1.7555 l 0,-3.27796 -3.0748786,1.90368 C 7.6492472,9.69388 7.3279857,9.78508 6.9996059,9.78508 Z" />
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
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <section class="cards">
                <div class="upper-part" style="background-color:#ff6700">
                  <h4>Dropper Batch</h4>
                  <p>ONE YEAR TARGET COURSE</p>
                  <p style="margin-top:-15px;">(12th Pass Students)</p>
                  <h5>About the course</h5>
                  <p>Our one-year course for class 12th pass thoroughly covers the syllabus for JEE (Main & Advanced). We train students to think analytically and adopt a systematic approach to problem-solving, essential for JEE and to lend you a helping hand and guide you to clear JEE with very good rank.</p>
                </div>
                <div class="middle-part">
                  <div class="middle-inner" style=" background: linear-gradient(to left, rgb(239, 201, 180), white 60%);">
                    <div class="middle-inner-2" style=" background: linear-gradient(to right, rgb(239, 201, 180), white 60%);">

                      <svg fill="#ff6700" width="60px" height="60px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" id="Self_x5F_improvement" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <g>
                            <path d="M380.417,258.812c-1.904-41.328-25.76-76.918-60.197-95.363c-2.717-1.48-5.514-2.838-8.369-4.074 c-13.947-6.061-29.33-9.426-45.504-9.426c-60.75,0-110.34,47.453-113.891,107.328l0.044-0.004v0.201 c0,2.209-0.122,12.92-0.122,12.92l-20.393,56.073c-2.006,5.557,2.082,11.033,7.99,11.033h12.291l-0.092,64.488 c0,12.537,10.162,23.512,22.699,23.512H217.5v57.376c0,9.301,7.309,16.624,16.61,16.624h104.432 c9.301,0,15.958-7.323,15.958-16.624V364.118c0-16.357,4.8-32.328,12.44-46.793c7.984-15.111,12.905-32.229,13.339-50.406 c0.02-0.912,0.148-1.844,0.148-2.775C380.428,262.358,380.499,260.575,380.417,258.812z M305.614,272.5H223.03 c-20.684,0-37.451-16.52-37.451-37.206s16.768-37.329,37.451-37.329c3.531,0,6.932,0.587,10.168,1.5 c5.379-14.092,18.984-24.088,34.965-24.088c15.496,0,28.793,9.429,34.488,22.847c0.98-0.076,1.963-0.142,2.963-0.142 c20.686,0,37.455,16.524,37.455,37.209S326.3,272.5,305.614,272.5z"></path>
                            <path d="M326.093,114.5h8.407v7.737c0,3.416,2.084,6.188,5.5,6.188s5.5-2.771,5.5-6.188V114.5h9.243c3.416,0,6.188-3.084,6.188-6.5 s-2.771-6.5-6.188-6.5H345.5v-7.915c0-3.418-2.084-6.188-5.5-6.188s-5.5,2.77-5.5,6.188v7.915h-8.407 c-3.418,0-6.188,3.084-6.188,6.5S322.675,114.5,326.093,114.5z"></path>
                            <path d="M188.245,40.5h6.255v8.142c0,3.416,3.584,6.188,7,6.188s7-2.771,7-6.188V40.5h8.397c3.416,0,6.188-3.084,6.188-6.5 s-2.771-6.5-6.188-6.5H208.5v-7.511c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188V27.5h-6.255c-3.418,0-6.188,3.084-6.188,6.5 S184.827,40.5,188.245,40.5z"></path>
                            <rect height="27" width="27" x="203.5" y="220.5"></rect>
                            <polygon points="248.75,245.5 282.513,245.5 265.63,219.754 "></polygon>
                            <circle cx="313.101" cy="233.486" r="14.181"></circle>
                            <path d="M259.745,126.11c1.02,0.975,2.328,1.459,3.635,1.459c1.311,0,2.619-0.488,3.637-1.461l19.479-18.609 c1.564-1.492,2.057-3.218,1.25-5.23c-0.803-2.008-2.723-2.769-4.887-2.769h-13.313l-0.07-40.361 c-0.006-3.414-2.775-7.639-6.188-7.639c-0.004,0-0.006,0-0.012,0c-3.416,3-6.182,4.242-6.176,7.66l0.07,40.34h-13.27 c-2.164,0-4.084,0.761-4.889,2.771s-0.314,4.003,1.25,5.5L259.745,126.11z"></path>
                            <path d="M262.5,40.503c3.416,0,7-2.77,7-6.188V19.64c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188v14.676 C255.5,37.733,259.084,40.503,262.5,40.503z"></path>
                          </g>
                        </g>
                      </svg>
                    </div>

                  </div>

                </div>
                <div class="lower-part" style="background-color:#ff6700">
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

            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <section class="cards">
                <div class="upper-part" style="background-color:#8f3985">
                  <h4>Dropper Plus</h4>
                  <p>ONE YEAR TARGET COURSE</p>
                  <p style="margin-top:-15px;">(12th Pass Students)</p>
                  <h5>About the course</h5>
                  <p>Our One year course is designed for Ex-AREESE students or those who have qualified for JEE (Main)/JEE (Advanced), our one-year course is designed to elevate your Rank to next level and helping you achieve what you aspire.</p>
                </div>
                <div class="middle-part">
                  <div class="middle-inner" style=" background: linear-gradient(to left, rgb(242, 228, 246), white 60%);">
                    <div class="middle-inner-2" style=" background: linear-gradient(to right, rgb(242, 228, 246), white 60%);">

                      <svg height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 710.173 710.173" xml:space="preserve" fill="#8F3985">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <g>
                            <g>
                              <circle style="fill:#8F3985;" cx="367.026" cy="40.06" r="40.06"></circle>
                              <path style="fill:#8F3985;" d="M216.286,53.358l97.63,100.273l-0.165,276.949c0,12.637,10.242,22.88,22.879,22.88 s22.797-10.242,22.797-22.88l-0.083-185.018h10.325v185.266l0.165,0.165c0.165,12.472,10.242,22.467,22.632,22.467 c12.472,0,22.714-10.16,22.714-22.797l-0.165-276.619l98.126-100.686c0-0.083,0-0.083,0.083-0.165 c6.608-6.608,6.608-17.263,0-23.871c-6.608-6.525-17.263-6.525-23.871,0c0,0-0.083,0.165-0.165,0.165L426.083,93.17H303.261 l-63.187-63.683l-0.083-0.083c-6.608-6.608-17.345-6.608-23.953,0c-6.608,6.608-6.608,17.345,0,23.871 C216.203,53.275,216.203,53.275,216.286,53.358z"></path>
                              <circle style="fill:#8F3985;" cx="154.998" cy="135.708" r="39.977"></circle>
                              <path style="fill:#8F3985;" d="M193.158,188.735h-80.202c-57.405,0.991-55.423,43.116-55.423,43.116v98.374h0.083 c0,0.248-0.083,0.496-0.083,0.826c0,9.251,7.599,16.85,17.015,16.85c9.251,0,16.767-7.682,16.767-16.85c0-0.33,0-0.496,0-0.826 l0,0v-91.022h10.572l-0.083,286.613c0,12.637,10.159,22.879,22.797,22.879c12.555,0,22.797-10.159,22.797-22.879l-0.165-184.853 h10.242v185.101l0.165,0.165c0.165,12.39,10.242,22.466,22.714,22.466c12.472,0,22.714-10.159,22.714-22.714l-0.083-287.191 h10.985v91.435l0,0c0,0.083,0,0.083,0,0.165c0,9.334,7.516,16.85,16.932,16.85c9.251,0,16.85-7.434,16.85-16.85 c0-0.083,0-0.083,0-0.165v-98.374C244.038,187.992,193.158,188.735,193.158,188.735z"></path>
                              <circle style="fill:#8F3985;" cx="559.974" cy="160.156" r="39.977"></circle>
                              <path style="fill:#8F3985;" d="M598.134,213.101h-80.202c-57.405,1.074-55.423,43.198-55.423,43.198v98.374l0,0 c0,0.33,0,0.496,0,0.743c0,9.334,7.516,16.85,16.932,16.85c9.333,0,16.85-7.516,16.85-16.85c0-0.248-0.083-0.496-0.083-0.743 h0.083v-90.94h10.572l-0.165,286.613c0,12.555,10.242,22.88,22.797,22.88s22.797-10.242,22.797-22.88V365.411h10.159v185.101 l0.165,0.165c0.165,12.39,10.242,22.466,22.714,22.466s22.632-10.159,22.632-22.714l-0.083-287.191h10.985v91.435l0,0 c0,0.083,0,0.083,0,0.165c0,9.251,7.516,16.85,16.85,16.85s16.932-7.599,16.932-16.85c0-0.083,0-0.083,0-0.165V256.3 C649.014,212.441,598.134,213.101,598.134,213.101z"></path>
                              <path style="fill:#8F3985;" d="M283.85,710.173h152.64V461.885H283.85V710.173z M357.775,562.984h8.59v74.338h-9.664v-64.922 h-0.248l-12.968,6.938l-1.9-7.682L357.775,562.984z"></path>
                              <path style="fill:#8F3985;" d="M481.341,710.173h152.64V586.029h-152.64V710.173z M540.233,677.712 c2.891,1.9,9.499,4.708,16.519,4.708c12.968,0,16.932-8.26,16.85-14.455c-0.083-10.407-9.499-14.868-19.163-14.868h-5.617v-7.516 h5.617c7.269,0,16.52-3.717,16.52-12.555c0-5.947-3.717-11.233-13.05-11.233c-5.864,0-11.646,2.561-14.785,4.956l-2.643-7.269 c3.882-2.891,11.398-5.782,19.493-5.782c14.702,0,21.228,8.673,21.228,17.758c0,7.599-4.625,14.207-13.794,17.511v0.248 c9.168,1.817,16.602,8.673,16.602,19.163c0,11.811-9.251,22.301-27.092,22.301c-8.342,0-15.694-2.643-19.328-5.038 L540.233,677.712z"></path>
                              <path style="fill:#8F3985;" d="M76.283,710.173h152.64v-152.64H76.283V710.173z M128.732,669.37l7.929-7.682 c18.997-18.089,27.588-27.67,27.67-38.821c0-7.516-3.717-14.537-14.785-14.537c-6.773,0-12.39,3.469-15.776,6.277l-3.221-7.021 c5.121-4.378,12.472-7.599,21.062-7.599c16.024,0,22.797,11.068,22.797,21.641c0,13.794-9.912,24.862-25.605,39.895l-5.947,5.451 v0.248h33.369v8.342h-47.411v-6.195H128.732z"></path>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>

                  </div>

                </div>
                <div class="lower-part" style="background-color:#8f3985">
                  <h5>Syllabus Covers</h5>
                  <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
                  <h5>Course Duration</h5>
                  <p>One Year</p>
                  <h5>Eligibility</h5>
                  <p>Ex-AREESE students or those who have qualified for JEE (Main)/JEE (Advanced),</p>
                  <h5>Selection Procedure</h5>
                  <p>Direct</p>
                  <h5>Course Fee</h5>
                  <p>₹ 65,000</p>
                </div>
              </section>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--End Description   =============================================-->






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