<?php

declare(strict_types =1);


function getUsername(object $pdo , string $username){
$query = "SELECT username FROM register WHERE username = :username;";
$stmt=$pdo->prepare($query);
$stmt->bindParam(':username',$username);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
return $result;
};