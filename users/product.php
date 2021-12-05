<?php
include "includes/header.php";
include "includes/navbar.php";
?>
        <section id="content">
            <div id="breadcrumb-container">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Product</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 product-viewer clearfix">
                                <div id="product-image-carousel-container">
                                    <ul id="product-carousel" class="celastislide-list">
                                        <li class="active-slide"><a data-rel="prettyPhoto[product]"
                                                href="images/products/big-item1.jpg"
                                                data-image="images/products/big-item1.jpg"
                                                data-zoom-image="images/products/big-item1.jpg"
                                                class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item10.jpg" alt="Phone photo 1"></a>
                                        </li>
                                        <li><a data-rel="prettyPhoto[product]" href="images/products/big-item2.jpg"
                                                data-image="images/products/big-item2.jpg"
                                                data-zoom-image="images/products/big-item2.jpg"
                                                class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item11.jpg" alt="Phone photo 2"></a>
                                        </li>
                                        <li><a data-rel="prettyPhoto[product]" href="images/products/big-item3.jpg"
                                                data-image="images/products/big-item3.jpg"
                                                data-zoom-image="images/products/big-item3.jpg"
                                                class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item12.jpg" alt="Phone photo 3"></a>
                                        </li>
                                        <li><a data-rel="prettyPhoto[product]" href="images/products/big-item4.jpg"
                                                data-image="images/products/big-item4.jpg"
                                                data-zoom-image="images/products/big-item4.jpg"
                                                class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item13.jpg" alt="Phone photo 4"></a>
                                        </li>
                                        <li><a data-rel="prettyPhoto[product]" href="images/products/big-item5.jpg"
                                                data-image="images/products/big-item5.jpg"
                                                data-zoom-image="images/products/big-item5.jpg"
                                                class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item14.jpg" alt="Phone photo 4"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="product-image-container">
                                    <figure><img src="images/products/big-item1.jpg"
                                            data-zoom-image="images/products/big-item1.jpg" alt="Product Big image"
                                            id="product-image">
                                        <figcaption class="item-price-container"><span class="old-price">$160</span>
                                            <span class="item-price">$120</span></figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 product">
                                <div class="lg-margin visible-sm visible-xs"></div>
                                <h1 class="product-name">Samsun Galaxy Ace</h1>
                                <div class="ratings-container">
                                    <div class="ratings separator">
                                        <div class="ratings-result" data-result="70"></div>
                                    </div><span class="ratings-amount separator">3 Review(s)</span> <span
                                        class="separator">|</span> <a href="#review" class="rate-this">Add Your
                                        Review</a>
                                </div>
                                <ul class="product-list">
                                    <li><span>Availability:</span>In Stock</li>
                                    <li><span>Product Code:</span>483512569</li>
                                    <li><span>Brand:</span>Apple</li>
                                </ul>
                                <hr>
                                <div class="product-color-filter-container"><span>Select Color:</span>
                                    <div class="xs-margin"></div>
                                    <ul class="filter-color-list clearfix">
                                        <li><a href="#" data-bgcolor="#fff" class="filter-color-box"></a></li>
                                        <li><a href="#" data-bgcolor="#d1d2d4" class="filter-color-box"></a></li>
                                        <li><a href="#" data-bgcolor="#666467" class="filter-color-box"></a></li>
                                        <li><a href="#" data-bgcolor="#515151" class="filter-color-box"></a></li>
                                        <li><a href="#" data-bgcolor="#bcdae6" class="filter-color-box"></a></li>
                                        <li><a href="#" data-bgcolor="#5272b3" class="filter-color-box"></a></li>
                                        <li><a href="#" data-bgcolor="#acbf0b" class="filter-color-box"></a></li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="product-add clearfix">
                                    <div class="custom-quantity-input"><input type="text" name="quantity" value="1"> <a
                                            href="#" onclick="return!1" class="quantity-btn quantity-input-up"><i
                                                class="fa fa-angle-up"></i></a> <a href="#" onclick="return!1"
                                            class="quantity-btn quantity-input-down"><i
                                                class="fa fa-angle-down"></i></a></div><button
                                        class="btn btn-custom-2">ADD TO CART</button>
                                </div>
                                <div class="md-margin"></div>
                                <div class="product-extra clearfix">
                                    <div class="product-extra-box-container clearfix">
                                        <div class="item-action-inner"><a href="#"
                                                class="icon-button icon-like">Favourite</a> <a href="#"
                                                class="icon-button icon-compare">Checkout</a></div>
                                    </div>
                                    <div class="md-margin visible-xs"></div>
                                    <div class="share-button-group">
                                        <div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a
                                                class="addthis_button_facebook"></a> <a
                                                class="addthis_button_twitter"></a> <a class="addthis_button_email"></a>
                                            <a class="addthis_button_print"></a> <a
                                                class="addthis_button_compact"></a><a
                                                class="addthis_counter addthis_bubble_style"></a></div>
                                        <script type="text/javascript">
                                        var addthis_config = {
                                            data_track_addressbar: !0
                                        };
                                        </script>
                                        <script type="text/javascript"
                                            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52b2197865ea0183">
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg-margin2x"></div>
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <div class="tab-container left product-detail-tab clearfix">
                                    <ul class="nav-tabs">
                                        <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                                        <li><a href="#description" data-toggle="tab">Description</a></li>
                                        <li><a href="#review" data-toggle="tab">Review</a></li>
                                        <li><a href="#additional" data-toggle="tab">Additional Info</a></li>
                                        <li><a href="#video" data-toggle="tab">Video</a></li>
                                    </ul>
                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="overview">
                                            <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus
                                                vel, tristique urna.</p>
                                            <p>Cumque nihil facere itaque mollitia consectetur saepe cupiditate debitis
                                                fugiat temporibus soluta maxime doloremque alias enim officia aperiam at
                                                similique quae vel sapiente nulla molestiae tenetur deleniti architecto
                                                ratione accusantium.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti in
                                                impedit modi aliquid explicabo aperiam illum esse quibusdam aspernatur
                                                commodi voluptate veritatis vero quidem porro vitae non nihil architecto
                                                optio!</p>
                                            <p>Phasellus consequat id purus in convallis. Nulla quis nunc auctor,
                                                pretium enimnec, tristique magna.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam minima
                                                officiis consequatur expedita nesciunt voluptates at enim. Reprehenderit
                                                possimus vitae dolor tempore earum nulla maxime delectus repellendus
                                                excepturi suscipit qui?</p>
                                        </div>
                                        <div class="tab-pane" id="description">
                                            <p>The perfect mix of portability and performance in a slim 1" form factor:
                                            </p>
                                            <ul class="product-details-list">
                                                <li>3rd gen Intel® Core™ i7 quad core processor available;</li>
                                                <li>Windows 8 Pro available;</li>
                                                <li>13.3" and 15.5" screen sizes available;</li>
                                                <li>Double your battery life with available sheet battery;</li>
                                                <li>4th gen Intel® Core™ i7 processor available;</li>
                                                <li>Full HD TRILUMINOS IPS touchscreen (1920 x 1080);</li>
                                                <li>Super fast 512GB PCIe SSD available;</li>
                                                <li>Ultra-light at just 2.34 lbs.</li>
                                                <li>And more...</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="review">
                                            <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus
                                                vel, tristique urna.</p>
                                            <p>Cumque nihil facere itaque mollitia consectetur saepe cupiditate debitis
                                                fugiat temporibus soluta maxime doloremque alias enim officia aperiam at
                                                similique quae vel sapiente nulla molestiae tenetur deleniti architecto
                                                ratione accusantium.</p>
                                        </div>
                                        <div class="tab-pane" id="additional"><strong>Additional Informations</strong>
                                            <p>Quae eum placeat reiciendis enim at dolorem eligendi?</p>
                                            <hr>
                                            <ul class="product-details-list">
                                                <li>Lorem ipsum dolor sit quam</li>
                                                <li>Consectetur adipisicing elit</li>
                                                <li>Illum autem tempora officia</li>
                                                <li>Amet id odio architecto explicabo</li>
                                                <li>Voluptatem laborum veritatis</li>
                                                <li>Quae laudantium iste libero</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="video">
                                            <div class="video-container"><strong>A Video about Product</strong>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                    adipisci esse.</p>
                                                <hr><iframe width="560" height="315"
                                                    src="//www.youtube.com/embed/Z0MNVFtyO30?rel=0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg-margin visible-xs"></div>
                            </div>
                            <div class="lg-margin2x visible-sm visible-xs"></div>
                            <div class="col-md-3 col-sm-12 col-xs-12 sidebar">
                                <div class="widget related">
                                    <h3>Related</h3>
                                    <div class="related-slider flexslider sidebarslider">
                                        <ul class="related-list clearfix">
                                            <li>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item1.jpg" alt="item1">
                                                    </figure>
                                                    <h5><a href="#">Jacket Suiting Blazer</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">$40</div>
                                                </div>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item2.jpg" alt="item2">
                                                    </figure>
                                                    <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">18$</div>
                                                </div>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item3.jpg" alt="item3">
                                                    </figure>
                                                    <h5><a href="#">Women's Lauren Dress</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">$30</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item4.jpg" alt="item4">
                                                    </figure>
                                                    <h5><a href="#">Swiss Mobile Phone</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="64"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">$39</div>
                                                </div>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item5.jpg" alt="item5">
                                                    </figure>
                                                    <h5><a href="#">Zwinzed HeadPhones</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="94"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">$18.99</div>
                                                </div>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item6.jpg" alt="item6">
                                                    </figure>
                                                    <h5><a href="#">Kless Man Suit</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="74"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">$99</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item2.jpg" alt="item2">
                                                    </figure>
                                                    <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">$17</div>
                                                </div>
                                                <div class="related-product clearfix">
                                                    <figure><img src="images/products/thumbnails/item4.jpg" alt="item4">
                                                    </figure>
                                                    <h5><a href="#">Women's Lauren Dress</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div>
                                                    </div>
                                                    <div class="related-price">$30</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg-margin2x"></div>
                        <div class="purchased-items-container carousel-wrapper">
                            <header class="content-title">
                                <div class="title-bg">
                                    <h2 class="title">Also Purchased</h2>
                                </div>
                                <p class="title-desc">Note the similar products - after buying for more than $500 you
                                    can get a discount.</p>
                            </header>
                            <div class="carousel-controls">
                                <div id="purchased-items-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                                <div id="purchased-items-slider-next"
                                    class="carousel-btn carousel-btn-next carousel-space"></div>
                            </div>
                            <div class="purchased-items-slider owl-carousel">
                                <div class="item item-hover">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container"><a href="product.php"><img
                                                    src="images/products/item7.jpg" alt="item1" class="item-image"> <img
                                                    src="images/products/item7-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                        <div class="item-price-container"><span class="item-price">$160<span
                                                    class="sub-price">.99</span></span></div><span
                                            class="new-rect">New</span>
                                    </div>
                                    <div class="item-meta-container">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="80"></div>
                                            </div><span class="ratings-amount">5 Reviews</span>
                                        </div>
                                        <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                        <div class="item-action"><a href="#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>
                                            <div class="item-action-inner"><a href="#"
                                                    class="icon-button icon-like">Favourite</a> <a href="#"
                                                    class="icon-button icon-compare">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item item-hover">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container"><a href="product.php"><img
                                                    src="images/products/item8.jpg" alt="item1" class="item-image"> <img
                                                    src="images/products/item8-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                        <div class="item-price-container"><span class="item-price">$100</span></div>
                                        <span class="new-rect">New</span>
                                    </div>
                                    <div class="item-meta-container">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="99"></div>
                                            </div><span class="ratings-amount">4 Reviews</span>
                                        </div>
                                        <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                        <div class="item-action"><a href="#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>
                                            <div class="item-action-inner"><a href="#"
                                                    class="icon-button icon-like">Favourite</a> <a href="#"
                                                    class="icon-button icon-compare">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item item-hover">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container"><a href="product.php"><img
                                                    src="images/products/item9.jpg" alt="item1" class="item-image"> <img
                                                    src="images/products/item9-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                        <div class="item-price-container"><span class="old-price">$100</span> <span
                                                class="item-price">$80</span></div><span
                                            class="discount-rect">-20%</span>
                                    </div>
                                    <div class="item-meta-container">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="75"></div>
                                            </div><span class="ratings-amount">2 Reviews</span>
                                        </div>
                                        <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                        <div class="item-action"><a href="#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>
                                            <div class="item-action-inner"><a href="#"
                                                    class="icon-button icon-like">Favourite</a> <a href="#"
                                                    class="icon-button icon-compare">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item item-hover">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container"><a href="product.php"><img
                                                    src="images/products/item6.jpg" alt="item1" class="item-image"> <img
                                                    src="images/products/item6-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                        <div class="item-price-container"><span class="item-price">$99</span></div><span
                                            class="new-rect">New</span>
                                    </div>
                                    <div class="item-meta-container">
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-result" data-result="40"></div>
                                            </div><span class="ratings-amount">3 Reviews</span>
                                        </div>
                                        <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                        <div class="item-action"><a href="#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>
                                            <div class="item-action-inner"><a href="#"
                                                    class="icon-button icon-like">Favourite</a> <a href="#"
                                                    class="icon-button icon-compare">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item item-hover">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container"><a href="product.php"><img
                                                    src="images/products/item7.jpg" alt="item1" class="item-image"> <img
                                                    src="images/products/item7-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                        <div class="item-price-container"><span class="item-price">$280</span></div>
                                    </div>
                                    <div class="item-meta-container">
                                        <div class="ratings-container"></div>
                                        <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                        <div class="item-action"><a href="#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>
                                            <div class="item-action-inner"><a href="#"
                                                    class="icon-button icon-like">Favourite</a> <a href="#"
                                                    class="icon-button icon-compare">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item item-hover">
                                    <div class="item-image-wrapper">
                                        <figure class="item-image-container"><a href="product.php"><img
                                                    src="images/products/item10.jpg" alt="item1" class="item-image">
                                                <img src="images/products/item10-hover.jpg" alt="item1  Hover"
                                                    class="item-image-hover"></a></figure>
                                        <div class="item-price-container"><span class="old-price">$150</span> <span
                                                class="item-price">$120</span></div>
                                    </div>
                                    <div class="item-meta-container">
                                        <div class="ratings-container"></div>
                                        <h3 class="item-name"><a href="product.php">Phasellus consequat</a></h3>
                                        <div class="item-action"><a href="#" class="item-add-btn"><span
                                                    class="icon-cart-text">Add to Cart</span></a>
                                            <div class="item-action-inner"><a href="#"
                                                    class="icon-button icon-like">Favourite</a> <a href="#"
                                                    class="icon-button icon-compare">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
include "includes/footer.php";
?>  