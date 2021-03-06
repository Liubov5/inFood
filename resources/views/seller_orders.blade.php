<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>InFood</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel Min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Venobox css -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">

                        <div class="section__title text-center pt--50">
                            <h2 class="title__line">Мои предложения</h2>
                        </div>
		<!-- Features Area Start -->
		<section class="features-service pt--50">
			<div class="container">				
					<!-- Features Service Single -->
					@foreach($orders as $order)
					
					<div class="col-lg-6 col-md-6 col-sm-12 mx-auto mt-4">
						<div class="features-service-single rounded">
							<div class="fes-ser-titel">
								<h4>Куплю {{$product->product}} <span>{{ $order->price }} рублей</span> <span>{{ $order->kg }} </span> кг</h4>

								<div class="row">
									<div class="col-md-3">
										<form>                                 
		                                    <button type="" class="btn btn-success border">Принять</button>                                   
										</form>											
									</div>
									<div class="col-md-6">
										<form>                                 
		                                    <button type="" class="btn btn-danger border">Отменить</button>                                   
										</form>									
									</div>
								</div>

														
								<form class="mt-3" action="/insert_bid" method="POST">	
								@csrf						
									<div class="row">										
										<div class="col-md-6">
											<input type="hidden" name="ad_id" value="{{ $order->ads_id }}">
											<input type="hidden"  name="order_id" value="{{ $order->id }}">
											<input type="" name="price" placeholder="Предложить свою цену" class="border rounded col-12 btn">
										</div>
										<div class="col-md-6">
											<button type="" class="btn btn-success border">Предложить</button>
										</div>						
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- Features Service Single -->
					@endforeach	
		
		
			</div>
		</section>
		<!-- Features Area End -->







    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>