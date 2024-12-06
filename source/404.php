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

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Error Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center content">
                    <h1>404</h1>
                    <h2>Sorry Page Was Not Found!</h2>
                    <p>
                        The page you are looking is not available or has been removed. Try going to Home Page by using the button below.
                    </p>
                    <a class="btn btn-dark effect btn-md" href="index-2.php">Back To Home</a>
                    <a class="btn btn-dark border btn-md" href="contact.php">Contact Us</a>
                    <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com/AreeseCareerInstitute" target="blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="linkedin">
                            <a href="https://www.linkedin.com/company/areese/" target="blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="instagram">
                            <a href="https://www.instagram.com/areesecareerinstitute/" style=" background-color: #e43187" target="blank">
                                <i class="fa-brands fa-instagram fa-lg"></i>
                            </a>
                        </li>
                        <li class="youtube">
                            <a href="https://www.youtube.com/channel/UCFHdtG7aSLjA4FjXgw-0XBA" style="background-color: #f70f1b;
              color: #ffffff;" target="blank"><i class="fa-brands fa-youtube fa-lg"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

    <!-- Start Footer 
    ============================================= -->
    <?php include 'footer_dark.php' ?>

    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <?php include "./jquery-links.php" ?>


</body>

</html>