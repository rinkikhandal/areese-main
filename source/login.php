<?php

if (isset($_COOKIE["user_phone"]) && isset($_COOKIE["user_password"])) {
  $phone = $_COOKIE["user_phone"];
  $password = $_COOKIE["user_password"];
} else {
  $phone = "";
  $password = "";
}

?>

<form action="./assets/db/login.inc.php" id="login-form" class="mfp-hide white-popup-block login-form" method="POST">
  <div class="col-md-4 login-social">
    <h4>Login with social</h4>
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
    <h4>login to your registered account!</h4>
    <div class="col-md-12">
      <div class="row">
        <div class="form-group">
          <input class="form-control" placeholder="Phone*" type="tel" name="phone" value="<?php echo $phone ?>" />
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="form-group " style="position:relative;">
          <input class="form-control" placeholder="Password*" type="password" name="password" value="<?php echo $password ?>" />
          <i class="fa-solid  fa-eye-slash  eye-icon"></i>
        </div>
      </div>
    </div>

    <!-- <div class="col-md-12">
      <div class="row">
        <div class="forgo-pass">
          <a href="#">forgot password ?</a>
        </div>
      </div>
    </div> -->
    <div class="col-md-12">
      <div class="row">
        <label for="login-remember"><input type="checkbox" id="login-remember" name="remember_me" />Remember Me</label>
        <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <button type="submit" id="login-submit" name="login">Login</button>
      </div>
    </div>
    <!-- Alert Message -->
    <div class="col-md-12 alert-notification" style="">
      <div id="message" class="alert-msg">

      </div>
    </div>
    <p class="link-bottom">
      Not a member yet? <a class="popup-with-form" href="#register-form">Register now</a>
    </p>
  </div>
</form>