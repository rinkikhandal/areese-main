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
  <div class="banner-area content-top-heading text-normal heading-weight-600 auto-height">
    <div id="bootcarousel" class="carousel slide animate_text" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner text-light">
        <div class="item active">
          <div class="box-table bg-fixed shadow dark" style="background-image: url(assets/img/students.jpg)">
            <div class="box-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <div class="content">
                      <h1 data-animation="animated fadeInUp">
                        Learn from the bigest online <span>courses</span>
                      </h1>
                      <p data-animation="animated fadeInUp">
                        Supposing breakfast day fulfilled off depending
                        questions. Whatever boy her exertion his extended.
                        Ecstatic followed handsome drawings entirely mrs one
                        yet outweigh. Of acceptance insipidity remarkably is
                        invitation.
                      </p>
                      <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="#">View Courses</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box-table shadow bg-fixed dark" style="background-image: url(assets/img/teaching.jpg)">
            <div class="box-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <div class="content">
                      <h1 data-animation="animated fadeInUp">
                        Let's explore our <span>brilliant</span> graduates
                      </h1>
                      <p data-animation="animated fadeInUp">
                        Supposing breakfast day fulfilled off depending
                        questions. Whatever boy her exertion his extended.
                        Ecstatic followed handsome drawings entirely mrs one
                        yet outweigh. Of acceptance insipidity remarkably is
                        invitation.
                      </p>
                      <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="#">View Courses</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="box-table bg-fixed shadow dark" style="background-image: url(assets/img/students.jpg)">
            <div class="box-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <div class="content">
                      <h1 data-animation="animated fadeInUp">
                        Join the biggest online <span>free resources</span>
                      </h1>
                      <p data-animation="animated fadeInUp">
                        Supposing breakfast day fulfilled off depending
                        questions. Whatever boy her exertion his extended.
                        Ecstatic followed handsome drawings entirely mrs one
                        yet outweigh. Of acceptance insipidity remarkably is
                        invitation.
                      </p>
                      <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="#">View Courses</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Wrapper for slides -->

      <!-- Left and right controls -->
      <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
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
              <p>
                With the legacy of over 10 years AREESE institute has been guiding students aspiring to crack the JEE and NEET and has also produced remarkable results in this field as well. We adopt a holistic approach for our students to not only develop academically but also in other fields in life. With a team of experienced and qualified teachers, we provide a comprehensive curriculum that covers all aspects of the subjects we teach.
              </p>
              <p>
                Curiosity incommode now led smallness allowance. Favour bed
                assure son things yet. She consisted consulted elsewhere
                happiness disposing household any old the. Widow downs In no
                impression assistance contrasted. Manners she wishing justice
                hastily new anxious. At discovery discourse departure
                objection we. Few extensive add delighted tolerably sincerity
                her. Law ought him least enjoy decay one quick court. Expect
                warmly its tended garden him esteem had remove off. Effects
                dearest staying now sixteen nor improve. Delightful unreserved
                impossible few estimating men favorable see entreaties. She
                propriety immediate was improving.
              </p>
            </div>
          </div>
        </div>
        <!-- End Our Features -->

        <!-- End Home Sidebar -->
        <div class="col-md-4 home-sidebar for_margin">
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
    </div>
  </div>
  <!-- End Our Features & Latest Post -->

  <!-- Start Popular Courses 
    ============================================= -->
  <div class="popular-courses bg-gray circle carousel-shadow default-padding">
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
            <!-- Single Item -->
            <!-- <div class="item">
                <div class="thumb">
                  <a href="#">
                    <img src="assets/img/800x600.png" alt="Thumb" />
                  </a>
                  <div class="overlay">
                    <a class="btn btn-theme effect btn-sm" href="#">
                      <i class="fas fa-chart-bar"></i> Enroll Now
                    </a>
                  </div>
                </div>
                <div class="info">
                  <div class="author-info">
                    <div class="thumb">
                      <a href="#"
                        ><img src="assets/img/100x100.png" alt="Thumb"
                      /></a>
                    </div>
                    <div class="others">
                      <a href="#">Akua Paul</a>
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>5 (1,890)</span>
                      </div>
                    </div>
                  </div>
                  <h4><a href="#">Social Science & Humanities</a></h4>
                  <div class="cats">
                    <a href="#">Social</a>
                    <a href="#">Online</a>
                  </div>
                  <p>
                    Would day nor ask walls known. But preserved advantage are
                    but and certainty earnestly enjoyment.
                  </p>
                  <div class="bottom-info">
                    <ul>
                      <li><i class="fas fa-user"></i> 6,690</li>
                      <li><i class="fas fa-clock"></i> 16:00</li>
                    </ul>
                    <div class="price-btn">$12.00</div>
                  </div>
                </div>
              </div> -->
            <!-- End Single Item -->
            <!-- Single Item -->
            <!-- <div class="item">
                <div class="thumb">
                  <a href="#">
                    <img src="assets/img/800x600.png" alt="Thumb" />
                  </a>
                  <div class="overlay">
                    <a class="btn btn-theme effect btn-sm" href="#">
                      <i class="fas fa-chart-bar"></i> Enroll Now
                    </a>
                  </div>
                </div>
                <div class="info">
                  <div class="author-info">
                    <div class="thumb">
                      <a href="#"
                        ><img src="assets/img/100x100.png" alt="Thumb"
                      /></a>
                    </div>
                    <div class="others">
                      <a href="#">Jon Babu</a>
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.7 (890)</span>
                      </div>
                    </div>
                  </div>
                  <h4><a href="#">Actualized Leadership Network</a></h4>
                  <div class="cats">
                    <a href="#">Online</a>
                    <a href="#">Source</a>
                  </div>
                  <p>
                    Would day nor ask walls known. But preserved advantage are
                    but and certainty earnestly enjoyment.
                  </p>
                  <div class="bottom-info">
                    <ul>
                      <li><i class="fas fa-user"></i> 8,690</li>
                      <li><i class="fas fa-clock"></i> 126:00</li>
                    </ul>
                    <div class="price-btn">Free</div>
                  </div>
                </div>
              </div> -->
            <!-- End Single Item -->
            <!-- Single Item -->
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
                <!-- <i class="fa-solid fa-book-open"></i> -->
                <h3>AREESE Career Institute</h4>
                  <p class="card-text">Offline Class</p>
                  <h5 class="card-text">NEET ∣ JEE</h5>
                  <hr />
                  <p class="">Foundation ∣ Pre-Foundation</p>
                  <p class="">NTSE ∣ Olympiad ∣ Boards</p>
                  <p class=" mb-2">( Science ∣ Commerce )</p>
                  <a href="http://www.bestinstituteforboardexam.com/" target="blank" class="btn btn-outline">More details</a>
              </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="item">
              <div class="thumb">
                <a href="#">
                  <img src="assets/img/online.jpg" alt="Thumb" />
                </a>
                <!-- <div class="overlay">
                  <a class="btn btn-theme effect btn-sm" href="#">
                    <i class="fas fa-chart-bar"></i> Enroll Now
                  </a>
                </div> -->
              </div>
              <hr>
              <div class="card-body info text-center">
                <!-- <i class="fa-solid fa-desktop"></i> -->
                <h3>AREESE Online Classes</h4>
                  <br>
                  <p class="card-text">Online Class</p>

                  <h5 class="card-text">NEET ∣ JEE</h5>
                  <hr />
                  <p class="">Foundation ∣ Pre-Foundation</p>
                  <p>NTSE ∣ Olympiad ∣ Board</p>
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
                <!-- <div class="overlay">
                  <a class="btn btn-theme effect btn-sm" href="#">
                    <i class="fas fa-chart-bar"></i> Enroll Now
                  </a>
                </div> -->
              </div>
              <hr>

              <div class="card-body info text-center ">
                <!-- <i class="fa-solid fa-school"></i> -->
                <h3 class="card-title">AREESE Gurukulam</h4>

                  <p class="card-text">
                    Pay after Selection Batch <br />
                    for
                  </p>
                  <h5 class="card-text">NEET ∣ JEE</h5>
                  <hr />

                  <p class="">Foundation ∣ Olympiad</p>
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
              <a href="#">
                <!-- <i class="flaticon-feature"></i> -->
                <!-- <img src="assets/img/1.png" alt="" style="width:40px"> -->
                <div class="info">
                  <h4>AREESE Super 30 Batch</h4>
                  <span>(Free accommodation and food)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-2.jpg)">
              <a href="#">
                <!-- <i class="flaticon-interaction"></i> -->
                <!-- <img src="assets/img/1.png" alt=""> -->
                <div class="info">
                  <h4>Pay after Selection Batch</h4>
                  <span>(Pay Fee after selection)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-3.jpg)">
              <a href="#">
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
              <a href="#">
                <!-- <i class="flaticon-education"></i> -->
                <div class="info">
                  <h4>11<sup>th</sup> NEET Batch</h4>
                  <span>(11<sup>th</sup> academics + NEET syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-11.jpg)">
              <a href="#">
                <!-- <i class="flaticon-potential"></i> -->
                <div class="info">
                  <h4>11<sup>th</sup> JEE Main Batch</h4>
                  <span>(11<sup>th</sup> academics + JEE Main Syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-6.jpg)">
              <a href="#">
                <!-- <i class="flaticon-print"></i> -->
                <div class="info">
                  <h4>11<sup>th</sup> JEE Adv. Batch</h4>
                  <span>(11<sup>th</sup> academics + JEE Adv. Syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-14.jpg)">
              <a href="#">
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
              <a href="#">
                <!-- <i class=</a></div>"flaticon-firewall"></i> -->
                <div class="info">
                  <h4>12<sup>th</sup> NEET Batch</h4>
                  <span>(12<sup>th</sup> Board + NEET Syllabus)</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-9.png)">
              <a href="#">
                <!-- <i class="flaticon-artificial-intelligence"></i> -->
                <div class="info">
                  <h4>12<sup>th</sup> JEE Main Batch</h4>
                  <span>12<sup>th</sup> Board + JEE Main Syllabus</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-16.jpg)">
              <a href="#">
                <!-- <i class="flaticon-firewall"></i> -->
                <div class="info">
                  <h4>12<sup>th</sup> JEE Adv. Batch</h4>
                  <span>12<sup>th</sup> Board + JEE Adv. Syllabus</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 equal-height  ">
            <div class="item" style="background-image: url(assets/img/bg-batch/bg-batch-18.jpg)">
              <a href="#">
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
              <a href="#">
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
            <a class="popup-youtube video-play-button" href="https://www.youtube.com/watch?v=8GQTt50izkg">
              <i class="fa fa-play"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Video Area -->

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
                <div class="date">
                  <h4><span>27</span> Feb, 2019</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Social Science Humanities</a>
                </h4>
                <div class="meta">
                  <ul>
                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                  </ul>
                </div>
                <p>
                  Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                </p>
                <a href="#" class="btn btn-dark effect btn-xsm">
                  <i class="fas fa-chart-bar"></i> Book Now
                </a>
                <a href="#" class="btn btn-gray btn-xsm">
                  <i class="fas fa-ticket-alt"></i> 23 Available
                </a>
              </div>
            </div>
            <!-- Single Item -->

            <!-- Single Item -->
            <div class="item vertical">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                <div class="date">
                  <h4><span>12</span> Nov, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Schools United Nations</a>
                </h4>
                <div class="meta">
                  <ul>
                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                  </ul>
                </div>
                <p>
                  Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                </p>
                <a href="#" class="btn btn-dark effect btn-xsm">
                  <i class="fas fa-chart-bar"></i> Book Now
                </a>
                <a href="#" class="btn btn-gray btn-xsm">
                  <i class="fas fa-ticket-alt"></i> 5 Available
                </a>
              </div>
            </div>
            <!-- Single Item -->

            <!-- Single Item -->
            <div class="item vertical">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                <div class="date">
                  <h4><span>14</span> Feb, 2019</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Actualized Leadership Network</a>
                </h4>
                <div class="meta">
                  <ul>
                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                  </ul>
                </div>
                <p>
                  Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                </p>
                <a href="#" class="btn btn-dark effect btn-xsm">
                  <i class="fas fa-chart-bar"></i> Book Now
                </a>
                <a href="#" class="btn btn-gray btn-xsm">
                  <i class="fas fa-ticket-alt"></i> 34 Available
                </a>
              </div>
            </div>
            <!-- Single Item -->

            <!-- Single Item -->
            <div class="item vertical">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                <div class="date">
                  <h4><span>18</span> Dec, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Conference on Art Business</a>
                </h4>
                <div class="meta">
                  <ul>
                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                  </ul>
                </div>
                <p>
                  Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                </p>
                <a href="#" class="btn btn-dark effect btn-xsm">
                  <i class="fas fa-chart-bar"></i> Book Now
                </a>
                <a href="#" class="btn btn-gray btn-xsm">
                  <i class="fas fa-ticket-alt"></i> 19 Available
                </a>
              </div>
            </div>
            <!-- Single Item -->

            <!-- Single Item -->
            <div class="item vertical">
              <div class="thumb">
                <a href="#"><img src="assets/img/800x600.png" alt="Thumb"></a>
                <div class="date">
                  <h4><span>22</span> Mar, 2019</h4>
                </div>
              </div>
              <div class="info">
                <h4>
                  <a href="#">Digital Learning Method</a>
                </h4>
                <div class="meta">
                  <ul>
                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                  </ul>
                </div>
                <p>
                  Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides.
                </p>
                <a href="#" class="btn btn-dark effect btn-xsm">
                  <i class="fas fa-chart-bar"></i> Book Now
                </a>
                <a href="#" class="btn btn-gray btn-xsm">
                  <i class="fas fa-ticket-alt"></i> 32 Available
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->

  <!-- Start Blog 
    ============================================= -->
  <div id="blog" class="blog-area circle default-padding bottom-less">
    <div class="container">
      <div class="row">
        <div class="site-heading text-center">
          <div class="col-md-8 col-md-offset-2">
            <h2>Latest News</h2>
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
                <h4>
                  <a href="#">Objection happiness something</a>
                </h4>
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
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
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
                <h4>
                  <a href="#">Meant to learn of vexed</a>
                </h4>
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
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
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
                <h4>
                  <a href="#">Delightful up dissimilar</a>
                </h4>
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
                    <li>
                      <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
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



  <!-- Start Footer 
    ============================================= -->
  <?php include 'footer_light.php' ?>
  <!-- End Footer -->

  <!-- jQuery Frameworks
    ============================================= -->
  <?php include "./jquery-links.php" ?>

</body>

</html>