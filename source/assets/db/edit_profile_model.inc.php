<?php

declare(strict_types=1);




function updateUserData(object $pdo, string $username, string $email, ?string $image = null, ?string $about = null): void
{
  // Start the query base
  $query = "UPDATE registration SET username = :username";

  // Dynamically append fields if they are provided
  if (!empty($image)) {
    $query .= ", profilePic = :profile_pic";
  }

  if (!empty($about)) {
    $query .= ", about = :about";
  }

  // Complete the query with the email condition
  $query .= " WHERE email = :email;";

  // Prepare the statement
  $stmt = $pdo->prepare($query);

  // Bind mandatory parameters
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":email", $email);

  // Bind optional parameters if present
  if (!empty($image)) {
    $stmt->bindParam(":profile_pic", $image);
  }

  if (!empty($about)) {
    $stmt->bindParam(":about", $about);
  }

  // Execute the query
  $stmt->execute();
}


function getUpdatedData(object $pdo, string $email)
{
  $query = "SELECT * FROM registration WHERE email = :email;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $email);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
