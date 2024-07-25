<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // profile-pic:profilePic,name:username,email,phone,about

  $name = $_POST['name'];
  $file = $_FILES['profile-pic'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $about = $_POST['about'];

  // echo ($file);
} else {
  header("Location:../../edit-profile.php");
}
