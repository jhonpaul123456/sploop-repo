<?php
$id=0;
$t=0;
if(isset($_GET['g']))
{
    $id=$_GET['g'];
}
elseif(isset($_GET['t'])){
    $t=$_GET['t'];
}
else{

    header("location:index.php");
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
include_once("header.php");
include_once("nav-mobile.php");
?>

<!-- END: Navbar Mobile -->
    <div class="nk-main">      
            <div class="nk-gap-2"></div>         
<div class="container">
<?php
if($id!=0){
    $sql_query = "select t.id as `type_id`,i.id,i.name,i.details,i.image,i.size,t.description as `type` from item as i inner join item_type as t on t.id = i.`type` where i.id ='$id' limit 1";
    $item = $con->query($sql_query) or dir($con->error);
    if ($row=$item->fetch_assoc())
    {
        $id = $row["id"];
        $name = $row["name"];
        $details = $row["details"];
        $image = $row["image"];
        $type = $row["type"];
        $t=$row["type_id"];
        $size = $row["size"];

        item_display_single($id,$name,$details,$image,$size,$type,$con);   
        
        ?>
            <div class="nk-gap-2"></div> 
            <div class="nk-gap"></div>
   
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Other  </span> <?php echo $type;?> Games </span></h2>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                <?php
                $sql_query_x = "select i.id,i.name,i.details,i.image,i.size,t.description as `type` from item as i inner join item_type as t on t.id = i.`type` where t.id ='$t' and i.id <> '$id' limit 6 "; 
                $item_x = $con->query($sql_query_x) or dir($con->error);
                while ($row=$item_x->fetch_assoc())
                {
                    $id = $row["id"];
                    $name = $row["name"];
                    $details = $row["details"];
                    $image = $row["image"];
                    $type = $row["type"];
                    $size = $row["size"];
                    item_display($id,$name,$details,$image,$type);   
                }
                ?>
       </div>

        <?php


    }
    else{

  echo  "game not found";
    }
}
elseif ($t!=0)
{
    ?>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo get_item_type($t,$con) ?></span> Games</span></h3>
            <div class="nk-gap"></div>
    
       <div class="row vertical-gap">
                <?php
                $sql_query = "select i.id,i.name,i.details,i.image,i.size,t.description as `type` from item as i inner join item_type as t on t.id = i.`type` where t.id ='$t' "; 
                $item = $con->query($sql_query) or dir($con->error);
                while ($row=$item->fetch_assoc())
                {
                    $id = $row["id"];
                    $name = $row["name"];
                    $details = $row["details"];
                    $image = $row["image"];
                    $type = $row["type"];
                    $size = $row["size"];
                    item_display($id,$name,$details,$image,$type);   
                }
                ?>
       </div>
    <?php





}

  
              
 ?>
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