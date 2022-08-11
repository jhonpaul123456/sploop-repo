<?php include_once("php/connect.php"); ?>
<?php include_once("php/item.php"); ?>




<!-- REMOVED -->

<!-- <?php
        $embed = "";
        $primary_title = "";
        $secondary_title = "";
        $link_board = "";
        $sql_query_live_stream = "select id,link from live_stream order by id ";
        $live_stream = $con->query($sql_query_live_stream) or dir($con->error);
        while ($row = $live_stream->fetch_assoc()) {
            if ($row["id"] == 1) {
                // link
                $embed = $row["link"];
            } elseif ($row["id"] == 2) {
                //primary
                $primary_title = $row["link"];
            } elseif ($row["id"] == 3) {
                //secondary
                $secondary_title = $row["link"];
            }
        }

        $sql_query_leader_board = "select link from leader_board order by id desc limit 1";
        $leader_board = $con->query($sql_query_leader_board) or dir($con->error);
        if ($row = $leader_board->fetch_assoc()) {
            $link_board = $row["link"];
        }

        ?> -->

<!-- REMOVED -->





<!DOCTYPE html>
<html lang="en">
<?php
include_once("head.php");
?>


<style>
    @keyframes blink {
        50% {
            opacity: 0;
            color: #ff9f3b;
        }
    }
    .blink {
        animation: blink 1s linear infinite;
    }
</style>

<body>
    <?php
    include_once("header.php");
    include_once("nav-mobile.php");
    ?>

    <!-- END: Navbar Mobile -->
    <!-- <div class="nk-main">      
            <div class="nk-gap-2"></div>     
       
          
                  <p class="h3 text-center">
                  <?php echo $primary_title; ?><span class="text-main-1"> <?php echo $secondary_title; ?></span> 
</p>
        <div class="videoWrapper col-lg-12 col-md-12 col-sm-12 col-6  text-center">     
             <?php echo $embed; ?>       
        </div>
    
        </div>
        <div class="nk-gap"></div>  
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
    
                        <iframe src="<?php echo $link_board; ?>" width="100%" height="980" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
                       
                        
                        
        </div> -->

    <div style="margin: 0 auto;" class="text-center">
        <img src="assets/images/snuggles-1_500.png" alt="" style="width: auto; max-height: 200;">

        <p class="h4 text-center" style="font-size:90px;">

            WELCOME TO<span class="text-main-1"> SNUGGLES ARENA!</span>
        </p>
    </div>



    <!-- START NEW SECTIONS -->
    <?php
    $q_snuggle = "SELECT * FROM snuggles_items";
    $q_snuggles_run = mysqli_query($con, $q_snuggle);
    

    if(mysqli_num_rows($q_snuggles_run) > 0) {
        foreach ($q_snuggles_run as $snuggle) {
            ?>
            <div class="container">


        <div class="nk-gap-2"></div>
        <div class="nk-gap"></div>

        <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1"><?= $snuggle['title']; ?></span></span></h2>
        <div class="nk-gap"></div>
        <div class="nk-popup-gallery">
            <div class="row vertical-gap">


                <div class="col-lg-6 col-md-6 col-6">
                    <div class="nk-gallery-item-box d-flex">
                        <div class="nk-plain-video" data-video="<?= $snuggle['videolink']; ?>"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="title">
                        <h3 class="blink"><?= $snuggle['title']; ?></h3>
                    </div>
                    <div class="details">
                    <?= $snuggle['description']; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php
    
        
        }
    }else {
        echo "data not found";
    }
    ?>
    

    <!-- END NEW SECTIONS -->


    <div class="nk-gap-4"></div>
    <!-- START: Footer -->
    <?php include_once("footer.php"); ?>
    <!-- END: Footer -->
    </div>
    <!-- START: Page Background -->
    <?php include_once("intro/start-page-bg.php"); ?>
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
<style>



</style>