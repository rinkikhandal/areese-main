<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // profile-pic:profilePic,name:username,email,phone,about

  $name = $_POST['name'];
  $email = $_POST['email'];
  $about = $_POST['about'];
  echo $about;

  try {
    //code...
    require_once "./connection.inc.php";
    require_once "./edit_profile_model.inc.php";
    require_once "./edit_profile_contr.inc.php";

    $data = [];
    // error handlers=======
    $errors = [];

    $image = "";

    if (isset($_FILES['profile-pic']) && $_FILES['profile-pic']["error"] === UPLOAD_ERR_OK) {
      // Get file info
      $fileTmpPath = $_FILES['profile-pic']['tmp_name'];
      $fileName = $_FILES['profile-pic']['name'];
      $fileSize = $_FILES['profile-pic']['size'];
      $fileType = $_FILES['profile-pic']['type'];
      $fileNameCmps = explode(".", $fileName);
      $fileExtension = strtolower(end($fileNameCmps));

      // Define allowed file extensions
      $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');

      // Validate file extension
      if (in_array($fileExtension, $allowedfileExtensions)) {
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $uploadFileDir = '../../uploads/'; // Correct file path on server
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
          $image = './uploads/' . $newFileName;
          echo $newFileName;
        } else {
          $errors["file_upload"] = "There was an error moving the uploaded file.";
        }
      } else {
        $errors["file_extension"] = "Invalid file extension. Only jpg, jpeg, png, gif allowed.";
        $image = "";
      }
    }



    if (isInputEmpty($name, $email)) {
      $errors["empty_input"] = "Fill in all the fields!";
    };

    if (!isEmailValid($email)) {
      $errors["invalid_email"] = "Please enter correct email!";
    }




    require_once "./config_session.inc.php";

    if ($errors) {
      $data["errors"] = $errors;
      // $_SESSION["'errors_register'"]=$errors;
      // converting assoc array in php to JSON Object.
      echo json_encode($data);

      exit();
    };


    updateUser(
      $pdo,
      $name,
      $email,
      $image,
      $about
    );

    $data["errors"] = null;
    $data["success"] = ["successfully_updated" => "Updated  Successfully!"];


    $result = getUpdatedData($pdo, $email);

    $data["errors"] = null;
    $data["success"] = ["successfully_updated" => "Updated  Successfully!"];


    echo json_encode($data);

    // session variables Updated=========
    session_regenerate_id(true);

    $user_credentials = ["id" => $result["id"], "username" => htmlspecialchars($result["username"]), "email" => htmlspecialchars($result["email"]), "phone" => htmlspecialchars($result["phone"]), "image" => $result["profilePic"], "about" => htmlspecialchars($result["about"])];

    echo $user_credentials;

    $_SESSION["user"] = $user_credentials;

    $_SESSION["last_regeneration"] = time();

    $pdo = null;
    $stmt = null;

    exit();
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

  // echo ($file);
} else {
  header("Location:../../edit-profile.php");
}
