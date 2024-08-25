<form action="assets/db/register.inc.php" method="POST" id="register-form" class="mfp-hide white-popup-block register-form">
  <div class="col-md-4 login-social">
    <h4>Register with social</h4>
    <ul>
      <li class="facebook">
        <a href="https://www.facebook.com/AreeseCareerInstitute">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="linkedin">
        <a href="https://www.linkedin.com/company/areese/">
          <i class="fab fa-linkedin-in fa-lg"></i>
        </a>
      </li>
      <li class="instagram">
        <a href="https://www.instagram.com/areesecareerinstitute/" style=" background-color: #e43187">
          <i class="fa-brands fa-instagram fa-lg"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="col-md-8 login-custom">
    <h4>Register a new account</h4>
    <div class="col-md-12">
      <div class="row">
        <div class="form-group">
          <input class="form-control" placeholder="Phone*" type="tel" name="phone" id="phone" />
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="form-group">
          <input class="form-control" placeholder="Email*" type="email" name="email" id="email" />
        </div>
      </div>
    </div>
    <div class=" col-md-12">
      <div class="row">
        <div class="form-group">
          <input class="form-control" placeholder="Username*" type="text" name="name" />
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="form-group " style="position:relative;">
          <input class="form-control" placeholder="Password*" type="password" name="password" />
          <i class="fa-solid  fa-eye-slash  eye-icon"></i>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="form-group " style="position:relative;">
          <input class="form-control" placeholder="Repeat Password*" type="password" name="confirm-password" />
          <i class="fa-solid  fa-eye-slash  eye-icon"></i>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <button type="submit" id="register-submit" name="Signup">Sign up</button>
      </div>
    </div>
    <!-- Alert Message -->
    <div class="col-md-12 alert-notification" style="">
      <div id="message" class="alert-msg">

      </div>
    </div>
    <p class="link-bottom">Are you a member? <a class="popup-with-form" href="#login-form">Login now</a></p>
  </div>
</form>

<!-- ============= OTP Verification Form =========== -->

<form id="registration-success" class="mfp-hide white-popup-block otp-form" action="" method="POST">
  <p>Registration successful! Please enter the OTP sent to your phone number.</p>
  <h1>Enter OTP</h1>
  <div class="otp-field">
    <input type="text" maxlength="1" />
    <input type="text" maxlength="1" />
    <input class="space" type="text" maxlength="1" />
    <input type="text" maxlength="1" />
    <input type="text" maxlength="1" />
    <input type="text" maxlength="1" />
  </div>
</form>