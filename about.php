
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

Looking for a place to go-to for loads of fun and adventure? <span class="text-main-1">Sploop!</span> is the place for you! With 16 different thematic attractions in <span class="text-main-1"> <a href="games?t=1" >VR ARCADE</a></span> and <span class="text-main-1"><a href="games?t=2" >Interactive</a></span> children's playground - and there's always something new and exciting for everyone.
</p>
 
<p class="h4 text-center">
Bring your <span class="text-main-1">family</span> and <span class="text-main-1">friends</span> down for a <span class="text-main-1">Sploop!</span> good time! 
</p>
 
<p class="h4 text-center">
It's never just about the games in <span class="text-main-1">Sploop!</span>, it's always about creating great memories

                        </p>
      
    </div>
    


    <?php

    include_once("intro/about-pic.php");
    ?>
    <br/>
                      <h3 class="nk-decorated-h-2">


</h3>

 <p class="h4 text-center">Whether you are looking for something challenging and fun or new to <span class="text-main-1"> <a href="games?t=1" >VR for Adults</a></span> or <span class="text-main-1"><a href="games?t=2" >Interactive for Children</a></span>, we have it covered.</p>
 
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