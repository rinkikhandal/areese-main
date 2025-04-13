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
        <img src="./assets/img/home-hero-img/hero-31.jpg" alt="pic-1">
      </div>

      <div data-index="1">
        <img src="./assets/img/home-hero-img/hero-41.jpg" alt="pic-2">
      </div>
      <div data-index="2">
        <img src="./assets/img/home-hero-img/hero-5.jpg" alt="pic-3">
      </div>
      <div data-index="3">
        <img src="./assets/img/home-hero-img/hero-6.jpg" alt="pic-4">
      </div>
      <div data-index="4">
        <img src="./assets/img/home-hero-img/students.jpg" alt="pic-5">
      </div>
      <div data-index="5">
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
              Discourse assurance estimable applauded to so. Him everything
              melancholy uncommonly but solicitude inhabiting projection off.
              Connection stimulated estimating excellence an to impression.
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
                  <a href="http://www.bestinstituteforboardexam.com/" target="blank" class="btn btn-outline">More details</a>
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
                  <a href="https://areese.courses.store/" target="blank" class="btn btn-outline">More details</a>
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
                  <a href="http://www.areesegurukulam.com/" target="blank" class="btn btn-outline">More details</a>
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
                  <a href="http://www.areesegurukulam.com/" target="blank" class="btn btn-outline">More details</a>
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
              Discourse assurance estimable applauded to so. Him everything
              melancholy uncommonly but solicitude inhabiting projection off.
              Connection stimulated estimating excellence an to impression.
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
              Able an hope of body. Any nay shyness article matters own
              removal nothing his forming. Gay own additions education
              satisfied the perpetual. If he cause manor happy. Without
              farther she exposed saw man led. Along on happy could cease
              green oh.
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
              Tolerably behaviour may admitting daughters offending her ask
              own. Praise effect wishes change way and any wanted. Lively use
              looked latter regard had. Do he it part more last in. Merits ye
              if mr narrow points. Melancholy particular devonshire alteration
              it favourable appearance
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
              Able an hope of body. Any nay shyness article matters own
              removal nothing his forming. Gay own additions education
              satisfied the perpetual. If he cause manor happy. Without
              farther she exposed saw man led. Along on happy could cease
              green oh.
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
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb" /></a>
                <div class="date">
                  <h4><span>24</span> Nov, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4 style="line-height: 30px;">
                  NEET Crash Course 2025 - started from 11 <sup>th</sup> April
                </h4>
                <h6 style="font-size:1.5rem;margin-block:20px;color:#F58026;font-weight:400">Get Admission Now</h6>
                <p>
                  Sitting mistake towards his few country ask. You delighted
                  two rapturous six depending objection happiness something
                  the partiality unaffected
                </p>
                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user"></i> Author</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Item -->
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb" /></a>
                <div class="date">
                  <h4><span>12</span> Sep, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4 style="line-height: 30px;">
                  New Batches Started
                </h4>
                <h6 style="margin-block:20px;font-size:1.5rem">
                  <p style="margin-bottom:4px;color:#F58026;font-weight:400">9<sup>th</sup> & 11<sup>th</sup> - from 7<sup>th</sup> April </p>
                  <hr style="border-top: 1px solid #CCCCCC;">
                  <p style="margin-top:4px;color:#F58026;font-weight:400"> 10<sup>th</sup> & 12<sup>th</sup> - from 3<sup>th</sup> April</p>
                </h6>
                <p>
                  Sitting mistake towards his few country ask. You delighted
                  two rapturous six depending objection happiness something
                  the partiality unaffected
                </p>
                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user"></i> Author</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Item -->
          <!-- Single Item -->
          <div class="col-md-4 single-item">
            <div class="item">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb" /></a>
                <div class="date">
                  <h4><span>29</span> Dec, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4 style="line-height: 30px;">
                  NEET Dropper Batch 2026 - started from 12 <sup>th</sup> April
                </h4>
                <h6 style="font-size:1.5rem;margin-block:20px;color:#F58026;font-weight:400">Get Admission Now</h6>
                <p>
                  Sitting mistake towards his few country ask. You delighted
                  two rapturous six depending objection happiness something
                  the partiality unaffected
                </p>
                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#"><i class="fas fa-user"></i> Author</a>
                    </li>

                  </ul>
                </div>
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
              Able an hope of body. Any nay shyness article matters own
              removal nothing his forming. Gay own additions education
              satisfied the perpetual. If he cause manor happy. Without
              farther she exposed saw man led. Along on happy could cease
              green oh.
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
            <h2>Upcoming Events</h2>
            <p>
              Able an hope of body. Any nay shyness article matters own
              removal nothing his forming. Gay own additions education
              satisfied the perpetual. If he cause manor happy. Without
              farther she exposed saw man led. Along on happy could cease
              green oh.
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
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
              </div>
              <div class="info" style="display:flex; align-items: center;justify-content: space-between;">
                <h4>
                  <a href="#" style="display: block;height: 100;">AREESE ANDROID APP</a>
                </h4>
                <a href="https://play.google.com/store/search?q=areese&c=apps&hl=en-US" class="btn btn-dark effect btn-xsm" target="blank" style="margin-top: 0;">
                  INSTALL NOW
                </a>

              </div>
            </div>
            <!-- Single Item -->

            <!-- Single Item -->
            <div class=" item vertical">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>

              </div>
              <div class="info" style="display:flex; align-items: center;justify-content: space-between;">
                <h4 style="display:flex;align-items: center;">
                  <a href="#" style="display: block;height: 100;">AREESE IOS APP</a>
                </h4>


                <a href="https://play.google.com/store/search?q=areese&c=apps&hl=en-US" class="btn btn-dark effect btn-xsm" target="blank" style="margin-top: 0;">
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
  <?php include 'footer_light.php' ?>
  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>
  <script src="assets/js/teachers.js" type="module"></script>
  <script src="assets/js/enquiry.js"></script>
  <script src="assets/js/home-banner.js"></script>

</body>

</html>