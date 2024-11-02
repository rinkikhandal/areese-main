<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include './links.php';
    ?>
    <link rel="stylesheet" href="./assets/css/result.css">

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
    <div class="results default-padding default-padding-side">
        <h2>NEET Results </h2>
        <div id="portfolio" class="portfolio-area ">
            <div class="container">
                <div class="portfolio-items-area text-center">
                    <div class="row">
                        <div class="col-md-12 portfolio-content">

                            <!-- End Mixitup Nav-->

                            <div class="row magnific-mix-gallery masonary text-light">
                                <div id="portfolio-grid" class="portfolio-items col-2">
                                    <div class="pf-item ceremony students">
                                        <div class="item-effect">
                                            <img src="./assets/img/result-poster.jpg" />
                                            <div class="overlay">
                                                <a href="./assets/img/result-poster.jpg" class="item popup-link"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pf-item ceremony students">
                                        <div class="item-effect">
                                            <img src="./assets/img/NEET-result.png" alt="thumb" />
                                            <div class="overlay">
                                                <a href="./assets/img/NEET-result.png" class="item popup-link"><i class="fa fa-expand"></i></a>
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

    </div>

    <!-- End Banner -->

    <!-- Start Footer 
    ============================================= -->
    <?php include 'footer_dark.php' ?>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <?php include "./jquery-links.php" ?>


</body>

</html>