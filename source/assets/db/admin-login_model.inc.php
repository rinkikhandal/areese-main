<?php

declare(strict_types=1);

function getEmail(object $pdo, string $email)
{
  $query = "SELECT * FROM areesemainadmin WHERE email = :email;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
};
