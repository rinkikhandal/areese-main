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
  <link rel="stylesheet" href="./assets/css/scroll-cards.css">
  <link rel="stylesheet" href="./assets/css/card-features.css">

</head>
<style>
  @media (min-width: 1000px) {
    .cards-with-scroll {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      justify-content: center;
      column-gap: 2rem !important;
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


    <!-- Start of scroll cards=============== -->
    <div class="default-padding default-padding-per cards-with-scroll three-cards-scroll " style="margin: 50px auto;">
      <section>
        <div>
          <svg fill="#fff" width="60px" height="60px" viewBox="0 0 52 52" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
            <path d="M26,52A26,26,0,0,1,22.88.19,25.78,25.78,0,0,1,34.73,1.5a2,2,0,1,1-1.35,3.77,22,22,0,0,0-21,38,22,22,0,0,0,35.41-20,2,2,0,1,1,4-.48A26,26,0,0,1,26,52Z" />
            <path d="M26,43.86a2,2,0,0,1-2-2V22.66a2,2,0,1,1,4,0v19.2A2,2,0,0,1,26,43.86Z" />
            <circle cx="26" cy="15.71" r="2.57" />
          </svg>
        </div>
        <div>

          <h4>
            About AREESE Pay After Selection Batch
          </h4>
          <p> In India, a strong and secure financial future often hinges on landing a well-paying job early in life.</p>
          <span>
            <a href="#about">more details</a>
          </span>
        </div>
      </section>

      <section>
        <div>
          <svg height="60px" width="60px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 502.665 502.665" xml:space="preserve">
            <g>
              <g>
                <g>
                  <path style="fill:#fff;" d="M466.965,41.006H275.783c2.092-3.926,3.581-8.197,3.581-12.964C279.364,12.554,266.81,0,251.322,0
				S223.28,12.554,223.28,28.042c0,4.767,1.488,9.017,3.581,12.964H35.744c-14.237,0-25.799,11.605-25.799,25.799v284.389
				c0,14.194,11.562,25.82,25.777,25.82h156.28l-30.35,107.056c-2.114,7.42,2.351,14.668,9.944,16.049l12.08,2.308
				c7.593,1.402,15.509-3.516,17.602-10.893l32.486-114.541h35.16l32.507,114.519c2.071,7.399,10.03,12.317,17.602,10.893
				l12.015-2.308c7.593-1.381,12.058-8.628,9.944-16.049l-30.35-107.034h156.323c14.15,0,25.755-11.627,25.755-25.82V66.805
				C492.721,52.633,481.137,41.006,466.965,41.006z M443.647,326.711H58.975V85.981h384.672V326.711z" />
                  <path style="fill:#fff;" d="M104.317,286.309c11.044,0,19.996-8.952,19.996-19.996c0-2.006-0.582-3.818-1.143-5.63
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
            Courses Offered by Pay After Selection Batch
          </h4>
          <p>AREESE Pay After Selection Batch offers two types of courses both with students still studying in schools and those who are dropouts.</p>
          <span>
            <a href="#courses">more details</a>
          </span>
        </div>
      </section>
      </section>
      <section>
        <div>
          <svg fill="#002147" version="1.1" width="60px" height="60px" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 400 390" xml:space="preserve" stroke="#fff" stroke-width="20">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <path d="M251.688,276.293c43.955-71.674,66.257-123.225,66.257-153.315C317.945,55.172,262.773,0,194.967,0 C127.158,0,71.989,55.172,71.989,122.978c0,30.09,22.29,81.641,66.248,153.315c-7.524,6.017-12.445,15.168-12.445,25.52v17.414 c0,11.445,6.149,21.966,15.724,27.862c5.503,24.452,27.442,42.845,53.452,42.845c26.001,0,47.942-18.393,53.442-42.845 c9.584-5.896,15.732-16.417,15.732-27.862v-17.414C264.142,291.461,259.224,282.31,251.688,276.293z M246.206,112.617 c0-21.473-17.468-38.947-38.94-38.947c-6.795,0-12.298-5.51-12.298-12.298c0-6.789,5.503-12.298,12.298-12.298 c35.031,0,63.536,28.505,63.536,63.542c0,6.789-5.506,12.298-12.298,12.298C251.712,124.915,246.206,119.411,246.206,112.617z"></path>
              </g>
            </g>
          </svg>
        </div>
        <div>

          <h4>
            Why Pay After Selection Batch
          </h4>
          <p> AREESE Pay After Selection Batch provides continuous guiding and support to the students to excel in every field.</p>

          <!--  By providing proper amenities to the students we ensure that the student can properly focus on his/her education. -->
          <span>
            <a href="#why">more details</a>
            <!-- <i class="fa-solid fa-chevron-right"></i> -->
          </span>
        </div>
      </section>
    </div>


    <!-- end of scroll cards=============== -->

    <div class="about-residential default-padding default-padding-per " style="background-color: #f9f9f9;" id="about">
      <h2 class="headings">About Pay After Selection Batch</h2>
      <div class="  inner-container">
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
    <div class="about-residential default-padding default-padding-per courses-offer-super30 " id="courses">
      <h2 class="headings">Pay After Selection Batch</h2>
      <div class="inner-container card-holder">
        <!-- Single Item -->
        <section class="cards">
          <div>
            <h4>TWO YEAR TARGET COURSE(for 11<sup>th</sup> class)</h4>

            <p>(10<sup>th</sup> to 11<sup>th</sup> Moving Students)</p>

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
            <p><strong>₹ 2,60,000 </strong>(Pay only if you get selected)</p>
          </div>
        </section>
        <!-- Single Item -->
        <!-- Single Item -->
        <section class="cards">
          <div>
            <h4>One YEAR TARGET COURSE(for 12<sup>th</sup>pass Students)</h4>
            <h5>DROPPER BATCH</h5>

            <p>(12<sup>th</sup> Pass Students)</p>

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
            <p> <strong>₹ 1,30,000 </strong>(Pay only if you get selected)</p>
          </div>
        </section>
        <!-- Single Item -->
      </div>

    </div>

  </div>

  <!-- why pay after selection batch -->

  <div class="about-residential default-padding default-padding-per course-features" id="why">
    <h2 class="headings" style="margin-bottom:100px !important;">Why Pay after Selection Batch</h2>
    <div class="inner-container">
      <div class="card-holder ">
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #FACA4C;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/1.jpg" alt="image-icon">
          <h5>Experienced & Best faculty team</h5>
          <div class="description">
            <p>Our skilled and knowledgeable faculty is committed, diligent, and driven by a passion for your success.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #FE4229;">
          <div class=" img-back">
          </div>
          <img src="./assets/img/classroom-png/2.jpg" alt="image-icon">
          <h5>Full Academic Support</h5>
          <div class="description">
            <p>Comprehensive academic support includes problem-solving sessions,knowledge labs,individual counseling, seminars outside of class.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #559DFF;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/3.jpg" alt="image-icon">
          <h5>Ultimate Personal Care</h5>
          <div class="description">
            <p>
              Each student receives personalized attention, ensuring you're never just another face in the crowd but a truly valued individual, who matters.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #7A49A2;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/4.jpg" alt="image-icon">
          <h5>Result-oriented Teaching Methodology</h5>
          <div class="description">
            <p>
              Engaging and interactive classes designed with a scientific, result-driven teaching methodology to maximize learning and outcomes.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #567AFF;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/5.jpg" alt="image-icon">
          <h5>Relevant Learning Study Material</h5>
          <div class="description">
            <p>
              Comprehensive, thoroughly researched, and highly relevant learning materials to support effective student learning.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="border-bottom: 2px solid #559DFF;">
          <div class=" img-back">
          </div>
          <img src="./assets/img/classroom-png/6.jpg" alt="image-icon">
          <h5>Regular Test Series & Performance Analysis</h5>
          <div class="description">
            <p>
              Daily progress tracking, regular assessments, performance analysis, and feedback for continuous improvement.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5.2px;border-bottom: 2px solid #EF9F4A;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/7.jpg" alt="image-icon">
          <h5>best Infrastructure</h5>
          <div class="description">
            <p>
              State-of-the-art infrastructure with all the necessary facilities, providing an ideal environment for focused and effective learning experiences.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5.9px;border-bottom: 2px solid #7E4BAA;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/8.jpg" alt="image-icon">
          <h5>Excellent Academic Control</h5>
          <div class="description">
            <p>
              Academic oversight guarantees timely course completion while maintaining the highest standards of teaching quality and educational excellence.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5px;border-bottom: 2px solid #568BFF;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/9.jpg" alt="image-icon">
          <h5>Best Results & Reputation</h5>
          <div class="description">
            <p>
              A proven track record of success spanning over 10 years, highlighting our commitment to excellence in education and student achievement.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 15px;border-bottom: 2px solid #DEA615;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/10.jpg" alt="image-icon">
          <h5>Content Research & Development Team</h5>
          <div class="description">
            <p>
              An Educational Research and Content Development Center monitors exam patterns to ensure you're ready for the latest trends.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 15px;border-bottom: 2px solid #D58D38;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/11.jpg" alt="image-icon">
          <h5>Recorded video lectures & CBT Test</h5>
          <div class="description">
            <p>
              Our institute offers recorded video lectures for flexible learning and Computer-Based Tests (CBT) to enhance readiness.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #653589;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/12.jpg" alt="image-icon">
          <h5>Great student life</h5>
          <div class="description">
            <p>
              A competitive, motivating, and supportive environment is designed to foster student success, personal growth, and a sense of achievement.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #FE4229;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/13.jpg" alt="image-icon">
          <h5>Full Academic Support</h5>
          <div class="description">
            <p>Comprehensive academic support available outside of class through regular problem-solving sessions, knowledge labs, individual counseling, and seminars.</p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 5px;border-bottom: 2px solid #7A49A2;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/14.jpg" alt="image-icon">
          <h5>Medical Assistance for Student's Wellbeing</h5>
          <div class="description">
            <p>
              AREESE hostels offer medical assistance with first-aid kits and nearby hospitals for emergencies.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom:4px ;border-bottom: 2px solid #EF901E;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/15.jpg" alt="image-icon">
          <h5>Wardens For Boys & Girls Hostel</h5>
          <div class="description">
            <p>
              Wardens ensures a secure and well regulated environment in hostels.It also helps in case of emergencies and maintains a discipline necessary for a student to study properly.
            </p>
          </div>
        </article>
        <!-- single Item -->
        <!-- single Item -->
        <article class="feature-card" style="padding-bottom: 6px;border-bottom: 2px solid #8D8D8D;">
          <div class="img-back">
          </div>
          <img src="./assets/img/classroom-png/16.jpg" alt="image-icon">
          <h5>13-Hour Self Study Program</h5>
          <div class="description">
            <p>
              A unique, intensive program designed to maximize productivity and enhance learning outcomes for participants, ensuring a transformative experience.
            </p>
          </div>
        </article>
        <!-- single Item -->


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
  <script src="./assets/js/cards-scroll.js"></script>


</body>

</html>