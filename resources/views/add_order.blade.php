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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
				<div class="row pt--100">
                    <div class="col-md-12">
                        <div class="section__title text-center mb--50">
                            <h2 class="title__line">Хочу купить</h2>
                        </div>
                    </div>
                </div>
              
                    <div class="col-md-6 mx-auto">
                        <form method="POST" action="/insert_order" class="col-md-6 mx-auto">
                        	@csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Выбрать товар</p>
                                </div>
                                <div class="col-md-6">
                                     <select class="btn-group " name="product_id">
                                      @foreach($products as $product)
	  		 						<option value="{{ $product->id }}">{{ $product->product }}</option>
									@endforeach
                                    </select>           
                                </div>
                            </div> 
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Куплю за</p>
                                </div>
                                <div class="col-md-6">
                                        <div class="contact-box name_email">
                                            <input type="text" name="price" placeholder="средняя цена" class="">
                                        </div>
                                </div>
                            </div> 
                             <div class="row">
                                <div class="col-md-6">
                                    <p>Сколько кг</p>
                                </div>
                                <div class="col-md-6">
                                        <div class="contact-box name_email">
                                            <input type="text" name="kg" placeholder="укажите вес" class="">
                                        </div>                               
                                </div>
                            </div>
                            <div class="contact-btn">
                                <button type="submit" class="btn border__radi--none">Разместить</button>
                            </div>          
                        </form>                       
                          
                    </div>  
        

        <!-- End ContactA Area -->




    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Proper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<!-- Google Map js -->


    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>