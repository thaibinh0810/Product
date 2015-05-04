<?php
/* @var $this ShopProductsController */
/* @var $data ShopProducts */
?>



<div class="product" data-product-id = <?php echo $data->product_id ?> data-category="women|women-jeans|women-skirt" data-brand="brand1" data-price="<?php echo $data->price ?>" data-colors="red|blue|black|white" data-size="S|M|L">
	<div class="entry-media">
		<img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyLoad thumb" />
		<div class="hover">
			<?php echo CHtml::link('',array('/Shopproducts/'.$data->product_id),array('class' => 'entry-url')); ?>
			<ul class="icons unstyled">
				<li>
					<a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
				</li>
				<li>
					<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
				</li>
			</ul>
			<div class="rate-bar">
				<input type="range" value="4.5" step="0.5" id="backing1" />
				<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
			</div>
		</div>
	</div>
	<div class="entry-main">
		<h5 class="entry-title">
			<?php echo CHtml::link($data->title,array('/Shopproducts/'.$data->product_id)); ?>
		
		</h5>
		<div class="entry-description visible-list">
			<p>$data->description</p>
		</div>
		<div class="entry-price">
			<strong class="accent-color price">$ <?php echo $data->price ?></strong>
			<a href="#" class="btn btn-round btn-default add-to-cart visible-list">Add to Cart</a>
		</div>
		<div class="entry-links clearfix">
			<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
			<a href="#" class="pull-right">+ Add to Compare</a>
		</div>
	</div>
</div>

