<?php
/**
 * Created by PhpStorm.
 * User: SE
 * Date: 04.08.2018
 * Time: 22:43
 */

use app\widgets\Alert;
use yii\helpers\html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$this->beginPage()

?>
<html></html>
<!DOCTYPE html>

<html lang="<?php Yii::$app->language ?>">
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
    <meta charset="<?php Yii::$app->charset ?>">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <![endif]-->
    <?php Html::csrfMetaTags() ?>
    <title><?php Html::encode($this->title) ?></title>
    <meta name="keywords" content="keywords" />
    <meta name="description" content="description" />
    <!--[if LTE IE 8]>
    <link rel="stylesheet" type="text/css" href="assets/styles/minimal-menu-ie.css" />
    <![endif]-->

    <script src="assets/scripts/libs/prefixfree.min.js"></script>
    <script src="assets/scripts/libs/modernizr.js"></script>
    <!--[if lt IE 9]>
    <script src="assets/scripts/libs/html5shiv.js"></script>
    <script src="assets/scripts/libs/respond.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>

<body class="home">

<?php $this->beginBody() ?>

<div class="topbar">
    <div class="container">
        <div class="left-topbar">
            Welcome visitor you can <a href="#">login</a> or <a href="#">create an account</a>.
        </div>
        <!-- /.left-topbar -->
        <ul class="right-topbar">
            <li>
                <a href="#" class="top-wishlist">
                    Wish list
                    <span>5</span>
                </a>
            </li>
            <li><a href="#">My account</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">Check out</a></li>
        </ul>
        <!-- /.right-topbar -->
    </div>
</div>
<!-- /.topbar -->
<header>
    <div class="container">
        <a class="logo" href="index.html">
            <img src="assets/images/logo.png" alt="img" />
        </a>
        <!-- /.logo -->
        <nav class="main-nav">
            <div class="minimal-menu">
                <ul class="menu">
                    <li class="current-menu-item"><a href="index.html">HOMEPAGE</a></li>
                    <li><a href="category.html">T-SHIRT</a></li>
                    <li><a href="category.html">WOMEN</a></li>
                    <li>
                        <a href="#">CLOTHING</a>
                        <ul class="sub-menu">
                            <li><a href="auth.html">AUTH</a></li>
                            <li>
                                <a href="contact.html">CONTACT</a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">CONTACT1</a></li>
                                    <li><a href="#">Submenu 22</a></li>
                                    <li><a href="#">Submenu 23</a></li>
                                    <li><a href="#">Submenu 24</a></li>
                                    <li><a href="#">Submenu 25</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Submenu 3</a></li>
                            <li><a href="#">Submenu 4</a></li>
                            <li><a href="#">Submenu 5</a></li>
                        </ul>
                    </li>
                    <li><a href="category.html">ACCESSORIES</a></li>
                </ul>
            </div>
            <!-- /.minimal-menu -->
        </nav>
        <!-- /.main-nav -->
        <div class="wrap-search">
            <form action="#" class="search-form">
                <input type="text" placeholder="Search Bags.." />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- /.search-form -->
        <div class="top-cart">
            <a href="cart.html">
                YOUR CART
                <span>2</span>
            </a>
        </div>
        <!-- /.top-cart -->
    </div>
</header>

<?php Alert::widget() ?>
<?php $content ?>

<div id="slideshow">
    <div>
        <ul class="allinone_bannerRotator_list">
            <li data-text-id="#content_ss_1"><img src="assets/images/slideshow.jpg" alt="img" /></li>
            <li data-text-id="#content_ss_2"><img src="assets/images/slideshow2.jpg" alt="img" /></li>
            <li data-text-id="#content_ss_3"><img src="assets/images/slideshow3.jpg" alt="img" /></li>
            <li data-text-id="#content_ss_4"><img src="assets/images/slideshow4.jpg" alt="img" /></li>
        </ul>
        <div id="content_ss_1" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-duration="0.5" data-fade-start="0" data-delay="0.3">
                <div class="container">
                    <h3>RESPONSIVE<br />PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br />off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div id="content_ss_2" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-initial-top="400" data-final-top="0" data-duration="0.8" data-fade-start="0" data-delay="0">
                <div class="container">
                    <h3>RESPONSIVE<br />PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br />off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div id="content_ss_3" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-initial-top="-400" data-final-top="0" data-duration="0.8" data-fade-start="0" data-delay="0">
                <div class="container">
                    <h3>RESPONSIVE<br />PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br />off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
        <div id="content_ss_4" class="allinone_bannerRotator_texts">
            <div class="content-slideshow" data-initial-left="-200" data-final-left="0" data-duration="0.5" data-fade-start="0" data-delay="0">
                <div class="container">
                    <h3>RESPONSIVE<br />PSD <span>&</span> BAGS STORE</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                    <div class="discount"><span class="big">20</span><span class="small">%</span><br />off</div>
                    <a href="#">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#slideshow -->
