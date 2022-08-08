
<?php include_once("php/connect.php"); ?>
<?php include_once("php/item.php"); ?>

<?php
    $embed = "";
    $primary_title = "";
    $secondary_title = "";
    $link_board = "";
    $sql_query_live_stream = "select id,link from live_stream order by id ";
    $live_stream = $con->query($sql_query_live_stream) or dir($con->error);
    while ($row=$live_stream->fetch_assoc())
    {
        if ($row["id"]==1){
           // link
            $embed=$row["link"];
            
        }
        elseif($row["id"]==2) {
                //primary
                $primary_title= $row["link"];

        }
        elseif($row["id"]==3) {
                //secondary
                $secondary_title= $row["link"];

        }


    }

    $sql_query_leader_board = "select link from leader_board order by id desc limit 1";
    $leader_board = $con->query($sql_query_leader_board) or dir($con->error);
    if ($row=$leader_board->fetch_assoc())
    {
        $link_board=$row["link"];
    }

?>

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
       
          
                  <p class="h3 text-center">
                  <?php echo $primary_title;?><span class="text-main-1"> <?php echo $secondary_title;?></span> 
</p>
        <div class="videoWrapper col-lg-12 col-md-12 col-sm-12 col-6  text-center">     
             <?php echo $embed;?>       
        </div>
    
        </div>
        <div class="nk-gap"></div>  
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
    
                        <iframe src="<?php echo $link_board;?>" width="100%" height="980" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
                              
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
<style>



</style>