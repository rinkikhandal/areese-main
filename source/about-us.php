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
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background:white;">
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
                                <h4>Super30 Batch</h4>
                                <a href="./super30-batch.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item java">
                            <div class="icon">
                                <i class="flaticon-book-2"></i>
                            </div>
                            <div class="info">
                                <h4>Pay After Selection Batch</h4>
                                <a href="./payAfter-batch.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item malachite">
                            <div class="icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="info">
                                <h4>Online Learning</h4>
                                <a href="./online-learning.php">Read More</a>
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
                    <div class="site-heading text-left site-heading-per">
                        <h2 style="" class="why-aree">Why choose us ?</h2>
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
                            <svg fill="#f58026" width="60px" height="60px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" style="border:1px solid #193759;padding: 10px;box-sizing: content-box;stroke-width: 0.5px;">
                                <path stroke-width="0.2px" d="M594.073 170.667c0-49.013-39.737-88.75-88.75-88.75-49.011 0-88.74 39.734-88.74 88.75s39.729 88.75 88.74 88.75c49.013 0 88.75-39.737 88.75-88.75zm40.96 0c0 71.635-58.075 129.71-129.71 129.71-71.633 0-129.7-58.074-129.7-129.71s58.067-129.71 129.7-129.71c71.635 0 129.71 58.075 129.71 129.71z" />
                                <path stroke-width="0.2px" d="M380.407 568.32V361.81c0-33.93 27.51-61.44 61.44-61.44h119.47c33.93 0 61.44 27.51 61.44 61.44v206.51c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V361.81c0-56.551-45.849-102.4-102.4-102.4h-119.47c-56.551 0-102.4 45.849-102.4 102.4v206.51c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48zm15.383 61.653H211.996l-84.759-84.749c-29.092-29.092-76.271-29.092-105.363.001-29.144 29.144-29.144 76.323-.051 105.415l106.639 106.639c14.263 14.277 33.393 21.908 53.212 21.76.121.009 158.154.028 158.154.028v192.512c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V758.587c0-11.311-9.169-20.48-20.48-20.48H182.247c-9.735.09-18.358-3.322-24.815-9.785L50.786 621.676c-13.096-13.096-13.096-34.341 0-47.438 13.148-13.148 34.392-13.148 47.489-.051l90.758 90.748a20.481 20.481 0 0014.481 5.998h191.503c.415.024.946.054 1.644.092h17.828c18.58 0 33.649 15.069 33.649 33.649v267.551c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V704.674c0-41.201-33.407-74.609-74.609-74.609h-17.054c-.415-.024-.946-.054-1.644-.092zm423.903 40.96c5.431 0 10.64-2.157 14.481-5.998l90.757-90.747c13.097-13.097 34.342-13.097 47.438-.001 13.148 13.148 13.148 34.392.051 47.489L865.781 728.315c-6.463 6.469-15.086 9.881-24.142 9.763-3.94.272-3.94.272-4.667.468.62-.173.62-.173 4.184-.439H662.898c-11.311 0-20.48 9.169-20.48 20.48v213.637c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V779.067h157.778c20.029.186 39.263-7.45 53.595-21.795l106.632-106.632c29.092-29.092 29.092-76.271 0-105.364-29.144-29.144-76.323-29.144-105.415-.051l-84.758 84.748H627.416l-1.644.092h-17.054c-41.201 0-74.609 33.407-74.609 74.609v267.551c0 11.311 9.169 20.48 20.48 20.48s20.48-9.169 20.48-20.48V704.674c0-18.58 15.069-33.649 33.649-33.649h17.828l1.644-.092h191.503z" />
                            </svg>
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
                            <svg fill="#f58026" width="60px" height="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 70 70" enable-background="new 0 0 70 70" xml:space="preserve" style="border:1px solid #193759;padding: 10px;box-sizing: content-box;stroke-width: 0.5px;">
                                <g>
                                    <path d="M34.801,33.099c6.73,0,10.252-9.981,10.252-15.332c0-6.3-4.6-11.426-10.252-11.426c-5.654,0-10.255,5.126-10.255,11.426
		C24.546,23.117,28.068,33.099,34.801,33.099z M34.801,10.341c3.453,0,6.252,3.324,6.252,7.426c0,4.1-2.799,11.332-6.252,11.332
		c-3.455,0-6.254-7.232-6.254-11.332C28.547,13.665,31.346,10.341,34.801,10.341z" />
                                    <path d="M45.1,40.093c-0.695-0.498-1.514-0.721-2.334-0.721c-0.745,0-1.492,0.224-2.148,0.642c-1.77,1.129-3.781,1.732-5.818,1.732
		c-2.036,0-4.048-0.592-5.818-1.721c-0.657-0.418-1.403-0.622-2.149-0.622c-0.819,0-1.638,0.252-2.333,0.751
		c-5.155,3.703-8.235,12.789-8.235,19.551c0,2.209,1.791,3.878,4,3.878h29.073c2.209,0,4-1.669,4-3.878
		C53.336,52.943,50.256,43.796,45.1,40.093z M20.263,59.583c0-6,2.613-13.46,6.568-16.3c2.343,1.49,5.063,2.35,7.968,2.35
		c2.906,0,5.627-0.859,7.967-2.35c3.955,2.84,6.57,10.3,6.57,16.3H20.263z" />
                                    <path d="M30.92,47.391c-0.606-0.244-1.203-0.553-1.771-0.915c-0.345-0.22-0.789-0.208-1.121,0.031
		c-3.064,2.203-4.432,5.424-4.432,10.443c0,0.553,0.448,1,1,1c0.553,0,1-0.447,1-1c0-4.061,0.93-6.625,3.086-8.423
		c0.486,0.273,0.984,0.515,1.49,0.719c0.514,0.205,1.096-0.041,1.302-0.554S31.433,47.598,30.92,47.391z" />
                                    <path d="M34.799,48.146c-0.335,0-0.666-0.018-0.994-0.048c-0.55-0.054-1.037,0.354-1.088,0.904s0.354,1.037,0.904,1.088
		c0.389,0.036,0.781,0.056,1.178,0.056c0.552,0,1-0.447,1-1S35.351,48.146,34.799,48.146z" />
                                    <path d="M57.867,40.813c-0.57-0.33-1.323-0.335-1.919-0.054c-0.261,0.123-1.244,0.375-1.772,0.51
		c-0.667,0.174-1.244,0.313-1.649,0.467c-1.034,0.39-1.556,1.526-1.167,2.56c0.388,1.033,1.54,1.523,2.576,1.138
		c0.204-0.077,0.778-0.288,1.24-0.405c0.539-0.141,1.003-0.386,1.402-0.503c3.129,2.494,5.531,9.058,6.139,13.058h-5.644
		c-1.104,0-2,0.896-2,2s0.896,2,2,2h7.794c1.104,0,2-0.649,2-1.754C66.867,54.111,63.361,44.01,57.867,40.813z" />
                                    <path d="M16.715,44.318c0.388-1.034-0.136-2.194-1.17-2.582c-0.127-0.048-0.212-0.127-0.438-0.305
		c-0.246-0.191-0.582-0.483-1.048-0.726c-0.607-0.316-1.334-0.359-1.927-0.014C6.639,43.888,3.133,54.111,3.133,59.83
		c0,1.104,0.896,1.753,2,1.753h3.94c1.104,0,2-0.896,2-2s-0.896-2-2-2H7.282c0.591-4,2.875-10.208,5.875-12.839
		c0.262,0.174,0.581,0.597,0.982,0.747C15.175,45.881,16.326,45.353,16.715,44.318z" />
                                    <path d="M19.706,36.096c0.199,0.025,0.422,0.039,0.661,0.039c1.701,0,4.289-0.72,6.104-3.442c0.613-0.919,0.364-2.161-0.555-2.773
		c-0.918-0.612-2.16-0.363-2.773,0.555c-1.204,1.807-2.813,1.67-2.952,1.651c-0.107-0.018-0.216-0.026-0.325-0.026
		c-1.539,0-4.252-5.395-4.252-9.332c0-2.992,1.907-5.426,4.252-5.426c1.104,0,2-0.896,2-2s-0.896-2-2-2
		c-4.55,0-8.252,4.229-8.252,9.426C11.614,27.417,14.682,35.918,19.706,36.096z" />
                                    <path d="M43.506,29.919c-0.92,0.612-1.168,1.854-0.555,2.f773c1.814,2.724,4.402,3.442,6.104,3.442c0.24,0,0.463-0.014,0.662-0.039
		c5.023-0.178,8.092-8.679,8.092-13.329c0-5.197-3.702-9.426-8.252-9.426c-1.105,0-2,0.896-2,2s0.895,2,2,2
		c2.344,0,4.252,2.434,4.252,5.426c0,3.938-2.713,9.332-4.252,9.332c-0.109,0-0.219,0.009-0.326,0.026
		c-0.016,0.006-1.702,0.222-2.951-1.651C45.666,29.555,44.425,29.304,43.506,29.919z" />
                                </g>
                            </svg>
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
                            <button data-filter=".ceremony">Ceremony</button>
                            <button data-filter=".students">Students</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-3">
                                <div class="pf-item ceremony students">
                                    <div class="item-effect">
                                        <img src=assets/img/gallery/pic-1.jpg alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/gallery/pic-1.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item teachers ceremony">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/pic-2.jpg" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/gallery/pic-2.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item campus education">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/pic-3.jpg" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/gallery/pic-3.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item education students">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/pic-4.jpg" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/gallery/pic-4.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony campus">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/pic-5.jpg" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/gallery/pic-5.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-item ceremony teachres">
                                    <div class="item-effect">
                                        <img src="assets/img/gallery/pic-6.jpg" alt="thumb" />
                                        <div class="overlay">
                                            <a href="assets/img/gallery/pic-6.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
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