<?php
include "includes/header.php";
include "includes/navbar.php";
?>
        <section id="content">
            <div id="breadcrumb-container">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Single Portfolio</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="content-title title-bg">
                            <h1 class="title">Lorem ipsum dolor</h1>
                        </header>
                        <div class="row single-portfolio">
                            <div class="single-portfolio-btn-container"><a href="#" id="prev-portfolio-project"
                                    class="portfolio-btn portfolio-btn-prev"></a> <a id="next-portfolio-project"
                                    class="portfolio-btn portfolio-btn-next portfolio-space"></a></div>
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <figure><img src="images/portfolio/classic/portfolio6.jpg" class="img-responsive"
                                        alt="Portfolio item 6"></figure>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-12 portfolio-meta-container">
                                <p>In euismod massa metus, quis porttitor nisi commodo nec. Praesent vitae auctor
                                    sapien. Suspendisse fermentum metus fermentum magna tincidunt convallis. Curabitur
                                    eget convallis metus. Duis vitae tortor ut metus rhoncus dignissim non vel est.
                                    Donec bibendum justo vel neque ullamcorper ultrices.</p>
                                <p>Aliquam a turpis aliquam, lacinia lorem in, lobortis augue. Sed semper orci vitae
                                    vehicula tincidunt. Ut tempor laoreet ligula consectetur egestas. Ut placerat, lacus
                                    eu mollis rhoncus, quam enim fermentum leo, eu consectetur quam lorem vehicula elit.
                                </p>
                                <ul class="portfolio-meta-list">
                                    <li><span>Date:</span>06/12/2013</li>
                                    <li><span>Categories:</span><a href="#">Design</a>, <a href="#">Photography</a></li>
                                    <li><span>Skills:</span>Development</li>
                                    <li><span><i class="fa fa-heart"></i></span>15</li>
                                </ul>
                                <div class="share-button-group">
                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a
                                            class="addthis_button_facebook"></a> <a class="addthis_button_twitter"></a>
                                        <a class="addthis_button_email"></a> <a class="addthis_button_print"></a> <a
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
                        <div class="xlg-margin"></div>
                        <div id="related-portfolio-container" class="carousel-wrapper">
                            <header class="content-title">
                                <div class="title-bg">
                                    <h2 class="title">Recent Projects</h2>
                                </div>
                                <p class="title-desc">Look at latest works of our authors.</p>
                            </header>
                            <div class="carousel-controls">
                                <div id="related-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                                <div id="related-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                </div>
                            </div>
                            <div class="row">
                                <div class="related-portfolio owl-carousel">
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio4.jpg"
                                                alt="Portfolio item 4">
                                            <figcaption><a href="images/portfolio/classic/portfolio4.jpg"
                                                    title="Portfolio item 4" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>16</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Photography</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio11.jpg"
                                                alt="Portfolio item 11">
                                            <figcaption><a href="images/portfolio/classic/portfolio11.jpg"
                                                    title="Portfolio item 11" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>9</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Design</a>, <a href="#">Wordpress</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio1.jpg"
                                                alt="Portfolio item 1">
                                            <figcaption><a href="http://www.youtube.com/watch?v=vEkwlqsdbyk"
                                                    title="Portfolio Video Example" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>14</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Video</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio8.jpg"
                                                alt="Portfolio item 8">
                                            <figcaption><a href="images/portfolio/classic/portfolio8.jpg"
                                                    title="Portfolio item 8" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>8</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Photography</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio13.jpg"
                                                alt="Portfolio item 13">
                                            <figcaption><a href="images/portfolio/classic/portfolio13.jpg"
                                                    title="Portfolio item 13" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>5</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Fashion</a>, <a href="#">Photography</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio14.jpg"
                                                alt="Portfolio item 14">
                                            <figcaption><a href="images/portfolio/classic/portfolio14.jpg"
                                                    title="Portfolio item 14" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>12</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Fashion</a>, <a href="#">Video</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio10.jpg"
                                                alt="Portfolio item 10">
                                            <figcaption><a href="images/portfolio/classic/portfolio10.jpg"
                                                    title="Portfolio item 10" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>22</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Fashion</a>, <a href="#">Photography</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio3.jpg"
                                                alt="Portfolio item 3">
                                            <figcaption><a href="images/portfolio/classic/portfolio3.jpg"
                                                    title="Portfolio item 3" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>18</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Design</a>, <a href="#">Video</a></p>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure><img src="images/portfolio/classic/portfolio2.jpg"
                                                alt="Portfolio item 2">
                                            <figcaption><a href="images/portfolio/classic/portfolio2.jpg"
                                                    title="Portfolio item 2" data-rel="prettyPhoto[portfolio]"
                                                    class="zoom-button"></a> <a href="single-portfolio.php"
                                                    class="link-button"></a> <a href="#" class="like-button"><i
                                                        class="fa fa-heart"></i><span>12</span></a></figcaption>
                                        </figure>
                                        <h2><a href="#">Lorem ipsum dolor</a></h2>
                                        <p><a href="#">Design</a>, <a href="#">Wordpress</a>, <a href="#">Fashion</a>
                                        </p>
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