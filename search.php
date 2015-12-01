<?php
    include 'header.php';
?>
     <div class="main">
     <div class="row">
     <div class="col-sm-3 ">
         <div class="row  panel">
            <div class="col-md-12 well ">
                <p class="panelFontsize">Find books in your city:</p>
                <br/>
                <div class="col-md-12 ">
                    <input id="city-filter" class="innerFont" type="text" placeholder="Select city"/>

                </div>

            </div>
             <div class="col-md-12 well">
                <p class="panelFontsize">Looking For:</p>
                <br/>
                <?php
                    include 'connection/connection.php';
                    connectdb();
                    $sql="select category_name from Category";
                    $res=query($sql);
                    while($row=$res->fetch_assoc())
                    {
                        echo '<div class="col-md-12 "><input type="checkbox" name="'.$row['category_name'].'">&nbsp;<text class="innerFont">'.$row['category_name'].'</text></div>';
                    }
                ?>

            </div>
             <div class="col-md-12 well">
                <p class="panelFontsize">Posted On:</p>
                <br/>
                <div class="col-md-12 ">
                    <input type="checkbox"  name="Book" value="1">&nbsp;<text class="innerFont">Sell</text>
                </div>
                <div class="col-md-12">
                    <input type="checkbox" class="space" name="Book" value="1">&nbsp;<text class="innerFont">Rent</text>
                </div>
                <div class="col-md-12">
                    <input type="checkbox" class="space" name="Book" value="1">&nbsp;<text class="innerFont">Exchange</text>
                </div>
            </div>
             <div class="col-md-12 well">
                <p class="panelFontsize">Filter by Catagory:</p>
                <br/>
                <?php
                    $sql="select category_name from Category";
                    $res=query($sql);
                    while($row=$res->fetch_assoc())
                    {
                        echo '<div class="col-md-12 "><input type="checkbox" class="space" name="'.$row['category_name'].'" value="1">&nbsp;<text class="innerFont">'.$row['category_name'].'</text></div>';
                    }
                ?>
            </div>
         </div>
     </div>

     <script type="text/javascript">
        $('#city-filter').bind("enterKey",function(e){

        });
        $('#city-filter').keyup(function(e){
            if(e.keyCode == 13)
            {
                $(this).trigger("enterKey");
            }
        });
    </script>

      <div class="shop_top col-md-8">
        <div class="container">
            <?php
                $term=$_GET['search'];
                $sql="select * from Item where post_status='available' and (title like '%".$term."%' or description like '%".$term."%' or author like '%".$term."%')";
                $res=query($sql);
                    $cnt=0;
                    while($row=$res->fetch_assoc())
                    {
                        if($cnt%4==0)
                        {
                            echo '<div class="row shop_box-top">';
                        }
                        echo '<div class="col-md-3 shop_box"><a href="single.php?id='.$row['item_id'].'">
                    <img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="293" width="182" alt=""/>
                    <span class="new-box">';
                        if ($row['item_condition']=='new')
                            echo '<span class="new-label">New</span>';
                        elseif($row['item_condition']=='used')
                            echo '<span class="used-label">Used</span>';
                        else
                            echo '<span class="mint-label">Mint</span>';
                    echo '</span>
                    <span class="sale-box">
                        <span class="sale-label">'.$row['availability_type'].'</span>
                    </span>
                    <div class="shop_desc">
                        <h3><a href="single.php?id='.$row['item_id'].'">'.$row['title'].'</a></h3>
                        <p>'.$row['author'].'</p>
                        <span class="actual">$'.$row['price'].'</span><br>';

                        if(isset($_SESSION['userid']))
                        {
                            $sql='select * from Wishlist where user_id='.$_SESSION['userid'].' and item_id='.$row['item_id'];
                            $res2=query($sql);
                            if($res2->num_rows>0)
                            {
                                echo '<ul class="add-to-links"><li><a href="#" class="wishlist" id="'.$row['item_id'].'" data-wish="added"><img src="images/wish2.png" alt=""/>Remove from Wishlist</a></li><div class="clear"> </div></ul>';
                            }
                            else
                            {
                                echo '<ul class="add-to-links"><li><a href="#" class="wishlist" id="'.$row['item_id'].'" data-wish="not added"><img src="images/wish.png" alt=""/>Add to Wishlist</a></li><div class="clear"> </div></ul>';
                            }
                        }

                        echo'</div>
                    </a></div>';
                    if($cnt%4==3)
                    {
                        echo '</div>';
                    }
                    $cnt=$cnt+1;
                }
            ?>
         </div>
       </div>
    </div>
</div>
<?php
    include 'footer.php';
?>
