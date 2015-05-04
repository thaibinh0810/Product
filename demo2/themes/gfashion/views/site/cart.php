<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">Home</a></li>
						<li class="active">Shopping Cart</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
				
			<section class="section">
				<div class="container">
					
					<table class="tbl-cart">
						<thead>
							<tr>
								<th>Product Name</th>
								<th style="width: 15%;">Unit Price</th>
								<th style="width: 15%;">QTY</th>
								<th class="hidden-xs" style="width: 15%;">Sub Total</th>
								<th class="hidden-xs" style="width: 10%;"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="hide empty-cart">
								<td colspan="5">
									It seems your shopping cart is empty, try looking our <a href="products.php">products</a>.
								</td>
							</tr>
						</tbody>
					</table>
					
					<div class="pull-left coupon m-b">
						<div class="input-group">
							<label for="apply-coupon" class="placeholder">Enter Your Coupon Code</label>
							<input type="text" id="apply-coupon" name="coupon" class="form-control" required />
							<span class="input-group-btn">
								<button class="btn btn-primary">Apply Coupon</button>
							</span>
						</div>
					</div>
					
					<div class="shopcart-total pull-right clearfix">
						<div class="cart-subtotal text-xs m-b-sm clearfix">
							<span class="pull-left">Sub Total:</span>
							<span class="pull-right">$0.00</span>
						</div>
						<div class="cart-total text-bold m-b-lg clearfix">
							<span class="pull-left">Grand Total:</span>
							<span class="pull-right">$0.00</span>
						</div>
						<div class="text-center">
							<?php echo CHtml::link('Proceed to checkout',array('/site/checkout'),array('class' => 'btn btn-round btn-default uppercase')); ?>
	
						</div>
					</div>
					
				</div>
			</section>
			

			<!-- RELATED PRODUCTS -->
			<section class="section visible-items-4">
				<div class="container">
					<div class="row">
						<header class="section-header clearfix col-sm-offset-3 col-sm-6">
							<h3 class="section-title">You may be interested in</h3>
							<p class="section-teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit ac lobortis lacus</p>
						</header>
						
						<div class="clearfix"></div>
						
						<!-- BEGIN CAROUSEL -->
						<div id="featured-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
						
							<div class="owl-controls clickable top">
								<div class="owl-buttons">
									<div class="owl-prev"><i class="iconfont-angle-left"></i></div>
									<div class="owl-next"><i class="iconfont-angle-right"></i></div>
								</div>
							</div>
							
							<div class="owl-carousel owl-theme" data-visible-items="4" data-navigation="true" data-lazyload="true">
								<div class="product" data-product-id="1">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">Sale</div>
												</li>
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount">$ 350.00</s>
											<strong class="accent-color price">$ 250.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="2">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4" step="0.5" id="backing2" />
												<div class="rateit" data-rateit-backingfld="#backing2" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="3">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-new">New</div>
												</li>
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="3.5" step="0.5" id="backing3" />
												<div class="rateit" data-rateit-backingfld="#backing3" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 450.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="4">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="5" step="0.5" id="backing4" />
												<div class="rateit" data-rateit-backingfld="#backing4" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="5">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-sale">Sale</div>
												</li>
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4.5" step="0.5" id="backing5" />
												<div class="rateit" data-rateit-backingfld="#backing5" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<s class="entry-discount">$ 350.00</s>
											<strong class="accent-color price">$ 250.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="6">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="4" step="0.5" id="backing6" />
												<div class="rateit" data-rateit-backingfld="#backing6" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="7">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<div class="circle ribbon ribbon-new">New</div>
												</li>
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="3.5" step="0.5" id="backing7" />
												<div class="rateit" data-rateit-backingfld="#backing7" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 450.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
								
								<div class="product" data-product-id="8">
									<div class="entry-media">
										<img data-src="img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
										<div class="hover">
											<a href="product.php" class="entry-url"></a>
											<ul class="icons unstyled">
												<li>
													<a href="img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
												</li>
												<li>
													<a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
												</li>
											</ul>
											<div class="rate-bar">
												<input type="range" value="5" step="0.5" id="backing8" />
												<div class="rateit" data-rateit-backingfld="#backing8" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
											</div>
										</div>
									</div>
									<div class="entry-main">
										<h5 class="entry-title">
											<a href="#">Inceptos orci hac libero</a>
										</h5>
										<div class="entry-price">
											<strong class="price">$ 350.00</strong>
										</div>
										<div class="entry-links clearfix">
											<a href="#" class="pull-left m-r">+ Add to Wishlist</a>
											<a href="#" class="pull-right">+ Add to Compare</a>
										</div>
									</div>
								</div>
							
							</div>
								
						</div>
						<!-- // END CAROUSEL -->
						
					</div>
				</div>
			</section>
			<!-- // RELATED PRODUCTS -->
			
		</main>
		<!-- // SITE MAIN CONTENT -->