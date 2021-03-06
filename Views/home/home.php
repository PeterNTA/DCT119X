			<!--Home slider-->
            <?php require_once('slide.php'); ?>
            <!--End Home slider-->

            <!--Small Banners-->
            <div class="section imgBanners pt-0">
            	<div class="container">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner1.jpg" src="assets/images/home3-small-banner1.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $70<h5>Shoes Collection</h5></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 pr-0">
                        	<div class="imgBnrOuter">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner2.jpg" src="assets/images/home3-small-banner2.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $50<h5>Trendy Bags</h5></div>
                                </div>
                            </div>
                            <div class="imgBnrOuter mt-4">
                                <div class="inner btmright">
                                    <img data-src="assets/images/home3-small-banner3.jpg" src="assets/images/home3-small-banner3.jpg" alt="" class="blur-up lazyload"/>
                                    <div class="ttl">from $20<h5>ACCESSORIES</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Small Banners-->

            <!--Collection Tab slider-->
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2 heading-font">Top Sellers</h2>
                            </div>
                            <div class="tabs-listing">
                                <ul class="tabs clearfix">
                                    <li class="active" rel="tab1">Women</li>
                                    <li rel="tab2">Men</li>
                                    <li rel="tab3">Sale</li>
                                </ul>
                                <div class="tab_container">

                                  <!--Wmen-->
                                    <div id="tab1" class="tab_content grid-products style3">
                                        <div class="productSlider">

                                          <?php foreach ($data_sanpham1 as $value) {?>

                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                  <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image"> 
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                    <div class="variants add btn-style2">
                                                        <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" id="add-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                    </div>

                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="?act=compare&xuli=add&id=<?=$value['MaSP']?>" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                          <?php } ?>


                                        </div>
                                    </div>

                                    <!--Men-->

                                    <div id="tab2" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                            <?php foreach ($data_sanpham2 as $value) {?>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels round"><span class="lbl pr-label1">Men</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                  <div class="variants add btn-style2">
                                                      <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                  </div>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="?act=compare&xuli=add&id=<?=$value['MaSP']?>" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <!--Sale-->





                                    <div id="tab3" class="tab_content grid-products style3">
                                        <div class="productSlider">
                                          <?php foreach ($data_sanpham3 as $value) {?>
                                            <div class="col-12 item">
                                            	<!-- product name -->
                                                <div class="product-name">
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>"><?= $value['TenSP'] ?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                                                        <!-- image -->
                                                        <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                                                        <!-- End hover image -->
                                                    </a>
                                                    <!-- end product image -->
                                                </div>
                                                <!-- end product image -->

                                                <div class="button-set button-style2">
                                                  <div class="variants add btn-style2">
                                                      <a href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn cartIcon btn-addto-cart" type="button" tabindex="0" style="width:100%"><i class="icon anm anm-bag-l"></i></a>
                                                  </div>
                                                    <a href="javascript:void(0)" title="Quick View" class="btn-style2 quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                                    <div class="wishlist-btn btn-style2">
                                                        <a class="wishlist add-to-wishlist" href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>">
                                                            <i class="icon anm anm-heart-l"></i>
                                                        </a>
                                                    </div>
                                                    <div class="compare-btn btn-style2">
                                                        <a class="compare add-to-compare" href="?act=compare&xuli=add&id=<?=$value['MaSP']?>" title="Add to Compare">
                                                            <i class="icon anm anm-random-r"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                      <span class="price"><?= number_format($value['DonGia']) ?> $ </span>
                                                    </div>
                                                    <!-- End product price -->

                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Collection Tab slider-->

            <!--Feature Content-->
           
            <!--Feature Content-->

            <!--Instagram Section-->
            <div class="section instagram-feed-section">
                <!--Instagram ID-->
            	<div id="instafeed" class="imlow_resolution"></div>
                <!--End Instagram ID-->
            </div>
            <!--End Instagram Section-->

        <!--End Body Content-->
