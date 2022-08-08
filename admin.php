<?php
session_start();
if (isset($_SESSION["user_id"])) {
    header("location:panel.php");
    exit();
}


?>
<?php include_once("php/connect.php"); ?>

<?php include_once("php/item.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once("head.php");
?>

<body>
    <?php
    //include_once("header.php");
    // include_once("nav-mobile.php");
    ?>

    <!-- END: Navbar Mobile -->
    <div class="nk-main">
        <div class="nk-gap-2"></div>
        <div class="container">
            <div class="nk-product-description text-center">
                <img src="assets/images/about-logo.png">
                <div class="row">
                    <div class="col-md-4 col-lg-4"><br /></div>
                    <div class="col-md-4">
                        <div class="main-card  dark">
                            <div class="card-body">
                                <h5 class="card-title"> Administrator </h5>
                                <form method="post" class="form-group" action="php/login-proccess.php">
                                    <div class="position-relative form-group">
                                        <label for="exampleUsername" class="form-label text-left">Username</label>
                                        <input name="username" id="Username" placeholder="enter username" type="text" class="form-control" pattern="[0-9a-zA-Z]{3,12}" title="please enter an alphanumeric password containing 3-12 characters" required>
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="examplePassword" class="form-label text-left">Password</label>
                                        <input name="passwordset" id="Password" placeholder="enter password" type="password" class="form-control" pattern="[0-9a-zA-Z]{3,12}" title="please enter an alphanumeric password containing 3-12 characters" required>
                                        <?php

                                        if (isset($_GET['a'])) {
                                        ?>
                                            <div class="widget-heading">
                                                <label class="text-danger"> Invalid user access</label>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <input type="submit" class="btn btn-primary btn-block mb-4" value="LOGIN">

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4"><br /></div>
                </div>
            </div>
        </div>

        <div class="nk-gap-4"></div>
        <!-- START: Footer -->
        <?php // include_once("footer.php");
        ?>
        <!-- END: Footer -->
    </div>
    <!-- START: Page Background -->
    <?php // include_once("intro/start-page-bg.php");
    ?>
    <!-- END: Page Background -->

    <!-- START: Search Modal -->
    <?php include_once("intro/start-search-modal.php"); ?>
    <!-- END: Search Modal -->

    <!-- START: Login Modal -->
    <?php include_once("intro/start-login-modal.php"); ?>
    <!-- END: Login Modal -->

    <!-- START: Scripts -->
    <?php include_once("scripts.php"); ?>
    <!-- END: Scripts -->

</body>

</html>
<?php include_once("php/close.php"); ?>