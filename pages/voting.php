<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="CSE VOTING">
    <meta name="author" content="CSE VOTING">

    <!--favicon icon-->
   	<link type="image/png" href="assets/img/favicon.png"/>

    <title>CSE voting</title>

    <!--common style-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200'
        rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
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

<body class="body_has-navbar-left" onload="ajax_request()"style="background: url(assets/img/parallax/galaxy-2.jpg);  background-attachment:fixed;" >
    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper" style="background:rgba(0,0,0,.8) !important; background-attachment:fixed;">

        <!--header start-->
        <header class="l-header" >

            <div class="l-navbar l-navbar_expand  l-navbar_s-left" style="z-index: 100000;background: #000 !important;">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="../index.html" class="logo-brand">
                            <img class="retina" src="assets/img/headlogo.png" alt="CSE">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu">
                            <!-- HOME LINK-->
                            <li class="active">
                                <a href="javascript:void(0)" onclick="ajax_request()">Home</a>
                            </li>
                            <!-- END OF HOME LINK-->

                            <!-- FRESHEST FRESHER LIMK-->
                            <li>
                                <a href="javascript:void(0)">Freshest Fresher</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="javascript:void(0)" onclick="freshestM()">Male Category</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="freshestF()">Female Category</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- END IF FRESHEST FRESHER LINK-->

                            <!-- MOST CREATIVE LINK-->
                            <li>
                                <a href="javascript:void(0)"> Most Creative</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="javascript:void(0)" onclick="mCreativeM();">Male Category</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="mCreativeF();">Female Category</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- END OF MOST CREATIVE LINK-->

                            <!-- MOST IMPACTFUL LEADERSHIP LINK-->
                            <li>
                                <a href="javascript:void(0)" onclick="ajax_request5();"> Impactful Leadership</a>
                            </li>
                            <!-- END OF MOST IMPACTFUL LEADERSHIP LINK-->

                            <li>
                                <a href="javascript:void(0)"> Most Sociable </a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="javascript:void(0)" onclick="ajax_request6();">Male Category</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="ajax_request7();"> Female Category</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- MOST INNOVATIVE LINK-->
                            <li>
                                <a href="javascript:void(0)" onclick="ajax_request8();"> Most Innovative</a>
                            </li>

                            <!-- END OF MOST INNOVATIVE LINK-->

                            <!-- MEDIA PRESENCE LINK-->
                            <li>
                                <a href="javascript:void(0)">Media Presence</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="javascript:void(0)" onclick="ajax_request9();">Male Category</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="ajax_request10();"> Female Category</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END OF MEDIA PRESENCE LINK-->

                            <!--mega menu end-->

                    </nav>
                </div>

                <div class="side-social-link clearfix visible-md visible-lg">
                    <a href="mp-index-photography-1.html#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="mp-index-photography-1.html#">
                        <i class="fa fa-twitter"></i>
                    </a>
                  <a href="mp-index-photography-1.html#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>

        </header>
        <!--header end-->

        <!--body content start-->
        <section class="body-content ">


             <!--portfolio-->
            <div class="portfolio-gap-less" >
                <div class="portfolio col-3 " id="ajax_Content">

                </div>
            </div>
            <!--portfolio-->

        </section>
        <!--body content end-->

        <!--footer start-->
        <?php include_once('assets/inc/footer.php')?>
        <!--footer end-->
    </div>
    <!-- inject:js -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
         <script>
            function ajax_request(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/homeCat.php', true);
                xmlhttp.send();
             }

               function freshestM(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('POST', 'assets/inc/ffMCat.php', true);
                xmlhttp.send();
             }

               function freshestF(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/fFemale.php', true);
                xmlhttp.send();
             }

               function mCreativeM(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/creativeM.php', true);
                xmlhttp.send();
             }

               function mCreativeF(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/creativeF.php', true);
                xmlhttp.send();
             }

               function ajax_request5(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/impactL.php', true);
                xmlhttp.send();
             }

               function ajax_request6(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/socialM.php', true);
                xmlhttp.send();
             }

               function ajax_request7(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/socialF.php', true);
                xmlhttp.send();
             }

               function ajax_request8(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('POST', 'assets/inc/innovative.php', true);
                xmlhttp.send();
             }

               function ajax_request9(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('POST', 'assets/inc/mediaM.php', true);
                xmlhttp.send();
             }

               function ajax_request10(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var homeContent = document.getElementById('ajax_Content');
                        homeContent.innerHTML = xmlhttp.responseText;
                    }
                }

                xmlhttp.open('GET', 'assets/inc/mediaF.php', true);
                xmlhttp.send();
             }
         </script>

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

    <script type="text/javascript">
        $(document).ready(function () {
            var bodyclass = $("body").attr("class");
            $.BreakPoint({
                breakpoints: {
                    tablet: {
                        max: 768,
                        callback: function () {
                            $("body").removeClass(bodyclass);
                        }
                    },
                    desktop: {
                        min: 769,
                        callback: function () {
                            $("body").addClass(bodyclass);
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>