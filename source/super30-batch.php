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
  <link rel="stylesheet" href="./assets/css/classroom.css">

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
    <!-- Start of cards=============== -->
    <div class="default-padding default-padding-per cards-with-scroll" style="margin-top: 70px;">
      <section>
        <h4>
          About AREESE Super30
        </h4>
        <p> In India, a strong and secure financial future often hinges on landing a well-paying job early in life.</p>
        <span>
          <a href="#about">read more</a>
          <i class="fa-solid fa-chevron-right"></i>
        </span>
      </section>
      <section>
        <h4>
          Sponsors of AREESE super30
        </h4>
        <p>The AREESE Super-30 Batch is a life-changing initiative aimed at providing top-quality education</p>
        <span>
          <a href="#sponsors">Read More</a>
          <i class="fa-solid fa-chevron-right"></i>
        </span>
      </section>
      <section>
        <h4>
          Courses Offered by AREESE Super30
        </h4>
        <p>AREESE Super30 offers two types of courses both with students still studying in schools and those who are dropouts.</p>
        <span>
          <a href="#courses">read more</a>
          <i class="fa-solid fa-chevron-right"></i>
        </span>
      </section>
      </section>
      <section>
        <h4>
          Why AREESE Super30
        </h4>
        <p> AREESE Super30 provides continuous guiding and support to the students to excel in every field.</p>

        <!--  By providing proper amenities to the students we ensure that the student can properly focus on his/her education. -->
        <span>
          <a href="#why">read more</a>
          <i class="fa-solid fa-chevron-right"></i>
        </span>
      </section>
    </div>


    <!-- end of cards=============== -->

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
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get the navbar height
      const navbarHeight = document.querySelector(".navbar").offsetHeight;

      // Attach click event listeners to each link
      document.querySelectorAll("a[href^='#']").forEach(anchor => {
        anchor.addEventListener("click", function(event) {
          event.preventDefault();

          // Scroll to the target section with an offset
          const targetId = this.getAttribute("href").substring(1);
          const targetElement = document.getElementById(targetId);
          const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - navbarHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: "smooth"
          });
        });
      });
    });
  </script>


</body>

</html>