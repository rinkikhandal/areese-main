<?php

declare(strict_types=1);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $phone = trim($_POST["phone"]);
  $pass = trim($_POST["password"]);
  $remember = $_POST["remember_me"];


  try {
    require_once "./connection.inc.php";
    require_once "./login_model.inc.php";
    require_once "./login_contr.inc.php";


    $data = [];
    // error handlers=========
    $errors = [];

    if (isInputEmpty($phone, $pass)) {
      $errors["empty_input"] = "Fill in all the fields!";
    };

    if (isNotValidPhoneNumber($phone)) {
      $errors["phone_not_valid"] = "Please enter correct  Phone Number!";
    };

    $result = getPhoneNumber($pdo, $phone);


    if (isPhoneNumberWrong($result)) {
      $errors["Incorrect login"] = "Incorrect login info!";
    };

    if (!isPhoneNumberWrong($result) && isPasswordWrong($pass, $result['pass'])) {
      $errors["Incorrect login"] = "Incorrect login info!!";
    };

    require_once "./config_session.inc.php";

    if ($errors) {
      $data["errors"] = $errors;
      // $_SESSION["'errors_register'"]=$errors;
      // converting assoc array in php to JSON Object.
      echo json_encode($data);

      exit();
    };



    // Login successful: Set session variables
    // session_start();

    $_SESSION["user_id"] = $result["id"];

    $user_credentials = ["id" => $result["id"], "username" => htmlspecialchars($result["username"]), "email" => htmlspecialchars($result["email"]), "phone" => htmlspecialchars($result["phone"]), "image" => $result["profilePic"]];

    $_SESSION["user"] = $user_credentials;

    if (!headers_sent()) {
      if ($remember) {
        setcookie('user_phone', $phone, time() + (60 * 60 * 24), "/", "", false, true);
        // setcookie('user_token', hash('sha256', $email . time()), time() + (60 * 60 * 24), "/", "", false, true);
        setcookie('user_password', $pass, time() + (60 * 60 * 24), "/", "", false, true);
      } else {
        setcookie('user_phone', '', time() - 3600, "/", "", false, true);
        // setcookie('user_token', '', time() - 3600, "/", "", false, true);
        setcookie('user_password', '', time() + (60 * 60 * 24), "/", "", false, true);
      }
    }

    $_SESSION["last_regeneration"] = time();

    $pdo = null;
    $stmt = null;

    die();
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
} else {
  header("Location:../../index-2.php");
  die();
}
