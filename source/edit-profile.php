<?php
require_once './assets/db/config_session.inc.php';
?>

<?php if (isset($_SESSION["user"])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        include './links.php';
        ?>
    </head>

    <body>

        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->

        <!-- Start Header Top 
    ============================================= -->
        <?php include './header_top.php'; ?>

        <!-- End Header Top -->

        <!-- Header 
    ============================================= -->
        <?php include './nav.php'; ?>

        <!-- End Header -->
        <!-- Start Login Form 
    ============================================= -->
        <?php include './login.php'; ?>
        <!-- End Login Form -->

        <!-- Start Register Form 
    ============================================= -->

        <?php include './register.php'; ?>
        <!-- End Register Form -->



        <!-- Start Breadcrumb 
    ============================================= -->
        <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Update Profile</h1>
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="#">Page</a></li>
                            <li class="active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Students Profile 
    ============================================= -->
        <div class="edit-profile adviros-details-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 about-user">
                        <form action="./assets/db/edit-profile.inc.php" method="POST" enctype="multipart/form-data" class="user-info-update ">
                            <h4>Update Current Info</h4>

                            <div class="col-md-6" style="position:relative">
                                <img src=<?php
                                            if (isset($_SESSION["user"]) && !empty($_SESSION["user"]["image"]) && $_SESSION["user"]["image"] !== "null") {
                                                echo $_SESSION["user"]["image"];
                                            } else {
                                                echo "assets/img/800x800.png";
                                            }
                                            ?>
                                    alt="Thumb" id="imagePreview" style="object-fit:cover;height:100% ">
                                <div class="profile-image">
                                    <label for="profile-pic"><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                    <input type="file" id="profile-pic" name="profile-pic" accept="image/*" style="display:none;">
                                </div>
                            </div>
                            <div class="col-md-6 name-sec">
                                <div class="col-md-full ">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" type="text" name="name"
                                            value=<?php
                                                    if (isset($_SESSION["user"])) {
                                                        echo $_SESSION["user"]["username"];
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?>>
                                    </div>
                                </div>
                                <div class="col-md-full">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="email" type="email"
                                            value=<?php
                                                    if (isset($_SESSION["user"])) {
                                                        echo $_SESSION["user"]["email"];
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?>>
                                    </div>
                                </div>
                                <!-- <div class="col-md-full">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone" name="phone" type="text"
                                        
                                </div>
                            </div> -->
                                <div class="col-md-full">
                                    <div class="form-group comments">
                                        <textarea class="form-control" placeholder="About Yourself" name="about"><?php
                                                                                                                    if (isset($_SESSION["user"]["about"]) && !empty($_SESSION["user"]["about"]) && $_SESSION['user']['about'] !== "null") {
                                                                                                                        echo htmlspecialchars($_SESSION["user"]["about"]); // htmlspecialchars to avoid HTML injection
                                                                                                                    }
                                                                                                                    ?></textarea>

                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-full alert-notification" style="">
                                    <div id="user-info-message" class="alert-msg">
                                    </div>
                                </div>
                                <!-- alert message -->
                                <div class="col-md-full">
                                    <button type="submit" id="user-info-submit" class="update-user-info-btn">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 update-pass">
                        <h4>Change Password</h4>
                        <div class="row">
                            <form action="#" class="contact-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Chose Password" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Retype Password" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Old Password" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Students Profile -->

        <!-- Start Footer 
    ============================================= -->
        <?php include 'footer_dark.php'; ?>

        <!-- End Footer -->

        <!-- jQuery Frameworks
    ============================================= -->
        <?php include "./jquery-links.php"
        ?>
        <script src="assets/js/userInfo.js"></script>


    </body>

    </html>

<?php } else { ?>
    <script>
        window.location.replace("./index-2.php")
    </script>
<?php
    // header("Location:./index-2.php");
}; ?>