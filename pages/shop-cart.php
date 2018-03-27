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
         <?php include_once('assets/inc/navbar.php') ?>
        <!--header end-->


        <!--hero section-->
        <div class="parallax text-center vertical-align" style="background:url(assets/img/parallax/8.jpg); background-attachment:fixed; background-position:center;">
            <div class="container-mid">
                <div class="container">
                    <div class="hero-text">
                        <h1 class="text-uppercase ls-40">CSE WEEK'18</h1>

                        <h3 class="text-uppercase">CART VIEW</h3>
                        <a href="#viewCart" class="btn btn-small btn-dark-border"> View Cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content" id="viewCart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Item No</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="assets/img/cseshirt.jpg" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="#">CSE SHIRT</a>
                                            </td>
                                            <td>XN 0874</td>
                                            <td>
                                                <div class="cart-action">
                                                    <input type="number" class="form-control cart-quantity" value="1" />
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-refresh"></i>
                                                    </button>
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-trash-o"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td> ₦3,500</td>
                                            <td> ₦3,500</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="assets/img/cseshirt.jpg" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="#">CSE SHIRT</a>
                                            </td>
                                            <td>XN 3423</td>
                                            <td>
                                                <div class="cart-action">
                                                    <input type="number" class="form-control cart-quantity" value="1" />
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-refresh"></i>
                                                    </button>
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-trash-o"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td> ₦3,500</td>
                                            <td> ₦3,500</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="assets/img/cseshirt.jpg" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><a href="#">CSE SHIRT</a>
                                            </td>
                                            <td>XN 5678</td>
                                            <td>
                                                <div class="cart-action">
                                                    <input type="number" class="form-control cart-quantity" value="1" />
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-refresh"></i>
                                                    </button>
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-trash-o"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td> ₦3,500</td>
                                            <td> ₦3,500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <ul class="portfolio-meta m-bot-30 pull-right">
                                <li><span> Sub Total </span>  ₦10,500</li>
                                <li><span><strong class="cart-total"> Total </strong></span>  <strong class="cart-total"> ₦10,500 </strong>
                                </li>
                            </ul>

                            <div class="cart-btn-row inline-block">
                                <a href="finish.php" class="btn btn-medium btn-dark-solid pull-right "><i class="fa fa-shopping-cart"></i>  Checkout</a>
                                <a href="shop.php" class="btn btn-medium btn-dark-solid btn-transparent  pull-right">  Continue Shopping </a>
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
