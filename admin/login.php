<?php
require_once '../source/assets/db/config_session_admin.inc.php';


if (isset($_COOKIE["admin_email"]) && isset($_COOKIE["admin_password"])) {
    $emailId = $_COOKIE["admin_email"];
    $password = $_COOKIE["admin_password"];
} else {
    $emailId = "";
    $password = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "header-links.php" ?>
    <title>Admin Login</title>

    <!-- custom by me -->
    <link href="css/custom-style.css" rel="stylesheet">

</head>

<body class="">
    <div class="container-1">
        <div>
            <div class="text-center heading">
                <h1 class="h4 text-gray-900 mb-4">Login to Your Registered Account</h1>
            </div>
            <form class="user" method="POST" action="../source/assets/db/admin-login.inc.php" id="admin-login-form">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user"
                        id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address..." name="email" value="<?php echo $emailId ?>" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" autocomplete="current-Password" name="password" value="<?php echo $password ?>" placeholder="Password" required>
                </div>
                <div class="form-group rem">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember_me">
                        <label class="custom-control-label" for="customCheck">Remember
                            Me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" id="admin-login-submit">
                    Login
                </button>

            </form>
            <div class="alert-notification">
                <div class="message" id="admin-login-message"></div>
            </div>
            <hr>
            <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="register.php">Create an Account!</a>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/admin-login.js"></script>

</body>

</html>