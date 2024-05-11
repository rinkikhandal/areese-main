
<?php 
$errorMsg = ""; //initializing error message
// regex for phone  for a 7 or 10 digit number, with extensions allowed, delimiters are spaces, dashes, or periods:
  // ^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$


if($_SERVER["REQUEST_METHOD"] == "POST"){

  $phone= trim($_POST["phone"]);
  $username=trim( $_POST["name"]);
  $pass = trim($_POST["password"]);
  $confirmPassword = trim($_POST["confirm-password"]);

   // Validation
  if (empty($phone)) {
        echo '<div class="alert alert-error">Please fill all fields!</div>';
        exit;
    } else if (empty($username)) {
        echo '<div class="alert alert-error">You must enter your name.</div>';
        exit;
    } elseif (empty($pass)) {
        echo '<div class="alert alert-error">You must enter your password</div>';
        exit;
    } elseif (empty($confirmPassword)) {
        echo '<div class="alert alert-error">Please confirm your password</div>';
        exit;
    } elseif ($pass !== $confirmPassword) {
        echo '<div class="alert alert-error">Passwords do not match. Please try again.</div>';
        exit;
    }


  try {
    require_once "./connection.inc.php";
    
      $query = "INSERT INTO registration (phone,username,pass) Values(:phone,:username,:pass);";

      
    // Password hashing
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

      $stmt = $pdo->prepare($query);

      $stmt->bindParam(":phone",$phone);
      $stmt->bindParam(":username",$username);
      $stmt->bindParam(":pass",$hashedPassword);

      $stmt->execute();

      echo '<div class="alert alert-success">successfully registered!!.</div>'; 

      $pdo=null;
      $stmt=null;

      die();

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
}else{
  header("Location:../../index-2.php");
  
};