<div class="services">
    <div class="container">
        <div class="sale">
            <a href="#">
                <h4>BIG SALE FOR</h4>
                <h3>SUMMER</h3>
                <div class="discount"><span class="big">10</span><span class="small">%</span><br />off</div>
            </a>
        </div>
        <!-- /.sale -->
        <div class="trending">
            <a href="#">
                <h3>2014</h3>
                <h4>FASHION BAG</h4>
            </a>
        </div>
        <!-- /.trending -->
        <div class="shipping">
            <a href="#">
                <h3>FREE</h3>
                <h4>SHIPPING</h4>
                <h5>WITH ORDER OVER $100</h5>
            </a>
        </div>
        <!-- /.shipping -->
        <div class="toolbars">
            <ul>
                <li><a href="#" class="heart-icon">heart</a></li>
                <li><a href="#" class="cart-icon">cart</a></li>
                <li><a href="#" class="cog-icon">cog</a></li>
            </ul>
        </div>
        <!-- /.toolbars -->
    </div>
</div>
<!-- /.services -->
<div class="hot-bags">
    <div class="container">
        <h3 class="border-caption with-dots">HOT BAGS</h3>
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-1.jpg" alt="img" /></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-2.jpg" alt="img" /></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Coccaecat</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-1.jpg" alt="img" /></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Mollit Anim</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-2.jpg" alt="img" /></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            <p class="pages">Page 01/10</p>
        </div>
    </div>
</div>
<!-- /.hot-bags -->
<div class="new-bags">
    <div class="container">
        <h3 class="border-caption with-dots">NEW BAGS</h3>
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-1.jpg" alt="img" /></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-2.jpg" alt="img" /></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Coccaecat</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-1.jpg" alt="img" /></a>
                            <span class="saleoff style1">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Mollit Anim</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="wrap-product-img">
                            <a href="detail.html"><img src="assets/images/bag-2.jpg" alt="img" /></a>
                            <span class="saleoff style2">sale off</span>
                        </div>
                        <div class="wrap-product-content">
                            <h4><a href="detail.html">Minim Veniam</a></h4>
                            <span class="price">
                                <del><span class="amount">200.00</span></del>
                                <ins><span class="amount">159.00</span></ins>
                                </span>
                            <div class="star-rating"></div>
                        </div>
                        <div class="wrap-links">
                            <a href="#">Add to Cart</a>
                            <a href="#">Wish List</a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            <p class="pages">Page 01/10</p>
        </div>
    </div>
</div>
<!-- /.new-bags -->
<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="testimonials-item">
                    <div class="testimonials-left">
                        <span>“</span>
                    </div>
                    <div class="testimonials-body">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</div>
                        <p class="testimonials-name">- Kidesigner</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonials-item">
                    <div class="testimonials-left">
                        <span>“</span>
                    </div>
                    <div class="testimonials-body">
                        <div>
                            <div>Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
                            <p class="testimonials-name">- Voluptat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.testimonials -->
<div class="custom-blocks">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="border-caption">From blog</h3>
                <div class="list-blogs">
                    <div class="media blog-item">
                        <div class="media-body">
                            <span class="blog-date">Today, 3.20 AM</span>
                            <h4 class="blog-name">Minim Veniam</h4>
                            <div>
                                <p>Viris phaedrum ad cum, in usu ipsum percipit. Ut ponderum percipitur este</p>
                                <p class="blog-by">- by <mark>Mr.Customer</mark></p>
                            </div>
                        </div>
                        <div class="media-right">
                            <img src="assets/images/small-bag.jpg" alt="img" />
                        </div>
                    </div>
                    <div class="media blog-item">
                        <div class="media-body">
                            <span class="blog-date">Today, 3.20 AM</span>
                            <h4 class="blog-name">Minim Veniam</h4>
                            <div>
                                <p>Viris phaedrum ad cum, in usu ipsum percipit. Ut ponderum percipitur este</p>
                                <p class="blog-by">- by <mark>Mr.Customer</mark></p>
                            </div>
                        </div>
                        <div class="media-right">
                            <img src="assets/images/small-bag.jpg" alt="img" />
                        </div>
                    </div>
                </div>
                <a href="#" class="loadmore mgl-30">LOAD MORE</a>
            </div>
            <div class="col-md-4">
                <h3 class="border-caption">VIDEO BAGS</h3>
                <div class="wrap-video-bags">
                    <a class="video-player-link" href="#">
                        <img class="video-bg" alt="alt" src="assets/images/video.png" />
                        <div class="play-button">
                            <img alt="alt" src="assets/images/play-btn.png">
                        </div>
                    </a>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="loadmore">LOAD MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.custom-blocks -->
