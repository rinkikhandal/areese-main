<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include './links.php';
    ?>
    <link rel="stylesheet" href="./assets/css/neet-result.css">

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
    <div class="neet-result ">
        <h1>NEET Results </h1>
        <div class="stu-res-div">
            <!-- =======Single Item======= -->
            <div class="single-res-stu">
                <img src="./assets/img/students.jpg" alt="">
            </div>

            <!-- =======End Of Single Item======= -->
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