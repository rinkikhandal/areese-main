<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'links.php'?>
  </head>

  <body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
  <?php include 'header_top.php'; ?>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <?php include 'header.php'; ?>
    <!-- End Header -->

    <!-- Start Login Form 
    ============================================= -->
   <?php include 'login.php'; ?>
    <!-- End Login Form -->

    <!-- Start Register Form 
    ============================================= -->
   <?php include 'register.php'; ?>
    <!-- End Register Form -->


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Info
    ============================================= -->
    <div class="contact-info-area default-padding">
      <div class="container">
        <div class="row">
          <!-- Start Contact Info -->
          <div class="contact-info">
            <div class="col-md-4 col-sm-4">
              <div class="item">
                <div class="icon">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="info">
                  <h4>Call Us</h4>
                  <span> +91 76100 76200</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="item">
                <div class="icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info">
                  <h4>Address</h4>
                  <span
                    >80/4, 2nd floor, Rathore Tower,Opp. Sanganer Bus
                    Depot,Pratap Nagar, Jaipur 302033</span
                  >
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="item">
                <div class="icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                  <h4>Email Us</h4>
                  <span>info@areese.org</span>
                </div>
              </div>
            </div>
          </div>
          <!-- End Contact Info -->

          <div class="seperator col-md-12">
            <span class="border"></span>
          </div>

          <!-- Start Maps & Contact Form -->
          <div class="maps-form">
            <div class="col-md-6 maps">
              <h3>Our Location</h3>
              <div class="google-maps">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.3271610353772!2d75.8124587752107!3d26.797709565023695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc98ef05a4ef3%3A0x4962f01cb814885f!2zQVJFRVNFKOCkheCksOClgOCknCk!5e0!3m2!1sen!2sin!4v1713592152469!5m2!1sen!2sin"
                  width="600"
                  height="450"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
            <div class="col-md-6 form">
              <div class="heading">
                <h3>Contact Us</h3>
                <p>
                  Occasional terminated insensible and inhabiting gay. So know
                  do fond to half on. Now who promise was justice new winding
                </p>
              </div>
              <form
                action="assets/mail/contact.php"
                method="POST"
                class="contact-form"
              >
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Name"
                        type="text"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email*"
                        type="email"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group">
                      <input
                        class="form-control"
                        id="phone"
                        name="phone"
                        placeholder="Phone"
                        type="text"
                      />
                      <span class="alert-error"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group comments">
                      <textarea
                        class="form-control"
                        id="comments"
                        name="comments"
                        placeholder="Tell Me About Courses *"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <button type="submit" name="submit" id="submit">
                      Send Message <i class="fa fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
                <!-- Alert Message -->
                <div class="col-md-12 alert-notification">
                  <div id="message" class="alert-msg"></div>
                </div>
              </form>
            </div>
          </div>
          <!-- End Maps & Contact Form -->
        </div>
      </div>
    </div>
    <!-- End Contact Info -->

    <!-- Start Footer 
    ============================================= -->
    <?php include 'footer_dark.php'; ?>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
