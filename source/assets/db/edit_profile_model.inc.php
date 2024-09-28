<?php

declare(strict_types=1);




function updateUserData(object $pdo, string $username, string $email, string $image, string $about)
{
  if ($image === "") {
    $query = "UPDATE registration SET username = :username, about = :about WHERE email = :email;";
  } else if ($about === "") {
    $query = "UPDATE registration SET username = :username, profilePic = :profile_pic WHERE email = :email;";
  } else if ($about === "" && $image === "") {
    $query = "UPDATE registration SET username = :username WHERE email = :email;";
  } else {

    $query = "UPDATE registration SET username = :username, profilePic = :profile_pic, about = :about WHERE email = :email;";
  }


  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":profile_pic", $image);
  $stmt->bindParam(":about", $about);
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
