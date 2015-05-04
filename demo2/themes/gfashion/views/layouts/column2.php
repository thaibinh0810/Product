<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<!-- SIDEBAR -->
<div class="container">
	<aside class="col-xs-12 col-sm-4 col-md-3">
		<section class="sidebar push-up">
			<!-- CATEGORIES -->
			<section class="side-section bg-white">
				<header class="side-section-header">
					<h3 class="side-section-title">Categories</h3>
				</header>
				<div class="side-section-content">
					<ul id="category-list" class="vmenu unstyled">
						<li>
							<input type="checkbox" id="check-women" class="prettyCheckable" data-label="Women" data-labelPosition="right" value="women" />
							<ul>
								<li><input type="checkbox" id="check-women-accessories" class="prettyCheckable" data-label="Accessories" data-labelPosition="right" value="women-accessories" /></li>
								<li><input type="checkbox" id="check-women-swimwear" class="prettyCheckable" data-label="Swimwear" data-labelPosition="right" value="women-swimwear" /></li>
								<li><input type="checkbox" id="check-women-basics" class="prettyCheckable" data-label="Basics" data-labelPosition="right" value="women-basics" /></li>
								<li><input type="checkbox" id="check-women-dresses" class="prettyCheckable" data-label="Dresses" data-labelPosition="right" value="women-dresses" /></li>
								<li><input type="checkbox" id="check-women-jeans" class="prettyCheckable" data-label="Jeans" data-labelPosition="right" value="women-jeans" /></li>
								<li><input type="checkbox" id="check-women-skirt" class="prettyCheckable" data-label="Skirts" data-labelPosition="right" value="women-skirt" /></li>
								<li><input type="checkbox" id="check-women-legging" class="prettyCheckable" data-label="Leggings" data-labelPosition="right" value="women-legging" /></li>
							</ul>
						</li>
						<li>
							<input type="checkbox" id="check-men" class="prettyCheckable" data-label="Men" data-labelPosition="right" value="men" />
							<ul>
								<li><input type="checkbox" id="check-men-accessories" class="prettyCheckable" data-label="Accessories" data-labelPosition="right" value="men-accessories" /></li>
								<li><input type="checkbox" id="check-men-jacket" class="prettyCheckable" data-label="Jackets" data-labelPosition="right" value="men-jacket" /></li>
								<li><input type="checkbox" id="check-men-jumper" class="prettyCheckable" data-label="Jumpers" data-labelPosition="right" value="men-jumper" /></li>
								<li><input type="checkbox" id="check-men-jean" class="prettyCheckable" data-label="Jeans" data-labelPosition="right" value="men-jean" /></li>
								<li><input type="checkbox" id="check-men-shoe" class="prettyCheckable" data-label="Shoes" data-labelPosition="right" value="men-shoe" /></li>
								<li><input type="checkbox" id="check-men-tshirt" class="prettyCheckable" data-label="T-Shirt & Polo Shirts" data-labelPosition="right" value="men-tshirt" /></li>
								<li><input type="checkbox" id="check-men-blazers" class="prettyCheckable" data-label="Blazers" data-labelPosition="right" value="men-blazers" /></li>
							</ul>
						</li>
						<li>
							<input type="checkbox" id="check-beauty" class="prettyCheckable" data-label="Beauty & Make-up" data-labelPosition="right" value="makeup" />
						</li>
						<li>
							<input type="checkbox" id="check-best" class="prettyCheckable" data-label="Best Sellers" data-labelPosition="right" value="best" />
						</li>
						<li>
							<input type="checkbox" id="check-new" class="prettyCheckable" data-label="New Arrivals" data-labelPosition="right" value="new" />
						</li>
					</ul>
				</div>
				<footer class="side-section-footer text-center hide">
					<button type="button" id="btn-filter-cat" class="btn btn-primary btn-round uppercase">Clear Filters</button>
				</footer>
			</section>
			<!-- // CATEGORIES -->
			
			<!-- BRANDS -->
			<section class="side-section bg-white">
				<header class="side-section-header">
					<h3 class="side-section-title">Brands</h3>
				</header>
				<div class="side-section-content">
					<ul id="brands-list" class="vmenu unstyled">
						<li>
							<input type="checkbox" id="check-brand1" class="prettyCheckable" data-label="Because" data-labelPosition="right" value="brand1" />
						</li>
						<li>
							<input type="checkbox" id="check-brand2" class="prettyCheckable" data-label="Lorem" data-labelPosition="right" value="brand2" />
						</li>
						<li>
							<input type="checkbox" id="check-brand3" class="prettyCheckable" data-label="Ipsum" data-labelPosition="right" value="brand3" />
						</li>
						<li>
							<input type="checkbox" id="check-brand4" class="prettyCheckable" data-label="Is too" data-labelPosition="right" value="brand4" />
						</li>
						<li>
							<input type="checkbox" id="check-brand5" class="prettyCheckable" data-label="Mainstream" data-labelPosition="right" value="brand5" />
						</li>
					</ul>
				</div>
				<footer class="side-section-footer text-center hide">
					<button type="button" id="btn-filter-brand" class="btn btn-primary btn-round uppercase">Clear Filters</button>
				</footer>
			</section>
			<!-- // BRANDS -->
			
			<!-- PRODUCT FILTER -->
			<section class="side-section bg-white">
				<header class="side-section-header">
					<h3 class="side-section-title">Filter</h3>
				</header>
				
				<!-- PRICE RANGE SLIDER -->
				<div id="filter-by-price" class="side-section-content">
					<h4 class="side-section-subheader">Filter By Price</h4>
					<div class="range-slider-container">
						<div class="range-slider" data-min="0" data-max="2000" data-step="10" data-currency="$"></div>
						<div class="range-slider-value clearfix">
							<span>Price: &ensp;</span>
							<span class="min"></span>
							<span class="max"></span>
						</div>
					</div>
				</div>
				<!-- // PRICE RANGE SLIDER -->
				
				<!-- FILTER BY SIZE -->
				<div id="filter-by-size" class="side-section-content">
					<h4 class="side-section-subheader">Filter By Size</h4>
					<ul class="inline-li li-m-lg text-center unstyled">
						<li>
							<a href="#" class="round-icon" data-toggle="tooltip" data-title="X-Small / UK 8"><small>XS</small></a>
							<input type="checkbox" class="filter-checkbox filter-size" value="XS" />
						</li>
						<li>
							<a href="#" class="round-icon" data-toggle="tooltip" data-title="Small / UK 10"><small>S</small></a>
							<input type="checkbox" class="filter-checkbox filter-size" value="S" />
						</li>
						<li>
							<a href="#" class="round-icon" data-toggle="tooltip" data-title="Medium / UK 12"><small>M</small></a>
							<input type="checkbox" class="filter-checkbox filter-size" value="M" />
						</li>
						<li>
							<a href="#" class="round-icon" data-toggle="tooltip" data-title="Large / UK 14"><small>L</small></a>
							<input type="checkbox" class="filter-checkbox filter-size" value="L" />
						</li>
						<li>
							<a href="#" class="round-icon" data-toggle="tooltip" data-title="X-Large / UK 16"><small>XL</small></a>
							<input type="checkbox" class="filter-checkbox filter-size" value="XL" />
						</li>
						<li>
							<a href="#" class="round-icon" data-toggle="tooltip" data-title="XX-Large"><small>XXL</small></a>
							<input type="checkbox" class="filter-checkbox filter-size" value="XXL" />
						</li>
					</ul>
				</div>
				<!-- // FILTER BY SIZE -->
				
				<!-- FILTER BY COLOR -->
				<div id="filter-by-color" class="side-section-content">
					<h4 class="side-section-subheader">Filter By Colour</h4>
					<ul class="inline-li li-m-sm text-center unstyled">
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Black" style="background: #000;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="black" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="White" style="background: #fff; border-color: #acacac;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="white" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Green" style="background: #60bd0d;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="green" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Red" style="background: #ff5757;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="red" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Blue" style="background: #0d9abd;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="blue" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Brown" style="background: #c57313;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="brown" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Purple" style="background: #a613c5;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="purple" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Silver" style="background: #e5e5e8;"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="silver" />
						</li>
						<li>
							<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Patternie" style="background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAHklEQVQIW2NkYGD4D8QgwAgjMASgCiAqwcqgACwAAIrDBAOqGrGNAAAAAElFTkSuQmCC');"></a>
							<input type="checkbox" class="filter-checkbox filter-color" value="patternie" />
						</li>
					</ul>
				</div>
				<!-- // FILTER BY COLOR -->
			</section>
			<!-- // PRODUCT FILTER -->
			
			<!-- BEST SELLERS -->
			<section class="side-section bg-white">
				<header class="side-section-header">
					<h3 class="side-section-title">Best Sellers</h3>
				</header>
				<div class="side-section-content">
					<ul class="product-medialist li-m-t unstyled clearfix">
						<li>
							<div class="item clearfix">
								<a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" data-toggle="lightbox" class="entry-thumbnail">
									<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="Inceptos orci hac libero" />
								</a>
								<h5 class="entry-title"><?php echo CHtml::link('Inceptos orci hac libero',array('site/product','view'=>'productdetail')); ?></h5>
								<s class="entry-discount m-r-sm"><span class="text-sm">$ 350.00</span></s>
								<span class="entry-price accent-color">$ 250.00</span>
							</div>
						</li>
						<li>
							<div class="item clearfix">
								<a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" data-toggle="lightbox" class="entry-thumbnail">
									<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="Inceptos orci hac libero" />
								</a>
								<h5 class="entry-title"><?php echo CHtml::link('Inceptos orci hac libero',array('site/product','view'=>'productdetail')); ?></h5>
								<span class="entry-price">$ 350.00</span>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- // BEST SELLERS -->
			
			<!-- PROMO -->
			<div class="promo inverse-background" style="background: url('<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/500x400.jpg') no-repeat; background-size: auto 100%;">
				<div class="inner text-center np">
					<div class="ribbon">
						<h6 class="nmb">New Arrivals</h6>
						<h5 class="text-semibold uppercase nmb">Leather Fashion</h5>
						<div class="space10"></div>
						<a href="products.php" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> Shop Now</span></a>
					</div>
				</div>
			</div>
			<!-- // PROMO -->
			
		</section>
	</aside>
	<div class="col-xs-12 col-sm-12 col-md-6 center-xs">
		<!-- DISPLAY MODE -->
		<ul class="unstyled inline-li li-m-r-l-sm pull-left">
			<li><a class="round-icon active" href="#" data-toggle="tooltip" data-layout="grid" data-title="Switch to List Grid Mode"><i class="iconfont-th"></i></a></li>
			<li><a class="round-icon" href="#" data-toggle="tooltip" data-layout="list" data-title="Switch to List View Mode"><i class="iconfont-list"></i></a></li>
		</ul>
		<!-- // DISPLAY MODE -->
		
		<!-- NUMBER OF ITEMS TO BE DISPLAY -->
		<div class="pull-right m-l-lg">
			<span class="inline-middle m-r-sm text-xs">Show</span>
			<div class="inline-middle styled-dd">
				<select>
					<option value="9">9</option>
					<option value="12" selected>12</option>
					<option value="24">24</option>
					<option value="36">36</option>
				</select>
			</div>
		</div>
		<!-- // NUMBER OF ITEMS TO BE DISPLAY -->
	</div>
	<div class="space30 visible-xs"></div>
	<!-- PAGINATION -->
	<div>
		<ul class="paginator li-m-r-l pull-right">
			<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page"><i class="iconfont-angle-left"></i></a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Next Page"><i class="iconfont-angle-right"></i></a></li>
		</ul>
	</div>
	<!-- // PAGINATION -->
	<div>
		<?php echo $content; ?>
	</div><!-- content -->
</div>
	<!-- Particular Page Javascripts -->
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.nouislider.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.isotope.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/products.js"></script>
	<!-- // Particular Page Javascripts -->
	
<?php $this->endContent(); ?>