<?php require '../layouts/head.php'; ?>
<?php require '../layouts/uppercontent.php'; ?>

<?php 

    $model = allWithWhere('
        model 
        JOIN detail 
        ON detail.detail_id = model.detail_id 
        JOIN brand
        ON brand.brand_id = model.brand_id
        JOIN price
        ON price.price_id = model.price_id
        ',
        'brand.brand_id',
        $_GET['id']
    );

    $item = (int)countRow('model_id','model JOIN brand ON brand.brand_id = model.brand_id WHERE brand.brand_id ='.$_GET['id']);
    $pic = 1;

?>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="content">
<div class="women_main">
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<div class="w_content">
<div class="women">
<a href="#"><h4><?= $_GET['brand'] ?> Watches - <span><?php if($item > 1){ echo $item.' items'; }else{ echo $item. ' item'; }; ?></span> </h4></a>
<ul class="w_nav">
<li>Sort : </li>
<li><a class="active" href="#">popular</a></li> |
<li><a href="#">new </a></li> |
<li><a href="#">discount</a></li> |
<li><a href="#">price: Low High </a></li> 
<div class="clear"></div>	
</ul>
<div class="clearfix"></div>	
</div>


<!-- grids_of_4 -->

	<?php   if($model != null): ?>
        
        <?php   foreach($model as $mod): ?>
                    <div class="grids_of_4">
                        <div class="grid1_of_4">
                            <div class="content_box"><a href="/glamwatch/views/model/show.php">
                            <img src="../assets/images/watches/<?= $pic++; ?>.jpg" class="img-responsive" alt="">
                            </a>
                            <h4><a href="/glamwatch/views/model/show.php"><?= $mod['detail_info']; ?></a></h4>
                            <p>It is a long established fact that</p>
                            <div class="grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price"><h6>&#8369; <?= number_format($mod['price_amount']); ?></h6></span></div>
                                <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                            </div>
                            </div>
                        </div>
                    </div><!-- end grids_of_4 -->
	    <?php   endforeach ?>
    <?php   else:
                echo '<p>No Item Match</p>';
            
            endif ?>
<!-- grids_of_4 -->

<div class="clearfix" style="margin-bottom: 50px;"></div>

<div class="clearfix"></div>
<!-- end content -->



<?php require '../layouts/footer.php'; ?>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->	
</div>
	<!--end ng content-->
</div>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php require '../layouts/side.php'; ?>
<?php require '../layouts/foot.php'; ?>