<?php

declare(strict_types =1);

function getPhoneNumber(object $pdo , string $phone){
$query = "SELECT * FROM registration WHERE phone = :phone;";
$stmt=$pdo->prepare($query);
$stmt->bindParam(':phone',$phone);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
return $result;
};