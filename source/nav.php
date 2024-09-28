<header id="home">
  <!-- Start Navigation -->
  <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">
    <!-- Start Top Search -->
    <!-- <div class="container">
          <div class="row">
            <div class="top-search">
              <div class="input-group">
                <form action="#">
                  <input
                    type="text"
                    name="text"
                    class="form-control"
                    placeholder="Search"
                  />
                  <button type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div> -->
    <!-- End Top Search -->

    <div class="container">
      <!-- Start Atribute Navigation -->
      <div class="attr-nav">
        <ul>
          <li class="side-menu">
            <a href="#"><i class="fa fa-bars"></i></a>
          </li>
        </ul>
      </div>
      <!-- End Atribute Navigation -->

      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">
          <img src="assets/img/logo.png" class="logo" alt="Logo" style="height:45px" />
        </a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
          <li class="dropdown">
            <a href="./index-2.php" class="active" data-toggle="">Home</a>
            <!-- <ul class="dropdown-menu">
                  <li><a href="index.html">Home Version One</a></li>
                  <li><a href="index-2.html">Home Version Two</a></li>
                  <li><a href="index-3.html">Home Version Three</a></li>
                  <li><a href="index-4.html">Home Version Four</a></li>
                  <li><a href="index-5.html">Home Version Five</a></li>
                  <li><a href="index-6.html">Home Version Six</a></li>
                  <li>
                    <a href="index-7.html"
                      >Home Version Serven <span class="badge">New</span></a
                    >
                  </li>
                  <li><a href="index-onepage.html">Onepage Version One</a></li>
                  <li>
                    <a href="index-2-onepage.html">Onepage Version Two</a>
                  </li>
                  <li>
                    <a href="index-3-onepage.html">Onepage Version Three</a>
                  </li>
                  <li>
                    <a href="index-4-onepage.html">Onepage Version Four</a>
                  </li>
                  <li>
                    <a href="index-5-onepage.html">Onepage Version Five</a>
                  </li>
                  <li>
                    <a href="index-6-onepage.html">Onepage Version Six</a>
                  </li>
                </ul> -->
          </li>
          <li class="dropdown megamenu-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission</a>
            <ul class="dropdown-menu megamenu-content" role="menu">
              <li>
                <div class="row">
                  <div class="col-menu col-md-3">
                    <h6 class="title">Gallery</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li>
                          <a href="gallery-2-colum.html">Gallery Two Colum</a>
                        </li>
                        <li>
                          <a href="gallery-3-colum.html">Gallery Three Colum</a>
                        </li>
                        <li>
                          <a href="gallery-4-colum.html">Gallery Four Colum</a>
                        </li>
                        <li>
                          <a href="gallery-6-colum.html">Gallery Six Colum</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-menu col-md-3">
                    <h6 class="title">Advisor</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li>
                          <a href="advisor-carousel.html">Advisor Carousel</a>
                        </li>
                        <li>
                          <a href="advisor-2-colum.html">Advisor Two Colum</a>
                        </li>
                        <li>
                          <a href="advisor-3-colum.html">Advisor Three Colum</a>
                        </li>
                        <li>
                          <a href="advisor-carousel-2.html">Advisor Carousel Two</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-menu col-md-3">
                    <h6 class="title">User Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="profile.php">Profile</a></li>
                        <li>
                          <a href="edit-profile.php">Edit Profile</a>
                        </li>
                        <li>
                          <?php
                          if (isset($_SESSION["user_username"])) {
                          ?>
                            <a class="logout" href="./assets/db/logout.inc.php">
                              logout
                            </a>
                          <?php
                            // echo $_SESSION["user_username"];
                          } else {
                          ?>
                            <a class="popup-with-form" href="#login-form">
                              login
                            </a>

                          <?php
                          }
                          ?>
                        </li>
                        <!-- <li><a class="popup-with-form" href="#login-form">login</a></li> -->
                        <li><a class="popup-with-form" href="#register-form">register</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                  <div class="col-menu col-md-3">
                    <h6 class="title">Other Pages</h6>
                    <div class="content">
                      <ul class="menu-col">
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li>
                          <a href="pricing-table.html">Pricing Table</a>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="404.html">Error Page</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end col-3 -->
                </div>
                <!-- end row -->
              </li>
            </ul>
          </li>
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Courses</a>
            <ul class="dropdown-menu">
              <li><a href="courses.html">Courses Carousel One</a></li>
              <li><a href="courses-2.html">Courses Grid One</a></li>
              <li><a href="courses-3.html">Courses Grid Two</a></li>
              <li><a href="courses-4.html">Courses Carousel Two</a></li>
              <li><a href="course-details.html">Course Details</a></li>
            </ul>
          </li> -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Faculty</a>
            <ul class="dropdown-menu">
              <li><a href="teachers.html">Advisor</a></li>
              <li><a href="teachers-details.html">Advisor Details</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Results</a>
            <ul class="dropdown-menu">
              <li><a href="event.html">Event Mixed Colum</a></li>
              <li><a href="event-2.html">Event Grid Colum</a></li>
              <li><a href="event-3.html">Event Carousel</a></li>
            </ul>
          </li>
          <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                  >Blog</a
                >
                <ul class="dropdown-menu">
                  <li><a href="blog-standard.html">Blog Standard</a></li>
                  <li>
                    <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                  </li>
                  <li>
                    <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                  </li>
                  <li>
                    <a href="blog-single-standard.html">Single Standard</a>
                  </li>
                  <li>
                    <a href="blog-single-left-sidebar.html"
                      >Single Left Sidebar</a
                    >
                  </li>
                  <li>
                    <a href="blog-single-right-sidebar.html"
                      >Single Right Sidebar</a
                    >
                  </li>
                </ul>
              </li> -->
          <li>
            <a href="contact.php">contact</a>
          </li>
          <li>
            <a href="blog-standard.php">Blog & Downloads</a>
          </li>
          <li>
            <a href="about-us.php">About Us</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>

    <!-- Start Side Menu -->
    <div class="side">
      <a href="#" class="close-side"><i class="fa fa-times"></i></a>
      <div class="widget">
        <h4 class="title">Users Pages</h4>
        <div class="profile-thumb">
          <img src=<?php
                    if (isset($_SESSION["user"]) && !empty($_SESSION["user"]["image"]) && $_SESSION["user"]["image"] !== "null") {
                      echo $_SESSION["user"]["image"];
                    } else {
                      echo "assets/img/800x800.png";
                    }
                    ?> alt="Profile" style="margin-bottom:5px;object-fit:cover;height:100%">

          <h5 class="username"><?php
                                if (isset($_SESSION["user"])) {
                                  $username = $_SESSION["user"]["username"];
                                  echo $username;
                                } else {
                                  echo "username";
                                }
                                ?></h5>
        </div>
        <ul>
          <li><a href="./profile.php">Profile</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Recent Order</a></li>
          <li><a href="./edit-profile.php">Edit Profile</a></li>
          <li>
            <?php if (isset($_SESSION["user"])) {
            ?>
              <a class="logout" href="./assets/db/logout.inc.php">
                Logout
              </a>
            <?php
              // echo $_SESSION["user_username"];
            } else {
            ?>
              <a class="popup-with-form" href="#login-form">
                Login
              </a>

            <?php
            }
            ?>
          </li>
        </ul>
      </div>
      <div class="widget">
        <h4 class="title">Additional Links</h4>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Rating</a></li>
          <li><a href="#">Popular Courses</a></li>
        </ul>
      </div>
      <div class="widget social">
        <h4 class="title">Connect With Us</h4>
        <ul class="link">
          <li class="facebook">
            <a href="https://www.facebook.com/AreeseCareerInstitute"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="linkedin">
            <a href="https://www.linkedin.com/company/areese/"><i class="fa-brands fa-linkedin-in fa-lg"></i></a>
          </li>
          <li class="instagram">
            <a href="https://www.instagram.com/areesecareerinstitute/" style="
              background-color: #E43187;
              color: #ffffff;"><i class="fa-brands fa-instagram fa-lg"></i></a>
          </li>
          <li class="youtube">
            <a href="https://www.youtube.com/channel/UCFHdtG7aSLjA4FjXgw-0XBA" style="background-color: #f70f1b;
              color: #ffffff;"><i class="fa-brands fa-youtube fa-lg"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Side Menu -->
  </nav>
  <!-- End Navigation -->
</header>