

<?php include_once("php/connect.php"); ?>
<?php include_once("php/item.php"); ?>

<!DOCTYPE html>    
<html lang="en">
<?php
include_once("head.php");
?>
<body>        
<?php
include_once("header.php");
include_once("nav-mobile.php");
?>

<!-- END: Navbar Mobile -->
    <div class="nk-main">      
            <div class="nk-gap-2"></div>         
    <div class="container">
    <div class="nk-product-description text-center">
<img src="assets/images/about-logo.png">
<p class="h4 text-center">

this <span class="text-main-1">Page </span> isn't available right now.
</p>
    </div>
</div>

<div class="nk-gap-4"></div>
    <!-- START: Footer -->
    <?php include_once("footer.php");?>
    <!-- END: Footer -->    
</div>  
 <!-- START: Page Background --> 
<?php include_once("intro/start-page-bg.php");?>
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