<?php include_once("php/connect.php"); 



?>
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
    <!-- START: Image Slider -->
 <?php include_once("intro/image-slider.php"); ?>
    <!-- END: Image Slider -->
    <!-- START: Categories -->
    <?php include_once("intro/start-category.php"); ?>
    <!-- END: Categories -->
    <!-- START: Latest News -->
    <?php // include_once("intro/start-news.php"); ?>
    <!-- END: Latest News -->

    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Latest Posts -->
        
            <!-- END: Latest Posts -->
            <!-- START: Latest Matches -->
           <?php // include_once("intro/start-latest-matches.php"); ?>
            <!-- START: Tabbed News -->
            <?php include_once("intro/start-tabbed-news.php"); ?>
            <!-- END: Tabbed News --> 
            <div class="nk-gap-2"></div> 
            <!-- END: Latest Matches -->
            <?php include_once("intro/start-best-selling.php");?>
            <!-- START: Latest Pictures -->
           <?php // include_once("intro/start-latest-picture.php");  // to be cafe ?>
            <!-- END: Latest Pictures -->
            <!-- START: Best Selling -->
            <!-- END: Best Selling -->
        </div>
        <?php include_once("intro/start-sidebar.php");  ?>       
    </div>
    <div class="nk-gap-2"></div>   
    <?php  include_once("intro/start-latest-posts.php");?>
    <?php  include_once("intro/start-monthsary-posts.php");?>
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