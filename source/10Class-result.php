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
  <link rel="stylesheet" href="./assets/css/scroll-cards.css">

</head>
<style>
  @media (min-width: 768px) {
    .cards-with-scroll {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: 1fr;
      /* justify-content: center; */
    }
  }
</style>


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
          <h1>Results > 10<sup>th</sup> Class</h1>
          <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></i> Results</a></li>
            <li><a href="#">Page</a></li>
            <li class="active">10<sup>th</sup> Class</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb -->


  <!-- Start of scroll cards=============== -->
  <div class="default-padding default-padding-per cards-with-scroll " style="margin: 50px auto;">
    <section>
      <div>
        <svg fill="#f58026" height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 311.027 311.027" xml:space="preserve">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <g>
                <path d="M283.587,39.151h-43.414V18h5.341c4.971,0,9-4.029,9-9s-4.029-9-9-9h-14.341H79.854H65.513c-4.971,0-9,4.029-9,9 s4.029,9,9,9h5.341v21.15H27.44c-4.971,0-9,4.029-9,9c0,39.227,21.649,74.508,56.555,92.322 c8.552,26.301,29.643,46.985,56.194,54.965c-0.012,0.192-0.029,0.382-0.029,0.576v73.012h-8.649 c-18.198,0-33.003,14.805-33.003,33.002c0,4.971,4.029,9,9,9h114.011c4.971,0,9-4.029,9-9c0-18.198-14.805-33.002-33.003-33.002 h-8.649v-73.012c0-0.195-0.017-0.385-0.029-0.576c26.551-7.979,47.642-28.664,56.194-54.964 c34.905-17.814,56.555-53.096,56.555-92.322C292.587,43.18,288.558,39.151,283.587,39.151z M36.904,57.15h33.95v57.207 c0,0.835,0.039,1.661,0.063,2.491C51.726,102.624,39.387,81.119,36.904,57.15z M188.516,287.026c4.899,0,9.257,2.36,11.996,6.002 h-89.998c2.739-3.643,7.098-6.002,11.996-6.002H188.516z M149.16,269.026v-70.273c2.1,0.157,4.214,0.263,6.354,0.263 s4.253-0.106,6.354-0.263v70.273H149.16z M222.172,114.357c0,36.756-29.903,66.659-66.659,66.659 c-36.756,0-66.659-29.903-66.659-66.659V18h133.318V114.357z M240.11,116.848c0.024-0.83,0.063-1.656,0.063-2.491V57.15h33.95 C271.64,81.119,259.301,102.623,240.11,116.848z"></path>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <div>
        <h4>
          Our Yearly Growth
        </h4>
        <p>We at AREESE only have one motto ,i.e., to grow every day and do better than the last. You can see for yourself</p>
        <span>
          <a href="#growth">more details</a>
          <!-- <i class="fa-solid fa-chevron-right"></i> -->
        </span>
      </div>
    </section>

    <section>
      <div>
        <svg height="60px" width="60px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 502.665 502.665" xml:space="preserve" style="margin-top: -18px;">
          <g>
            <g>
              <g>
                <path style="fill:#f58026;" d="M466.965,41.006H275.783c2.092-3.926,3.581-8.197,3.581-12.964C279.364,12.554,266.81,0,251.322,0
				S223.28,12.554,223.28,28.042c0,4.767,1.488,9.017,3.581,12.964H35.744c-14.237,0-25.799,11.605-25.799,25.799v284.389
				c0,14.194,11.562,25.82,25.777,25.82h156.28l-30.35,107.056c-2.114,7.42,2.351,14.668,9.944,16.049l12.08,2.308
				c7.593,1.402,15.509-3.516,17.602-10.893l32.486-114.541h35.16l32.507,114.519c2.071,7.399,10.03,12.317,17.602,10.893
				l12.015-2.308c7.593-1.381,12.058-8.628,9.944-16.049l-30.35-107.034h156.323c14.15,0,25.755-11.627,25.755-25.82V66.805
				C492.721,52.633,481.137,41.006,466.965,41.006z M443.647,326.711H58.975V85.981h384.672V326.711z" />
                <path style="fill:#f58026;" d="M104.317,286.309c11.044,0,19.996-8.952,19.996-19.996c0-2.006-0.582-3.818-1.143-5.63
				c25.54-20.6,70.687-56.925,91.244-72.758c3.257,2.286,7.01,3.926,11.282,3.926c3.538,0,6.687-1.165,9.577-2.783
				c13.223,11.238,35.7,30.35,51.684,43.918c-0.216,1.143-0.69,2.2-0.69,3.408c0,11.066,8.973,20.018,20.018,20.018
				c11.087,0,20.039-8.952,20.039-20.018c0-1.963-0.582-3.732-1.122-5.522l51.662-46.614c2.783,1.445,5.803,2.481,9.146,2.481
				c11.044,0,19.975-8.952,19.975-19.996c0-11.023-8.93-19.975-19.975-19.975c-11.044,0-19.975,8.952-19.975,19.975
				c0,2.632,0.561,5.112,1.488,7.42c-14.431,13.029-36.713,33.133-50.605,45.687c-3.128-2.006-6.644-3.494-10.634-3.494
				c-4.702,0-8.844,1.877-12.252,4.595c-13.201-11.217-34.535-29.336-49.721-42.236c0.798-2.157,1.381-4.422,1.381-6.838
				c0-11.044-8.952-19.975-19.975-19.975s-19.996,8.952-19.996,19.996c0,2.438,0.582,4.702,1.381,6.838l-91.719,71.356
				c-3.192-2.2-6.881-3.775-11.066-3.775c-11.044,0-19.996,8.952-19.996,19.996C84.321,277.357,93.273,286.309,104.317,286.309z" />
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </g>
        </svg>
      </div>
      <div>
        <h4>
          10<sup>th</sup> Class Results
        </h4>
        <p>Over Years AREESE has succeeded in helping many students achieve their dreams and aspirations. We are proud of them. Take a look. </p>
        <span>
          <a href="#result">more details</a>
          <!-- <i class="fa-solid fa-chevron-right"></i> -->
        </span>
      </div>

    </section>

  </div>


  <!-- end of scroll cards=============== -->


  <!-- Start Banner 
    ============================================= -->
  <div class="results default-padding ">
    <h2 class="headings">10<sup>th</sup> Class Results </h2>
    <div class="inner-container">
      <Article style="margin-bottom: 70px;" id="growth">
        <img src="./assets/img/10th-growth.png" alt="growth">
      </Article>
      <Article id="result">
        <img src="./assets/img/12-main-result.jpg" alt="results">
      </Article>

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
  <script src="./assets/js/cards-scroll.js"></script>


</body>

</html>