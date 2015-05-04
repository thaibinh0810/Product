<div id="home-slider">
            
    <div class="flexslider">
        <ul class="slides">
            <!-- THE FIRST SLIDE -->
            <li>
                <!-- THE MAIN IMAGE IN THE SLIDE -->
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/1600x600.jpg" alt="" />
                
                <!-- THE CAPTIONS OF THE FIRST SLIDE -->
                <div class="flex-caption h6 text-bold gfc uppercase animated"
                data-animation="fadeInLeftBig"
                data-x="800"
                data-y="110"
                data-speed="600"
                data-start="1200">New Collection</div>
                
                <div class="flex-caption herotext text-bold gfc animated"
                data-animation="fadeInRightBig"
                data-x="580"
                data-y="140"
                data-speed="900"
                data-start="2000">Autumn Fashions</div>
                
                <div class="flex-caption h6 text-bold gfc text-center animated"
                data-animation="fadeInDown"
                data-x="639"
                data-y="260"
                data-speed="1600"
                data-start="2900">
                    Comfy knits and warm jackets for cooler Autumn days<br/>
                    <a href="products.php" class="btn btn-primary uppercase">Shop Now</a>
                </div>
                
            </li>
            
            <!-- THE SECOND SLIDE -->
            <li style="background: #fa6f57;">
                <!-- THE MAIN IMAGE IN THE SLIDE -->
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/transparent.png" alt="" />
                
                <div class="flex-caption super-giant gfc animated uppercase"
                data-animation="fadeInUp"
                data-x="center"
                data-y="60"
                data-speed="500"
                data-start="900">Sale</div>

                <div id="caption-left-round" class="flex-caption round gfc animated uppercase"
                data-animation="fadeInLeftBig"
                data-x="140"
                data-y="60"
                data-speed="600"
                data-start="1200"><div class="vmid"><span>Mid<br/>Season</span></div></div>

                <div class="flex-caption round gfc animated uppercase"
                data-animation="fadeInRightBig"
                data-x="925"
                data-y="60"
                data-speed="600"
                data-start="1200"><div class="vmid"><span>Up to<br/>70% off</span></div></div>

                <div class="flex-caption h3 gfc animated uppercase"
                data-animation="fadeInDown"
                data-x="center"
                data-y="250"
                data-speed="400"
                data-start="1800"><strong class="text-bold">500’s </strong>of New Products</div>

            </li>
            
            <!-- THE SECOND SLIDE -->
            <li>
                <!-- THE MAIN IMAGE IN THE SLIDE -->
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/1600x600.jpg" alt="" />
                
                <div class="flex-caption herotext text-bold gfc bg-dark animated uppercase"
                data-animation="fadeInUpBig"
                data-x="760"
                data-y="60"
                data-speed="900"
                data-start="100">Free Shipping</div>
                
                <div class="flex-caption h2 text-bold gfc bg-dark animated uppercase"
                data-animation="fadeInUpBig"
                data-x="797"
                data-y="175"
                data-speed="600"
                data-start="900">On Order over $2.000</div>
                
            </li>
            
        </ul>
    </div>
</div>