<div class="usertip">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pdr-70">
                <h3 class="border-caption briefcase-icon">FAQs</h3>
                <ul>
                    <li><a href="#">Duis aute irure dolor in..</a></li>
                    <li><a href="#">Henderit in voluptate velit</a></li>
                    <li><a href="#">Cllum dolore eu fugiat..</a></li>
                    <li><a href="#">Henderit in voluptate</a></li>
                    <li><a href="#">Voluptate velit esse cillum</a></li>
                </ul>
                <p>More questions in <a href="#" class="border-link">Help Center</a></p>
            </div>
            <div class="col-md-4 pdlr-50">
                <h3 class="border-caption comments-icon">NEED HELP?</h3>
                <p>Monday to Sunday., 9h AM - 6h PM</p>
                <div class="live-chat">
                    <a href="#"><div class="icon-headphones"></div>LiveChat</a>
                </div>
                <div class="bottom-info">
                    <p><a href="mailto:kysbag@email.com"><i class="fa fa-envelope"></i>kysbag@email.com</a></p>
                    <p><a href="tel:(+000)-0000-000"><i class="fa fa-phone"></i>(+000)-0000-000</a></p>
                </div>
            </div>
            <div class="col-md-4 pdl-70">
                <h3 class="border-caption envelope-icon">SIGNUP</h3>
                <p>Find the ferfect coupon for friends</p>
                <form action="#" class="signup-form">
                    <input type="email" placeholder="Your email here.." />
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.usertip -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-footer clearfix">
                <h3>Join Our Communication</h3>
                <ul class="list-social">
                    <li><a class="facebook" href="#">facebook</a></li>
                    <li><a class="twitter" href="#">twitter</a></li>
                    <li><a class="googleplus" href="#">googleplus</a></li>
                    <li><a class="pinterest" href="#">pinterest</a></li>
                    <li><a class="instagram" href="#">instagram</a></li>
                </ul>
            </div>
            <div class="col-md-6 right-footer">
                <div class="clearfix">
                    <div class="wrap-select-currency">
                        <select class="custom-select currency-switch">
                            <option value="0">USD</option>
                            <option value="1">Euro</option>
                        </select>
                    </div>
                    <div class="wrap-select-country">
                        <select class="custom-select country-switch">
                            <option value="0" data-icon="us-flag">United States</option>
                            <option value="1" data-icon="fr-flag">France</option>
                            <option value="2" data-icon="de-flag">Germany</option>
                            <option value="3" data-icon="it-flag">Italy</option>
                        </select>
                    </div>
                </div>
                <p class="copyright">© 2014 Designed by <a href="#"><strong>Kidesigner</strong></a>. All rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<script src="assets/scripts/libs/jquery-1.11.2.min.js"></script>
<script src="assets/scripts/libs/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/scripts/libs/bootstrap.min.js"></script>
<script src="assets/scripts/libs/fancySelect.js"></script>
<script src="assets/scripts/libs/jquery.jcarousel.min.js"></script>
<script src="assets/scripts/jcarousel.responsive.js"></script>
<script src="assets/scripts/libs/jquery.raty-fa.js"></script>
<script src="assets/scripts/libs/jquery.sticky-kit.js"></script>
<script src="assets/scripts/libs/gmaps.js"></script>
<script src="assets/scripts/jspatch.js"></script>
<script src="assets/scripts/libs/jquery.responsiveTabs.min.js"></script>
<script src="assets/scripts/libs/jquery.fancybox.pack.js"></script>
<script src="assets/scripts/libs/jquery.ui.touch-punch.min.js"></script>
<script src="assets/scripts/libs/jquery.mousewheel.min.js"></script>
<script src="assets/scripts/libs/allinone_bannerRotator.js"></script>
<script src="assets/scripts/libs/perfect-scrollbar.min.js"></script>
<script src="assets/scripts/functions.js"></script>

<?php $this->endBody() ?>

</body>
</html>

<?php $this->endPage() ?>
