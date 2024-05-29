<?php

declare(strict_types=1);

if ($_SERVER["REQUEST_METHOD"]==="POST") {
  
  $name = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $phone = trim($_POST["phone"]);
  $query = trim($_POST["query"]);


  try {

    require_once "./connection.inc.php";
    require_once "./query_model.inc.php";
    require_once "./query_contr.inc.php";


    $data =[];
    // error handlers=======
    $errors =[];


    if(isInputEmpty($name,$email,$phone,$query)
    ){
      $errors["empty_input"]="Fill in all the fields!";
    };


      if(inValidPhoneNumber($phone)){
        $errors["invalid Phone Number "]="Please enter correct  Phone Number!";

    };

    if(inValidEmail($email)){
        $errors["email invalid"]="Please enter a valid email address";

    };

    require_once "./config_session.inc.php"; 



    if($errors){
      $data["errors"]=$errors;
      // $_SESSION["'errors_register'"]=$errors;
      // converting assoc array in php to JSON Object.
      echo json_encode($data);

      exit();
    };
    
    addQuery($pdo,$name,$email,$phone,$query);

    
      $data["errors"]=null;
      $data["success"]=["successfully_registered_query"=>"Thanks for reaching out, your query will be resolved as soon as possible!!"];
      
      echo json_encode($data);


      $pdo=null;
      $stmt=null;

      exit();


  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

}else{
  header("Location:../../index-2.php");
  die();
}