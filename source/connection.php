<?php


$username = "root";
$password="";
$server="localhost";
$db="registrationareese";

$con=mysqli_connect($server,$username,$password,$db);


if ($con){
  // echo "connection successful";


?>

<script>alert("connection_successful")</script>

<?php

}else{
  // echo "not connected";
  die("no connection ".mysqli_connect_error());
}
?>