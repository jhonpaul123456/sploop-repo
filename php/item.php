

<?php
function item_display($item_id,$name,$description,$image,$type)
{
?>

<div class="col-lg-4 col-md-6 col-6">
    <div class="nk-gallery-item-box">
        <a href="<?php echo "games?g=$item_id"; ?>" class="nk-gallery-item" data-size="500x500">
            <img src="assets/images/<?php echo $type."/".$image; ?>"  alt="">
        </a>   
    </div>
    <h4 class="text-left text-center" ><?php echo $name; ?></h4>
</div>
<?php
}
function item_display_single($item_id,$name,$description,$image,$size,$type,$cn)
{
?>
        <div class="row vertical-gap">
<div class="col-md-4">
                    <!-- START: Product Photos -->
    <div class="nk-popup-gallery">
        <div class="nk-gallery-item-box">
            <a href="assets/images/<?php echo $type."/".$image; ?>" class="nk-gallery-item" data-size="<?php echo $size; ?>">
                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                <img src="assets/images/<?php echo $type."/".$image; ?>" alt="">
            </a>
        </div>

        <div class="nk-gap-1"></div>
        <div class="row vertical-gap sm-gap">
                        <?php
                   $item_img = $cn->query("select i.image,i.size from item_image as i where i.item_id ='$item_id' limit 4") or dir($cn->error);
                   while ($row=$item_img->fetch_assoc())
                   {
                        $image_file = $row["image"];
                        $image_size = $row["size"];    

                        ?>
                            <div class="col-6 col-md-4">
                                <div class="nk-gallery-item-box">
                                    <a href="assets/images/<?php echo $type."/".$image_file; ?>" class="nk-gallery-item" data-size="<?php echo $image_size;?>">
                                        <div class="nk-gallery-item-overlay">
                                            <span class="ion-eye">
                                                
                                            </span></div>
                                        <img src="assets/images/<?php echo $type."/".$image_file; ?>" alt="">
                                    </a>
                                </div>
                            </div>                       
                        <?php
                   }
   ?>
                      </div>

                    </div>
                    <!-- END: Product Photos -->
                </div>
                <div class="col-md-8">
                <h3><?php echo $name;?></h3>
                    <div class="nk-product-description">
                        <p>
                    <?php echo $description; ?>
                        </p>
                    </div>
                    <!-- START: Add to Cart -->
                    <div class="nk-gap-2"></div>   
                    <div class="nk-gap-3"></div>
                    <!-- END: Add to Cart -->
                    <!-- START: Meta -->     
                    <!-- END: Meta -->
                </div>

        </div>

    <?php
}
function get_item_type($id,$cn)
{
    $return_value = "";
    $type = $cn->query("select description from item_type where id ='$id' limit 1");
    if ($row=$type->fetch_assoc())
    {
        $return_value = $row['description'];
    }   
    return $return_value;
}
?>