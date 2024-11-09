<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include './links.php';
    ?>
    <link rel="stylesheet" href="./assets/css/teachers.css">

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
                    <h1>Faculty</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Faculty</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor Area
    ============================================= -->
    <section class="default-padding default-padding-per teachers-page">
        <div class="inner-container">

            <div class="advisor-items">

            </div>
        </div>

    </section>
    <!--End Advisor Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Students Review</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"
                    style="display:flex; justify-content:center;">
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

    <!-- Start Clients Area 
    ============================================= -->
    <div class="clients-area default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4 info">
                    <h4>Our largest education campus</h4>
                    <p>
                        Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves.
                    </p>
                </div>
                <div class="col-md-8 clients">
                    <div class="clients-items owl-carousel owl-theme text-center">
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/img/150x80.png" alt="Clients"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->

    <!-- Start Footer 
    ============================================= -->
    <?php include 'footer_dark.php' ?>

    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <?php include "./jquery-links.php" ?>
    <script src="assets/js/teachers.js" type="module"></script>


</body>

</html>