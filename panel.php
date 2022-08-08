<?php

if ( isset($_GET["logout"])){
 $data= $_GET["logout"];
 if($data==1){
    session_start();
    session_destroy();
 }

}

session_start();
if( isset($_SESSION["user_id"])){

}
else{
    header("location:snuggles");
    exit();
}

?>
<?php include_once("php/connect.php"); ?>
<?php 
if(isset($_POST['link'])){
$this_link = $_POST['link'];
$this_primary = $_POST['primary_header'];
$this_secondary = $_POST['secondary_header'];
    $con->query("update live_stream SET link='". $this_link ."' where id = '1' ") or dir($con->error);
    $con->query("update live_stream SET link='". $this_primary ."' where id = '2' ") or dir($con->error);
    $con->query("update live_stream SET link='". $this_secondary ."' where id = '3' ") or dir($con->error);
}

?>



<!DOCTYPE html>    
<html lang="en">
<?php
include_once("head.php");
?>
<body>        
<?php
//include_once("header.php");
//include_once("nav-mobile.php");
$link_str = "";
$primary_title= "";
$secondary_title = "";
$link_sql = $con->query("SELECT id,link FROM live_stream order by id ");
while ($row=$link_sql->fetch_assoc())
{
    if($row["id"]==1){
        $link_str = $row["link"];
    }elseif($row["id"]==2){
        $primary_title = $row["link"];
    }    
    elseif($row["id"]==3){
        $secondary_title = $row["link"];
    }

}
?>
<style>
#thistext{
    height: 200px;
    width: 100%;
}
#thistext2{

    width: 100%;
}
    
    
</style>


<!-- END: Navbar Mobile -->
    <div class="nk-main">      
            <div class="nk-gap-2"></div>         

            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-md-6" >
                        <?php echo  $link_str;?>
                </div>
            <div class="col-lg-6 col-md-6" >
                <form action="panel" method="post">
                <div class="form-group form-inline">
                        <label class="mx-2" for="note-title">Embed:</label>
                        <textarea class="form-control" id="thistext" name="link" rows="3"><?php print htmlspecialchars($link_str);?></textarea>
                      
                </div>
                <div class="form-group form-inline">
                        <label class="mx-2" for="note-title">Primary Header:</label>
                        <textarea class="form-control" id="thistext2" name="primary_header" rows="3"><?php echo $primary_title;?></textarea>                   
                </div>
                <div class="form-group form-inline">
                        <label class="mx-2" for="note-title">Secondary Header:</label>
                        <textarea class="form-control" id="thistext2" name="secondary_header" rows="3"><?php echo $secondary_title;?></textarea>                     
                </div>
                <input type="submit" class="btn btn-primary" name="update" value="Save Embed" >
                </form>
            </div>
                </div>
            </div>


<div class="nk-gap-4"></div>
    <!-- START: Footer -->
    <?php // include_once("footer.php");?>
    <!-- END: Footer -->  
<a class="btn btn-info" href="panel.php?logout=1">Logout</a>  
</div>  
 <!-- START: Page Background --> 
<?php // include_once("intro/start-page-bg.php");?>
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