<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $pass = trim($_POST['password']);
  $repeatPass = trim($_POST['repeatPassword']);
  $role = trim($_POST['role']);

  try {
    require_once "./connection.inc.php";
    require_once "./admin-register_model.inc.php";
    require_once "./admin-register_contr.inc.php";

    $data = [];
    // errorhandler--------------
    $errors = [];

    if (isInputEmpty($name, $email, $pass, $repeatPass)) {
      $errors["empty_input"] = "Fill in all the fields!";
    };

    if (!isEmailValid($email)) {
      $errors["invalid_email"] = "Please enter correct email!";
    }

    if (passwordsNotMatch($pass, $repeatPass)) {
      $errors["password_not_match"] = "Passwords do not match!";
    };

    if (emailExists($pdo, $email)) {
      $errors["email_exists"] = "Email already exists!";
    };


    // require_once "./config_session_admin.inc.php";


    if ($errors) {
      $data["errors"] = $errors;
      // $_SESSION["'errors_register'"]=$errors;
      // converting assoc array in php to JSON Object.
      echo json_encode($data);

      exit();
    };

    createAdmin($pdo, $name, $email, $pass, $role);

    $data["errors"] = null;
    $data["success"] = ["successfully_registered" => "Registered  Successfully!"];


    echo json_encode($data);


    $pdo = null;
    $stmt = null;

    exit();
  } catch (PDOException $e) {
    die("Query_failed: " . $e->getMessage());
  }
} else {
  header("Location:../../../admin/register.php");
  die();
}