<!-- SITE MAIN CONTENT -->
        <main id="main-content" role="main">
            
            <!-- PROMO BOXES -->
            <section class="section promos">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-md-4">
                            <div class="promo accent-background first-child first-row animated" data-animation="fadeInLeft">
                                <div class="inner text-center">
                                    <h1 class="uppercase text-semibold">
                                        <a href="#">
                                            <span class="inverse-color">Sale</span> Up to 35% <span class="inverse-color">OFF</span>
                                        </a>
                                    </h1>
                                    <h5 class="uppercase">Summer collection 2013</h5>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="promo inverse-background first-row animated" data-animation="fadeInDown" style="background: url('<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/500x400.jpg') no-repeat; background-size: 100%;">
                                <div class="inner text-center np">
                                    <div class="ribbon">
                                        <h6 class="nmb">New Arrivals</h6>
                                        <h5 class="text-semibold uppercase nmb">Leather Fashion</h5>
                                        <div class="space10"></div>
                                        <a href="products.php" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> Shop Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="promo inverse-background first-row animated" data-animation="fadeInRight">
                                <div class="inner text-center">
                                    <h1 class="uppercase text-bold">
                                        <a href="#">
                                            Free <span class="inverse-color">Shipping</span>
                                        </a>
                                    </h1>
                                    <h5 class="uppercase">On oder over $2,000</h5>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </section>
            <!-- // PROMO BOXES -->
            
            <!-- FEATURED PRODUCTS -->
            <section class="section featured visible-items-4">
                <div class="container">
                    <div class="row">
                        <header class="section-header clearfix col-sm-offset-3 col-sm-6">
                            <h3 class="section-title">feature products</h3>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-sale">Sale</div>
                                                </li>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-new">New</div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-sale">Sale</div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-new">New</div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
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
            <!-- // FEATURED PRODUCTS -->
            
            <!-- NEW ARRIVAL PRODUCTS -->
            <section class="section new-arrivals visible-items-5">
                <div class="container">
                    <div class="row">
                        <header class="section-header clearfix col-sm-offset-3 col-sm-6">
                            <h3 class="section-title">New arrivals</h3>
                            <p class="section-teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit ac lobortis lacus</p>
                        </header>
                        
                        <div class="clearfix"></div>
                        
                        <!-- BEGIN CAROUSEL -->
                        <div id="new-arrivals-products" class="add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">
                        
                            <div class="owl-controls clickable outside">
                                <div class="owl-buttons">
                                    <div class="owl-prev"><i class="iconfont-angle-left"></i></div>
                                    <div class="owl-next"><i class="iconfont-angle-right"></i></div>
                                </div>
                            </div>
                            
                            <div class="owl-carousel owl-theme" data-visible-items="5" data-navigation="true" data-lazyload="true">
                                <div class="product" data-product-id="9">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-sale">Sale</div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="4.5" step="0.5" id="backing9" />
                                                <div class="rateit" data-rateit-backingfld="#backing9" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
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
                                    </div>
                                </div>
                                
                                <div class="product" data-product-id="10">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="4" step="0.5" id="backing10" />
                                                <div class="rateit" data-rateit-backingfld="#backing10" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
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
                                    </div>
                                </div>
                                
                                <div class="product" data-product-id="11">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-new">New</div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="3.5" step="0.5" id="backing11" />
                                                <div class="rateit" data-rateit-backingfld="#backing11" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
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
                                    </div>
                                </div>
                                
                                <div class="product" data-product-id="12">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="5" step="0.5" id="backing12" />
                                                <div class="rateit" data-rateit-backingfld="#backing12" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
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
                                    </div>
                                </div>
                                
                                <div class="product" data-product-id="13">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-sale">Sale</div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="4.5" step="0.5" id="backing13" />
                                                <div class="rateit" data-rateit-backingfld="#backing13" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
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
                                    </div>
                                </div>
                                
                                <div class="product" data-product-id="14">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="4" step="0.5" id="backing14" />
                                                <div class="rateit" data-rateit-backingfld="#backing14" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
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
                                    </div>
                                </div>
                                
                                <div class="product" data-product-id="15">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <div class="circle ribbon ribbon-new">New</div>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="3.5" step="0.5" id="backing15" />
                                                <div class="rateit" data-rateit-backingfld="#backing15" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
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
                                    </div>
                                </div>
                                
                                <div class="product" data-product-id="16">
                                    <div class="entry-media">
                                        <img data-src="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" alt="" class="lazyOwl thumb" />
                                        <div class="hover">
                                            <a href="product.php" class="entry-url"></a>
                                            <ul class="icons unstyled">
                                                <li>
                                                    <a href="<?php echo Yii::app()->theme->baseUrl; ?>/img/dummy/450x600.png" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="circle add-to-cart" ><i class="iconfont-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                            <div class="rate-bar">
                                                <input type="range" value="5" step="0.5" id="backing16" />
                                                <div class="rateit" data-rateit-backingfld="#backing16" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-main">
                                        <h5 class="entry-title">
                                            <a href="#">Inceptos orci hac libero</a>
                                        </h5>
                                        <div class="entry-price">
                                            <strong class="price">$ 1116.00</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- // END CAROUSEL -->
                        
                    </div>
                </div>
            </section>
            <!-- // NEW ARRIVAL PRODUCTS -->
            
        </main>
        <!-- // SITE MAIN CONTENT -->