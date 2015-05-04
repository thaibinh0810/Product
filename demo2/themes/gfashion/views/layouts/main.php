<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	

	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/font/open-sans/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/font/fontawesome/style.css" type="text/css" media="screen" />
	
	<!-- GENERAL CSS FILES -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
	<!-- // GENERAL CSS FILES -->
	<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"><\/script>');</script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/owl.theme.css">
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css">

	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flexslider.css" rel="stylesheet" />
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/homeslider-flexslider.js"></script>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.nouislider.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/innerpage.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/isotope.css">
	
</head>

<body class="home">
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">

	<!-- SITE HEADER -->
	<header id="site-header" role="banner">
		<!-- HEADER TOP -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7">
						<!-- CONTACT INFO -->
						<div class="contact-info">
							<i class="iconfont-headphones round-icon"></i>
							<strong>+444 (100) 1234</strong>
							<span>(Mon- Fri: 09.00 - 21.00)</span>
							</div>
						<!-- // CONTACT INFO -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<ul class="actions unstyled clearfix">
							<li>
								<!-- SEARCH BOX -->
								<div class="search-box">
									<form action="#" method="post">
										<div class="input-iconed prepend">
											<button class="input-icon"><i class="iconfont-search"></i></button>
											<label for="input-search" class="placeholder">Search here…</label>
											<input type="text" name="q" id="input-search" class="round-input full-width" required />
										</div>
									</form>
								</div>
								<!-- // SEARCH BOX -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-social">
								<!-- SOCIAL ICONS -->
								<a href="javascript:void(0);" id="social-icons">
									<i class="iconfont-share round-icon"></i>
								</a>
								
								<div id="sub-social" class="sub-header">
									<ul class="social-list unstyled text-center">
										<li><a href="#"><i class="iconfont-facebook round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-twitter round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-google-plus round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-pinterest round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-rss round-icon"></i></a></li>
									</ul>
								</div>
								<!-- // SOCIAL ICONS -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-cart">
								<!-- SHOPPING CART -->
								<a href="javascript:void(0);" id="total-cart">
									<i class="iconfont-shopping-cart round-icon"></i>
								</a>
								
								<div id="sub-cart" class="sub-header">
									<div class="cart-header">
										<span>Your cart is currently empty.</span>
										<small><?php echo CHtml::link('(See All)',array('site/cart')); ?></small>
									</div>
									<ul class="cart-items product-medialist unstyled clearfix"></ul>
									<div class="cart-footer">
										<div class="cart-total clearfix">
											<span class="pull-left uppercase">Total</span>
											<span class="pull-right total">$ 0</span>
										</div>
										<div class="text-right">
											<?php echo CHtml::link('View Cart',array('site/cart'),array('class' => 'btn btn-default btn-round view-cart')); ?>
										</div>
									</div>
								</div>
								<!-- // SHOPPING CART -->
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- ADD TO CART MESSAGE -->
			<div class="cart-notification">
				<ul class="unstyled"></ul>
			</div>
			<!-- // ADD TO CART MESSAGE -->
		</div>
		<!-- // HEADER TOP -->
		<!-- MAIN HEADER -->
		<div class="main-header-wrapper">
			<div class="container">
				<div class="main-header">
					<!-- CURRENCY / LANGUAGE / USER MENU -->
					<div class="actions">
						<div class="center-xs">
							<!-- CURRENCY -->
							<ul class="option-list unstyled">
								<li class="active"><a href="#" data-toggle="tooltip" title="USD - US Dollar">$</a></li>
								<li><a href="#" data-toggle="tooltip" title="GBP - British Pound">£</a></li>
								<li><a href="#" data-toggle="tooltip" title="EUR - Euro">€</a></li>
							</ul>
							<!-- // CURRENCY -->
							<!-- LANGUAGES -->
							<ul class="option-list unstyled">
								<li class="active"><a href="#" data-toggle="tooltip" title="English">EN</a></li>
								<li><a href="#" data-toggle="tooltip" title="French">FR</a></li>
								<li><a href="#" data-toggle="tooltip" title="Deutsch">DE</a></li>
							</ul>
							<!-- // LANGUAGES -->
						</div>
						<div class="clearfix"></div>
						<!-- USER RELATED MENU -->
						<nav id="tiny-menu" class="clearfix">
							<?php $this->widget('zii.widgets.CMenu',array(
						        'items'=>array(                
						            array('label'=>'My Account', 'url'=>array('#')),
									array('label'=>'My Wishlist', 'url'=>array('/site/cart')),
									array('label'=>'Checkout', 'url'=>array('/site/checkout')),
									array('label'=>'Admin', 'url'=>array('/shop/shop/admin'),'visible'=>!Yii::app()->user->isGuest),
									array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
									array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						            ),   
						        'htmlOptions' => array( 'class' => 'user-menu' )         
							)); ?>
						</nav>
						<!-- // USER RELATED MENU -->
					</div>
					<!-- // CURRENCY / LANGUAGE / USER MENU -->
					<!-- SITE LOGO -->
					<div class="logo-wrapper">


					<?php echo CHtml::link("<img src='".Yii::app()->theme->baseUrl."/img/logo.png"."' />",
					            Yii::app()->createAbsoluteUrl("site/index"),
					            array('class' => 'logo')
					            );?>
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu hidden-sm hidden-xs">
							<li class="active">
								<?php echo CHtml::link('Home',array('site/index')); ?>
							</li>
							<li>
								<?php echo CHtml::link('Product',array('/Shopproducts')); ?>
								<!-- MEGA MENU -->
								<div class="mega-menu" data-col-lg="9" data-col-md="12">
									<div class="row">
									
										<div class="col-md-3">
											<h4 class="menu-title">Clothing</h4>
											<ul class="mega-sub">
												<li><a href="products.php">Casual Wear</a></li>
												<li><a href="products.php">Evening Wear</a></li>
												<li><a href="products.php">Formal Attire</a></li>
												<li><a href="products.php">Womens Jeans</a></li>
												<li><a href="products.php">Mens Jeans</a></li>
												<li><a href="products.php">Fall Styles</a></li>
											</ul>
										</div>
										
										<div class="col-md-3">
											<h4 class="menu-title">Accessories</h4>
											<ul class="mega-sub">
												<li><a href="products.php">Casual Wear</a></li>
												<li><a href="products.php">Evening Wear</a></li>
												<li><a href="products.php">Formal Attire</a></li>
												<li><a href="products.php">Womens Jeans</a></li>
												<li><a href="products.php">Mens Jeans</a></li>
												<li><a href="products.php">Fall Styles</a></li>
											</ul>
										</div>
										
										<div class="col-md-3">
											<h4 class="menu-title">Brands</h4>
											<ul class="mega-sub">
												<li><a href="products.php">Casual Wear</a></li>
												<li><a href="products.php">Evening Wear</a></li>
												<li><a href="products.php">Formal Attire</a></li>
												<li><a href="products.php">Womens Jeans</a></li>
												<li><a href="products.php">Mens Jeans</a></li>
												<li><a href="products.php">Fall Styles</a></li>
											</ul>
										</div>
										
										<div class="col-md-3">
											<div class="carousel slide m-b" data-ride="carousel">
												<div class="carousel-inner">
													<div class="item active">
														<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" />
													</div>
													<div class="item">
														<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" />
													</div>
												</div>
											</div>
											<h5 class="text-semibold uppercase m-b-sm">Featured Products</h5>
											<p>Lorem ipsum dolor sit, consectetur adipiscing elit. Etiam neque velit, blandit sed scelerisque.</p>
											<?php echo CHtml::link('Go to Shop →',array('/Shopproducts'),array('class'=>'btn btn-default btn-round')); ?>
											
										</div>
										
									</div>
								</div>
								<!-- // MEGA MENU -->
							</li>
							<li>
							<?php echo CHtml::link('Store Locator',array('site/storelocator')); ?>
							</li>
							<li>
							<?php echo CHtml::link('Contact Us',array('site/contactus')); ?>
							</li>
						</ul>
						
						<!-- MOBILE MENU -->
						<div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm">
							<button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
							<ul class="dl-menu">
								<li class="active">
									<a href="javsacript:void(0);">Home</a>
								</li>
								<li>
									<a href="javsacript:void(0);">Women</a>
								</li>
								<li>
									<a href="javsacript:void(0);">Men</a>
									
									<ul class="dl-submenu">
										<li>
											<a href="products.php">Clothing</a>
											<ul class="dl-submenu">
												<li><a href="products.php">Casual Wear</a></li>
												<li><a href="products.php">Evening Wear</a></li>
												<li><a href="products.php">Formal Attire</a></li>
												<li><a href="products.php">Womens Jeans</a></li>
												<li><a href="products.php">Mens Jeans</a></li>
												<li><a href="products.php">Fall Styles</a></li>
											</ul>
										</li>
										<li>
											<a href="products.php">Accessories</a>
											<ul class="dl-submenu">
												<li><a href="products.php">Casual Wear</a></li>
												<li><a href="products.php">Evening Wear</a></li>
												<li><a href="products.php">Formal Attire</a></li>
												<li><a href="products.php">Womens Jeans</a></li>
												<li><a href="products.php">Mens Jeans</a></li>
												<li><a href="products.php">Fall Styles</a></li>
											</ul>
										</li>
										<li>
											<a href="products.php">Brands</a>
											<ul class="dl-submenu">
												<li><a href="products.php">Casual Wear</a></li>
												<li><a href="products.php">Evening Wear</a></li>
												<li><a href="products.php">Formal Attire</a></li>
												<li><a href="products.php">Womens Jeans</a></li>
												<li><a href="products.php">Mens Jeans</a></li>
												<li><a href="products.php">Fall Styles</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- // MOBILE MENU -->

					</nav>
					<!-- // SITE NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- // MAIN HEADER -->
	</header>
	<!-- // SITE HEADER -->
	
	
	
	<?php echo $content; ?>

	<!-- SITE FOOTER -->
	<footer class="page-footer">
		
		<!-- WIDGET AREA -->
		<div class="widgets">
		
			<!-- FIRST ROW -->
			<div class="section">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-text">
								<h5 class="widget-title">our store</h5>
								<div class="widget-content">
									<p>Sed ornare cras donec litora integer curabitur orci, at nullam aliquam libero nam himenaeos, amet massa amet ut ipsum viverra mauris rhoncus neque aenean rhoncus gravida orci facilisis quis dui consectetur.</p>
									<p>Nisi porttitor inceptos consectetur donec orci, dui ipsum leo class gravida, felis primis viverra placerat.</p>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-text">
								<h5 class="widget-title">Opening Time</h5>
								<div class="widget-content">
									<p>Monday-Friday:-------------------------9.00 to 18.00</p>
									<p>Saturday:--------------------------------10.00 to 16.00</p>
									<p>Sunday:----------------------------------10.00 to 16.00</p>
									<br/>
									<p>Every 30 day of month Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
								</div>
							</section>
						</div>
						
						<div class="space40 visible-sm clearfix"></div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-menu">
								<h5 class="widget-title">information</h5>
								<div class="widget-content">
									<ul class="menu iconed-menu unstyled">
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Affiliate</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shipping</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shop support</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Customer Service</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Payment & Return</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Terms & Conditions</a></li>
									</ul>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true" width="100%"></iframe>
						</div>
						
					</div>
				</div>
			</div>
			<!-- // FIRST ROW -->
			
			<!-- SECOND ROW -->
			<div class="section">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-3">
							<section class="widget widget-menu">
								<h5 class="widget-title">Contact info</h5>
								<div class="widget-content">
									<ul class="menu iconed-list unstyled">
										<li>
											<span class="list-icon"><i class="round-icon iconfont-map-marker"></i></span>
											<div class="list-content">Lorem ipsum maecenas dapibus luctus euismod 133/2 New York City</div>
										</li>
										<li>
											<span class="list-icon"><i class="round-icon iconfont-phone"></i></span>
											<div class="list-content">(+00)1344356-675</div>
										</li>
										<li>
											<span class="list-icon"><i class="round-icon iconfont-envelope-alt"></i></span>
											<div class="list-content">support@themina.net</div>
										</li>
									</ul>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-6">
							<section class="widget widget-ads">
								<div class="widget-content">
									<div class="center-xs">
										<div class="ads">
											<a href="#">
												<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/500x150.png" alt="" />
											</a>
											<div class="ads-caption bottom-right">
												<a href="#" class="btn btn-default btn-round">
													<i class="round-icon iconfont-angle-right"></i>
													<span class="inline-middle">Show More</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3">
							<section class="widget widget-subscription">
								<h5 class="widget-title">Newletter</h5>
								<div class="widget-content">
									<p>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</p>
									<form action="" method="post">
										<div class="input-group">
											<label for="subscription-email" class="placeholder">Enter Your Email</label>
											<input type="email" id="subscription-email" name="email" class="form-control" required />
											<span class="input-group-btn">
												<button class="btn btn-primary">Subscribe</button>
											</span>
										</div>
									</form>
								</div>
							</section>
						</div>
						
					</div>
				</div>
			</div>
			<!-- // SECOND ROW -->
			
		</div>
		<!-- // WIDGET AREA -->
		
		<div class="footer-sub">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="footer-links center-xs clearfix">
							<ul class="unstyled">
								<li><a href="#">Site Map</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Work for us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="space10"></div>
						<div class="copyright center-xs">
							<p>© 2013 Gfashion Demo Store. All Rights Reserved.</p>
						</div>
					</div>
					
					<div class="space40 visible-xs"></div>
					
					<div class="col-xs-12 col-sm-6 center-xs">
						<div class="pull-right">
							<div class="vmid">
								<span class="uppercase">Payment Accept&emsp;</span>
								<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/visacard.png" alt="" width="40" /></a>
								<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/mastercard.png" alt="" width="40" /></a>
								<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/paypal.png" alt="" width="40" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- // SITE FOOTER -->
		
</div>
<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/package.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/add-to-cart.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-cookie.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/scripts.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.nouislider.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/products.js"></script>

<!-- // Essential Javascripts -->
<!-- Particular Page Javascripts -->
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/owl.carousel.js"></script>
	<!-- // Particular Page Javascripts -->
</body>
</html>