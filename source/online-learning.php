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
          <h1>Online Learning</h1>
          <!-- <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#">Page</a></li>
            <li class="active">About</li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->

  
  
  
  <!-- Main Content 
  ============================================= -->
  <div class="about-area default-padding">
    <h2 style="text-align: center;">Coming Soon...</h2>
  </div>


  <!-- End Main Content 
    ============================================= -->
  

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