<?php

declare(strict_types =1);



function isInputEmpty(string $phone, string $username,string $password, string $confirmPassword){
  if (empty($phone) || empty($username)||empty($password)||empty($confirmPassword)){
    return true;
  }else{
    return false;
  }
}

function passwordsNotMatch(string $password ,string $confirmPassword){
  if (!$password === $confirmPassword){
    return true;
  }return false;
}

function isNotValidPhoneNumber(string $phone){
  
if(!preg_match('/^[0-9]{10}+$/', $phone)) {
return true;
} else {
return false ;
}
}

function isUsernameTaken(object $pdo, string $username){
  if(getUsername($pdo,$username)){
    return true;
  }else{
    false;
  }
}