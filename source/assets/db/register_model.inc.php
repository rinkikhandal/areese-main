<?php

declare(strict_types=1);


function getUsername(object $pdo, string $username)
{
  $query = "SELECT username FROM registration WHERE username = :username;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':username', $username);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
};

function getEmail(object $pdo, string $email)
{
  $query = "SELECT email FROM registration WHERE email = :email;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function getPhoneNumber(object $pdo, string $phone)
{
  $query = "SELECT phone FROM registration WHERE phone = :phone;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':phone', $phone);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
};


function registerUser(object $pdo, string $username, string $pass, string $phone, string $email)
{
  $query = "INSERT INTO registration (phone,username,pass,email)  Values(:phone,:username,:pass,:email);";


  // Password hashing==================
  // ONE METHOD----
  // $salt = bin2hex(random_bytes(10)); //generate random   salt
  // $pepper = $_ENV['SECRET_KEY'];
  // $toHash = $pass . $salt .$pepper;
  // $hashedPassword = hash("sha256",$toHash);

  // OTHER METHOD----
  $options = [
    'cost' => 12,
  ];
  $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":phone", $phone);
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":pass", $hashedPassword);
  $stmt->bindParam(":email", $email);
  $stmt->execute();
}
