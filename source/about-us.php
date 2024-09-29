<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <?php include "links.php" ?>

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
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row" style="display: grid;place-content: center;">
                <div class="about-info" style="max-width:1100px;">

                    <div class=" info">
                        <h5>Introduction</h5>
                        <h2>Welcome to AREESE Institute - A path of revolutionary learning</h2>
                        <p>
                            With the legacy of over 10 years, AREESE is now one of the leading institutes for NEET and JEE preparation. Founded in 2014 by a group of ex-CSRL SUPER-30 faculties, IITians, and NITians. Our mission is to provide unparalleled education and guidance to all students, so that we achieve 100% result in NEET & JEE.
                        </p>
                        <p>
                            Inspired by the legendary Super-30 model, where 30 students are rigorously prepared with a 100% success rate, AREESE adopts a unique approach to ensure every student excels. Adopting this proven approach, AREESE strives to ensure that each student, regardless of their starting point, receives the attention, resources, and mentorship they need to excel. By fostering an environment of rigorous academic training, individualized support, and unwavering commitment to student success, we maximize every learner's potential, ensuring that no one is left behind. At AREESE, every student matters, and every student succeeds.
                        </p>
                        <!-- <a href="#" class="btn btn-dark border btn-md">Read More</a> -->
                    </div>
                </div>
                <div class="seperator col-md-12">
                    <span class="border"></span>
                </div>
                <div class="our-features">
                    <div class="col-md-4 col-sm-4">
                        <div class="item mariner">
                            <div class="icon">
                                <i class="flaticon-faculty-shield"></i>
                            </div>
                            <div class="info">
                                <h4>Expert faculty</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item java">
                            <div class="icon">
                                <i class="flaticon-book-2"></i>
                            </div>
                            <div class="info">
                                <h4>Online learning</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item malachite">
                            <div class="icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="info">
                                <h4>Scholarship</h4>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Why Chose Us 
    ============================================= -->
    <div class="wcs-area bg-dark text-light">
        <div class="container-full">
            <div class="" style="display:grid; place-content:center; ">
                <!-- <div class="col-md-6 thumb bg-cover" style="background-image: url(assets/img/2440x1578.png);"></div> -->
                <div class="content" style="max-width:1000px;">
                    <div class="site-heading text-left">
                        <h2 style="" class="why-aree">Why choose us</h2>
                        <div class="underline"></div>
                        <p>
                            In today's competitive landscape, many institutes focus solely on their top students to produce top ranks, leaving average students behind. This, combined with large batch sizes, makes it nearly impossible to provide personal care and attention, resulting in lower overall selection percentages.
                        </p>
                        <p>
                            AREESE strives to ensure that each student, regardless of their starting point, receives the attention, resources, and mentorship they need to excel. By fostering an environment of rigorous academic training, individualized support, and unwavering commitment to student success, we maximize every learner's potential, ensuring that no one is left behind. At AREESE, every student matters, and every student succeeds.
                        </p>
                    </div>

                    <!-- item -->
                    <div class="item">
                        <div class="icon" style="">
                            <i class="flaticon-trending"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Personalized Care</a>
                            </h4>
                            <p>
                                We believe that each student’s learning journey is unique. Our approach ensures that every learner receives individualized attention, customized guidance, and ongoing support tailored to their specific academic needs and goals. Whether through one-on-one mentorship, targeted interventions, or bespoke learning plans, we strive to unlock each student’s full potential.
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item -->
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-books"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Small Batch Sizes</a>
                            </h4>
                            <p>
                                By maintaining intentionally small class sizes, we prioritize quality over quantity. This enables our dedicated educators to closely monitor each student’s progress, provide focused feedback, and offer personalized strategies that empower them to succeed. Our intimate learning environment fosters meaningful teacher-student interactions and ensures that no student gets overlooked.
                            </p>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item -->
                    <!-- <div class="item">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Certified Teachers</a>
                            </h4>
                            <p>
                                Absolute required of reserved in offering no. How sense found our those gay again taken the. Had mrs outweigh desirous sex overcame. Improved property reserved disposal do offering me.
                            </p>
                        </div>
                    </div> -->
                    <!-- item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->

    <!-- Start Advisor Area
    ============================================= -->
    <section id="advisor" class="advisor-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Experience Advisors</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="advisor-carousel owl-carousel owl-theme text-center text-light">

                        <!-- Single Item -->

                        <div class="info-box">
                            <img src="assets/img/800x800.png" alt="Thumb">
                            <div class="info-title">
                                <h4>Professon. Nuri Paul</h4>
                                <span>Chemistry specialist</span>
                            </div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <div class="overlay-content">
                                            <h4>About Nuri Paul</h4>
                                            <p>
                                                Great explorer of the truth, the master-builder of human happiness.
                                            </p>
                                            <a href="#">Read More</a>
                                            <div class="social">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Advisor Area -->

    <!-- Start Video Area
    ============================================= -->
    <div class="video-area padding-xl text-center bg-fixed text-light shadow dark-hard" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-heading">
                        <h2>Take a short tour in our campus</h2>
                        <p>
                            Tolerably behaviour may admitting daughters offending her ask own. Praise effect wishes change way and any wanted. Lively use looked latter regard had. Do he it part more last in. Merits ye if mr narrow points. Melancholy particular devonshire alteration it favourable appearance
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

    <!-- Start Portfolio
    ============================================= -->
    <div id="portfolio" class="portfolio-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Our Gallery</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".campus">Campus</button>
                            <button data-filter=".teachers">Teachers</button>
                            <button data-filter=".education">Education</button>
                            <button data-filter=".ceremony">Ceremony</button>
                            <button data-filter=".students">Students</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-3">
                                <div class="pf-item ceremony students">
                                    <div class="item-effect">
                                        <img src="assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item teachers ceremony">
                                    <div class="item-effect">
                                        <img src="assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item campus education">
                                    <div class="item-effect">
                                        <img src="assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item education students">
                                    <div class="item-effect">
                                        <img src="assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony campus">
                                    <div class="item-effect">
                                        <img src="assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony teachres">
                                    <div class="item-effect">
                                        <img src="assets/img/800x800.png" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

    <!-- Start Footer 
    ============================================= -->
    <?php include 'footer_dark.php' ?>

    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->

    <?php include "./jquery-links.php" ?>
    <script type="module" src="./assets/js/teachers.js"></script>

</body>

</html>