<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ecommerce Website</title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Font Awesome Icons -->
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    

  </head>
  <body>
    <!-- Top Starts -->
    <div id="top">
    	<!-- Main Container starts -->
    	<div class="container">
            <!-- Row Starts  -->
    		<div class="row">
                <!-- Col md 6 Offer Starts -->
    			<div class="col-md-6 offer">	
    			
	    			<a href="javascript:;" class="btn btn-success btn-sm">Welcome : Guest</a>

	    			<a href="javascript:;" class="text-light">
	    				Shopping Cart Total Price: $100, Total Items 2
	    			</a>

	    		</div>
                <!-- Col md 6 Ends -->
                

                <!-- Col md 6 starts -->
                <div class="col-md-6"><!-- Menu Starts -->
	    			<ul class="menu">
    					<li class="px-2">
    						<a href="customer_register.php">Register</a>
    					</li>	   					
    					<li class="px-2 border-left">
    						<a href="checkout.php">My Account</a>
    					</li>
    					<li class="px-2 border-left">
    						<a href="cart.php">Go to Cart</a>
    					</li>    					
    					<li class="px-2 border-left">
    						<a href="checkout.php">Login</a>
    					</li>
    				</ul>
	    			<!-- Menu Ends -->	    			
	    		</div>
                <!-- Col md 6 ends -->
    		</div>
            <!-- Row Ends -->
    	</div>	
        <!-- Main Container Ends -->
    </div>
    <!-- Top Ends -->

    <!-- Navigation starts -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand pr-3" href="#">
                <i class="fab fa-accusoft fa-2x d-none d-sm-block"></i>
                <i class="fab fa-accusoft d-block d-sm-none"></i>
            </a>

            <button class="navbar-toggler ml-auto mr-3" type="button" data-toggle="collapse" data-target="#search" aria-label="Toggle navigation">
                <i class="fa fa-search"></i>
            </button>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item active">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">Home <span class="sr-only">(current)</span></a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">Shop</a>
                  </li>    
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">My Account</a>
                  </li>    
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">Shopping Cart</a>
                  </li>            
                  <li class="nav-item">
                    <a class="nav-link text-uppercase font-weight-bold" href="#">Contact Us</a>
                  </li>  
                </ul>
                <a class="btn btn-info navbar-btn" href="cart.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in cart</span>
                </a>
            </div>

            <div class="collapse navbar-collapse">
                <button class="btn navbar-btn btn-info ml-3 border-top-1" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">
                        Toggle Search
                    </span>
                    <i class="fa fa-search"></i>
                </button>
            </div>


           
        </div>
    </nav>
    <div class="row border border-2 bg-light">
        <div class="col-md-3 ml-auto mr-5 my-1">            
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" method="GET" action="results.php">
                    <div class="input-group">
                        <input class="form-control" type="text" name="user_query" placeholder="Search" required="required">

                        <span class="input-group-btn">                        
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>              
            </div>
        </div>
        <div class="col-2">
            
        </div>        
    </div>
    <!-- Navigation Ends  -->

    <!-- Slider Part Starts -->
    <div class="container" id="slider">
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carouse">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/admin/slide_images/4.jpg" class="img-responsive d-inline-block h-50 w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="/admin/slide_images/5.jpg" class="img-responsive d-inline-block h-50 w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="/admin/slide_images/6.jpg" class="img-responsive d-inline-block h-50 w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Part Ends -->

    <!-- Advantages Section Starts -->
    <div id="advantages">
        <div class="container">
            <div class="same-height row ">
                <div class="col-md-4">
                    <div class="box same-height">
                        <div class="icon mx-auto w-100">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a class="text-dark" href="#">We Love Our Customers</a></h3>
                        <p>We are known to provide best possible service ever.</p>
                    </div>
                </div>   
                <div class="col-md-4">
                    <div class="box same-height">
                        <div class="icon mx-auto w-100">
                            <i class="fa fa-tags"></i>
                        </div>
                        <h3><a class="text-dark" href="#">Best Prices</a></h3>
                        <p>You can check on all others sites about the prices and compare with us.</p>
                    </div>
                </div>  
                    
                <div class="col-md-4">
                    <div class="box same-height">
                        <div class="icon mx-auto w-100">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a class="text-dark" href="#">100% Satisfaction guaranteed</a></h3>
                        <p>Free returns on eveything for 3 months/</p>
                    </div>
                </div>    
            </div>
        </div>        
    </div>
    <!-- Advantages Section Ends -->    

    <!-- Hot Section Starts -->
    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase font-weight-100 text-center" style="color: #4993e4">Latest this week</h2>
                    </div>         
                </div>
            </div>
        </div>
    </div>  
    <!-- Hot Section Ends -->


    <div id="content" class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 single">
                <!-- Product Section Starts -->
                <div class="product">
                    <a href="details.php">
                        <img src="admin/product_images/1.png" class="img-responsive w-75 h-75 mx-auto">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Portable Blender – Blendjet One</a></h3>
                        <p class="price">$20</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-info">View Details</a>                        
                            <a href="cart.php" class="btn btn-dark">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Product Section Ends -->
            </div>
            <div class="col-md-3 col-sm-6 single">
                <!-- Product Section Starts -->
                <div class="product">
                    <a href="details.php">
                        <img src="admin/product_images/1.png" class="img-responsive w-75 h-75 mx-auto">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Portable Blender – Blendjet One</a></h3>
                        <p class="price">$20</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-info">View Details</a>                        
                            <a href="cart.php" class="btn btn-dark">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Product Section Ends -->
            </div>
            <div class="col-md-3 col-sm-6 single">
                <!-- Product Section Starts -->
                <div class="product">
                    <a href="details.php">
                        <img src="admin/product_images/1.png" class="img-responsive w-75 h-75 mx-auto">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Portable Blender – Blendjet One</a></h3>
                        <p class="price">$20</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-info">View Details</a>                        
                            <a href="cart.php" class="btn btn-dark">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Product Section Ends -->
            </div>
            <div class="col-md-3 col-sm-6 single">
                <!-- Product Section Starts -->
                <div class="product">
                    <a href="details.php">
                        <img src="admin/product_images/1.png" class="img-responsive w-75 h-75 mx-auto">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">Portable Blender – Blendjet One</a></h3>
                        <p class="price">$20</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-info">View Details</a>                        
                            <a href="cart.php" class="btn btn-dark">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Product Section Ends -->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!--  <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/font-awesome/js/fontawesome.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
     -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script src="js/jquery.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="admin/js/carousel.js"></script>

  </body>
</html>