<?php 

declare(strict_types=1);


function check_signup_errors(){

if(isset($_SESSION['errors_register'])){
  $errors = $_SESSION['errors_register'];

  // echo "<br>";

  foreach($errors as $error){
    echo '<div class="alert alert-error">' . $error . '</div>';
  };

  unset($_SESSION['errors_register']);
}

}