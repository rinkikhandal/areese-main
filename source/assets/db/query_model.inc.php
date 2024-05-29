<?php 

declare (strict_types=1);

function addQuery(object $pdo , string $name,string $email, string $phone , string $query){
  $dbQuery = "INSERT INTO enquiry (username,email,phone,query) VALUES (:username,:email,:phone,:query)";

  $stmt = $pdo->prepare($dbQuery);
  $stmt->bindParam(':username',$name);
  $stmt->bindParam(':email',$email);
  $stmt->bindParam(':phone',$phone);
  $stmt->bindParam(':query',$query);
  $stmt->execute();

}