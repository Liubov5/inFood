<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>InFood</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Owl Carousel Min css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
   
   <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <!-- Theme shortcodes/elements style -->
   
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('ccs/custom.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">


        <!-- Features Area Start -->
        <section class="features-service pt--150" style="height: 500px">
            <div class="container">
                <div class="row">
                    <!-- Features Service Single -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="features-service-single rounded">
                            <div class="fes-ser-titel text-center">
                                <span><i class="icofont icofont-cart-alt"></i></span>
                                <h4>Я ПОКУПАТЕЛЬ</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Features Service Single -->
                    <!-- Features Service Single -->

                    <!-- Features Service Single -->
                    <!-- Features Service Single -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="features-service-single rounded">
                            <div class="fes-ser-titel text-center ">
                                <span><i class="icofont icofont-truck-alt"></i></span>
                                <h4>Я ПРОДАВЕЦ</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Features Service Single -->
                </div>
            </div>
        </section>
        <!-- Features Area End -->


        <!-- Start CounterUp Area -->
        <section class="counterup__area ptb--100 bg--1" data--black__overlay="5">
            <div class="container">
                <div class="row">
                    <!-- Start Single Fact -->
                    <div class="col-lg-3 col-md-6  col-sm-12">
                        <div class="funfact">
                            <div class="fact__details">
                                <div class="funfact__count__inner">
                                    <div class="fact__count ">
                                        <span class="count">186</span>
                                    </div>
                                </div>
                                <div class="fact__title">
                                    <h2>Продавцов</h2>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="col-lg-3 col-md-6  col-sm-12">
                        <div class="funfact">
                            <div class="fact__details">
                                <div class="funfact__count__inner">
                                    <div class="fact__count ">
                                        <span class="count">152</span>
                                    </div>
                                </div>
                                <div class="fact__title">
                                    <h2>Покупателей</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="col-lg-3 col-md-6  col-sm-12">
                        <div class="funfact">
                            <div class="fact__details">
                                <div class="funfact__count__inner">
                                    <div class="fact__count ">
                                        <span class="count">359</span>
                                    </div>
                                </div>
                                <div class="fact__title">
                                    <h2>Килограмм</h2>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- End Single Fact -->
                    <!-- Start Single Fact -->
                    <div class="col-lg-3 col-md-6  col-sm-12">
                        <div class="funfact">
                            <div class="fact__details">
                                <div class="funfact__count__inner">
                                    <div class="fact__count ">
                                        <span class="count">368041</span>
                                    </div>
                                </div>
                                <div class="fact__title">
                                    <h2>Рублей</h2>
                                </div>
                            </div>
                        </div> 
                    </div>                              
                    <!-- End Single Fact -->
                </div>
            </div>
        </section>
        <!-- End CounterUp Area -->





    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- Waypoints.min.js. -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>