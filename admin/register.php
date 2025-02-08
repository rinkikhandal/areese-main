<?php
require_once '../source/assets/db/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "header-links.php" ?>
    <title>Admin Register</title>

    <!-- custom by me -->
    <link href="css/custom-style.css" rel="stylesheet">

</head>

<body class="">
    <div class="container-1">
        <div>
            <div class="text-center heading">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" id="admin-register-form" method="POST" action="../source/assets/db/admin-register.inc.php">
                <div class="form-group ">
                    <input type="text" class="form-control form-control-user" id="name"
                        name="name"
                        placeholder="Name" autocomplete="name" required />

                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email"
                        placeholder="Email Address" autocomplete="email" required />
                </div>
                <div class="form-group pass ">
                    <div class="">
                        <input type="password" class="form-control form-control-user"
                            id="password"
                            name="password" placeholder="Password" autocomplete="new-password" required />
                    </div>
                    <div class="">
                        <input type="password" class="form-control form-control-user"
                            name="repeatPassword"
                            id="repeatPassword" placeholder="Repeat Password" autocomplete="new-password" required />
                    </div>
                </div>
                <div class="form-group role">
                    <label for="role-select">Role : </label>
                    <select name="role" id="role-select">
                        <option value="Admin">Admin</option>
                        <option value="SuperAdmin">SuperAdmin</option>
                    </select>
                </div>
                <button type="submit" id="admin-register-submit" class="btn btn-primary btn-user btn-block">
                    Register Account
                </button>
            </form>
            <div class="alert-notification">
                <div class="message" id="admin-register-message"></div>
            </div>
            <hr>
            <div class=" text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
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
    <script src="js/admin-register.js"></script>

</body>

</html>