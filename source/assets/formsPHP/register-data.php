
<?php 
include "../../connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $phone= htmlspecialchars($_POST["phone"]);
  $name=htmlspecialchars( $_POST["username"]);
  $password= htmlspecialchars($_POST["password"]);
  $confirmPassword = htmlspecialchars($_POST["confirm-password"]);

  if($password === $confirmPassword){

    $insertQuery = "insert into registration(phone,name,password) values('$phone','$name','$password')";
    $res = mysqli_query($con,$insertQuery);

  if($res){
    ?>
    <script>alert("inserted")</script>
    <?php
  }else{
?><script>alert("not inserted")</script>
<?php
  }
  }else{
    ?>
    <script>alert("password do not match")</script>
    <script>alert("not inserted")</script>
    
    <?php
  }

header("Location:../../index-2.php");
  
}else{
header("Location:../../index-2.php");

};
