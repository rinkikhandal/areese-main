<?php

declare(strict_types=1);



function isInputEmpty(string $phone, string $password)
{
  if (empty($phone) || empty($password)) {
    return true;
  } else {
    return false;
  }
}


function isNotValidPhoneNumber(string $phone)
{

  if (!preg_match('/^[6-9]\d{9}$/', $phone)) {
    return true;
  } else {
    return false;
  }
}

function isPhoneNumberWrong(bool|array $result)
{
  if (!$result) {
    return true;
  } else {
    false;
  }
}

function isPasswordWrong(string $pass, string $hashedPassword)
{
  if (!password_verify($pass, $hashedPassword)) {
    return true;
  } else {
    return false;
  }
}
