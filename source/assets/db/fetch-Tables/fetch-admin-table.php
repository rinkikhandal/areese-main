<?php

$query = "SELECT * FROM areesemainadmin;";
$stmt = $pdo->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
