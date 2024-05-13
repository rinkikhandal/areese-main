
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


    // error handlers=======
$errors =[];
    if(isInputEmpty($phone,$username,$pass,$confirmPassword)
    ){$errors["empty_input"]="Fill in all the fields!";
  };
  if (passwordsNotMatch($pass,$confirmPassword)){
    $errors["password_not_match "]="Passwords do not match!";
  };
  if(isUsernameTaken($username)){
    $errors["username_taken"]="Username already taken!";

  };
  if(isNotValidPhoneNumber($phone)){
$errors["phone_not_valid"]="Please enter correct Phone Number!";
  };

      require_once "./config_session.inc.php"; 



  if($errors){
    $_SESSION["errors_register"]=$errors;
  };
    
      $query = "INSERT INTO registration (phone,username,pass) Values(:phone,:username,:pass);";

      
    // Password hashing==================
    // ONE METHOD----
    // $salt = bin2hex(random_bytes(10)); //generate random salt
    // $pepper = $_ENV['SECRET_KEY'];
    // $toHash = $pass . $salt .$pepper;
    // $hashedPassword = hash("sha256",$toHash);

    // OTHER METHOD----
    $options =[
      'cost'=> 12,
    ];
    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT,$options);

      $stmt = $pdo->prepare($query);

      $stmt->bindParam(":phone",$phone);
      $stmt->bindParam(":username",$username);
      $stmt->bindParam(":pass",$hashedPassword);

      $stmt->execute();

      

      $pdo=null;
      $stmt=null;

      die();

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
}else{
  header("Location:../../index-2.php");
  
};
