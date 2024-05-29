
<?php 
// regex for phone  for a 7 or 10 digit number, with extensions allowed, delimiters are spaces, dashes, or periods:
  // ^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $phone= trim($_POST["phone"]);
  $username=trim( $_POST["name"]);
  $pass = trim($_POST["password"]);
  $confirmPassword = trim($_POST["confirm-password"]);

  try {

    require_once "./connection.inc.php";
    require_once "./register_model.inc.php";  //for sql queries
    require_once "./register_contr.inc.php"; //run validation or error handlers

    $data =[];
    // error handlers=======
    $errors =[];


    if(isInputEmpty($phone,$username,$pass,$confirmPassword)
    ){
      $errors["empty_input"]="Fill in all the fields!";
    };

    if (passwordsNotMatch($pass,$confirmPassword)){
      $errors["password_not_match"]="Passwords do not match!";
    };

      if(isNotValidPhoneNumber($phone)){
        $errors["invalid Phone Number"]="Please enter correct  Phone Number!";

    };

    if(phoneNumberAlreadyExists($pdo,$phone)){
        $errors["Account Exists"]="This Number is already registered!";

    };

    if(isUsernameTaken($pdo,$username)){
      $errors["username_taken"]="Username already taken!";
    };

  



    require_once "./config_session.inc.php"; 



    if($errors){
      $data["errors"]=$errors;
      // $_SESSION["'errors_register'"]=$errors;
      // converting assoc array in php to JSON Object.
      echo json_encode($data);

      exit();
    };

    createUser($pdo,$username,$pass,$phone);

      $data["errors"]=null;
      $data["success"]=["successfully_registered"=>"Registered  Successfully!"];
      
      echo json_encode($data);


      $pdo=null;
      $stmt=null;

      exit();


    
    

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
}else{
    header("Location:../../index-2.php");
  
};
