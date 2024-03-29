<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Предложения от продавцов:</h1>
	@foreach($bids as $bid)
	<p><span>id-продавца: </span> {{ $bid->seller_id }}</p>
	<p><span>Предлагает тебе купить за: </span> {{ $bid->price }} <span> рублей.</span></p>
	
	<p><span>твой id-покупателя: </span> {{ $bid->customer_id }}</p>
	<form action="update_bid" method="POST">
		@csrf
		<input type="hidden" value="{{ $bid->id }}" name="bid_id">
		<input type="hidden" value="1" name="status">
		<button>Принять</button>
	</form>
	<form action="update_bid" method="POST">
		@csrf
		<input type="hidden" value="{{ $bid->id }}" name="bid_id">
		<input type="hidden" value="2" name="status">
		<button>Отклонить</button>
	</form>
	@endforeach
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
                            <h2 class="title__line">Предложения от продавцов:</h2>
                        </div>
		<!-- Features Area Start -->
		<section class="features-service pt--50">
			<div class="container">				
					<!-- Features Service Single -->
					<div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
						<div class="features-service-single rounded">
							<div class="fes-ser-titel">
								<h4>Продам Чир <span>650 рублей</span></h4>
								<p >Самовывоз</p>
								<div class="mt-3">							
									<div class="row">										
										<div class="col-md-3">
											<form>                                 
                                   				 <button type="" class="btn btn-success border">Принять</button>                                   
											</form>		
										</div>
										<div class="col-md-3">
											<form>
												<button type="" class="btn btn-danger border">Отменить</button>
											</form>
										</div>
										<div class="col-md-3">
											<form>
												<button type="" class="btn btn-success border">посмотреть профиль</button>
											</form>
										</div>																	
									</div>
								</div>
							</div>
						</div>
					</div>
					





						
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