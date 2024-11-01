<?php
require_once './assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  include './links.php';
  ?>
  <link rel="stylesheet" href="./assets/css/residential-batches.css">

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
  <div class=" ">
    <div class="bg-img default-padding box-table bg-fixed shadow dark" style="background-image:url(assets/img/areese-hostel.jpg) ;">
      <div class="box-cell">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="content">
                <h1 data-animation="animated fadeInUp">
                  AREESE Pay After Selection <span>Residential Campus</span>
                </h1>
                <p data-animation="animated fadeInUp">
                  Supposing breakfast day fulfilled off depending
                  questions. Whatever boy her exertion his extended.
                  Ecstatic followed handsome drawings entirely mrs one
                  yet outweigh. Of acceptance insipidity remarkably is
                  invitation.
                </p>
                <a data-animation="animated fadeInDown" class="btn circle btn-light effect btn-md" href="#">View Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Online Registration -->
      <div class="sidebar-item online-registration">
        <h4>Enquiry Form</h4>
        <div class="reg-form">
          <form action="./assets/db/query.inc.php" class="enquiry-form" method="POST">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" placeholder="Name*" type="text" name="username" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" placeholder="Email*" type="email" name="email" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" placeholder="Phone*" type="tel" name="phone" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" placeholder="Enter your query*" type="text" name="query"></textarea>
                </div>
              </div>
              <!-- Alert Message -->
              <div class="col-md-12 alert-notification" style="display:flex;justify-content:center">
                <div class="form-group" style="width:90%">
                  <div id="enquiry-message" class="alert-msg">
                  </div>
                </div>
              </div>
              <!-- End Alert Message -->


              <div class="col-md-12">
                <button class="button-sm button-theme" id="enquiry-submit" type="submit">
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Online Registration -->

    </div>

    <div class="about-residential default-padding default-padding-per ">
      <h2>About Pay After Selection Batch</h2>
      <div style="" class="  inner-container">
        <p>
          Every student, regardless of the coaching center they attend, pays a substantial amount in coaching fees with the hope of securing a good rank in competitive exams like JEE and NEET. However, during the preparation for these exams, coaching institutes often focus more on students who perform well in tests, leaving behind those who are underperforming. This lack of attention towards struggling students reduces their chances of selection in JEE or NEET. Consequently, the selection percentage of these coaching centers in competitive exams remains low.
        </p>

        <p>This model makes the coaching institute’s faculty and management more accountable and equally responsible for every student, regardless of their test performance. In fact, it motivates the faculty and management to focus more on underperforming students to ensure their success, as the coaching institute will not receive any payment if a student is not selected. In this scenario, the student’s success becomes the coaching institute’s success, and their failure becomes the institute’s failure as well.</p>

        <p>After thoroughly analyzing this issue and understanding how to improve selection rates in NEET and JEE, we have developed the ‘Pay after Selection Batch’. As the name suggests, in this batch, students are only required to pay fees after being selected in JEE or NEET. Yes, you read that right! Parents and students only need to pay if the student is selected, meaning there are no fees to be paid if the student does not succeed.</p>

        <p> This collective effort from the faculty, management, and students will significantly enhance the chances of students achieving their dreams and securing a good rank in competitive exams like JEE and NEET.
        </p>
      </div>

    </div>

    <!-- courses offered======== -->
    <div class="about-residential default-padding default-padding-per courses-offer-super30 ">
      <h2>Pay After Selection Batch</h2>
      <div style="" class="inner-container card-holder">
        <!-- Single Item -->
        <section class="cards" style="  ">
          <div class="upper-part">
            <h4>TWO YEAR TARGET COURSE(for 11<sup>th</sup> class)</h4>

            <p style="margin-top:-15px;">(10<sup>th</sup> to 11<sup>th</sup> Moving Students)</p>

            <p>इस प्रोग्राम के माध्यम से के छात्रों को भारत के किसी भी सरकारी मेडिकल कॉलेज में MBBS की सीट मिलने के बाद और JEE के छात्रों को IIT/NIT/Reputed कॉलेजों में सीट मिलने के बाद ही फीस का भुगतान करना होगा।/p>

            <h5>About the course</h5>
            <p>Our Two-Year Programme covers the entire syllabus of class 11th and 12th according to the latest syllabus of NEET/JEE (Main & Advanced), CBSE, and State Boards. It builds a solid foundation for these competitive exams. We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET/JEE.</p>

            <h5>Syllabus Covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p> Two Years</p>
            <h5>Eligibility</h5>
            <p>10<sup>th</sup> pass</p>
            <h5>Family Income</h5>
            <p>Less than 3 Lacs per annum (Background Verification by Vigilance team)</p>
            <h5>Selection Procedure</h5>

            <p>
            <ol style="list-style: decimal;list-style-position: inside;">
              <li><strong style="color:#002147">
                  Written test:
                </strong></li>
              <p>MCQ with Negative Marking (+4) and (-1)</p>
              <p>
                <span style="color: #f58026;">Subject:</span> Aptitude, Phy, Chem, Maths & Bio, according to respective NEET & JEE Courses.
              </p>
              <li><strong style="color:#002147">
                  Personal Interview:
                </strong></li>
              <p>Shortlisted students from the written test will have to appear in an Interview.</p>
            </ol>
            </p>
            <h5>Course Fee</h5>
            <p>₹ 2,60,000 (Pay only if you get selected)</p>
          </div>
        </section>
        <!-- Single Item -->
        <!-- Single Item -->
        <section class="cards" style="  ">
          <div class="upper-part">
            <h4>One YEAR TARGET COURSE(for 12<sup>th</sup>pass Students)</h4>
            <h5>DROPPER BATCH</h5>

            <p style="margin-top:-10px;">(12<sup>th</sup> Pass Students)</p>

            <p>इस प्रोग्राम के माध्यम से के छात्रों को भारत के किसी भी सरकारी मेडिकल कॉलेज में MBBS की सीट मिलने के बाद और JEE के छात्रों को IIT/NIT/Reputed कॉलेजों में सीट मिलने के बाद ही फीस का भुगतान करना होगा।</p>

            <h5>About the course</h5>
            <p>Our one-year course for class 12<sup>th</sup>passed thoroughly covers the syllabus for NEET/JEE (Main & Advanced). We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET/JEE and to lend you a helping hand and guide you to clear NEET/JEE with a very good rank.</p>

            <h5>Syllabus Covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p> One Year</p>
            <h5>Eligibility</h5>
            <p>12<sup>th</sup> pass</p>
            <h5>Family Income</h5>
            <p>Less than 3 Lacs per annum (Background Verification by Vigilance team)</p>
            <h5>Selection Procedure</h5>

            <p>
            <ol style="list-style: decimal;list-style-position: inside;">
              <li><strong style="color:#002147">
                  Written test:
                </strong></li>
              <p>MCQ with Negative Marking (+4) and (-1) </p>
              <p>
                <span style="color: #f58026;">Subject:</span> Aptitude, Phy, Chem, Maths & Bio, according to respective NEET & JEE Courses.
              </p>
              <li><strong style="color:#002147">
                  Personal Interview:
                </strong></li>
              <p>Shortlisted students from the written test will have to appear in an Interview.</p>
            </ol>
            </p>
            <h5>Course Fee</h5>
            <p>₹ 1,30,000 (Pay only if you get selected)</p>
          </div>
        </section>
        <!-- Single Item -->
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