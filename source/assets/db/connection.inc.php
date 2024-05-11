<?php


$dbusername = "root";
$dbpassword="";
$dsn='mysql:host=localhost;dbname=registrationareese';


try {
  $pdo = new PDO($dsn,$dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "Conection failed: " . $e->getMessage() ; //throw $th;
}

