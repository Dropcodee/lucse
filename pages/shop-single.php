<!DOCTYPE html>
<html lang="en">
<?php include_once('assets/inc/head.php')?>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        <header class="l-header">

            <div class="l-navbar l-navbar_t-dark l-navbar_expand js-navbar-sticky">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="index.html" class="logo-brand">
                            <img class="retina" src="assets/img/headlogo.png" alt="CSE LOGO">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                                <!--mega menu start-->
                                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                                    <li class="">
                                        <a href="../index.html">Home</a>
                                    </li>

                                    <li>
                                        <a href="shop.php">shop</a>
                                    </li>

                                    <li>
                                        <a href="voting.php">vote</a>
                                    </li>
                                    <li class="cart-info">
                                        <a href="shop-cart.php">
                                            <i class="fa fa-shopping-cart"></i> cart</a>
                                    </li>
                                </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>

        </header>
        <!--header end-->


        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="post-list-aside">
                                <div class="post-single">
                                    <div class="post-slider-thumb post-img text-center">
                                        <ul class="slides">
                                            <li data-thumb="assets/img/cseshirt.jpg">
                                                <a href="javascript:;" title="Freshness Photo">
                                                    <img src="assets/img/cseshirt.jpg" alt="" />
                                                </a>
                                            </li>
                                            <li data-thumb="assets/img/cseshirt.jpg">
                                                <a href="javascript:;" title="Awesome Lightbox">
                                                    <img src="assets/img/cseshirt.jpg" alt="" />
                                                </a>
                                            </li>
                                            <li data-thumb="assets/img/cseshirt.jpg">
                                                <a href="javascript:;" title="Massive UI Components">
                                                    <img src="assets/img/cseshirt.jpg" alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="product-title">
                                <h2 class="text-uppercase"  style="color:#8F1D21;">CSE '18 SHIRTS</h2>
                            </div>

                            <div class="product-price txt-xl">
                                <span class="border-tb p-tb-10"style="color: #000;" >
                                    ₦3,500
                                </span>
                            </div>

                            <ul class="portfolio-meta m-bot-10 m-top-10">
                                <li>
                                    <span> Item No </span> 09087</li>
                                <li>
                                    <span> Condition </span> New</li>
                            </ul>

                            <ul class="portfolio-meta m-bot-10 stock">
                                <li>
                                    <span>
                                        <strong class="number-item"> 390</strong> Item </span>
                                    <span class="status">In Stock</span>
                                </li>
                            </ul>
                            <div class="p-values">
                                <ul class="portfolio-meta m-bot-10 ">
                                    <li>
                                        <span> Size </span>
                                        <span>
                                            <select class="form-control">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                                <option>XXL</option>
                                            </select>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="p-quantity m-bot-10 ">
                                    <li>
                                        <label>Quantity</label>
                                    </li>
                                    <li>
                                        <input id="demo0" type="text" value="0" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1"
                                            data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round"
                                            data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class=""
                                            data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false"
                                            data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"
                                        />
                                    </li>

                                    </li>
                                </ul>
                            </div>

                            <div class="clearfix">
                                <a href="#" class="btn btn-medium btn-dark-solid  ">
                                    <i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--body content end-->

        <!--footer start 1-->
        <?php include_once('assets/inc/footer.php')?>
        <!--footer 1 end-->

    </div>

    <!-- inject:js -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap-validator/validator.min.js"></script>
    <script src="assets/vendor/breakpoint/breakpoint.js"></script>
    <script src="assets/vendor/count-to/jquery.countTo.js"></script>
    <script src="assets/vendor/countdown/jquery.countdown.js"></script>
    <script src="assets/vendor/easing/jquery.easing.1.3.js"></script>
    <script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/elasic-slider/jquery.eislideshow.js"></script>
    <script src="assets/vendor/flex-slider/jquery.flexslider-min.js"></script>
    <script src="assets/vendor/gmap/jquery.gmap.min.js"></script>
    <script src="assets/vendor/images-loaded/imagesloaded.js"></script>
    <script src="assets/vendor/isotope/jquery.isotope.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/mailchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendor/menuzord/menuzord.js"></script>
    <script src="assets/vendor/nav/jquery.nav.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/parallax-js/parallax.min.js"></script>
    <script src="assets/vendor/smooth/smooth.js"></script>
    <script src="assets/vendor/sticky/jquery.sticky.min.js"></script>
    <script src="assets/vendor/touchspin/touchspin.js"></script>
    <script src="assets/vendor/typist/typist.js"></script>
    <script src="assets/vendor/visible/visible.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- endinject -->
    <script>
        $("input[name='demo0']").TouchSpin({});
    </script>
</body>

</html>