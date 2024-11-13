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
                  AREESE Super30 <span>Residential Campus</span>
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
    <div class="default-padding default-padding-per cards-with-scroll" style="margin-top: 50px;">
      <section>
        <div>
          <svg fill="#f58026" width="60px" height="60px" viewBox="0 0 52 52" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
            <path d="M26,52A26,26,0,0,1,22.88.19,25.78,25.78,0,0,1,34.73,1.5a2,2,0,1,1-1.35,3.77,22,22,0,0,0-21,38,22,22,0,0,0,35.41-20,2,2,0,1,1,4-.48A26,26,0,0,1,26,52Z" />
            <path d="M26,43.86a2,2,0,0,1-2-2V22.66a2,2,0,1,1,4,0v19.2A2,2,0,0,1,26,43.86Z" />
            <circle cx="26" cy="15.71" r="2.57" />
          </svg>
        </div>
        <div>
          <h4>
            About AREESE Super30
          </h4>
          <button style="width:130px">ON CAMPUS</button>
          <p> In India, a strong and secure financial future often hinges on landing a well-paying job early in life.</p>
          <span>
            <a href="#about">more details</a>
          </span>
        </div>
      </section>
      <section>
        <div>
          <svg fill="#f58026" viewBox="0 0 96 96" data-name="Your Icons" id="Your_Icons" xmlns="http://www.w3.org/2000/svg" stroke="#f58026" stroke-width="2.5" width="60px" height="60px">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <title></title>
              <path d="M48,64.5a1,1,0,0,1-1-.88V15.88a1,1,0,0,1,2,0V63.62A1,1,0,0,1,48,64.5Z"></path>
              <path d="M47.15,51.51,45.79,51a52.46,52.46,0,0,1-6.17-2.67c-4.2-2.22-8.24-9.55-8.41-9.86l-1.09-2L32.31,36c.22-.06,5.52-1.33,12.07,2.87,6.09,3.9,4.59,9.58,3.5,11.43Zm-14-13.68c.79,1.38,4.19,7,7.43,8.75a52.63,52.63,0,0,0,5.69,2.48c.46-1,2.15-5.28-3-8.55S34.29,37.64,33.13,37.83Z"></path>
              <path d="M48.47,51.51l-.73-1.25c-1.1-1.84-2.62-7.51,3.5-11.43,6.44-4.13,11.51-3,12.07-2.87l2.19.55-1.09,2c-.17.31-4.21,7.64-8.41,9.86A53.4,53.4,0,0,1,49.84,51ZM61,37.72a16.08,16.08,0,0,0-8.65,2.79c-5.09,3.27-3.42,7.58-3,8.55a51.78,51.78,0,0,0,5.69-2.48c3.24-1.71,6.64-7.38,7.43-8.75A9.69,9.69,0,0,0,61,37.72Z"></path>
              <path d="M47.35,35.25l-1.25-.44a46,46,0,0,1-5.05-2.2c-3.4-1.79-6.58-7.46-6.93-8.1l-1-1.82,2-.51c.19-.05,4.57-1.11,10,2.36,5.09,3.26,3.83,8,2.92,9.56ZM36.15,24c1.21,2.1,3.66,5.67,5.84,6.81a38.71,38.71,0,0,0,4.46,2c.45-1,1.42-4.12-2.42-6.58A12.16,12.16,0,0,0,36.15,24Z"></path>
              <path d="M48.27,35.25l-.68-1.15c-.92-1.54-2.2-6.28,2.92-9.56,5.3-3.4,9.51-2.48,10-2.36l2,.51-1,1.82c-.35.64-3.53,6.31-6.93,8.1a45.71,45.71,0,0,1-5,2.2ZM58.53,24a12.91,12.91,0,0,0-6.94,2.24c-3.83,2.46-2.87,5.57-2.41,6.58a40.34,40.34,0,0,0,4.45-2c2.18-1.14,4.63-4.71,5.84-6.81A7.69,7.69,0,0,0,58.53,24Z"></path>
              <path d="M47.35,20.27l-1.25-.45a44.9,44.9,0,0,1-5.05-2.19c-3.4-1.79-6.58-7.46-6.93-8.1l-1-1.82,2-.51c.19,0,4.57-1.11,10,2.36,5.09,3.26,3.83,8,2.92,9.56ZM36.15,9.05c1.21,2.1,3.66,5.67,5.84,6.81a38.71,38.71,0,0,0,4.46,2c.45-1,1.42-4.12-2.42-6.58A12.1,12.1,0,0,0,36.15,9.05Z"></path>
              <path d="M48.27,20.27l-.68-1.15c-.92-1.54-2.2-6.28,2.92-9.56,5.3-3.4,9.51-2.48,10-2.36l2,.51-1,1.82c-.35.64-3.53,6.31-6.93,8.1a44.71,44.71,0,0,1-5,2.19ZM58.53,9a12.94,12.94,0,0,0-6.94,2.25c-3.83,2.46-2.87,5.57-2.41,6.58a42.39,42.39,0,0,0,4.45-2c2.18-1.14,4.63-4.71,5.84-6.81A7.39,7.39,0,0,0,58.53,9Z"></path>
              <path d="M69,92H52V87c0-.55-1.05-15.48,10.21-23.81a23.34,23.34,0,0,0,3.87-3.48l12.94-15a5,5,0,0,1,3-1.68V20a5,5,0,0,1,4.76-5,4.87,4.87,0,0,1,3.59,1.36A5.37,5.37,0,0,1,92,20.23v30a28.7,28.7,0,0,0,.33,4.3c.44,3,.6,8.78-3.37,13.2C83.46,73.88,78.8,78.61,73.87,83.61L71.7,85.79,69,87.54ZM54,90H67V86.46l3.48-2.28,1.94-2c4.91-5,9.55-9.7,15-15.83,3.43-3.81,3.27-8.88,2.88-11.57A31.15,31.15,0,0,1,90,50.22v-30a3.33,3.33,0,0,0-1-2.41A2.87,2.87,0,0,0,86.89,17,3,3,0,0,0,84,20V43.16a5,5,0,0,1,2,1.06h0l0,0a4.92,4.92,0,0,1,1.72,3.4c0,.13,0,.25,0,.38a5,5,0,0,1-1.22,3.27L73.28,66.7a1,1,0,0,1-1.51-1.31L85.1,50A2.93,2.93,0,0,0,85.83,48V47.8a3,3,0,0,0-1-2A2.88,2.88,0,0,0,83,45H82.8a3,3,0,0,0-2.24,1L67.62,61a25.54,25.54,0,0,1-4.19,3.78C53.07,72.46,54,86.78,54,86.92Z"></path>
              <path d="M44.54,92h-17V87.54l-2.83-1.89-2-2c-4.93-5-9.59-9.73-15.12-15.89-4-4.42-3.82-10.17-3.37-13.2a30.05,30.05,0,0,0,.32-4.3v-30A5.38,5.38,0,0,1,6.2,16.37,4.86,4.86,0,0,1,9.78,15a4.93,4.93,0,0,1,3.29,1.45A5,5,0,0,1,14.54,20V43.08a5,5,0,0,1,3,1.68l12.94,15a23.34,23.34,0,0,0,3.87,3.48c11.26,8.33,10.25,23.26,10.2,23.89Zm-15-2h13V87c0-.22,1-14.54-9.39-22.2A25.14,25.14,0,0,1,29,61L16,46.06a3,3,0,0,0-2.25-1h-.18a2.93,2.93,0,0,0-1.8.72,3,3,0,0,0-1,2c0,.08,0,.15,0,.23A2.94,2.94,0,0,0,11.48,50L24.81,65.39A1,1,0,0,1,23.3,66.7L10,51.3A5,5,0,0,1,8.74,48c0-.13,0-.25,0-.38a5,5,0,0,1,1.72-3.41,4.85,4.85,0,0,1,2.06-1.07V20a3,3,0,0,0-.88-2.13,3,3,0,0,0-2-.87,2.84,2.84,0,0,0-2.11.82,3.34,3.34,0,0,0-1,2.41v30a31.13,31.13,0,0,1-.34,4.59c-.4,2.69-.55,7.76,2.88,11.57,5.5,6.13,10.14,10.84,15.05,15.83l1.94,2,3.47,2.28Z"></path>
            </g>
          </svg>
        </div>
        <div>
          <h4>
            Sponsors of AREESE super30
          </h4>
          <button style="width:130px">ON CAMPUS</button>

          <p>The AREESE Super-30 Batch is a life-changing initiative aimed at providing top-quality education</p>
          <span>
            <a href="#sponsors">more details</a>
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
            Courses Offered by AREESE Super30
          </h4>
          <button style="width:130px">ON CAMPUS</button>

          <p>AREESE Super30 offers two types of courses both with students still studying in schools and those who are dropouts.</p>
          <span>
            <a href="#courses">more details</a>
          </span>
        </div>
      </section>
      <section>
        <div>
          <svg fill="#002147" width="60px" height="60px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 389.933 389.934 " stroke="#f58026" xml:space="preserve" stroke-width="20" transform="matrix(1, 0, 0, 1, 0, 0)">
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
            Why AREESE Super30
          </h4>
          <button style="width:130px">ON CAMPUS</button>

          <p> AREESE Super30 provides continuous guiding and support to the students to excel in every field.</p>

          <!--  By providing proper amenities to the students we ensure that the student can properly focus on his/her education. -->
          <span>
            <a href="#why">more details</a>
          </span>
        </div>
      </section>
    </div>


    <!-- end of scroll cards=============== -->

    <div class="about-residential default-padding default-padding-per " id="about">
      <h2 class="headings">About Super30 Batch</h2>
      <div class="inner-container">
        <p style="text-align: center;margin-top: -30px;">

          <strong>
            Transforming Dreams into Reality of Underprivileged Students
          </strong>
        </p>

        <p style="margin-top:10px">
          In India, a strong and secure financial future often hinges on landing a well-paying job early in life. For many families, having a family member earn a good salary can turn around their economic situation, lifting them out of poverty. In this context, two career paths offer the most promising opportunities: engineering and medicine. Becoming an engineer or doctor can provide a lucrative future, but the journey to these careers begins with cracking some of India’s toughest competitive exams: JEE (Joint Entrance Examination) for engineering aspirants and NEET (National Eligibility cum Entrance Test) for medical aspirants.
        </p>

        <p> However, these exams are incredibly competitive, and the preparation required to excel in them is vastly different from regular school board exams. While board exams focus largely on memorizing facts, JEE and NEET test a student’s ability to solve complex problems using textbook concepts in innovative ways. Mastering these problem-solving skills requires specialized preparation that goes beyond the scope of regular school education.</p>

        <p>Most students seeking to crack JEE or NEET enroll in coaching institutes that are well-versed in teaching these critical problem-solving techniques. Unfortunately, these institutes often charge exorbitant fees—reaching up to 2.5-3 lakhs per year for tuition, accommodation, and living expenses in cities that are hubs for coaching centers like Kota, Delhi, or Hyderabad. For a poor family, these costs are simply unaffordable, effectively shutting the door on a child’s aspirations for a better future.</p>

        <p> Understanding this harsh reality, we at AREESE have launched the AREESE Super-30 Batch, a program specifically designed to provide talented yet underprivileged students a chance to prepare for these competitive exams at no cost. The AREESE Super-30 Batch is an initiative that selects 30 JEE aspirants and 30 NEET aspirants from economically weaker sections of society, providing them with free coaching, study materials, accommodation & meals. Our mission is to bridge the gap between talent and opportunity.
        </p>
        <p> Our mission is to build communities that give every underprivileged student the opportunity to prepare for competitive exams.</p>
      </div>

    </div>
    <!-- SPONSORS ========== -->
    <div class="about-residential default-padding default-padding-per" style="background-color: #F9F9F9;" id="sponsors">
      <h2 class="headings" style="text-align: center;margin:none auto">Sponsors and Alumni Fueling AREESE Super30</h2>
      <div class="inner-container">
        <p>
          The AREESE Super-30 Batch is a life-changing initiative aimed at providing top-quality education and coaching to talented, underprivileged students aspiring to crack competitive exams like JEE and NEET. However, such an ambitious project would not be possible without the support of generous sponsors:
        </p>

        <p style="text-align: start;"> <strong>
            AREESE Gurukulam (AREESE):
          </strong> By offering mentorship, high-quality teaching, and the resources necessary for rigorous preparation, AREESE Gurukulam (AREESE) is helping students compete with their peers on a national level.</p>

        <p style=" text-align: start;">
          <strong>
            JOBPXM PRIVATE LIMITED:
          </strong>
          A key corporate sponsor, is deeply invested in the mission of uplifting underprivileged students.
        </p>

        <p style="text-align: start;"><strong> Our Alumni (Former Students):</strong>
          One of the most inspiring aspects of the AREESE Super-30 Batch is the contributions from our alumni (former students) who have benefited from similar initiatives. Now established in successful careers, many in engineering and medicine, they understand the impact of quality education and are eager to give back. Their support is both financial and motivational, with many alumni volunteering to mentor current students, offering guidance, and sharing their experiences. This fosters a strong sense of community and highlights education’s role in breaking the cycle of poverty.
        </p>

      </div>
    </div>
    <!-- courses offered======== -->
    <div class="about-residential default-padding default-padding-per courses-offer-super30 " id="courses">
      <h2 class="headings" style="">Courses offered at AREESE Super30</h2>
      <div class="inner-container card-holder">
        <!-- Single Item -->
        <section class="cards">
          <div class="">
            <h4>TWO YEAR TARGET COURSE</h4>

            <p>(10<sup>th</sup> to 11<sup>th</sup> Moving Students)</p>

            <p>इस प्रोग्राम के माध्यम से AREESE Gurukulam आपको दो साल के लिए निःशुल्क रहना, खाना और कोचिंग की सुविधा प्रदान की जायेगी</p>



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
          </div>
        </section>
        <!-- Single Item -->
        <!-- Single Item -->
        <section class="cards">
          <div>
            <h4>One YEAR TARGET COURSE</h4>
            <h5>DROPPER BATCH</h5>

            <p>(12<sup>th</sup> Pass Students)</p>

            <p>इस प्रोग्राम के माध्यम से AREESE Gurukulam आपको एक साल के लिए निःशुल्क रहना, खाना और कोचिंग की सुविधा प्रदान की जायेगी।</p>

            <h5>About the course</h5>
            <p>Our one-year course for class 12<sup>th</sup> passed thoroughly covers the syllabus for NEET/JEE (Main & Advanced). We train students to think analytically and adopt a systematic approach to problem-solving, essential for NEET/JEE and to lend you a helping hand and guide you to clear NEET/JEE with a very good rank.</p>

            <h5>Syllabus Covers</h5>
            <p>Entire Syllabus of class 11<sup>th</sup> and 12<sup>th</sup>.</p>
            <h5>Course Duration</h5>
            <p> One Year</p>
            <h5>Eligibility</h5>
            <p>12<sup>th</sup> pass</p>
            <h5>Family Income</h5>
            <p>Less than 3 Lakhs per annum (Background Verification by Vigilance team)</p>
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
          </div>
        </section>
        <!-- Single Item -->
      </div>

    </div>

    <!-- why areese super30 -->

    <div class="about-residential default-padding default-padding-per course-features" id="why">
      <h2 class="headings" style="margin-bottom:100px !important;">Why AREESE Super30</h2>
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
  <script src="./assets/js/cards-scroll.js">

  </script>


</body>

</html>