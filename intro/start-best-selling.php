
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Hot</span> Games</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
        <?php
        $item = $con->query("select i.id,i.name,i.details,i.image,t.description as `type` from item as i inner join item_type as t on t.id = i.`type` where i.hot='1'") or dir($con->error);
        while ($row=$item->fetch_assoc())
        {
            $id = $row["id"];
            $name = $row["name"];
            $details = $row["details"];
            $image = $row["image"];
            $type = $row["type"];
            item_display($id,$name,$details,$image,$type);   
        }
              
 ?>

            
                           
                
                
                
            
                
                
                
                
            </div>