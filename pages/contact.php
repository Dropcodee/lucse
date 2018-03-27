<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="CSE WEEK">
    <meta name="author" content="CSE Contact">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>CSE WEEK'18</title>

    <!--common style-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="assets/vendor/elasic-slider/elastic.css">
    <link rel="stylesheet" href="assets/vendor/iconmoon/linea-icon.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/shortcodes.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/default-theme.css">
    <!-- endinject -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/backward/html5shiv.js"></script>
    <script src="assets/vendor/backward/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        <?php include_once('assets/inc/navbar.php');?>
        <!--header end-->

      <div class="parallax text-center vertical-align" style="background: url(assets/img/parallax/ev-p.jpg); background-attachment: fixed; background-position:center;">
            <div class="container-mid">
                <div class="container">
                    <div class="hero-text">
                        <h1 class="text-uppercase ls-40">CSE WEEK'18</h1>

                        <h3 class="text-uppercase">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--body content start-->
        <section class="body-content" style="background: url(assets/img/parallax/9.jpg); background-attachment: fixed; background-size: cover;">
            <div class="page-content" style="background: rgba(0,0,0,.8) !important; height:100vh !important;">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8">

                            <h4 class="text-uppercase">have you a question?</h4>
                            <p>Contact us here if you have any issue with registration, shopping, voting and any other issue now ! </p>

                            <form class="contact-comments m-top-50 js-Mailer" method="post">
                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <!-- Name -->
                                        <input type="text" name="name" class="form-control" placeholder="Name *" maxlength="100" required data-error="You must enter name">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <!-- Email -->
                                        <input type="email" name="email" class="form-control" placeholder="Ayoola.David@lmu.edu.ng *" maxlength="100" required data-error="Invalid email address!">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <!-- Comment -->
                                    <div class="form-group col-md-12">
                                        <textarea name="comments" class="cmnt-text form-control" rows="6" placeholder="Message or Issues" maxlength="400"></textarea>
                                    </div>

                                    <!-- Send Button -->
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-small btn-dark-solid ">Send Message</button>
                                    </div>

                                </div>
                                <input type="hidden" name="id" value="FORM_ALT">
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class=" m-bot-30 inline-block">
                                <!-- Google Map start-->
                                <div id='grey-map' class="height-300"></div>
                                <!--  Google Map End-->
                            </div>


                            <h4 class="text-uppercase">information</h4>
                            <p>Landmark University. </p>
                            <address>
                                <p>Telp: +234 7087116413</p>
                                <p>Location: Omu-Aran Kwara State Nigeria.<a href="" class="__cf_email__"</a></p>
                            </address>
                        </div>
                    </div>
                </div>


            </div>

        </section>
        <!--body content end-->

        <!--footer start -->
      <?php include_once('assets/inc/footer.php')?>
        <!--footer end-->

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
    <script src="vendor/sticky/jquery.sticky.min.js"></script>
    <script src="vendor/touchspin/touchspin.js"></script>
    <script src="assets/vendor/typist/typist.js"></script>
    <script src="assets/vendor/visible/visible.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- endinject -->

    <script>
        $(document).ready(function(){
            $("#grey-map").gMap({
                markers: [
                    {
                        latitude: 50.083,
                        longitude: 19.917,
                        html: '<div class="test_marker">marker 1</div>'

                    }
                ],
                zoom: 16,
                scrollwheel:false,
                styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
            })
        });
    </script>
</body>

</html>
