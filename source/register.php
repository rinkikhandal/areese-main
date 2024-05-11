<?php
$errorMsg = ""; //initializing error message
?>
<form action="assets/db/registerFormHandeler.inc.php" method="POST" id="register-form"  class="mfp-hide white-popup-block register-form">
      <div class="col-md-4 login-social">
        <h4>Register with social</h4>
        <ul>
          <li class="facebook">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="twitter">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="linkedin">
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-8 login-custom">
        <h4>Register a new account</h4>
        <div class="col-md-12">
          <div class="row">
            <div class="form-group">
              <input class="form-control" placeholder="Phone*" type="tel" name="phone" />
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="form-group">
              <input class="form-control" placeholder="Username*" type="text" name="name"/>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="form-group">
              <input class="form-control" placeholder="Password*" type="password" name="password"/>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="form-group">
              <input
                class="form-control"
                placeholder="Repeat Password*"
                type="password" name="confirm-password"
              />
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <button type="submit" id="submit" name="Signup">Sign up</button>
          </div>
        </div>
        <!-- Alert Message -->
        <div class="col-md-12 alert-notification">
          <div id="message" class="alert-msg"></div>
        </div>
        <p class="link-bottom">Are you a member? <a class="popup-with-form" href="#login-form">Login now</a></p>
      </div>
    </form>


