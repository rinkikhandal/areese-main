<?php

declare(strict_types=1);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = trim($_POST["email"]);
  $pass = trim($_POST["password"]);


  try {
    require_once "./connection.inc.php";
    require_once "./admin-login_model.inc.php";
    require_once "./admin-login_contr.inc.php";


    $data = [];
    // error handlers=========
    $errors = [];

    if (isInputEmpty($email, $pass)) {
      $errors["empty_input"] = "Fill in all the fields!";
    };

    if (!isEmailValid($email)) {
      $errors["invalid_email"] = "Please enter correct email!";
    }

    $result = getEmail($pdo, $email);


    if (!isEmailWrong($result) && isPasswordWrong($pass, $result['pass'])) {
      $errors["Incorrect login"] = "Incorrect login info!!";
    };

    require_once "./config_session_admin.inc.php";

    if ($errors) {
      $data["errors"] = $errors;
      $data["result"] = $result;
      // converting assoc array in php to JSON Object.
      echo json_encode($data);

      exit();
    };



    // Login successful: Set session variables
    // session_start();

    $data["errors"] = null;

    $_SESSION["admin_id"] = $result["id"];

    $admin = ["id" => $result["id"], "adminName" => htmlspecialchars($result["adminName"]), "email" => htmlspecialchars($result["email"]), "adminRole" => htmlspecialchars($result["adminRole"])];

    $_SESSION["admin"] = $admin;

    $_SESSION["last_regeneration"] = time();

    $pdo = null;
    $stmt = null;

    die();
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
} else {
  header("Location:../../../admin/login.php");
  die();
}
