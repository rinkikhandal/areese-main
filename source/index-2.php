<?php
require_once './assets/db/config_session.inc.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include './links.php';
  ?>
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




  <!-- Start Banner 
    ============================================= -->

  <div class="banner-personal">
    <div class="banner-wrapper">
      <div data-index="0">
        <img src="./assets/img/home-hero-img/hero-31.jpg" alt="pic-0">
      </div>
      <div data-index="1">
        <img src="./assets/img/home-hero-img/hero-41.jpg" alt="pic-1">
      </div>
      <div data-index="2">
        <img src="./assets/img/home-hero-img/hero-1.jpg" alt="pic-2">
      </div>
      <div data-index="3">
        <img src="./assets/img/home-hero-img/hero-5.jpg" alt="pic-3">
      </div>
      <div data-index="4">
        <img src="./assets/img/home-hero-img/hero-6.jpg" alt="pic-4">
      </div>
      <div data-index="5">
        <img src="./assets/img/home-hero-img/students.jpg" alt="pic-5">
      </div>
      <div data-index="6">
        <img src="./assets/img/home-hero-img/teaching.jpg" alt="pic-6">
      </div>
      <div>
        <img src="./assets/img/home-hero-img/hero-31.jpg" alt="pic-1">
      </div>

    </div>

    <div class="check-wrapper">
      <div class="checkbox-div active" tabindex="0" data-index="0">
      </div>
      <div class="checkbox-div" tabindex="0" data-index="1">
      </div>
      <div class="checkbox-div" tabindex="0" data-index="2">
      </div>
      <div class="checkbox-div" tabindex="0" data-index="3">
      </div>
      <div class="checkbox-div" tabindex="0" data-index="4">
      </div>
      <div class="checkbox-div" tabindex="0" data-index="5">
      </div>
      <div class="checkbox-div" tabindex="0" data-index="6">
      </div>

    </div>
  </div>
  <!-- End Banner -->

  <!-- Start Our Features Latest Post
    ============================================= -->
  <div class="our-featues-area inc-trending-courses about-area default-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 our-feature-items">
          <div class="row">
            <div class="col-md-12 info less-bar">
              <h5>Introduction</h5>
              <h1>Welcome to AREESE Institute - A path of revolutionary learning</h1>
              <p style="">
                With the legacy of over 10 years, AREESE is now one of the leading institutes for NEET and JEE preparation. Founded in 2014 by a group of ex-CSRL SUPER-30 faculties, IITians, and NITians. Our mission is to provide unparalleled education and guidance to all students, so that we achieve 100% result in NEET & JEE.
              </p>
              <h4 style="margin-bottom: 0px;font-weight: 600;">Why AREESE?</h4>
              <p>
                In today's competitive landscape, many institutes focus solely on their top students to produce top ranks, leaving average students behind. This, combined with large batch sizes, makes it nearly impossible to provide personal care and attention, resulting in lower overall selection percentages.
              </p>
              <p> Inspired by the legendary Super-30 model, where 30 students are rigorously prepared with a 100% success rate, AREESE adopts a unique approach to ensure every student excels. Adopting this proven approach, AREESE strives to ensure that each student, regardless of their starting point, receives the attention, resources, and mentorship they need to excel. By fostering an environment of rigorous academic training, individualized support, and unwavering commitment to student success, we maximize every learner's potential, ensuring that no one is left behind. At AREESE, every student matters, and every student succeeds... <a href="about-us.php">READ MORE<i class="fas fa-angle-double-right"></i></a></p>

            </div>
          </div>
        </div>
        <!-- End Our Features -->

        <!-- End Home Sidebar -->
        <div class="col-md-4 home-sidebar for_margin" style="margin-top: 40px;">
          <!-- Start Online Registration -->
          <div class="sidebar-item online-registration">
            <h4>Enquiry Form</h4>
            <div class="reg-form">
              <form action="./assets/db/query.inc.php" class="enquiry-form" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" placeholder="Name*" type="text" name="username" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" placeholder="Email*" type="email" name="email" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" placeholder="Phone*" type="tel" name="phone" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Enter your query*" type="text" name="query"></textarea>
                    </div>
                  </div>
                  <!-- Alert Message -->
                  <div class="col-md-12 alert-notification" style="display:flex;justify-content:center">
                    <div class="form-group" style="width:90%">
                      <div id="enquiry-message" class="alert-msg">
                      </div>
                    </div>
                  </div>
                  <!-- End Alert Message -->


                  <div class="col-md-12">
                    <button class="button-sm button-theme" id="enquiry-submit" type="submit">
                      Submit
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Online Registration -->

        </div>
        <!-- End Home Sidebar -->
      </div>
      <!-- <span>
        <a href="about-us.php" style=" color: #ffffff;
  text-transform: capitalize;
  background: #002147;
  padding: 5px 10px;
  border-radius: 0.2rem;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  border: 2px solid #002147;
  font-weight: 500;">more details</a>
      </span> -->
    </div>
  </div>
  <!-- End Our Features & Latest Post -->

  <!-- Start Popular Courses 
    ============================================= -->
  <div class="popular-courses bg-gray circle carousel-shadow default-padding" id="popular-courses">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Popular Courses</h2>
            <p>
              AREESE Batches – Super30 Batch , Pay After Selection Batch , Regular Batch Choose from our elite Super30 Batch , risk-free Pay After Selection Program, or high-quality, affordable Regular Batches — all designed to maximize your success in JEE, NEET, and Board exams.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">
            <div class="item">
              <div class="thumb">
                <a href="#">
                  <img src="assets/img/offline.jpg" alt="Thumb" />
                </a>
                <!-- <div class="overlay">
                  <a class="btn btn-theme effect btn-sm" href="#">
                    <i class="fas fa-chart-bar"></i> Enroll Now
                  </a>
                </div> -->
              </div>
              <hr>

              <div class="card-body info text-center">
                <h3>AREESE Career Institute</h4>
                  <p class="card-text">Offline Class</p>
                  <h5 class="card-text">NEET ∣ JEE</h5>
                  <hr />
                  <p class="">Target Batches ∣ Foundation ∣ </p>
                  <p>Pre-Foundation</p>
                  <p class="">NTSE ∣ Olympiads ∣ Boards</p>
                  <p class=" mb-2">( Science ∣ Commerce )</p>
                  <a href="#" class="btn btn-outline">More details</a>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <a href="#">
                  <img src="assets/img/online-2.jpg" alt="Thumb" />
                </a>
              </div>
              <hr>
              <div class="card-body info text-center">
                <h3>AREESE Online Classes</h4>
                  <p class="card-text">Online Class</p>

                  <h5 class="card-text">NEET ∣ JEE</h5>
                  <hr />
                  <p class="">Target Batches ∣ Foundation ∣ </p>
                  <p>Pre-Foundation</p>
                  <p>NTSE ∣ Olympiads ∣ Boards</p>
                  <p class=" mb-2">( Science ∣ Commerce )</p>
                  <a href="./online-learning.php" class="btn btn-outline">More details</a>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <a href="#">
                  <img src="assets/img/gurukulam-3.png" alt="Thumb" />
                </a>
              </div>
              <hr>

              <div class="card-body info text-center ">
                <h3 class="card-title">AREESE Gurukulam</h4>
                  <p class="card-text">
                    Pay after Selection Batch <br />
                    for
                  </p>
                  <h5 class="card-text">NEET ∣ JEE</h5>
                  <hr />

                  <p class="">Foundation ∣ Target Batches ∣ </p>
                  <p>
                    Olympiads
                  </p>
                  <p>Fully Residential Program</p>
                  <a href="./payAfter-batch.php" class="btn btn-outline">More details</a>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <a href="#">
                  <img src="assets/img/super30.png" alt="Thumb" />
                </a>
              </div>
              <hr>

              <div class="card-body info text-center ">
                <h3 class="card-title">AREESE Super30</h4>

                  <p class="card-text">
                    Free Coaching & Stay <br />
                    for
                  </p>
                  <h5 class="card-text">NEET ∣ JEE</h5>
                  <hr />

                  <p class="">Foundation ∣ Target Batches ∣ </p>
                  <p>Olympiads </p>
                  <p>Fully Residential Program</p>
                  <a href="./super30-batch.php" class="btn btn-outline">More details</a>
              </div>
            </div>
            <!-- End Single Item -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Popular Courses -->

  <!-- Start Top Categories 
    ============================================= -->
  <div id="top-categories" class="top-cat-area default-padding bottom-less">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Top Batches</h2>
            <p>
              <span class="highlight">
                AREESE Batches – Super30 Batch , Pay After Selection Batch , Regular Batch
                Choose from our elite Super30 Batch
              </span>, risk-free Pay After Selection Program, or high-quality, affordable Regular Batches — all designed to maximize your success in JEE, NEET, and Board exams.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="top-cat-items">
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-1.jpg)">
              <a href="super30-batch.php">
                <!-- <i class="flaticon-feature"></i> -->
                <!-- <img src="assets/img/1.png" alt="" style="width:40px"> -->
                <div class="info">
                  <h4>AREESE Super 30 Batch</h4>
                  <span>(Free Stay, food & Coaching)</span>
                </div>
              </a>
            </div>
          </div>
          <div class=" col-md-4 col-sm-6 equal-height ">
            <div class=" item" style="background-image: url(assets/img/bg-batch/bg-batch-2.jpg)">
              <a href="payAfter-batch.php">
                <!-- <i class="flaticon-interaction"></i> -->
                <!-- <img src="assets/img/1.png" alt=""> -->
                <div class="info">
                  <h4>Pay after Selection Batch</h4>
                  <span>(Pay Fee after selection in JEE/NEET)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-3.jpg)">
              <a href="11-boards-offline.php">
                <!-- <i class="flaticon-conveyor"></i> -->
                <div class="info">
                  <h4>11<sup>th</sup> Academic Batch</h4>
                  <span>(Only school level Studies)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-4.jpg)">
              <a href="NEET-classroom.php">
                <!-- <i class="flaticon-education"></i> -->
                <div class="info">
                  <h4>11<sup>th</sup> NEET Batch</h4>
                  <span>(11<sup>th</sup> academics + NEET syllabus)</span>
                </div>
              </a>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-14.jpg)">
              <a href="12-boards-offline.php">
                <!-- <i class="flaticon-translate"></i> -->
                <div class="info">
                  <h4>12<sup>th</sup> Board Only Batch</h4>
                  <span>(12<sup>th</sup> Board Syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-8.png)">
              <a href="NEET-classroom.php">
                <!-- <i class=</a></div>"flaticon-firewall"></i> -->
                <div class="info">
                  <h4>12<sup>th</sup> NEET Batch</h4>
                  <span>(12<sup>th</sup> Board + NEET Syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-11.jpg)">
              <a href="JEE-classroom.php">
                <!-- <i class="flaticon-potential"></i> -->
                <div class="info">
                  <h4 style="margin-bottom: 3px;">11<sup>th</sup> JEE (Main+Adv.) Batch</h4>
                  <span>(11<sup>th</sup> academics + JEE (Main + Advance) Syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-9.png)">
              <a href="JEE-classroom.php">
                <!-- <i class="flaticon-artificial-intelligence"></i> -->
                <div class="info">
                  <h4 style="margin-bottom: 3px;">12<sup>th</sup> JEE (Main+Adv.) Batch</h4>
                  <span>(12<sup>th</sup> Board + JEE (Main + Advance) Syllabus)</span>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-18.jpg)">
              <a href="JEE-classroom.php">
                <!-- <i class="flaticon-firewall"></i> -->
                <div class="info">
                  <h4 style="margin-bottom: 2px">Dropper JEE Batch</h4>
                  <span style="font-weight: 700; font-size: smaller; ">For dropout students only</span>
                  <div></div>
                  <span>(JEE Main + JEE Adv. Preparation)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-12.jpg)">
              <a href="NEET-classroom.php">
                <!-- <i class="flaticon-firewall"></i> -->
                <div class="info">
                  <h4 style="margin-bottom: 2px">Dropper NEET Batch</h4>
                  <span style="font-weight: 700; font-size: smaller; ">For dropout students only</span>
                  <div></div>

                  <span>(NEET Preparation)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-6.jpg)">
              <a href="9-foundation-offline.php">
                <!-- <i class="flaticon-print"></i> -->
                <div class="info">
                  <h4 style="margin-bottom: 3px;">9<sup>th</sup> Pre-Foundation Batch</h4>
                  <span>(9<sup>th</sup> academics + Competitive Exam Syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-16.jpg)">
              <a href="10-foundation-offline.php">
                <!-- <i class="flaticon-firewall"></i> -->
                <div class="info">
                  <h4 style="margin-bottom: 3px;">10<sup>th</sup> Pre-Foundation Batch</h4>
                  <span>(10<sup>th</sup> academics + Competitive Exam Syllabus)</span>
                </div>
              </a>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
  <!-- End Top Categories -->

  <!-- Start Advisor Area
    ============================================= -->
  <section id="advisor" class="advisor-area bg-gray circle default-padding">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Experience Advisors</h2>
            <p>
              At AREESE, our advisory team includes seasoned educators, IITians, doctors, and academic strategists with deep experience in JEE, NEET, and Board exam preparation. They guide curriculum planning, mentor students, and ensure every learner receives expert-backed support to excel in competitive and school-level exams alike.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="advisor-carousel owl-carousel owl-theme text-center text-light">
            <!-- Single Item -->

            <!-- Single Item -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Advisor Area -->

  <!-- Start Video Area
    ============================================= -->
  <div class="video-area padding-xl text-center bg-fixed text-light shadow dark-hard" style="background-image: url(assets/img/2440x1578.png)">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="video-heading">
            <h2>Take a short tour in our campus</h2>
            <p>
              Explore our vibrant classrooms, smart labs, and student-friendly spaces designed to inspire learning and success.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="video-info">
          <div class="overlay-video">
            <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=NPKgcC9gmPA">
              <i class="fa fa-play"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Video Area -->
  <!-- Start Blog 
    ============================================= -->
  <div id="blog" class="blog-area circle default-padding bottom-less">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center" style="margin-bottom: 0px;padding-bottom: 60px; display: flex; flex-direction: column;">
          <div class="col-md-8 col-md-offset-2">
            <h2>Latest News & Blogs</h2>
            <p>
              Stay updated with AREESE announcements, exam tips, success stories, and expert insights on JEE, NEET, and Board preparation.
            </p>
          </div>
          <div class="latestNews">
            <span> <a href="latestNews.php">Explore latest News</a></span>
            <span> <a href="blog-standard.php">Explore Blogs</a></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="blog-items">
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/latest-news/9-11pic.jpg" alt="Thumb" /></a>
                <!-- <div class="date">
                  <h4><span>24</span> Nov, 2018</h4>
                </div> -->
              </div>
              <div class="info">
                <h4 style="line-height: 30px;">
                  <a href="#">Admissions Open for 9th & 11th Academic Foundation Batch </a>
                </h4>
                <p>
                  Join our Academic Foundation Batch for Classes 9th and 11th, designed to build a strong foundation for academic excellence and competitive exams. Enroll now to secure your spot! Application process started. Click Here Visit [insert form link] for details and apply online today
                </p>

              </div>
            </div>
          </div>
          <!-- Single Item -->
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/latest-news/neet-jee.jpg" alt="Thumb" /></a>
                <!-- <div class="date">
                  <h4><span>12</span> Sep, 2018</h4>
                </div> -->
              </div>
              <div class="info">
                <h4 style="line-height: 30px;">
                  <a href="#">Admissions Open for NEET & JEE Batches</a>
                </h4>
                <p>
                  Kickstart your journey to top medical and engineering colleges with our NEET and JEE coaching batches for Classes 11th, 12th, and 12th-pass students. Our expert faculty, comprehensive study materials, and rigorous test series ensure thorough preparation for NEET and JEE exams. Enroll now to secure your spot! Admissions started on. Visit [insert form link] for details and apply online today
                </p>
              </div>
            </div>
          </div>
          <!-- Single Item -->
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/latest-news/10-12pic.jpg" alt="Thumb" /></a>
                <!-- <div class="date">
                  <h4><span>29</span> Dec, 2018</h4>
                </div> -->
              </div>
              <div class="info">
                <h4 style="line-height: 30px;">
                  <a href="#">Admissions Open for 10th & 12th Board Exam Preparation</a>
                </h4>
                <p>
                  Excel in your Class 10th and 12th Board Exams with our specialized coaching program! Designed to strengthen core concepts, enhance exam strategies, and boost confidence, our expert-led courses ensure top results. Admissions are now open. Visit [insert forms link] for more details and apply online today!
                </p>
              </div>
            </div>
          </div>
          <!-- Single Item -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

  <!-- Start Testimonials 
    ============================================= -->
  <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Students Review</h2>
            <p>
              Hear directly from our students about their learning experience, faculty support, and success stories at AREESE.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="display:flex; justify-content:center;">
          <div class="clients-review-carousel owl-carousel-stu owl-theme">
            <!-- Single Item -->
            <div class="item item-personal  ">
              <div class="image-div box-table bg-fixed shadow " style="background-image: url(assets/img/gurukulam.jpg); height:220px;width:350px">

                <div class="video-info">
                  <div class="overlay-video">
                    <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=NPKgcC9gmPA">
                      <i class="fa-solid fa-play fa-2xs"></i>
                    </a>
                  </div>
                </div>

              </div>
            </div>
            <!-- Single Item -->
            <!-- Single Item -->
            <div class="item item-personal ">
              <div class="image-div  box-table bg-fixed shadow " style="background-image: url(assets/img/vikram.jpg); height:220px;width:350px">

                <div class="video-info">
                  <div class="overlay-video">
                    <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=KTjrcFimQo0">
                      <i class="fa-solid fa-play fa-2xs"></i>
                    </a>
                  </div>
                </div>

              </div>
            </div>
            <!-- Single Item -->

            <!-- Single Item -->
            <div class="item item-personal ">
              <div class="image-div  box-table bg-fixed shadow " style="background-image: url(assets/img/areese_student_gargi.jpg); height:220px;width:350px">
                <div class="video-info">
                  <div class="overlay-video">
                    <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=Adh4zjMxQG0">
                      <i class="fa-solid fa-play fa-2xs"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Item -->
            <!-- Single Item -->
            <div class="item item-personal ">
              <div class="image-div  box-table bg-fixed shadow " style="background-image: url(assets/img/manish-kumar-student.jpg); height:220px;width:350px">

                <div class="video-info">
                  <div class="overlay-video">
                    <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=rRGalLl1evM">
                      <i class="fa-solid fa-play fa-2xs"></i>
                    </a>
                  </div>
                </div>

              </div>
            </div>
            <!-- Single Item -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->

  <!-- Start Event
    ============================================= -->
  <section id="event" class="event-area circle default-padding">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Explore Our Apps</h2>
            <p>
              Access live classes, study materials, test series, and performance tracking — all in one powerful app for JEE, NEET, and Board preparation.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="event-items event-carousel owl-carousel owl-theme">

            <!-- Single Item -->
            <div class="item vertical">
              <div class="thumb">
                <a href="#"><img src="assets/img/android.jpg" alt="Thumb"></a>
              </div>
              <div class="info" style="display:flex; align-items: center;justify-content: space-between;">
                <h4>
                  <a href="#" style="display: block;height: 100;">AREESE ANDROID APP</a>
                </h4>
                <a href="https://play.google.com/store/apps/details?id=co.classplus.areese&hl=en-US" class="btn btn-dark effect btn-xsm" target="blank" style="margin-top: 0;">
                  INSTALL NOW
                </a>

              </div>
            </div>
            <!-- Single Item -->

            <!-- Single Item -->
            <div class=" item vertical">
              <div class="thumb">
                <a href="#"><img src="assets/img/IOS.jpg" alt="Thumb"></a>

              </div>
              <div class="info" style="display:flex; align-items: center;justify-content: space-between;">
                <h4 style="display:flex;align-items: center;">
                  <a href="#" style="display: block;height: 100;">AREESE IOS APP</a>
                </h4>


                <a href="https://play.google.com/store/apps/details?id=co.classplus.areese&hl=en-US" class="btn btn-dark effect btn-xsm" target="blank" style="margin-top: 0;">
                  INSTALL NOW
                </a>
              </div>
            </div>
            <!-- Single Item -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Event -->




  <!-- Start Footer 
    ============================================= -->
  <?php include 'footer_dark.php' ?>
  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>
  <script src="assets/js/teachers.js" type="module"></script>
  <script src="assets/js/enquiry.js"></script>
  <script src="assets/js/home-banner.js"></script>

</body>

</html>