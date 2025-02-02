<?php

declare(strict_types=1);

function getEmail(object $pdo, string $email)
{
  $query = "SELECT email FROM admin WHERE email=:email;";

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}


function registerAdmin(object $pdo, string $name, string $email, string $pass, string $role)
{
  $query = "INSERT INTO admin (adminName,email,pass, adminRole) Values (:adminName,:email,:pass,:adminRole);";

  $options = [
    'cost' => 12,
  ];
  $hashedPassword = password_hash($pass, PASSWORD_BCRYPT, $options);

  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':adminName', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':pass', $hashedPassword);
  $stmt->bindParam(':adminRole', $role);

  $stmt->execute();
}
